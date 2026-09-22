// Tiny relay so people on different devices can share one board.
// Run:  npm install ws  &&  node server.js   then connect to ws://YOUR-IP:8787
const { WebSocketServer } = require("ws");
const wss = new WebSocketServer({ port: 8787 });
wss.on("connection", (socket) => {
  socket.on("message", (data) => {
    for (const client of wss.clients) if (client !== socket && client.readyState === 1) client.send(data.toString());
  });
});
console.log("Whiteboard relay on ws://localhost:8787");
