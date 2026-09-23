# Product Filter and Sort in JavaScript (Free Project)

![Product Filter and Sort JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/10-ecommerce-business/073-product-filter-sort/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/10-ecommerce-business/073-product-filter-sort/

Free product filter and sort in plain JavaScript. Filter by category, price, colour, rating and stock, sort by price or rating, see active filter chips and share the URL.

## What is the Product Filter and Sort?

A ceramics shop listing with a filter sidebar: categories with counts, a price range, colour swatches, minimum rating and in stock only, plus five ways to sort.

Active filters appear as chips you can remove one by one. Everything is written to the URL, so a filtered view can be bookmarked or shared.

## What it does

- Category, price, colour, rating and stock filters
- Five sort orders
- Result count and removable filter chips
- Filters saved in the URL and restored on load
- Works with back and forward buttons

## How it works

1. **Filter, then sort.** Each product must pass every active filter. The survivors are sorted with one of five compare functions.
2. **The URL is the state.** Every change writes the filters to the address bar with URLSearchParams. Opening that link restores the same view.
3. **Chips for active filters.** Each active filter becomes a small button above the results, and clicking it removes just that filter.

## The key JavaScript

```js
function run() {
  const s = readFilters();
  const list = products
    .filter((p) => (!s.cats.length || s.cats.includes(p.cat)) && p.price <= s.max && p.rating >= s.rating)
    .sort(sorters[s.sort]);
  const q = new URLSearchParams();
  s.cats.forEach((c) => q.append("cat", c));
  if (s.max !== Infinity) q.set("max", s.max);
  history.replaceState(null, "", "?" + q);
  render(list);
}
```

## Browser support

Works in all modern browsers.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**Should filtering happen in the browser or on the server?**

In the browser is great for up to a few thousand products. For bigger catalogues, send the same URL parameters to your server.

**Why store filters in the URL?**

Shared links and the back button then show the same results, and search engines can index popular filter pages.

**How do the category counts work?**

They count products per category from the list. You can update them to reflect the other active filters.

## License

MIT. Free for personal and commercial use.
