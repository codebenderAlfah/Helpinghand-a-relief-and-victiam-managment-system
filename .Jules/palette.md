## 2026-02-26 - [Form Accessibility and Semantic HTML]
**Learning:** Legacy PHP applications often have broken HTML structures (e.g., tags outside `<html>`, `<h1>` inside `<label>`) and missing accessibility attributes (`id`/`for` association). Modernizing these with standard HTML5 attributes (`type="email"`, `required`) and semantic structure significantly improves UX without changing backend logic.
**Action:** Always check for `id`/`for` associations in forms and use semantic input types. Ensure the HTML structure follows standard patterns (`<!DOCTYPE>` -> `<html>` -> `<head>`/`<body>`).
# Palette's Journal

## 2025-05-14 - Form Accessibility Discovery
**Learning:** Legacy forms in this application lack basic accessibility features such as label-input associations (for/id) and proper input types. Additionally, some CSS properties are used incorrectly (e.g., border-radius with border shorthand syntax), affecting visual consistency.
**Action:** Always verify label-input associations and use semantic HTML5 input types for better mobile UX and validation.
## 2025-05-15 - [Legacy PHP Accessibility & Portability]
**Learning:** Legacy PHP applications often lack basic HTML5 accessibility features like `label-for` associations and semantic input types. They also frequently use absolute `localhost` URLs which break portability.
**Action:** When working with legacy forms, always ensure labels are programmatically associated with inputs. Replace hardcoded absolute URLs with relative paths to ensure the UI remains functional across different development environments. Use semantic types like `type="email"` for better mobile UX.
