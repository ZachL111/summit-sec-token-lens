# Summit Sec Token Lens Walkthrough

I use this file as a small checklist before changing the PHP implementation.

| Case | Focus | Score | Lane |
| --- | --- | ---: | --- |
| baseline | trust boundary | 190 | ship |
| stress | claim drift | 131 | watch |
| edge | replay exposure | 157 | ship |
| recovery | policy width | 185 | ship |
| stale | trust boundary | 170 | ship |

Start with `baseline` and `stress`. They create the widest contrast in this repository's fixture set, which makes them better review anchors than the middle cases.

The useful comparison is `trust boundary` against `claim drift`, not the raw score alone.
