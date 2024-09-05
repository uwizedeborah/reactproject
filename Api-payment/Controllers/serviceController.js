const mysql = require("mysql");
const bcrypt = require("bcrypt");
const jwt = require("jsonwebtoken");
const { v4: uuid } = require("uuid");
const { query } = require("../db/db.js");

const inserts = async (req, res) => {
  const { name, description } = req.body;

  try {
    const sql = "INSERT INTO services (name, description) VALUES (?, ?)";
    await query(sql, [name, description]);

    const token = jwt.sign({ name }, process.env.JWT_SECRET, {
      expiresIn: "30d",
    });

    return res.status(201).json({
      responseCode: 201,
      responseDescription: "Service added successfully",
      token: token,
    });
  } catch (error) {
    return res.status(400).json({ 
      responseCode: 400,
      responseDescription: "Service not added",
      error: error.message,
    });
  }
};

const services = async (req, res) => {
  let sql = `SELECT * FROM services`;
  query(sql, (err, result) => {
    if (err) {
      return res.status(500).json({
        responseCode: 500,
        responseDescription: "Internal Server Error",
        error: err.message,
      });
    }

    if (result.length === 0) {
      return res.status(404).json({
        responseCode: 404,
        responseDescription: "No services found",
      });
    }

    // Returning all services
    return res.status(200).json({
      responseCode: 200,
      responseDescription: "Retrieve a list of available services",
      data: result, // Return the entire result set
    });
  });
};

module.exports = { inserts, services };
