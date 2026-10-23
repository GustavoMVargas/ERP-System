# ERP MVP — Inventory & Business Management System

![Project Status](https://img.shields.io/badge/status-in%20development-orange)
![PHP](https://img.shields.io/badge/PHP-8.x-blue)
![MySQL](https://img.shields.io/badge/MySQL-8.x-blue)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5-purple)
![License](https://img.shields.io/badge/license-MIT-green)

## About the Project

ERP MVP is a web-based Enterprise Resource Planning system designed to manage business operations such as inventory, products, suppliers, customers, purchases, and sales.

The project is being developed as a complete ERP solution using a classic and reliable web stack:

- Frontend: HTML, CSS, JavaScript, Bootstrap
- Backend: PHP
- Database: MySQL

The main objective is to create a scalable ERP foundation following professional software architecture practices, database normalization principles, and real-world business workflows.

---

# Features

## Current Features

### Database Architecture

- Relational MySQL database
- Foreign key relationships
- Data integrity constraints
- Inventory movement history
- Role-based user structure

Implemented modules:

- Users
- Roles
- Categories
- Products
- Customers
- Suppliers
- Sales structure
- Purchase structure
- Inventory ledger

---

## Planned Features

### Authentication

- User login
- Password hashing
- Session management
- Role permissions

### Product Management

- Product registration
- Product editing
- Product deactivation
- SKU management
- Barcode support
- Category organization

### Inventory

- Stock entry
- Stock output
- Inventory adjustments
- Stock history
- Minimum stock alerts

### Sales

- Customer sales orders
- Sale confirmation workflow
- Automatic stock reduction
- Sales reports

### Purchases

- Supplier orders
- Receiving workflow
- Automatic stock increase

### Reports

- Inventory reports
- Sales reports
- Purchase reports
- Dashboard indicators

---

# System Architecture

The project follows a simple MVC-inspired architecture:

```
ERP MVP

├── app
│   ├── Controllers
│   ├── Models
│   ├── Services
│   └── Core
│
├── config
│   └── database.php
│
├── database
│   └── schema.sql
│
├── public
│   ├── index.php
│   └── assets
│
├── routes
│
└── views
```

## Architecture Flow

```
User Browser

      |
      v

Public Entry Point

      |
      v

Router

      |
      v

Controller

      |
      v

Model / Service Layer

      |
      v

MySQL Database
```

---

# Database Design

The ERP uses a relational database designed around business entities and their relationships.

Main entities:

```
Users
 |
Roles


Products
 |
Categories


Sales
 |
Sale Items
 |
Products


Purchases
 |
Purchase Items
 |
Products


Stock Movements
 |
Products
```

## Inventory Concept

The system does not directly store the current stock quantity inside the product table.

Instead, inventory is calculated from movement history.

Example:

```
Purchase:
+100 units

Sale:
-20 units

Adjustment:
-5 units


Current Stock:

100 - 20 - 5 = 75 units
```

This approach creates a reliable audit trail and follows ERP inventory management principles.

---

# Technologies

## Frontend

| Technology | Purpose |
|-|-|
| HTML5 | Application structure |
| CSS3 | Styling |
| JavaScript | Client-side interactions |
| Bootstrap | Responsive interface |

---

## Backend

| Technology | Purpose |
|-|-|
| PHP | Business logic |
| PDO | Database communication |
| MySQL | Data persistence |

---

# Requirements

To run this project locally:

- PHP 8.x
- MySQL 8.x
- Web browser
- Git

Recommended:

- MySQL Workbench
- Visual Studio Code

---

# Installation

## 1. Clone the repository

```bash
git clone https://github.com/YOUR_USERNAME/erp-mvp.git
```

Enter the project folder:

```bash
cd erp-mvp
```

---

## 2. Create the Database

Open MySQL and execute:

```
database/schema.sql
```

This will create:

```
erp_mvp
```

database with all required tables.

---

## 3. Configure Database Connection

Edit:

```
config/database.php
```

Configure your MySQL credentials:

```php
$host = "127.0.0.1";
$dbname = "erp_mvp";
$username = "root";
$password = "";
```

---

## 4. Start the PHP Server

Run:

```bash
php -S 127.0.0.1:8000 -t public
```

Access:

```
http://127.0.0.1:8000
```

---

# Development Roadmap

## Phase 1 — Foundation

[x] Project structure

[x] Database architecture

[x] MySQL schema

[x] PHP database connection


## Phase 2 — Core System

[ ] Router

[ ] MVC structure

[ ] Error handling

[ ] Configuration system


## Phase 3 — Authentication

[ ] Login

[ ] Sessions

[ ] Permissions


## Phase 4 — ERP Modules

[ ] Products

[ ] Categories

[ ] Inventory

[ ] Customers

[ ] Suppliers

[ ] Sales

[ ] Purchases

[ ] Reports


## Phase 5 — Deployment

[ ] Production environment

[ ] Database migration system

[ ] Security improvements

[ ] Performance optimization

---

# Development Principles

This project follows:

- Clean and maintainable code
- Database normalization
- Separation of responsibilities
- Secure database access
- Scalable architecture
- Real business workflow modeling

---

# Future Improvements

Possible future implementations:

- REST API
- Mobile application
- Barcode scanner integration
- Financial module
- Dashboard analytics
- Multi-company support
- Cloud deployment
- Automated backups

---

# Author

Developed by **Gustavo Vargas**

Software Developer focused on:

- ERP Systems
- Business Automation
- Data Management
- Process Optimization

---

# License

This project is licensed under the MIT License.