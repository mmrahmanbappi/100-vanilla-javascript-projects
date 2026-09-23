# Client-side Router in JavaScript (Free Project)

![Client-side Router JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/02-modern-ui/013-client-side-router/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/02-modern-ui/013-client-side-router/

Free client-side router in plain JavaScript using the Navigation API, with route parameters, a 404 page, loading states and a History API fallback.

## What is the Client-side Router?

A router lets a single page app change screens without reloading, while every screen still has its own URL. Links, the back button and bookmarks all work. This project builds a small router in about 60 lines.

It uses the Navigation API, a newer browser feature made for exactly this job. One navigate event catches every link click and back button press, and the router decides what to show. Older browsers fall back to the History API.

## What it does

- Routes with parameters like /post/:id
- Loading state for slow pages, with cancel on fast clicks
- 404 page for unknown routes
- Active link styling and document title per page
- Works on static hosting because routes live in the query string

## How it works

1. **Catch navigations.** The navigate event fires for link clicks, form submits and back or forward. The router checks if it can handle the URL.
2. **Intercept.** event.intercept() stops the full page load and runs the route handler instead. The URL still updates.
3. **Render.** The matching route renders into the page. If the user clicks again quickly, the signal aborts the old load.

## The key JavaScript

```js
navigation.addEventListener("navigate", (event) => {
  const url = new URL(event.destination.url);
  if (!event.canIntercept || url.origin !== location.origin) return;

  event.intercept({
    async handler() {
      const page = await loadRoute(url, { signal: event.signal });
      outlet.replaceChildren(page); // URL already updated
    },
  });
});
```

## Browser support

Navigation API: Chrome and Edge 102+, plus the newest Safari and Firefox releases. Older browsers use the History API fallback.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**What is the Navigation API?**

It is a modern replacement for the History API. It gives you one navigate event for every kind of navigation, and event.intercept() to handle it in JavaScript.

**Why are routes in the query string?**

Static hosts like GitHub Pages return 404 for unknown paths. Keeping routes in ?r= means a refresh always loads the same file, so it works anywhere.

**Can it load data for a route?**

Yes. Route handlers can be async. The demo waits for a fake API, and a fast second click cancels the first load with the event's AbortSignal.

## License

MIT. Free for personal and commercial use.
