# Image Compressor in JavaScript (Free Project)

![Image Compressor JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/05-media-and-realtime/038-image-compressor/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/05-media-and-realtime/038-image-compressor/

Free bulk image compressor in plain JavaScript. Resize and convert photos to WebP, AVIF or JPEG in a Web Worker with OffscreenCanvas, and compare before and after.

## What is the Image Compressor?

Drop a batch of photos, pick a size and quality, and get smaller files back in seconds, with a before and after slider on each one. Nothing is uploaded.

The heavy work runs in a Web Worker so the page never freezes. Each photo becomes an ImageBitmap, is drawn at the new size on an OffscreenCanvas, and is encoded to the format you picked.

## What it does

- Batch: drop many images at once
- Max width, quality and output format controls
- Before and after slider on each image
- Shows size saved per file and in total
- Download one file or all of them

## How it works

1. **Decode.** Each file becomes an ImageBitmap with createImageBitmap, which decodes off the main thread.
2. **Resize in a worker.** The bitmap is sent to the worker, drawn at the new size on an OffscreenCanvas with high quality smoothing.
3. **Encode.** convertToBlob encodes to the chosen format and quality. The page gets back the new file and its size.

## The key JavaScript

```js
// worker.js (created from a Blob so the page stays a single file)
self.onmessage = async ({ data: { id, bitmap, width, type, quality } }) => {
  const scale = width ? Math.min(1, width / bitmap.width) : 1;
  const canvas = new OffscreenCanvas(Math.round(bitmap.width * scale), Math.round(bitmap.height * scale));
  const ctx = canvas.getContext("2d");
  ctx.imageSmoothingQuality = "high";
  ctx.drawImage(bitmap, 0, 0, canvas.width, canvas.height);
  const blob = await canvas.convertToBlob({ type, quality });
  self.postMessage({ id, blob, w: canvas.width, h: canvas.height });
};
// page
worker.postMessage({ id, bitmap, width: 1920, type: "image/webp", quality: 0.75 }, [bitmap]);
```

## Browser support

Every modern browser. AVIF output: Chrome and Edge. Safari encodes JPEG and PNG; its WebP output may fall back to PNG.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**Is WebP or AVIF better?**

AVIF files are usually smaller at the same quality, but encoding is slower and fewer browsers can create them. WebP is a safe default.

**Does compressing lose quality?**

A little, depending on the quality slider. Around 0.75 is hard to tell apart from the original for most photos.

**Why use a Web Worker?**

Encoding big images takes time. Doing it in a worker keeps scrolling and clicking smooth.

## License

MIT. Free for personal and commercial use.
