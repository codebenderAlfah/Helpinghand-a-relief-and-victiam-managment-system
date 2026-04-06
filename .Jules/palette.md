## 2026-03-05 - [Visual Bug in Legacy CSS]
**Learning:** Legacy CSS often contains invalid shorthand properties (e.g., `border-radius: 5px solid gray;`) that browsers ignore, leading to "missing" UI elements like input borders. Additionally, JS-style comments (`//`) in CSS can break parsing in some environments.
**Action:** Always verify CSS shorthand properties against MDN and use standard block comments (`/* ... */`) to ensure cross-browser compatibility. Apply `:focus-visible` to interactive elements to maintain accessibility without cluttering the UI for pointer users.
