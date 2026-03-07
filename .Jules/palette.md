## 2024-05-15 - Form Accessibility and Navigation
**Learning:** Legacy PHP applications often use absolute URLs for navigation and lack basic accessibility features like label-input associations and proper input types.
**Action:** Use relative paths for internal links to ensure portability across different environments (e.g., dev vs. prod). Always use `id` and `for` attributes to programmatically associate labels with their inputs for screen readers and better click targets.
