## 2026-03-08 - [Form Accessibility and CSS Syntax]
**Learning:** Legacy PHP forms in this project often lack basic accessibility markers (`id`/`for` association) and modern HTML5 validation. Additionally, some CSS files contain invalid property syntax like `border-radius: 5px solid gray;`, which browsers may ignore or parse inconsistently.
**Action:** Always audit form inputs for programmatic labels and ensure CSS border/radius properties are correctly separated into `border` and `border-radius`. Use `:focus-visible` to improve keyboard navigation without affecting pointer-based UX.
