# Star Rating and Review Form in JavaScript (Free Project)

![Star Rating and Review Form JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/09-forms-input/068-star-rating-review-form/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/09-forms-input/068-star-rating-review-form/

Free star rating and review form in plain JavaScript. Half star ratings with radio buttons, hover preview, review text with a counter, photo previews and a live rating summary.

## What is the Star Rating and Review Form?

A product review form with half star ratings, a name, a comment with a character counter and up to four photos.

Next to it is a rating summary with the average score and a bar for each star level. Posting a review updates the summary and adds it to the top of the list.

## What it does

- Half star rating built on radio inputs
- Hover preview with word labels
- Character counter and required checks
- Photo previews before posting
- Live average and star breakdown bars

## How it works

1. **Stars are radio buttons.** Ten hidden radio inputs, one for each half star, make the rating work with a keyboard and screen readers for free.
2. **Paint on hover and change.** Hovering previews a rating and the label changes to words like Great. Leaving restores the chosen value.
3. **Recalculate the summary.** The average, star counts and bar widths are worked out again from the list every time a review is added.

## The key JavaScript

```js
<fieldset class="stars">
  <legend>Your rating</legend>
  <input type="radio" name="star" id="s1" value="0.5"><label for="s1">0.5 stars</label>
  <!-- ... up to 5 -->
</fieldset>

stars.addEventListener("change", (e) => paint(+e.target.value));
const avg = reviews.reduce((a, r) => a + r.stars, 0) / reviews.length;
bar.style.width = (count / reviews.length) * 100 + "%";
```

## Browser support

Works in all modern browsers.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**Why build stars from radio buttons?**

Radio buttons already work with a keyboard and screen readers. The stars are just their labels styled.

**How do I save reviews?**

Send the form data to your server with fetch. The demo keeps reviews in memory only.

**Should I show the average with decimals?**

Show one decimal, like 4.3, and round the stars to the nearest half.

## License

MIT. Free for personal and commercial use.
