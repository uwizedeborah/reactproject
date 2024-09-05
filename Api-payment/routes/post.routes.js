const express = require("express");
const router = express.Router();
const { initiatePayment, confirmPayment, getPaymentHistory } = require("../Controllers/paymentController");
const authenticateJWT = require("../middleware/authenticateJWT"); // Import your JWT middleware

// Apply the middleware to the routes that need authentication
router.post("/initiate", authenticateJWT, initiatePayment);
router.post("/confirm", authenticateJWT, confirmPayment);
router.get("/history", authenticateJWT, getPaymentHistory);

module.exports = router;
