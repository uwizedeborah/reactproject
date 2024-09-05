const { register, login, profile } = require("../Controllers/usersController");

const userRouter = require("express").Router();

// Corrected the route paths by adding a leading '/'
userRouter.post("/user/register", register);
userRouter.post("/user/login", login);
userRouter.get("/user/profile", profile);

module.exports = userRouter;
