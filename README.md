# Student Management System

A simple Student Management System built using PHP, MySQL, HTML, and XAMPP. The application allows users to register students through a web form, save records in a MySQL database, and display all saved records in an HTML table.

---

## Features

- Add new student records
- Store data in MySQL database
- View saved student records
- Simple and easy-to-understand project structure
- Runs locally using XAMPP

---

## Technologies Used

- PHP
- MySQL
- HTML
- XAMPP
- phpMyAdmin
- Git & GitHub

---

## Project Structure

```text
student_system
│
├── index.php
├── db.php
├── save.php
├── view.php
└── README.md
```

---

## How the System Works

```text
User
 │
 ▼
index.php (Student Registration Form)
 │
 ▼
save.php (Processes Form Data)
 │
 ▼
db.php (Database Connection)
 │
 ▼
MySQL Database (school_db)
 │
 ▼
students Table
 │
 ▼
view.php (Displays Saved Records)
 HOW TO ADD THE STUDENTS
go to http://localhost/student_system/view.php
