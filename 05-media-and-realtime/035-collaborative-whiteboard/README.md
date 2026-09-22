# Collaborative Whiteboard in JavaScript (Free Project)

![Collaborative Whiteboard JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/05-media-and-realtime/035-collaborative-whiteboard/demo.html
**Details and code:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/05-media-and-realtime/035-collaborative-whiteboard/

Free real time whiteboard in plain JavaScript. Pen, shapes, eraser, undo and live cursors, synced between tabs instantly or across devices with a tiny WebSocket server.

## What is the Collaborative Whiteboard?

Sketch, write and draw shapes on a board that other people see live. Open a second tab and every line appears there as you draw it, with a named cursor for each person.

Drawing uses Canvas and Pointer Events, with pen pressure on tablets. The board is stored as a list of strokes, sent as small messages over BroadcastChannel between tabs or over a WebSocket between devices.

## What it does

- Pen, highlighter, line, rectangle, ellipse and eraser
- Pressure-sensitive strokes on pens and tablets
- Undo and redo your own strokes
- Live cursors with names for everyone on the board
- Export the board as PNG, and it survives a reload

## How it works

1. **Capture strokes.** Pointer events are collected into a stroke: tool, color, width and a list of points with pressure.
2. **Share strokes.** Each new point is sent to the others as a small message, so they see the line as it is being drawn.
3. **Redraw from data.** The board is a list of strokes. Undo removes one and the canvas is redrawn from the list.

## The key JavaScript

```js
board.addEventListener("pointermove", (e) => {
  if (!drawing) return sendCursor(e);
  for (const p of e.getCoalescedEvents()) {          // every point, not just one per frame
    stroke.points.push([p.offsetX, p.offsetY, p.pressure || 0.5]);
  }
  drawSegment(stroke);
  send({ type: "points", id: stroke.id, points: stroke.points.slice(-3) });
});
// Others apply the same data and redraw
channel.onmessage = ({ data }) => apply(data);
```

## Browser support

Every modern browser, with touch, mouse and pen. For devices on different networks, run the included server.js.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**How do I use it across different devices?**

Run the included server.js with Node, then enter its ws:// address in the page on each device.

**Does it support pens and tablets?**

Yes. Pointer Events give pressure data, and pen strokes get thicker when you press harder.

**How does undo work with several people?**

Undo removes your own last stroke only, and tells the others to remove it too.

## License

MIT. Free for personal and commercial use.
