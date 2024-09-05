const jwt = require("jsonwebtoken");

const authenticateJWT = (req, res, next) => {
    const token = req.headers.authorization && req.headers.authorization.split(" ")[1];

    if (!token) {
        return res.status(401).json({
            responseCode: 401,
            responseDescription: "Unauthorized. Token is missing.",
        });
    }

    jwt.verify(token, process.env.JWT_SECRET, (err, user) => {
        if (err) {
            return res.status(403).json({
                responseCode: 403,
                responseDescription: "Forbidden. Invalid token.",
            });
        }

        req.user = user;
        next();
    });
};

module.exports = authenticateJWT;
