## 2026-03-08 - [Accessibility: Form Label Associations]
**Learning:** Legacy PHP forms in this repository consistently omit `id` and `for` attributes, breaking programmatic associations for screen readers and reducing clickable areas for all users.
**Action:** Always verify label-input associations in any form-based page (login, register, etc.) and apply unique IDs to inputs with corresponding `for` attributes on labels to ensure high accessibility standards.
