## 2026-03-04 - Modernizing Legacy PHP Form Accessibility
**Learning:** Legacy PHP applications often lack basic programmatic associations between labels and inputs, and frequently use non-standard CSS syntax (like `//` comments) that can cause silent rendering failures. Additionally, focus states are often missing, making keyboard navigation difficult.

**Action:** When working with legacy PHP/CSS:
1. Always audit forms for `id`/`for` associations and `autocomplete` attributes.
2. Convert `//` comments in CSS to standard `/* */` blocks.
3. Use `:focus-visible` to add high-contrast focus indicators for keyboard users while maintaining a clean UI for pointer-based interactions.
4. Upgrade generic `type="text"` inputs to semantic types like `type="email"` where appropriate to leverage native browser validation and mobile keyboards.
