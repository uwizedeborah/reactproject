const { inserts,services } = require("../Controllers/serviceController");

const serviceRouter = require("express").Router();

// Corrected the route paths by adding a leading '/'
serviceRouter.post("/insert", inserts);

serviceRouter.get("/services", services);

module.exports = serviceRouter;
