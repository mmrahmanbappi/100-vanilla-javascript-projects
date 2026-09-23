# Browser File Compressor in JavaScript (Free Project)

![Browser File Compressor JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/06-hardware-and-performance/045-file-compressor/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/06-hardware-and-performance/045-file-compressor/

Free file compressor in plain JavaScript. Gzip or deflate any file and unpack .gz files with the native CompressionStream API, with streaming progress and size charts.

## What is the Browser File Compressor?

Drop a file to gzip it, or drop a .gz file to unpack it. You also get a text box that shows how well your text compresses, with before and after size bars.

The browser's own CompressionStream does the work, and the file is read as a stream, piece by piece, so big files never sit fully in memory. A small counting stream drives the progress bar.

## What it does

- Compress any file to .gz, or decompress .gz back
- Text mode to see how well your text compresses
- Streams the file in chunks with a progress bar
- Before and after size bars and the compression ratio
- Choose gzip, deflate or deflate-raw

## How it works

1. **Stream the file.** file.stream() gives a ReadableStream, so the file is read piece by piece instead of all at once.
2. **Pipe through gzip.** pipeThrough(new CompressionStream("gzip")) compresses each piece as it passes. A small TransformStream counts bytes for the progress bar.
3. **Collect.** new Response(stream).blob() gathers the output into a file you can download.

## The key JavaScript

```js
async function gzip(file, onProgress) {
  let done = 0;
  const counter = new TransformStream({
    transform(chunk, ctl) { done += chunk.byteLength; onProgress(done / file.size); ctl.enqueue(chunk); },
  });
  const stream = file.stream()
    .pipeThrough(counter)
    .pipeThrough(new CompressionStream("gzip"));
  return new Response(stream).blob();                  // collect the output
}
// Unpack: file.stream().pipeThrough(new DecompressionStream("gzip"))
```

## Browser support

Chrome and Edge 80+, Safari 16.4+, Firefox 113+.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**What is CompressionStream?**

A built in browser API that compresses or decompresses a stream with gzip, deflate or deflate raw. No library is needed.

**Why do photos barely shrink?**

JPEG, PNG, MP4 and zip files are already compressed. Text, CSV, JSON and code shrink the most.

**Can it make .zip files?**

No. Gzip works on one file at a time. Zip archives need a library such as fflate.

## License

MIT. Free for personal and commercial use.
