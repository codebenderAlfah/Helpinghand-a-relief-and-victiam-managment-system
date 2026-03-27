## 2026-03-08 - [Legacy PHP/CSS Accessibility Patterns]
**Learning:** Legacy PHP forms often lack programmatic label associations and use non-standard CSS (like 'border-radius' as a shorthand for 'border' or '//' comments). These break both accessibility and browser parsing.
**Action:** Always verify label-input associations using 'id'/'for' and normalize CSS syntax to standard blocks and valid properties before adding modern UX features like ':focus-visible'.
