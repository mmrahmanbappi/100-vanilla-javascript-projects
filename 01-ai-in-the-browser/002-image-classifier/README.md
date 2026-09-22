# Image Classifier in JavaScript (Free Project)

![Image Classifier JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/01-ai-in-the-browser/002-image-classifier/demo.html
**Details and code:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/01-ai-in-the-browser/002-image-classifier/

Free image classifier in plain JavaScript. Drop a photo and a Vision Transformer model names what is in it, with confidence bars. Runs in the browser with Transformers.js.

## What is the Image Classifier?

An image classifier looks at a photo and tells you what is in it: a tiger, a pizza, a sports car. This project uses a well known model called ViT, short for Vision Transformer, which was trained on more than a million photos across 1,000 everyday categories.

The model runs in your browser through Transformers.js and WebAssembly. You drop in a picture, and a few moments later you get the top five guesses, each with a confidence score. The photo is never uploaded.

## What it does

- Drag and drop, file picker or paste from clipboard
- Six sample photos to try right away
- Top 5 guesses with confidence bars
- Shows how long the model took
- Model is cached after the first run

## How it works

1. **Load the pipeline.** Transformers.js downloads the quantized ViT model once and keeps it in the browser cache.
2. **Prepare the image.** The image is resized to 224 by 224 pixels and turned into numbers the model understands.
3. **Rank the labels.** The model scores all 1000 ImageNet labels and the page shows the five highest.

## The key JavaScript

```js
import { pipeline } from "https://cdn.jsdelivr.net/npm/@huggingface/transformers@3.8.1";

// 1. Create the classifier (downloads the model once)
const classify = await pipeline("image-classification", "Xenova/vit-base-patch16-224");

// 2. Give it an image URL, a blob URL or a canvas
const results = await classify("tiger.jpg", { top_k: 5 });

// 3. [{ label: "tiger, Panthera tigris", score: 0.94 }, ...]
console.table(results);
```

## Browser support

Any current Chrome, Edge, Firefox or Safari on desktop or mobile. Needs about 300 MB of free memory.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**How accurate is the image classifier?**

For clear photos of common things like animals, food and vehicles it is right most of the time. It struggles with unusual objects, since it only knows 1,000 categories.

**Does it upload my photos?**

No. The model runs on your device, so the photo stays in your browser. You can even disconnect from the internet after the model loads.

**Can I train it on my own categories?**

Not in this project. To recognize your own products or labels you would fine tune a model in Python first, then load the result with Transformers.js the same way.

## License

MIT. Free for personal and commercial use.
