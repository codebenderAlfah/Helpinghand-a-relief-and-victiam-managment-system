## 2026-03-24 - [Form Accessibility and Usability]
**Learning:** Legacy PHP forms often lack programmatic associations between labels and inputs, and they miss modern HTML5 attributes like `autocomplete` and `required`, which significantly degrades the experience for screen reader users and users of password managers.
**Action:** Always ensure every input has a unique `id` and its corresponding label has a `for` attribute. Enhance form fields with appropriate `autocomplete` types and the `required` attribute to leverage native browser features.
