## 2025-03-05 - Improving Accessibility and Form UX in Legacy PHP
**Learning:** Legacy PHP applications often lack semantic HTML and proper accessibility associations (labels missing `for` attributes, generic input types). Additionally, invalid CSS syntax (e.g., merging `border-radius` with `border` properties) can cause silent rendering failures.
**Action:** Always verify label-input associations, use specific HTML5 input types (email, tel) for better mobile UX, and audit CSS for property-specific syntax.

## 2025-03-05 - PHP 8.3.6 Database Verification
**Learning:** In PHP 8.3.6, `mysqli_connect` failures throw exceptions by default, which can break frontend rendering during local verification if the database is unavailable.
**Action:** Temporarily patch database connection variables to `null` for frontend-only verification, but ensure these are reverted before submission.
