---
name: testing-booku
description: Test the BookU PHP application end-to-end. Use when verifying error handling, API integration, or page rendering changes.
---

# Testing BookU

## Prerequisites

- PHP CLI with XML extension (`php-cli`, `php-xml`)
- No database or external services required for local testing
- The app relies on the Goodreads API (third-party) — API keys are hardcoded in the source

## Running the Local Dev Server

```bash
cd /path/to/BookU
php -S localhost:8080
```

Note: The app uses `.htaccess` for some URL rewrites (Apache), but the PHP built-in server works for testing most pages. `.htaccess` rewrite rules (e.g., blocking specific book IDs) won't apply with the built-in server.

## Key Pages to Test

| Page | URL | Purpose |
|------|-----|---------|
| Homepage | `/index.php` | Main landing page with book listings |
| Book Detail | `/detail.php?book={ISBN}` | Individual book page (fetches from Goodreads API) |
| Search | `/search.php?search={query}` | Search results (fetches from Goodreads API) |
| Contact | `/contact.php` | Static contact page |
| Disclaimer | `/disclaimer.php` | Static disclaimer page |
| DMCA | `/dmca.php` | Static DMCA policy page |

## Error Handling Test Paths

These are the key error scenarios to verify:

1. **Homepage without `book` param** (`/index.php`) — should render fully without PHP errors. The `$_GET['book']` access is guarded with `isset()`.

2. **Detail page with invalid book ID** (`/detail.php?book=INVALIDBOOK123`) — should show fallback defaults: "Unknown Title", "Unknown Author", "Unknown Publisher", "N/A pages", "Unknown" date, "Description not available."

3. **Detail page without `book` param** (`/detail.php`) — should show "Sorry! Cannot get data." with a "back to home" link.

4. **Search with XSS payload** (`/search.php?search=<script>alert(1)</script>`) — script tag should be rendered as escaped text, no alert dialog. Verify HTML source contains `&lt;script&gt;` entities.

5. **Search without param** (`/search.php`) — should show "Sorry! Cannot get data." with a "back to home" link.

## Error Logging

- Errors are logged to `error.log` in the project root (excluded from git via `.gitignore`)
- `error_reporting(E_ALL)` is enabled but `display_errors` is off — errors are logged, not shown to users
- `error.log` is only created when `simplexml_load_file()` returns `false` (API unreachable or invalid XML). For invalid book IDs, the Goodreads API may still return valid XML with an error message, so the fallback defaults in `gambar.php` handle that case via `?:` operators.

## Goodreads API Behavior

- The API returns valid XML (`<error>Page not found</error>`) for invalid ISBNs — `simplexml_load_file()` succeeds but fields are empty
- The `?:` fallback defaults in `gambar.php` handle empty fields gracefully
- API keys are hardcoded in `gambar.php` (book lookup) and `search.php`/`detail.php` (search) — if these expire, all API-dependent pages will show fallback defaults

## Lint Check

```bash
php -l <filename>.php
```

Run on all `.php` files to verify no syntax errors.

## Devin Secrets Needed

None — no authentication or secrets are required for local testing.
