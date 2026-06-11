# 🛒 E‑Commerce Platform – Advanced Web Programming Project

**Course:** ESOF302 – Advanced Web Programming (Spring 2026)

**Instructor:** Assoc.Prof.Dr. Yuksel Celik

**Student:** Nikita Kuznetsov 20232022044 (GitHub: @NEKuS73)

**Repository:** github.com/NEKuS73/marketplace

---

## 📌 Project Overview

Full‑stack e‑commerce application with customer storefront and administrative panel

---

## ✅ Implemented Features

### Customer Storefront

- Product catalog with pagination, search, and category filter
- Product detail page
- Shopping cart (session‑based, add/remove/update quantity)
- Checkout with address form and order placement (payment simulation)
- User authentication (registration, login, profile)
- Order history with status tracking

### Admin Panel

- Dashboard with basic statistics (orders count, revenue)
- Product management (CRUD, image upload)
- Category management (CRUD)
- Order management (view all orders, change status)
- User management (view users, assign admin role)

### Technical Requirements

- Laravel 11 MVC with Blade templates
- MySQL database + Eloquent ORM (migrations, relationships)
- React 18 components integrated via Vite (cart, product filter)
- REST API secured with Laravel Sanctum
- Role‑based access control (customer / admin)
- Email notifications for order confirmation
- Deployed on production server (VPS)

---

## 🧰 Tech Stack (as per syllabus)

| Area            | Technology                          |
| --------------- | ----------------------------------- |
| Backend         | PHP 8.5, Laravel 11, Composer       |
| Frontend        | Blade, React 18, Tailwind CSS, Vite |
| Database        | MySQL, Eloquent ORM                 |
| Auth & API      | Laravel Breeze, Laravel Sanctum     |
| Version control | Git / GitHub (regular commits)      |
| Server          | XAMPP (local), VPS (production)     |

---

## 🚀 Quick Start (for evaluation)

```bash
git clone https://github.com/NEKuS73/marketplace.git
cd marketplace
composer install
npm install && npm run build
cp .env.example .env
# configure database in .env (MySQL)
php artisan migrate --seed
php artisan storage:link
php artisan serve
```
