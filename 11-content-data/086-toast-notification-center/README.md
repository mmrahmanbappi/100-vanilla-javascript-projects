# Toast Notification Center in JavaScript (Free Project)

![Toast Notification Center JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/11-content-data/086-toast-notification-center/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/11-content-data/086-toast-notification-center/

Free toast notification system in plain JavaScript. Success, error, warning and info toasts, six positions, progress bars that pause on hover, undo buttons, a stack limit and a history panel.

## What is the Toast Notification Center?

A notification system for web apps. Send success, error, warning and info toasts, and a delete toast with an Undo button that really restores the action.

Choose from six screen positions, set how long toasts stay and how many can stack. Hovering pauses the countdown, Escape closes the newest, and every message is kept in a history panel.

## What it does

- Four types with colour and icon
- Six positions
- Progress bar that pauses on hover and focus
- Undo action and close button
- Stack limit and notification history

## How it works

1. **One region per position.** Toasts go into a container with aria-live, so screen readers announce them. Errors use role alert so they are read straight away.
2. **Timers you can pause.** The progress bar is a Web Animation. Its onfinish closes the toast, and hovering or focusing pauses it, so people have time to read.
3. **Keep the stack short.** When the limit is reached, the oldest toast leaves first. Every toast is also saved to the history panel with a time.

## The key JavaScript

```js
function toast(title, { type = "info", duration = 5000, undo } = {}) {
  const el = document.createElement("div");
  el.setAttribute("role", type === "error" ? "alert" : "status");
  el.innerHTML = `<b>${title}</b>${undo ? "<button>Undo</button>" : ""}<span class="bar"></span>`;
  region.append(el);
  const bar = el.querySelector(".bar").animate(
    [{ transform: "scaleX(1)" }, { transform: "scaleX(0)" }], { duration });
  bar.onfinish = () => el.remove();
  el.onpointerenter = () => bar.pause();
  el.onpointerleave = () => bar.play();
}
```

## Browser support

Works in all modern browsers.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**Are toasts accessible?**

They can be. Use a live region so screen readers announce them, give people time to read and never put the only copy of important information in a toast.

**Should errors disappear by themselves?**

Usually no. Set errors to stay until closed, or show them next to the problem instead.

**How does Undo work in a real app?**

Wait until the toast closes before deleting on the server, or keep a copy so Undo can put it back.

## License

MIT. Free for personal and commercial use.
