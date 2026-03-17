## 2026-03-08 - [Accessibility and Semantic HTML in Legacy PHP]
**Learning:** Legacy PHP applications often omit critical semantic metadata (DOCTYPE, lang, charset, viewport) and fail to associate labels with inputs using 'for'/'id' pairs. These omissions significantly degrade screen reader performance and touch-target usability. Additionally, improper CSS syntax (like unitless values or invalid shorthand combinations) can silently break styling in modern browsers.
**Action:** Always verify the presence of a proper HTML5 boilerplate when touching legacy pages. Ensure every form input has a programmatically associated label and relevant 'autocomplete' attributes to support modern password managers and autofill features.

## 2026-03-08 - [Keyboard Navigation and Focus States]
**Learning:** Default browser focus rings are often inconsistent or suppressed by custom styles in older projects. Implementing a global ':focus-visible' style provides a non-intrusive but high-visibility indicator for keyboard users without affecting mouse-click aesthetics.
**Action:** Include a standardized focus-visible ring (e.g., 2px solid with offset) in the base stylesheet to improve WCAG compliance across the entire application.
