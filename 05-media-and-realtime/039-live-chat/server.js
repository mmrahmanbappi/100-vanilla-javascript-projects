// Chat relay. Run:  npm install ws  &&  node server.js
// Then enter ws://YOUR-IP:8788 in the page on each device.
const { WebSocketServer } = require("ws");
const wss = new WebSocketServer({ port: 8788 });
wss.on("connection", (socket) => {
  socket.on("message", (data) => {
    const text = data.toString();
    if (text.length > 10000) return;                       // ignore huge messages
    for (const client of wss.clients) if (client !== socket && client.readyState === 1) client.send(text);
  });
});
console.log("Chat relay on ws://localhost:8788");
