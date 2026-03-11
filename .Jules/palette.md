## 2026-03-08 - Standardizing Accessibility in Legacy PHP Forms
**Learning:** Legacy PHP forms in this project often use floating labels or text that visually precedes inputs without programmatic `id`/`for` associations. This breaks screen reader functionality and limits hit areas for touch users.
**Action:** Always implement explicit `id` on inputs and `for` on labels. Additionally, ensure modern HTML5 boilerplate (doctype, lang, charset) is present as it's often missing in older PHP includes.
