const mysql = require("mysql");
const bcrypt = require("bcrypt");
const jwt = require("jsonwebtoken");
const { v4: uuid } = require("uuid");
const { response } = require("express");
const { query } = require("../db/db.js");
const Joi = require("joi");

// Define validation schemas
const registerSchema = Joi.object({
  name: Joi.string().min(3).max(30).required(),
  email: Joi.string().email().required(),
  password: Joi.string().min(8).required(),
});

const loginSchema = Joi.object({
  email: Joi.string().email().required(),
  password: Joi.string().required(),
});

const register = async (req, res) => {
  const { name, email, password } = req.body;

  // Validate request data
  const { error } = registerSchema.validate(req.body);
  if (error) {
    return res.status(400).json({ error: error.details[0].message });
  }

  try {
    const hashedPassword = await bcrypt.hash(password, 10);

    const sql = 'INSERT INTO users (name, email, password) VALUES (?,?,?)';
    await query(sql, [name, email, hashedPassword]);

    const user = await query('SELECT id FROM users WHERE email = ?', [email]);
    const token = jwt.sign({ id: user[0].id }, process.env.JWT_SECRET, {
      expiresIn: '30d',
    });

    return res.status(201).json({
      responseCode: 201,
      responseDescription: "Account created successfully",
      token: token,
    });
  } catch (error) {
    res.status(400).json({ error: 'User registration failed' });
  }
};

const login = async (req, res) => {
  const { email, password } = req.body;

  // Validate request data
  const { error } = loginSchema.validate(req.body);
  if (error) {
    return res.status(400).json({ error: error.details[0].message });
  }

  try {
    const user = await query('SELECT * FROM users WHERE email = ?', [email]);

    if (user.length && (await bcrypt.compare(password, user[0].password))) {
      const token = jwt.sign({ id: user[0].id }, process.env.JWT_SECRET, {
        expiresIn: '30d',
      });
      return res.status(200).json({
        responseCode: 200,
        responseDescription: "Login successful",
        data: {
          id: user[0].id,
          email: user[0].email,
        },
        token: token,
      });
    } else {
      res.status(401).json({ error: 'Invalid email or password' });
    }
  } catch (error) {
    res.status(400).json({ error: 'User login failed' });
  }
};

const profile = async (req, res) => {
  let sql = `SELECT * FROM users`;
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
        responseDescription: "User not found",
      });
    }

    const user = result[0]; // Assuming you want the first user in the result set
    return res.status(200).json({
      responseCode: 200,
      responseDescription: "Get the authenticated agent’s profile.",
      data: {
        id: user.id,
        name: user.name,
        email: user.email,
        createdAt: user.createdAt,
      },
    });
  });
};

module.exports = { register, login, profile };
