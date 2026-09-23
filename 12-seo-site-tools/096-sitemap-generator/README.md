# Sitemap Generator in JavaScript (Free Project)

![Sitemap Generator JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/12-seo-site-tools/096-sitemap-generator/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/12-seo-site-tools/096-sitemap-generator/

Free sitemap generator in plain JavaScript. Paste your page paths or full URLs, clean and sort them, set last modified dates and priorities, and download sitemap.xml and robots.txt.

## What is the Sitemap Generator?

A sitemap builder. Enter your domain and paste your pages as paths or full URLs, one per line. The tool cleans the list and shows what it removed and why.

It writes a valid sitemap.xml with optional last changed dates, frequency and priority, plus a robots.txt that blocks private paths and points search engines to the sitemap.

## What it does

- Paths or full URLs
- Removes duplicates, other domains and query strings
- Blocked paths moved to robots.txt
- Optional lastmod, changefreq and priority
- Download or copy both files

## How it works

1. **Resolve every line.** new URL(line, domain) turns paths like /menu into full addresses. Lines that cannot be parsed are reported.
2. **Clean the list.** Other domains, duplicates, query strings and blocked paths are removed, and each removal is explained.
3. **Write both files.** The sitemap lists every page with optional date, frequency and priority. robots.txt blocks the paths you chose and points to the sitemap.

## The key JavaScript

```js
const base = new URL("https://example.com");
const pages = lines.map((l) => new URL(l, base))
  .filter((u) => u.host === base.host);

const xml = `<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
${pages.map((u) => `  <url><loc>${u.href}</loc><lastmod>${today}</lastmod></url>`).join("\n")}
</urlset>`;
const robots = `User-agent: *\nDisallow: /admin\n\nSitemap: ${base.origin}/sitemap.xml`;
```

## Browser support

Works in all modern browsers.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**Where do I put sitemap.xml?**

In the root of your site, so it opens at yoursite.com/sitemap.xml. Then submit that address in your search engine's webmaster tools.

**Do priority and changefreq matter?**

Most search engines ignore them today. lastmod is useful if it is accurate.

**Should blocked pages be in the sitemap?**

No. A sitemap should only list pages you want found, so blocked paths are left out.

## License

MIT. Free for personal and commercial use.
