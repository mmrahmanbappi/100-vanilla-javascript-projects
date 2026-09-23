# Kanban Board in JavaScript (Free Project)

![Kanban Board JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/02-modern-ui/018-kanban-board/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/02-modern-ui/018-kanban-board/

Free kanban board in plain JavaScript. Drag cards between columns, add labels and due dates, search, and save automatically with localStorage. Keyboard friendly.

## What is the Kanban Board?

A kanban board shows work as cards moving through columns: To do, In progress and Done. This one lets you drag cards between columns, add new ones with labels and due dates, search every column, and it saves everything in your browser.

It uses the built in HTML Drag and Drop API, with a line that shows where a card will land. Every card also has move buttons and arrow key support, so it works for keyboard users and on phones.

## What it does

- Drag cards within and between columns, with a drop indicator
- Move cards with buttons or the keyboard for accessibility
- Colored labels and due dates, overdue cards stand out
- Search filters every column at once
- Export and import the board as JSON

## How it works

1. **Start the drag.** dragstart stores the card id in dataTransfer and dims the card.
2. **Find the spot.** dragover compares the mouse position with the middle of each card to show where it will land.
3. **Drop and save.** drop moves the card in the data, renders the board again and saves it to localStorage.

## The key JavaScript

```js
card.addEventListener("dragstart", (e) => {
  e.dataTransfer.setData("text/plain", card.dataset.id);
});
column.addEventListener("dragover", (e) => {
  e.preventDefault();                                   // allow dropping
  const after = [...list.children].find((c) => e.clientY < c.getBoundingClientRect().top + c.offsetHeight / 2);
  list.insertBefore(marker, after ?? null);             // show where it lands
});
column.addEventListener("drop", (e) => {
  moveCard(e.dataTransfer.getData("text/plain"), column.dataset.id, indexOf(marker));
});
```

## Browser support

Drag and drop: desktop browsers. On phones, use the move buttons on each card.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**How does drag and drop work in plain JavaScript?**

Set draggable on the card, save its id in dragstart, call preventDefault in dragover to allow a drop, and move the card in the drop handler.

**Does drag and drop work on phones?**

The HTML Drag and Drop API is weak on touch screens, so each card has move buttons as well. They work everywhere.

**Where is my board saved?**

In localStorage in your browser. Use Export to save a JSON copy, and Import to load it on another computer.

## License

MIT. Free for personal and commercial use.
