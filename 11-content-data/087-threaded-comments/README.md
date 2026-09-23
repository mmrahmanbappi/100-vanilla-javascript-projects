# Threaded Comments in JavaScript (Free Project)

![Threaded Comments JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/11-content-data/087-threaded-comments/demo.html
**Details and code:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/11-content-data/087-threaded-comments/

Free threaded comment section in plain JavaScript. Nested replies, likes, edit and delete your own comments, sort by newest or top, collapse threads and friendly times like 2 hours ago.

## What is the Threaded Comments?

A comment section with nested replies, avatars, likes and friendly times. Write a comment, reply to anyone, and mentions like @Amira are highlighted.

Your own comments can be edited or deleted, threads can be collapsed, and you can sort by top, newest or oldest. Everything is saved in your browser.

## What it does

- Nested replies up to three levels
- Likes with a remembered state
- Edit and delete your own comments
- Sort and collapse threads
- Relative times and mention highlighting

## How it works

1. **Comments are a tree.** Each comment has a list of replies, which have their own replies. One recursive function draws the whole tree, up to three levels deep.
2. **Friendly times.** Intl.RelativeTimeFormat turns timestamps into 5 hours ago or yesterday, in the visitor's language.
3. **Keep threads readable.** Deleting a comment with replies leaves a placeholder so the conversation still makes sense. Long threads can be collapsed.

## The key JavaScript

```js
function render(comments, depth = 1) {
  return "<ul>" + comments.map((c) => `
    <li><b>${c.who}</b> <time>${ago(c.time)}</time>
      <p>${escape(c.text)}</p>
      ${depth < 3 ? `<button data-reply="${c.id}">Reply</button>` : ""}
      ${c.replies.length ? render(c.replies, depth + 1) : ""}
    </li>`).join("") + "</ul>";
}
const rtf = new Intl.RelativeTimeFormat("en", { numeric: "auto" });
rtf.format(-1, "day"); // "yesterday"
```

## Browser support

Works in all modern browsers.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**How do I save comments for everyone?**

Send new comments to your server with fetch and load the tree from there. The demo keeps them in localStorage only.

**Is user text safe to show?**

Yes. Text is escaped before display, so nobody can inject HTML or scripts.

**Why limit nesting to three levels?**

Deep threads get too narrow to read on phones. Three levels keeps conversations clear.

## License

MIT. Free for personal and commercial use.
