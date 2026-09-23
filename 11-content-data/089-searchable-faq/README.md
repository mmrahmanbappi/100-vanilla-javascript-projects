# Searchable FAQ in JavaScript (Free Project)

![Searchable FAQ JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/11-content-data/089-searchable-faq/demo.html
**Details and code:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/11-content-data/089-searchable-faq/

Free searchable FAQ in plain JavaScript. Instant search with highlights, category filters, deep links to any answer, helpful votes and automatic FAQPage JSON-LD for Google.

## What is the Searchable FAQ?

A help center with ten questions in four topics. Type in the search box and matching questions appear with highlights. If only a few match, their answers open automatically.

Every answer has its own link, a Was this helpful vote and a way to contact support. The page also builds FAQPage schema markup you can copy into your site.

## What it does

- Instant search with highlighted words
- Topic filters
- Deep links that open the right answer
- Helpful votes saved in the browser
- FAQPage JSON-LD generated for SEO

## How it works

1. **Native accordions.** Each question is a details element, so it opens and closes with no JavaScript and works with a keyboard and screen readers.
2. **Search every word.** The search keeps questions where every typed word appears in the question or answer, highlights the matches and opens the results when only a few are left.
3. **Schema for search engines.** The page builds FAQPage JSON-LD from the same list, so Google can show your questions directly in search results.

## The key JavaScript

```js
const words = query.toLowerCase().split(/\s+/).filter(Boolean);
const results = faqs.filter((f) =>
  words.every((w) => (f.q + " " + f.a).toLowerCase().includes(w)));

const schema = {
  "@context": "https://schema.org", "@type": "FAQPage",
  mainEntity: faqs.map((f) => ({ "@type": "Question", name: f.q,
    acceptedAnswer: { "@type": "Answer", text: f.a } }))
};
```

## Browser support

Works in all modern browsers.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**Why use details and summary?**

They are built into HTML, accessible by default and still work if JavaScript fails to load.

**Does the FAQ schema really help?**

It helps search engines understand your page. Google now shows FAQ rich results mainly for well known sites, but the markup is still worth adding.

**What should I do with the votes?**

Send them to your analytics. Answers with many No votes are the ones to rewrite first.

## License

MIT. Free for personal and commercial use.
