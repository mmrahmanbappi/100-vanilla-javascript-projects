# Date Range Picker in JavaScript (Free Project)

![Date Range Picker JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/09-forms-input/063-date-range-picker/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/09-forms-input/063-date-range-picker/

Free date range picker in plain JavaScript. Two month calendar, blocked dates, minimum nights, hover preview, quick presets and keyboard navigation. No library.

## What is the Date Range Picker?

A booking style calendar showing two months side by side. Click a check in date and a check out date, and the range and number of nights appear.

Taken and past dates are crossed out, a range cannot include a taken night, and there is a two night minimum. Presets pick a weekend or a week in one click.

## What it does

- Two month view with previous and next
- Blocked and past dates
- Hover preview of the range
- Minimum stay check
- Keyboard navigation with arrow keys

## How it works

1. **Build the grid from dates.** For each month the script works out which weekday the 1st falls on, adds empty cells, then one button per day.
2. **Two clicks make a range.** The first click sets check in. The second sets check out if it is later, long enough and has no taken nights in between.
3. **Keyboard as a grid.** Only one day is in the Tab order. Arrow keys move a day or a week, and the calendar moves to the next month when needed.

## The key JavaScript

```js
function monthGrid(year, month) {
  const firstWeekday = (new Date(year, month, 1).getDay() + 6) % 7; // Monday first
  const days = new Date(year, month + 1, 0).getDate();              // days in month
  const cells = Array(firstWeekday).fill(null);
  for (let d = 1; d <= days; d++) cells.push(new Date(year, month, d));
  return cells;
}
const nights = Math.round((checkOut - checkIn) / 86400000);
```

## Browser support

Works in all modern browsers.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**Why not use input type date?**

The native picker selects one date and cannot show taken dates or a range, which booking sites need.

**How do I load real taken dates?**

Fetch them from your booking system and add each date to the blocked set before drawing.

**Does it handle time zones?**

Dates are treated as local calendar days, which is what guests expect for check in and check out.

## License

MIT. Free for personal and commercial use.
