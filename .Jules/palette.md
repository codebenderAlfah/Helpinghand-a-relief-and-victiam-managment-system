## 2026-02-26 - [Form Accessibility and Semantic HTML]
**Learning:** Legacy PHP applications often have broken HTML structures (e.g., tags outside `<html>`, `<h1>` inside `<label>`) and missing accessibility attributes (`id`/`for` association). Modernizing these with standard HTML5 attributes (`type="email"`, `required`) and semantic structure significantly improves UX without changing backend logic.
**Action:** Always check for `id`/`for` associations in forms and use semantic input types. Ensure the HTML structure follows standard patterns (`<!DOCTYPE>` -> `<html>` -> `<head>`/`<body>`).
