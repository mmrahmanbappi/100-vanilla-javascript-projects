# File Upload Dropzone in JavaScript (Free Project)

![File Upload Dropzone JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/09-forms-input/062-file-upload-dropzone/demo.html
**Details and code:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/09-forms-input/062-file-upload-dropzone/

Free file upload dropzone in plain JavaScript. Drag files in or pick them, see image previews, reject wrong types and big files, watch progress bars and remove files.

## What is the File Upload Dropzone?

A drag and drop upload box. Drop images or PDFs in, click to choose, or paste an image from the clipboard, and see each file listed with a preview.

Files that are too big or the wrong type are refused with a clear reason. Press Upload to see progress bars for each file.

## What it does

- Drag and drop, click and paste
- Instant image previews
- Type and size checks with clear messages
- Per file progress bars
- Remove single files or clear all

## How it works

1. **Accept files three ways.** Click opens the file picker, dropping uses the drop event, and pasting reads clipboard files. All three go to one add function.
2. **Check before upload.** Each file is checked for type and size right away, so people see the problem before they wait for anything.
3. **Preview without uploading.** URL.createObjectURL shows a local image preview instantly. The URL is revoked when the file is removed.

## The key JavaScript

```js
zone.addEventListener("drop", (e) => {
  e.preventDefault();
  for (const file of e.dataTransfer.files) {
    if (!["image/png", "image/jpeg", "application/pdf"].includes(file.type)) continue;
    if (file.size > 5 * 1024 * 1024) continue;           // 5 MB limit
    const img = new Image();
    img.src = URL.createObjectURL(file);                  // instant preview
    list.append(img);
  }
});
// real upload: fetch("/upload", { method: "POST", body: formData })
```

## Browser support

Works in all modern browsers.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**Does this upload to a server?**

The demo simulates the upload. To send files for real, add them to a FormData object and post it with fetch.

**Can I show real upload progress?**

Yes. fetch does not report upload progress yet, so use XMLHttpRequest and its upload.onprogress event.

**Is the accept attribute enough?**

No. It only filters the picker. Always check type and size in JavaScript and again on the server.

## License

MIT. Free for personal and commercial use.
