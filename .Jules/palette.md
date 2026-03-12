## 2026-03-08 - Accessibility Gap in Legacy PHP Forms
**Learning:** Legacy PHP applications often lack basic HTML5 accessibility features such as `lang` attributes, proper `<label>` to `<input>` associations using `for`/`id`, and semantic input types like `email`. This hinders screen readers and mobile keyboard optimization.
**Action:** Always verify the presence of `<!DOCTYPE html>`, `lang` attribute, and ensure all form inputs are programmatically associated with their labels. Use semantic input types (`email`, `tel`, etc.) to trigger appropriate virtual keyboards on mobile devices.
