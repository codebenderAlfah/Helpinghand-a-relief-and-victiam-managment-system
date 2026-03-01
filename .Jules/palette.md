## 2024-05-15 - [Invalid CSS Shorthand Bug]
**Learning:** Legacy code in this project contains invalid CSS syntax, such as unitless values or invalid property combinations (e.g., 'border-radius: 5px solid gray;' instead of separate 'border' and 'border-radius' properties). This can cause essential UI elements like input borders to be completely invisible in modern browsers.
**Action:** Always verify the syntax of shorthand CSS properties in legacy files, as they may be using non-standard or deprecated combinations that break the visual experience.

## 2024-05-15 - [Semantic Form Improvements]
**Learning:** Many forms in this application lack 'id' and 'for' associations between labels and inputs, which hinders screen reader accessibility and makes clicking labels ineffective for focusing inputs.
**Action:** Consistently add 'id' attributes to inputs and matching 'for' attributes to labels. Additionally, utilize semantic types like 'type="email"' and the 'required' attribute to leverage native browser validation and mobile-optimized keyboards.
