# Template: Laravel + Livewire

Starter repo for **Laravel + Livewire projects** where the product is dynamic, operational and workflow-heavy — but still does not need the overhead of a separate SPA frontend stack.

## What this template is for

Use this when you are building:
- admin panels
- member systems
- CRUD-heavy tools
- operations dashboards
- internal systems
- dynamic business UI with server-backed interactivity

## What this template includes

- route baseline
- Blade app shell with Livewire hooks
- starter home page
- starter dashboard page
- `app/Livewire/` directory
- `resources/views/livewire/` directory
- sane starting structure for public pages vs app/admin UI

## Tech stack

- Laravel
- Livewire
- Blade
- server-backed dynamic UI

## Project structure

```text
app/
  Http/
  Livewire/
resources/
  views/
    layouts/
    partials/
    pages/
    livewire/
routes/
public/
```

## Pages included

### `/`
- positioning page for the system/app
- CTA into dashboard area

### `/dashboard`
- starter dashboard placeholder
- intended to become the first real operational screen

## Important note

Like the Blade template, this repository is prepared as a **real starter structure**, but it is **not composer-installed from this machine**, because PHP / Composer were not available in the environment used to prepare it.

So this repo gives you:
- a strong starting structure
- Livewire-aware layout setup
- useful initial files

But you still need to bootstrap the actual Laravel project on a PHP-capable machine.

## Recommended next step

On a machine with PHP + Composer:

```bash
composer create-project laravel/laravel .
composer require livewire/livewire
```

Then adapt this template structure into the real project baseline.

## How to use this template

Before first real project commit, define:
- auth approach
- roles / permissions strategy
- app vs public boundary
- deployment target
- environment setup
- initial Livewire component map

Then replace:
- brand placeholders
- page copy
- demo dashboard text
- metadata and SEO defaults

## SEO baseline

This template includes a simple layout shell for public-page metadata.

For real projects, add:
- title / description handling
- Open Graph metadata where relevant
- canonical handling
- robots.txt and sitemap for public sections

## When to use this instead of React

Use this when the project needs dynamic business UI, but you still want:
- Laravel-first architecture
- simpler operational complexity
- server-backed interactivity
- less frontend framework overhead

## Opinionated rule

If the system is backend-heavy and CRUD-heavy, Livewire is often the smarter move than dragging a full SPA framework into the problem.

---

**Template type:** Laravel + Livewire app starter  
**Made for:** admin tools, dashboards, member systems and workflow-heavy products
