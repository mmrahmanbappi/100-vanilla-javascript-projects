const CACHE = "vjl-links-v1";
self.addEventListener("install", (e) => e.waitUntil(caches.open(CACHE).then((c) => c.addAll(["./", "./demo.html", "./manifest.webmanifest"]))));
self.addEventListener("activate", (e) => e.waitUntil(self.clients.claim()));
self.addEventListener("fetch", (e) => {
  if (e.request.method !== "GET") return;
  const url = new URL(e.request.url);
  // Shared URLs carry query params, so match the page without them
  e.respondWith(fetch(e.request).catch(() => caches.match(url.pathname.endsWith("/") ? "./" : e.request, { ignoreSearch: true })));
});
