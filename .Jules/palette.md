## 2026-03-08 - Improving Legacy Form Accessibility

**Learning:** Legacy PHP applications often use `<label>` tags without `for` attributes and `id` associations, which breaks programmatic accessibility for screen readers and reduces the clickable area for users. Additionally, older stylesheets frequently define `:hover` but omit `:focus` or `:focus-visible` styles, making keyboard navigation nearly impossible as there is no visual indicator of the currently focused element.

**Action:** Always verify that every form input has a unique `id` and a corresponding `<label for="...">`. Implement a global `:focus-visible` style to provide clear feedback for keyboard users without affecting mouse/touch users.
