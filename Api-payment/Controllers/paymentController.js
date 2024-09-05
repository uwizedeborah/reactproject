const mysql = require("mysql");
const bcrypt = require("bcrypt");
const jwt = require("jsonwebtoken");
const { v4: uuid } = require("uuid");
const {query}=require("../db/db.js") 


const initiatePayment = async (req, res) => {
    const { service, amount, customerDetails } = req.body;
    const userId = req.user.id;

    try {
        const agentSql = `SELECT * FROM users WHERE id = ${userId}`;
        const agentResult = await query(agentSql);

        if (agentResult.length === 0) {
            return res.status(404).json({
                responseCode: 404,
                responseDescription: "Agent not found.",
            });
        }

        const serviceSql = `SELECT * FROM services WHERE name = ?`;
        const serviceResult = await query(serviceSql, [service]);

        if (serviceResult.length === 0) {
            return res.status(404).json({
                responseCode: 404,
                responseDescription: "Service not found.",
            });
        }

        const paymentId = uuid();
        const status = 'Pending';
        let confirmationCodeGenerate = Math.floor(10000 + Math.random() * 90000).toString(); // Generate a 5-digit code
        const createdAt = new Date();
        const updatedAt = new Date();

        const paymentSql = `
            INSERT INTO payments (id, service, amount, status, agentId, customerDetails, confirmationCode, createdAt, updatedAt)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)
        `;
        const paymentValues = [
            paymentId,
            service,
            amount,
            status,
            agentResult[0].id,
            JSON.stringify(customerDetails),
            confirmationCode=confirmationCodeGenerate,  // Store the confirmation code
            createdAt,
            updatedAt,
        ];

        await query(paymentSql, paymentValues);

        return res.status(201).json({
            responseCode: 201,
            responseDescription: "Payment initiated successfully.",
            data: {
                paymentId,
                service,
                amount,
                status,
                customerDetails,
                confirmationCode,  // Send back the confirmation code
                createdAt,
                updatedAt,
            },
        });
    } catch (error) {
        return res.status(500).json({
            responseCode: 500,
            responseDescription: "Failed to initiate payment.",
            error: error.message,
        });
    }
};


const confirmPayment = async (req, res) => {
    const { paymentId, confirmationCode } = req.body;

    if (!paymentId || !confirmationCode) {
        return res.status(400).json({
            responseCode: 400,
            responseDescription: "Bad Request. Missing required fields.",
        });
    }

    try {
        // Retrieve the payment and check the confirmation code
        const selectSql = `SELECT * FROM payments WHERE id = ? AND status = 'Pending'`;
        const paymentResult = await query(selectSql, [paymentId]);

        if (paymentResult.length === 0) {
            return res.status(404).json({
                responseCode: 404,
                responseDescription: "Payment not found or already confirmed.",
            });
        }

        const payment = paymentResult[0];

        // Debugging log for confirmation code comparison
        console.log(`Expected confirmation code: ${payment.confirmationCode}`);
        console.log(`Provided confirmation code: ${confirmationCode}`);

        if (payment.confirmationCode !== confirmationCode) {
            return res.status(400).json({
                responseCode: 400,
                responseDescription: "Invalid confirmation code.",
            });
        }

        // Update the payment status to 'Confirmed'
        const updateSql = `UPDATE payments SET status = 'Confirmed', updatedAt = NOW() WHERE id = ?`;
        await query(updateSql, [paymentId]);

        return res.status(200).json({
            responseCode: 200,
            responseDescription: "Payment confirmed successfully.",
            data: { paymentId, status: 'Confirmed' },
        });
    } catch (error) {
        return res.status(500).json({
            responseCode: 500,
            responseDescription: "Failed to confirm payment.",
            error: error.message,
        });
    }
};



const getPaymentHistory = async (req, res) => {
    console.log("Decoded User:", req.user); // Add this line to debug

    const agentId = req.user.id; 
    const { startDate, endDate } = req.query;

    let sql = `SELECT * FROM payments WHERE agentId = ?`;
    const params = [agentId];

    if (startDate && endDate) {
        sql += ` AND createdAt BETWEEN ? AND ?`;
        params.push(new Date(startDate), new Date(endDate));
    }

    sql += ` ORDER BY createdAt DESC`;

    try {
        const results = await query(sql, params);

        return res.status(200).json({
            responseCode: 200,
            responseDescription: "Payment history retrieved successfully.",
            data: results,
        });
    } catch (error) {
        return res.status(500).json({
            responseCode: 500,
            responseDescription: "Failed to retrieve payment history.",
            error: error.message,
        });
    }
};


module.exports = { initiatePayment, confirmPayment, getPaymentHistory };