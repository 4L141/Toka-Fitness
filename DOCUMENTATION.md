# Toka-Fitness Web Application Documentation

## Architecture

The Toka-Fitness web application is a full-stack application with a PHP frontend, a C# backend, and a MySQL database.

### Frontend

The frontend is built with PHP and is located in the `php_frontend` directory. It is responsible for rendering the user interface and handling user interactions.

### Backend

The backend is a C# console application located in the `console_backend` directory. It is responsible for the application's business logic, such as user registration and authentication.

### Database

The database is a MySQL database. The `setup_database` directory contains a Python script for initializing the database.

### Communication

The PHP frontend communicates with the C# backend by writing JSON files to the server's filesystem. The backend, a compiled C# executable, is then called to read these files, process the requests, and write the responses back to the filesystem, where they are picked up by the frontend.

## Setup

1.  **Database:** Run the `setup_database.py` script in the `setup_database/setup_database` directory to create and initialize the MySQL database.
2.  **Backend:** Build the C# console application in the `console_backend` directory. This will create a `console_backend.exe` file in the `console_backend/console_backend/bin/Debug` directory.
3.  **Frontend:** The PHP frontend is ready to be served by a web server such as Apache.

## Usage

1.  **Sign Up:** Create a new user account by filling out the sign-up form.
2.  **Log In:** Log in to your account with your email and password.
3.  **Browse Content:** Once you are logged in, you can browse the application's content.
4.  **Log Out:** Log out of your account by clicking the "Logout" button in the header.
