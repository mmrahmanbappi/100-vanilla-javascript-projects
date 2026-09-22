# Semantic Search for Notes in JavaScript (Free Project)

![Semantic Search for Notes JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/01-ai-in-the-browser/008-semantic-search-notes/demo.html
**Details and code:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/01-ai-in-the-browser/008-semantic-search-notes/

Free semantic search project in plain JavaScript. Search notes by meaning using text embeddings and cosine similarity, with notes saved in IndexedDB. No server.

## What is the Semantic Search for Notes?

Normal search only finds notes that contain the exact words you typed. Semantic search finds notes that mean the same thing. Search for car trouble and it finds the note about the engine light, even if the word car never appears.

Each note is turned into a list of 384 numbers, called an embedding, by a small model named all MiniLM. Notes with similar meaning get similar numbers. The page compares your search with every note using cosine similarity and shows the closest matches.

## What it does

- Search by meaning with a similarity score for every result
- Switch to plain keyword search to see the difference
- Add and delete notes, stored in IndexedDB
- Twelve sample notes to try right away
- Export all notes and their vectors as JSON

## How it works

1. **Turn text into numbers.** Each note becomes a list of 384 numbers that describes its meaning. Similar ideas get similar numbers.
2. **Store the vectors.** Notes and their vectors are saved in IndexedDB, so they survive a page reload.
3. **Compare.** Your search is turned into a vector too, and every note is ranked by how close its vector is.

## The key JavaScript

```js
import { pipeline } from "https://cdn.jsdelivr.net/npm/@huggingface/transformers@3.8.1";

const embed = await pipeline("feature-extraction", "Xenova/all-MiniLM-L6-v2");

// 384 numbers that describe the meaning of the text
const toVec = async (t) => Array.from((await embed(t, { pooling: "mean", normalize: true })).data);

const a = await toVec("Fix CORS error on the staging API");
const b = await toVec("server problem");

// Vectors are normalized, so cosine similarity is just a dot product
const score = a.reduce((sum, x, i) => sum + x * b[i], 0); // about 0.4
```

## Browser support

Any current Chrome, Edge, Firefox or Safari on desktop or mobile.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**What is the difference between semantic search and keyword search?**

Keyword search matches words. Semantic search matches meaning. The demo lets you switch between them so you can see the difference on the same notes.

**Do I need a vector database?**

Not for a few thousand notes. Comparing vectors in plain JavaScript is fast enough. A vector database helps when you reach hundreds of thousands of items.

**Where are the notes stored?**

In IndexedDB, a database built into the browser. They stay on your device, and you can export them as JSON.

## License

MIT. Free for personal and commercial use.
