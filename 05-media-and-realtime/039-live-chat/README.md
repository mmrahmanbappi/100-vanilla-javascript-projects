# Live Chat App in JavaScript (Free Project)

![Live Chat App JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/05-media-and-realtime/039-live-chat/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/05-media-and-realtime/039-live-chat/

Free real time chat in plain JavaScript. Rooms, nicknames, typing indicators and reactions, working between tabs with no server or across devices with a WebSocket server.

## What is the Live Chat App?

Open two tabs and chat between them right away. Run the tiny included server and people on other phones and laptops can join the same rooms, see who is typing and react to messages.

Messages are small JSON events. Without a server they travel over BroadcastChannel. With one, they go over a WebSocket, and the 20 line server.js simply passes each event to everyone else.

## What it does

- Rooms: general, random and dev, with unread counts
- Typing indicator and who is online
- Emoji reactions on any message
- Message history per room saved in the browser
- Auto reconnect with backoff when the server drops

## How it works

1. **Pick a transport.** With no server address, messages go over BroadcastChannel between tabs. With one, they go over a WebSocket.
2. **Send events.** Messages, typing, joins and reactions are small JSON events with a room name and a sender id.
3. **Render.** Each tab applies events to its local state and redraws the room. The server only relays events, it keeps nothing.

## The key JavaScript

```js
const ws = new WebSocket("wss://chat.example.com");
ws.onmessage = (e) => handle(JSON.parse(e.data));

function send(type, data) {
  ws.send(JSON.stringify({ type, room, from: me.id, name: me.name, ...data }));
}
input.addEventListener("input", throttle(() => send("typing"), 1500));
form.addEventListener("submit", () => send("message", { text: input.value, id: crypto.randomUUID() }));
// server.js relays every message to everyone else
wss.on("connection", (s) => s.on("message", (d) => wss.clients.forEach((c) => c !== s && c.send(d.toString()))));
```

## Browser support

Every modern browser. For devices on different networks, host server.js somewhere with wss:// (HTTPS pages need secure WebSockets).

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**How do I run the chat server?**

Install Node, run npm install ws, then node server.js. Enter ws://your-ip:8788 in the page on each device.

**Are messages saved?**

Each browser keeps the last 200 messages per room. The server keeps nothing, it only relays.

**Can I host it online?**

Yes. Deploy server.js to any Node host and use a wss:// address, since HTTPS pages need secure WebSockets.

## License

MIT. Free for personal and commercial use.
