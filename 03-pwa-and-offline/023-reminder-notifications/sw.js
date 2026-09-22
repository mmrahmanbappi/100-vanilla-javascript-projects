self.addEventListener("install", () => self.skipWaiting());
self.addEventListener("activate", (e) => e.waitUntil(self.clients.claim()));
self.addEventListener("notificationclick", (e) => {
  e.notification.close();
  const id = e.notification.data?.id, action = e.action || "open";
  e.waitUntil(self.clients.matchAll({ type: "window", includeUncontrolled: true }).then((cs) => {
    cs.forEach((c) => c.postMessage({ type: "action", id, action: action === "open" ? "none" : action }));
    if (cs[0]) return cs[0].focus(); return self.clients.openWindow("./demo.html");
  }));
});
// Server push: show whatever the server sent
self.addEventListener("push", (e) => {
  const d = e.data ? e.data.json() : { title: "Reminder", body: "You have a reminder" };
  e.waitUntil(self.registration.showNotification(d.title, { body: d.body }));
});
