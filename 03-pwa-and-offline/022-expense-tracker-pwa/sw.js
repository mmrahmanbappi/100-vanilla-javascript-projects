const CACHE = "vjl-expense-v1";
self.addEventListener("install", (e) => e.waitUntil(caches.open(CACHE).then((c) => c.addAll(["./", "./demo.html", "./manifest.webmanifest"]))));
self.addEventListener("activate", (e) => e.waitUntil(self.clients.claim()));
self.addEventListener("fetch", (e) => { if (e.request.method === "GET") e.respondWith(caches.match(e.request, { ignoreSearch: true }).then((h) => h || fetch(e.request))); });
// A real app would POST the unsynced rows to its API here
self.addEventListener("sync", (e) => {
  if (e.tag !== "sync-expenses") return;
  e.waitUntil(new Promise((r) => setTimeout(r, 500)).then(() => self.clients.matchAll()).then((cs) => cs.forEach((c) => c.postMessage("synced"))));
});
