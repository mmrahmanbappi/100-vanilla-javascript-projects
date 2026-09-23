# Multi-step Form Wizard in JavaScript (Free Project)

![Multi-step Form Wizard JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/09-forms-input/061-multi-step-form-wizard/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/09-forms-input/061-multi-step-form-wizard/

Free multi-step form in plain JavaScript. Split a long form into steps, check each step before moving on, show progress, save a draft and review everything before sending.

## What is the Multi-step Form Wizard?

A long sign up form split into four short steps: personal details, address, plan and a final review. You cannot move on until the current step is filled in correctly.

Your answers are saved as you type, so closing the tab or reloading keeps your progress. The last step shows everything before you send it.

## What it does

- Four steps with a numbered progress bar
- Built in browser validation per step
- Clear error message and focus on the first problem
- Draft saved and restored automatically
- Review step before sending

## How it works

1. **Use the browser checks.** required, type="email" and pattern do the checking. checkValidity() on each field of the current step decides if you can move on.
2. **Show one step at a time.** Every step is a fieldset. Only the current one is visible, and the progress bar follows the step number.
3. **Save as you type.** FormData turns the form into an object that is saved to localStorage on every change and restored on reload.

## The key JavaScript

```js
next.onclick = () => {
  const fields = [...steps[current].querySelectorAll("input, select")];
  const bad = fields.find((f) => !f.checkValidity());
  if (bad) { error.textContent = bad.validationMessage; bad.focus(); return; }
  current++;
  localStorage.setItem("draft", JSON.stringify(Object.fromEntries(new FormData(form))));
  show(current);
};
```

## Browser support

Works in all modern browsers.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**Why split a form into steps?**

People are more likely to finish a form when each part looks short and they can see how far they have come.

**Do I still need server side checks?**

Yes. Browser checks help people fill the form in, but always check the data again on your server.

**Where is the draft stored?**

In localStorage on the visitor's own device. It is removed after the form is sent.

## License

MIT. Free for personal and commercial use.
