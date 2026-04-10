## 2026-03-09 - Accessibility and Focus Indicators in Legacy PHP
**Learning:** Legacy PHP applications often lack basic accessibility features like programmatic label-input associations and visible focus states, which are critical for keyboard and screen reader users. Additionally, hardcoded URLs and invalid CSS comments (//) are common debt.
**Action:** Always implement <label for="..."> with matching input IDs, use semantic HTML5 types and autocomplete attributes, and add :focus-visible styles to improve interaction clarity. Ensure CSS follows standard block comment syntax.
