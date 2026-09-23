# Order Tracking Timeline in JavaScript (Free Project)

![Order Tracking Timeline JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/10-ecommerce-business/079-order-tracking-timeline/demo.html
**Details and code:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/10-ecommerce-business/079-order-tracking-timeline/

Free order tracking timeline in plain JavaScript. Look up an order number, see each step with times, a delivery countdown, simulated live updates and optional browser notifications.

## What is the Order Tracking Timeline?

An order tracking page. Enter an order number to see a five step timeline, from placed to delivered, with times, a progress bar and the expected delivery day.

Live updates move the order along step by step, as if new data came from your server, and can send a browser notification when the status changes.

## What it does

- Order lookup with helpful not found message
- Five step timeline with times
- Progress bar and delivery countdown
- Simulated live updates
- Optional browser notifications

## How it works

1. **Steps and times.** Each order has a current step. Earlier steps are done and get a time, the current step pulses, and later steps wait.
2. **Estimate and countdown.** The delivery estimate turns into a friendly countdown that refreshes every 30 seconds.
3. **Live updates and alerts.** A timer stands in for polling your server. When the status changes, a toast appears and, if allowed, a browser notification.

## The key JavaScript

```js
async function poll(orderId) {
  const res = await fetch(`/api/orders/${orderId}`);
  const { step } = await res.json();
  if (step !== lastStep) {
    lastStep = step;
    render(step);
    if (Notification.permission === "granted")
      new Notification("Order update", { body: steps[step - 1].title });
  }
}
setInterval(() => poll("10482"), 60000);
```

## Browser support

Works in all modern browsers. Notifications need permission and a secure page.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**How do I connect this to real orders?**

Replace the ORD object with a fetch to your order API, and call it on a timer or when the page becomes visible again.

**Should I use polling or push?**

Polling every minute is simple and fine for most shops. Push notifications need a service worker and a server.

**Why ask for postcode too?**

So people cannot look up other customers' orders just by guessing numbers.

## License

MIT. Free for personal and commercial use.
