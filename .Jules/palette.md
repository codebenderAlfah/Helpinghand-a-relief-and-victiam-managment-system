## 2026-03-08 - Standardizing Legacy Form Accessibility
**Learning:** Legacy PHP forms often lack programmatic label associations and rely solely on server-side validation, leading to poor screen reader support and unnecessary round-trips for simple errors.
**Action:** Implement semantic HTML5 validation (`required`, `type="email"`) and explicit `label` associations (`id`/`for`) to improve immediate feedback and accessibility without disrupting existing backend logic.
