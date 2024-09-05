const jwt = require('jsonwebtoken');

const authenticateJWT = (req, res, next) => {
    const authHeader = req.headers.authorization;

    if (authHeader) {
        const token = authHeader.replace('Bearer ', '');

        jwt.verify(token, process.env.JWT_SECRET, (err, user) => {
            if (err) {
                return res.status(403).json({
                    responseCode: 403,
                    responseDescription: "Forbidden. Invalid token.",
                });
            }

            req.user = user; // Attach the user object to the request
            next();
        });
    } else {
        return res.status(401).json({
            responseCode: 401,
            responseDescription: "Unauthorized. Token missing.",
        });
    }
};

module.exports = authenticateJWT;
