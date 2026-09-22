# Responsive Dashboard Widgets in JavaScript (Free Project)

![Responsive Dashboard Widgets JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/02-modern-ui/017-responsive-dashboard-widgets/demo.html
**Details and code:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/02-modern-ui/017-responsive-dashboard-widgets/

Free responsive dashboard in HTML, CSS and JavaScript. Resize any widget and it switches layout with container queries, while ResizeObserver redraws the charts.

## What is the Responsive Dashboard Widgets?

Drag the corner of any widget on this dashboard and watch it change: a small widget shows just the number, a wider one adds a chart, and a big one adds details. Each widget decides its layout from its own width, not the screen width.

That is what CSS container queries do. The same widget works in a narrow sidebar or a wide main area without extra code. ResizeObserver tells JavaScript the new size so the canvas charts stay sharp.

## What it does

- Four widgets: revenue, visitors, tasks and weather
- Three layouts per widget: small, medium and large
- Drag handles to resize, plus preset layouts
- Charts redraw crisply at any size and pixel density
- Live size readout on each widget

## How it works

1. **Make it a container.** Each widget has container-type: inline-size, so its children can ask how wide the widget is.
2. **Style by size.** @container rules switch the layout at 260 px and 440 px of widget width, whatever the page width.
3. **Redraw on resize.** ResizeObserver reports the new size and the canvas chart is redrawn to fit, sharp on high density screens.

## The key JavaScript

```js
.widget { container-type: inline-size; resize: both; overflow: hidden; }

/* The widget, not the screen, decides the layout */
@container (min-width: 260px) { .widget canvas { display: block; } }
@container (min-width: 440px) { .widget .body { display: grid; grid-template-columns: auto 1fr; } }

// Keep the canvas sharp at every size
new ResizeObserver(([entry]) => {
  const { width, height } = entry.contentRect;
  canvas.width = width * devicePixelRatio;
  canvas.height = height * devicePixelRatio;
  draw();
}).observe(canvas);
```

## Browser support

Every modern browser (container queries since 2023).

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**What is the difference between media queries and container queries?**

Media queries look at the screen size. Container queries look at the size of a parent element, so a component adapts to wherever you place it.

**Do container queries work everywhere?**

Yes. All major browsers have supported them since 2023.

**Why do the charts need JavaScript?**

Canvas has a fixed pixel size. ResizeObserver reports the new size, and the chart is redrawn at the right resolution for sharp lines.

## License

MIT. Free for personal and commercial use.
