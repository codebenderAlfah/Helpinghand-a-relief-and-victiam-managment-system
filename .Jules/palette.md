## 2026-04-16 - [CSS Syntax Bug & Accessibility Pattern]
**Learning:** Legacy CSS in this project contains invalid shorthand syntax (e.g., 'border-radius: 5px solid gray;'). Additionally, the lack of keyboard focus indicators is a recurring accessibility issue across forms.
**Action:** Always audit 'border-radius' properties for invalid border values and implement ':focus-visible' using CadetBlue (#5F9EA0) to provide accessible, high-contrast focus rings that match the brand.
