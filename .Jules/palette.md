## 2026-04-16 - [Accessibility & Autofill]
**Learning:** Legacy PHP forms in this repository frequently lack programmatic label-input associations and modern HTML5 attributes like `autocomplete` and `type="email"`. This prevents screen readers from correctly identifying fields and stops browser autofill/password managers from functioning effectively.
**Action:** When working with forms in this project, always ensure every `label` has a `for` attribute matching the input's `id`, and provide semantic `autocomplete` hints to improve user efficiency and accessibility.
