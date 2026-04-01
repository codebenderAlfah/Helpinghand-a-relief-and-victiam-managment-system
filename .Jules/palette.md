## 2026-04-01 - Form Accessibility Patterns in Legacy PHP
**Learning:** Legacy PHP applications often lack basic HTML5 form attributes and label-input associations, which significantly impacts screen reader accessibility and mobile usability. Using `for` and `id` attributes, along with `autocomplete` and `required`, provides immediate UX wins with minimal code changes.
**Action:** Always audit form inputs for missing `id` attributes and ensure every `<label>` has a corresponding `for` attribute.
