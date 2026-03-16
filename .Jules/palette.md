# Palette's Journal

## 2026-03-08 - Accessible Form Patterns in Legacy PHP
**Learning:** Legacy PHP forms often lack programmatic label-input associations, causing significant accessibility issues. Adding 'id' to inputs and 'for' to labels, along with HTML5 attributes like 'required', 'autocomplete', and 'autofocus', provides a low-effort, high-impact UX win for users with screen readers or those using password managers.
**Action:** Always check authentication forms (login, register) for missing label associations and add relevant HTML5 validation/autofill hints to improve the baseline UX.
