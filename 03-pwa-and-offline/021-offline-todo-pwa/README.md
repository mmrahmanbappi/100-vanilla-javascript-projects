# Offline-first Todo PWA in JavaScript (Free Project)

![Offline-first Todo PWA JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/03-pwa-and-offline/021-offline-todo-pwa/demo.html
**Details and code:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/03-pwa-and-offline/021-offline-todo-pwa/

Free offline todo PWA in plain JavaScript. A service worker caches the app so it works with no internet, tasks are saved in IndexedDB, and you can install it.

## What is the Offline-first Todo PWA?

This todo list works like an app on your phone or computer. You can install it, open it with Wi-Fi off, and keep adding tasks. Nothing is lost, and there is no server at all.

A service worker saves the page files on the first visit and answers from that cache afterward. Tasks are stored in IndexedDB. The page also shows when you are offline and offers an update button when a new version is ready.

## What it does

- Works offline after the first visit
- Install button using the beforeinstallprompt event
- Online and offline status badge
- Filters: all, active, done, plus clear completed
- Update banner when a new version of the service worker is ready

## How it works

1. **Install the worker.** On first load, sw.js caches index.html, the manifest and the fonts.
2. **Serve from cache.** Every later request is answered from the cache first, so the page opens instantly and works with no network.
3. **Keep data local.** Tasks live in IndexedDB. There is no server, so offline and online behave the same.

## The key JavaScript

```js
// sw.js: cache the app shell, then answer from cache first
const CACHE = "todo-v1";
self.addEventListener("install", (e) => {
  e.waitUntil(caches.open(CACHE).then((c) => c.addAll(["./", "./index.html", "./manifest.webmanifest"])));
});
self.addEventListener("fetch", (e) => {
  e.respondWith(caches.match(e.request).then((hit) => hit || fetch(e.request).then((res) => {
    const copy = res.clone(); caches.open(CACHE).then((c) => c.put(e.request, copy)); return res;
  })));
});
// index.html
navigator.serviceWorker.register("sw.js");
```

## Browser support

Every modern browser. Install prompt: Chrome, Edge and Samsung Internet. On iPhone use Share, then Add to Home Screen.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**What makes a web app a PWA?**

A web app manifest, a service worker and HTTPS. Together they let the browser install the app and run it offline.

**How do I test offline mode?**

Load the page once, then open DevTools, go to Network and choose Offline, or turn off Wi-Fi. Reload and the app still opens.

**Can I install it on an iPhone?**

Yes. Open it in Safari, tap Share, then Add to Home Screen.

## License

MIT. Free for personal and commercial use.
