## 2026-03-08 - [Accessibility & Form UX in Legacy PHP Apps]
**Learning:** Legacy PHP forms often miss critical accessibility linkages (`label for` / `input id`) and modern validation/UX attributes (`required`, `autocomplete`). Invalid CSS (like unitless values or combined properties in `border-radius`) can break layout and accessibility consistency.
**Action:** Always verify label associations for screen reader support. Apply `autocomplete` to aid password managers and `required` for native browser validation. Ensure `:focus-visible` is implemented to support keyboard-only users.
