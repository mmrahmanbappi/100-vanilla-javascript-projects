# Privacy Analytics Lite in JavaScript (Free Project)

![Privacy Analytics Lite JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/12-seo-site-tools/099-privacy-analytics-lite/demo.html
**Details and code:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/12-seo-site-tools/099-privacy-analytics-lite/

Free privacy friendly analytics in plain JavaScript. Count page views without cookies or personal data, respect Do Not Track and Global Privacy Control, and see pages, sources and devices on a small dashboard.

## What is the Privacy Analytics Lite?

A tiny, privacy friendly analytics system with a dashboard. Click pretend pages to record views, or add 200 simulated visits, and see views per day, top pages, sources and devices.

It uses no cookies and no personal data, skips visitors who send Do Not Track or Global Privacy Control, and shows the exact event that would be sent to your server.

## What it does

- Page views, visits and views per visit
- 14 day bar chart
- Top pages and sources
- Device split
- No cookies, respects Do Not Track and GPC

## How it works

1. **Count, do not identify.** Each event holds only the page, where the visit came from, the device type and a random session id that lives until the tab closes. No cookies, no IP address.
2. **Respect the signal.** If the browser sends Do Not Track or Global Privacy Control, the page view is simply not counted.
3. **Send without slowing the page.** navigator.sendBeacon posts the event in the background, even while the page is closing, so it never delays navigation.

## The key JavaScript

```js
if (navigator.doNotTrack !== "1" && !navigator.globalPrivacyControl) {
  let session = sessionStorage.getItem("s");
  if (!session) sessionStorage.setItem("s", session = crypto.randomUUID());
  navigator.sendBeacon("/api/hit", JSON.stringify({
    path: location.pathname,
    referrer: document.referrer ? new URL(document.referrer).hostname : "Direct",
    device: innerWidth < 600 ? "Phone" : "Desktop",
    session
  }));
}
```

## Browser support

Works in all modern browsers.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**Do I need a cookie banner for this?**

This design stores nothing on the device beyond a tab session id and collects no personal data. Check your local rules, but many sites can use this style of analytics without consent.

**Where does the data go?**

In the demo it stays in your browser. In a real site, sendBeacon posts it to a small endpoint that adds one row to a database.

**Why use sendBeacon?**

It sends data in the background and keeps working while the page closes, so exits are still counted.

## License

MIT. Free for personal and commercial use.
