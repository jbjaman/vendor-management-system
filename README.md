# Vendor Management System

The system provides vendor onboarding, vendor management, search and filtering by vendor type, status management, vendor details, and CRUD operations through a clean and responsive interface.

## Live Demo

https://vendor-management.rf.gd

## GitHub Repository

https://github.com/jbjaman/vendor-management-system

---

## Features

### Vendor Onboarding

Users can add new vendors with the following information:

- Name
- Email
- Phone
- Company Name
- Vendor Type
- Address
- Status

### Vendor Management

- View all vendors
- View individual vendor details
- Edit vendor information
- Delete vendors
- Active/Inactive status management

### Search & Filtering

- Search vendors by:
    - Name
    - Email
    - Company Name
- Filter by vendor type:
    - Product
    - Consultant
- Filter by status:
    - Active
    - Inactive

### Dashboard Information

The vendor listing page displays vendor statistics including:

- Total Vendors
- Product Vendors
- Consultant Vendors

### Pagination

Vendor records are paginated to keep the listing clean and manageable.

### Form Validation

Server-side validation is implemented for vendor creation and update operations, including unique email validation.

### Responsive UI

The interface is designed to work across:

- Desktop
- Laptop
- Tablet
- Mobile devices

---

## Technology Stack

### Backend

- PHP
- Laravel 12
- Laravel Eloquent ORM

### Frontend

- Blade Templates
- Tailwind CSS
- Vite
- Lucide Icons
- HTML5

### Database

- MySQL

### Development Tools

- Composer
- npm
- Git
- GitHub

---

## Project Structure

```text
vendor-management-system/
│
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── VendorController.php
│   │
│   └── Models/
│       └── Vendor.php
│
├── database/
│   └── migrations/
│       └── create_vendors_table.php
│
├── resources/
│   ├── css/
│   │   └── app.css
│   │
│   ├── js/
│   │   └── app.js
│   │
│   └── views/
│       └── vendors/
│           ├── index.blade.php
│           ├── create.blade.php
│           ├── edit.blade.php
│           └── show.blade.php
│
├── routes/
│   └── web.php
│
├── public/
│
├── composer.json
├── package.json
└── README.md
```
