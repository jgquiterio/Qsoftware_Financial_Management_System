\# Qsoftware Financial Management System



!\[PHP](https://img.shields.io/badge/PHP-8.2-777BB4?logo=php\&logoColor=white)

!\[Laravel](https://img.shields.io/badge/Laravel-12-FF2D20?logo=laravel\&logoColor=white)

!\[SQLite](https://img.shields.io/badge/Database-SQLite-003B57?logo=sqlite\&logoColor=white)

!\[Bootstrap](https://img.shields.io/badge/Bootstrap-5-7952B3?logo=bootstrap\&logoColor=white)

!\[Status](https://img.shields.io/badge/Status-In%20Development-yellow)



A simple and responsive financial management system built with Laravel 12, PHP 8.2, SQLite, Blade and Bootstrap 5.



The application provides basic tools for managing personal finances, including income and expense registration, transaction management and a financial dashboard.



\## Overview



The purpose of this project is to develop a lightweight financial management application with a clean interface and straightforward functionality.



The system allows users to record financial transactions and monitor their financial balance through a centralized dashboard.



\## Features



\### Financial Dashboard

\- Total income overview.

\- Total expenses overview.

\- Current balance calculation.

\- Updated financial indicators.



\### Income Management

\- Register income transactions.

\- View income records.

\- Edit income information.

\- Delete income records.



\### Expense Management

\- Register expense transactions.

\- View expense records.

\- Edit expense information.

\- Delete expense records.



\### Transaction Management

\- List financial transactions.

\- Display transaction descriptions.

\- Display transaction values.

\- Display transaction dates and categories.



\## Business Rules



\- Every transaction must be classified as income or expense.

\- Every transaction must contain a description, amount, date and category.

\- Transaction amounts must be greater than zero.

\- Income increases the financial balance.

\- Expenses decrease the financial balance.

\- The current balance is calculated by subtracting total expenses from total income.

\- Dashboard indicators must reflect transaction changes.



\## Technologies



| Technology | Purpose |

|---|---|

| PHP 8.2 | Backend programming |

| Laravel 12 | Application framework |

| SQLite | Database |

| Eloquent ORM | Database operations |

| Blade | Server-side templates |

| Bootstrap 5 | Responsive interface |

| HTML5 | Page structure |

| CSS3 | Styling |

| JavaScript | Client-side interactions |

| Git | Version control |

| GitHub | Source code hosting |



\## System Requirements



\- PHP 8.2 or higher

\- Composer

\- SQLite

\- Node.js and NPM

\- Laravel 12 compatible environment



\## Installation



Clone the repository:



```bash

git clone https://github.com/jgquiterio/qsoftware-financial-management-system.git

```



Navigate to the project directory:



```bash

cd qsoftware-financial-management-system

```



Install dependencies:



```bash

composer install

```



Create the environment file:



```bash

cp .env.example .env

```



Generate the application key:



```bash

php artisan key:generate

```



Configure the SQLite database in the `.env` file:



```env

DB\_CONNECTION=sqlite

```



Create the SQLite database file:



```bash

touch database/database.sqlite

```



Run database migrations:



```bash

php artisan migrate

```



Install frontend dependencies:



```bash

npm install

```



Build frontend assets:



```bash

npm run build

```



\## Running the Application



Start the Laravel development server:



```bash

php artisan serve

```



Access the application:



```text

http://127.0.0.1:8000

```



\## Testing



Run the automated tests:



```bash

php artisan test

```



Testing will cover the main financial management functionalities, validation rules and business logic.



\## Project Structure



```text

qsoftware-financial-management-system/

│

├── app/

│   ├── Http/

│   └── Models/

│

├── database/

│   ├── migrations/

│   └── database.sqlite

│

├── resources/

│   └── views/

│

├── routes/

│   └── web.php

│

├── tests/

│

├── public/

├── escopo.txt

├── requisitos.txt

├── entregas.txt

└── README.md

```



\## Project Status



Currently under development.



\## Author



\*\*Qsoftware\*\*



Software Development | Web Applications | Backend \& Full-Stack Development



GitHub: https://github.com/jgquiterio



Repository: https://github.com/jgquiterio/qsoftware-financial-management-system

