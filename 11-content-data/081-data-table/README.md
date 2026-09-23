# Data Table in JavaScript (Free Project)

![Data Table JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/11-content-data/081-data-table/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/11-content-data/081-data-table/

Free data table in plain JavaScript. Click headers to sort, search every column, filter by department, choose page size, select rows and export the results to a CSV file.

## What is the Data Table?

A table of 64 team members. Click any header to sort up or down, search across every column with matches highlighted, and filter by department.

Choose how many rows per page, move between pages, tick rows or a whole page and export either the selection or all filtered rows as a CSV file.

## What it does

- Sortable headers with aria-sort
- Search across all columns with highlights
- Department filter and page size
- Pagination with smart page numbers
- Row selection and CSV export

## How it works

1. **Filter, sort, slice.** Every change runs the same pipeline: filter by search and department, sort by the chosen column, then take one page.
2. **Sort like a human.** Intl.Collator with numeric set compares names in the right language order and sorts Item 2 before Item 10.
3. **Export what you see.** CSV is built from the filtered rows, or only the ticked ones, then downloaded through a Blob link. A BOM makes Excel read accents correctly.

## The key JavaScript

```js
const collator = new Intl.Collator(undefined, { numeric: true, sensitivity: "base" });
const view = data
  .filter((r) => Object.values(r).join(" ").toLowerCase().includes(query))
  .sort((a, b) => collator.compare(a[key], b[key]) * dir)
  .slice((page - 1) * size, page * size);

const csv = [headers, ...rows.map((r) => keys.map((k) => r[k]))].map((r) => r.join(",")).join("\n");
link.href = URL.createObjectURL(new Blob(["\ufeff" + csv], { type: "text/csv" }));
```

## Browser support

Works in all modern browsers.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**How many rows can it handle?**

A few thousand rows sort and search instantly. For more, load pages from your server with the same sort and search values.

**Why add a BOM to the CSV?**

Excel needs it to read accented letters like ü correctly. Other apps ignore it.

**Is the sticky header accessible?**

Yes. The headers are real buttons inside th elements, and aria-sort tells screen readers the sort direction.

## License

MIT. Free for personal and commercial use.
