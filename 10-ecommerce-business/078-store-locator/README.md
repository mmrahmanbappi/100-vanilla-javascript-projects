# Store Locator in JavaScript (Free Project)

![Store Locator JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/10-ecommerce-business/078-store-locator/demo.html
**Details and code:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/10-ecommerce-business/078-store-locator/

Free store locator in plain JavaScript. Use your location or pick an area, sort stores by distance with the haversine formula, see which are open now and view them on a simple map.

## What is the Store Locator?

A list of nine London stores with a simple map. Share your location or choose an area, and the stores are sorted by distance with the nearest one first.

Each store shows whether it is open right now based on weekday and weekend hours. Tick Open now only to hide the closed ones, and click a store to highlight it on the map.

## What it does

- Use my location with a fallback area list
- Distance sorting with the haversine formula
- Open now based on opening hours
- Open now only filter
- SVG map with no API key

## How it works

1. **Where are you?.** The Geolocation API asks for permission and returns latitude and longitude. If people say no, they can pick an area instead.
2. **Real distance.** The haversine formula works out the distance between two points on a sphere, which is accurate enough for finding a nearby shop.
3. **A map without a library.** Store positions are scaled from latitude and longitude into an SVG box. Swap in a map library later if you need street detail.

## The key JavaScript

```js
function haversine(lat1, lng1, lat2, lng2) {
  const R = 6371, r = Math.PI / 180;                     // km
  const a = Math.sin((lat2 - lat1) * r / 2) ** 2 +
            Math.cos(lat1 * r) * Math.cos(lat2 * r) * Math.sin((lng2 - lng1) * r / 2) ** 2;
  return 2 * R * Math.asin(Math.sqrt(a));
}
navigator.geolocation.getCurrentPosition(({ coords }) => {
  stores.sort((a, b) => haversine(coords.latitude, coords.longitude, a.lat, a.lng)
                      - haversine(coords.latitude, coords.longitude, b.lat, b.lng));
});
```

## Browser support

Works in all modern browsers. Location needs HTTPS and the visitor's permission.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**Do I need a map API key?**

Not for this version. The map is a simple SVG. Add a map library later if you need streets and zoom.

**Why is my location not used?**

Geolocation needs a secure HTTPS page and permission. If it is blocked, the area list still works.

**How accurate is the distance?**

It is a straight line distance, usually within a few percent. Walking or driving routes will be longer.

## License

MIT. Free for personal and commercial use.
