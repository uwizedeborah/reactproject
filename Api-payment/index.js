const express = require("express");
const authenticateJWT = require('./middleware/authenticateJWT');
const router = require("./routes/post.routes");
const userRouter = require("./routes/users.routes");
const serviceRouter = require("./routes/service.route");
const env = require("dotenv").config();

const port = process.env.PORT || 5000;
const app = express();
app.use(express.json());
app.use("/api", router)
app.use("/api", userRouter)
app.use("/api", serviceRouter)
app.get("/", (req, res) => {
  res.send("welcome to the server");
});

app.listen(port, () =>
  console.log(`our server is running on http://localhost:${port}`)
);
