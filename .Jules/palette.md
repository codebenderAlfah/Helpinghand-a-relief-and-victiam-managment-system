## 2026-03-08 - [Invalid CSS Property Combinations]
**Learning:** Found that legacy code in this project used invalid CSS property combinations like `border-radius: 5px solid gray;` which combined `border` and `border-radius` properties into one, causing the border not to render at all in modern browsers.
**Action:** Always verify that `border` and `border-radius` are specified as separate properties when improving form element styles.
