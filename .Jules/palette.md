## 2024-05-15 - [Form Accessibility and Semantic HTML]
**Learning:** Legacy PHP forms often lack proper label-input associations and use generic `type="text"` for specialized fields like emails. This prevents screen readers from correctly identifying inputs and degrades the mobile experience by not triggering optimized keyboards.
**Action:** Always link labels to inputs via unique `id` and `for` attributes. Use specific HTML5 types like `type="email"` and leverage the native `required` attribute for immediate, client-side feedback without extra dependencies.

## 2024-05-15 - [CSS Syntax Pitfalls]
**Learning:** Developers sometimes conflate `border` and `border-radius` properties (e.g., `border-radius: 1px solid red;`). This is invalid CSS and causes the intended style to be ignored by the browser.
**Action:** Keep border styles (`border: 1px solid gray;`) and rounding (`border-radius: 5px;`) separate. Always verify computed styles in the browser to ensure CSS properties are being applied as expected.
