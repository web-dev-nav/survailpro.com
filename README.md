# SurVail Protection & Investigation Services

Marketing website and admin dashboard for SurVail. Built on Laravel with Blade views and a lightweight admin area for managing partners, contact details, and site settings.

## Tech Stack
- Laravel (PHP)
- Blade templates + Tailwind (via CDN)
- MySQL (or compatible) database

## Project Structure
- `app/Http/Controllers`: Page, admin, and form controllers.
- `app/Models`: Eloquent models like `ContactSetting` and `Partner`.
- `app/Providers/ViewServiceProvider.php`: Shares `globalContact` across views.
- `resources/views`: Public pages and admin UI (Blade).
- `routes/web.php`: Public and admin routes.
- `database/migrations`: Schema for partners and contact settings.
- `public/assets`: Images and static assets.

## Key Features
- Public marketing pages (home, about, services, video monitoring, contact, application).
- Admin panel for managing partner logos and contact details.
- Global contact data shared across templates for consistent header/footer info.
- GA4 Measurement ID managed from Admin -> Site Settings.

## Admin Access
Set admin credentials in `.env`:
```
ADMIN_USERNAME=your_admin_username
ADMIN_PASSWORD=your_admin_password
```
Admin routes are under `/admin` with session-based authentication.

## Analytics
GA4 tag is injected from the Measurement ID stored in Admin -> Site Settings. Leave it blank to disable tracking.

## Local Setup
```
composer install
npm install
npm run dev
php artisan migrate
php artisan serve
```

## Notes
- Contact settings live in `contact_settings` and are edited at `/admin/contact-settings`.
- Site settings live in the same table and are edited at `/admin/settings`.
