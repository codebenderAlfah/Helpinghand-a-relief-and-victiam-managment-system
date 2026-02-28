## 2024-05-15 - [Baseline Accessibility and CSS Standards]
**Learning:** Legacy PHP applications often neglect baseline web standards like `<!DOCTYPE html>`, `<html lang="...">`, and proper `<meta charset="...">`, which are fundamental for accessibility and correct rendering. Additionally, invalid CSS syntax (e.g., merging `border-radius` with `border` properties) can lead to silent rendering failures in modern browsers.
**Action:** Always start by ensuring a modern HTML5 document structure and verifying that CSS properties are used according to spec. Use `type="email"` and `required` attributes for native browser validation and better mobile UX.

## 2024-05-15 - [Form Accessibility via Label Association]
**Learning:** Placeholder text is not a substitute for labels. Screen readers and users with cognitive disabilities rely on programmatically associated labels (`<label for="id">`) to understand form context.
**Action:** Ensure every form input has a unique `id` and a corresponding `<label>` with a `for` attribute that matches the ID. Avoid wrapping headings or complex elements inside label tags.
