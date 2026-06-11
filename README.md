# 🛒 E‑Commerce Platform – Advanced Web Programming Project

**Course:** ESOF302 – Advanced Web Programming (Spring 2026)

**Instructor:** Assoc.Prof.Dr. Yuksel Celik

**Student:** Nikita Kuznetsov 20232022044 (GitHub: @NEKuS73)

**Repository:** github.com/NEKuS73/marketplace

---

## 📌 Project Overview

Full‑stack e‑commerce application with customer storefront and administrative panel.
Built with Laravel 11, Blade, MySQL, and Tailwind CSS.

---

## ✅ Implemented Features

### Customer Storefront

- Product catalog (list view, pagination)
- Product detail page
- Shopping cart (session‑based, add/remove/update quantity)
- Checkout with address and phone form
- User authentication (registration, login, profile)
- Order history with status tracking (for logged‑in users)

### Admin Panel

- Product management (CRUD)
- Category management (CRUD)
- Order management (view all orders, change status)
- Role‑based access control (admin middleware)

### Technical Requirements

- Laravel 11 MVC with Blade templates
- MySQL + Eloquent ORM (migrations, relationships)
- Session‑based cart
- Tailwind CSS for styling
- Git / GitHub with commit history from May 24

---

## 🧰 Tech Stack

| Area            | Technology             |
| --------------- | ---------------------- |
| Backend         | PHP, Laravel, Composer |
| Frontend        | Blade, Tailwind CSS    |
| Database        | MySQL, Eloquent ORM    |
| Auth            | Laravel Breeze         |
| Version control | Git / GitHub           |
| Server          | XAMPP (local)          |

---

## 🚀 Quick Start

```bash
git clone https://github.com/NEKuS73/marketplace.git
cd marketplace
composer install
npm install (cmd c/ npm install)
npm run build (cmd c/ npm run build)
cp .env.example .env
# set database credentials in .env (MySQL)
php artisan migrate --seed
php artisan serve
```
