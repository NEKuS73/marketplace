# 🛒 E‑Commerce Platform – Advanced Web Programming Project

**Course:** ESOF302 – Advanced Web Programming (Spring 2026)

**Instructor:** Assoc.Prof.Dr. Yuksel Celik

**Student:** Nikita Kuznetsov 20232022044 (GitHub: @NEKuS73)

**Repository:** (https://github.com/NEKuS73/marketplace)

---

## 📌 Project Overview

E‑commerce application built with Laravel, featuring a customer-facing storefront and a complete administrative panel for management.

---

## ✅ Implemented Features

### Customer Storefront

- **Product catalog** with pagination (list view)
- **Product detail page** for each item
- **Shopping cart** (session‑based, add/remove/update quantity)
- **Checkout** with address and phone form
- **User authentication** (registration, login, profile)
- **Order history** with status tracking for logged‑in users

### Admin Panel

- **Product management** (CRUD operations)
- **Category management** (CRUD operations)
- **Order management** (view all orders, change order status)
- **Role-based access control** (admin middleware)

### Technical Stack

- **Backend:** PHP 8.5, Laravel 13 MVC, Composer
- **Frontend:** Blade templates, Tailwind CSS
- **Database:** MySQL + Eloquent ORM (migrations, relationships)
- **Authentication:** Laravel Breeze
- **Version control:** Git / GitHub

---

## 🚀 Quick Start (for evaluation)

```bash
git clone https://github.com/NEKuS73/marketplace.git
cd marketplace
composer install
npm install (cmd c/ npm install)
npm run build (cmd c/ npm run build)
cp .env.example .env
# configure your database credentials in .env (MySQL)
php artisan migrate --seed
php artisan serve
```
