# School Management System

![School Logo](http://school-manage-d1fd337d5df2.herokuapp.com/assets/images/student.png)

http://school-manage-d1fd337d5df2.herokuapp.com/

## Table of Contents

-   [Introduction](#introduction)
-   [Features](#features)
-   [Technologies Used](#technologies-used)
-   [Getting Started](#getting-started)
    -   [Prerequisites](#prerequisites)
    -   [Installation](#installation)
-   [Usage](#usage)
-   [Contributing](#contributing)
-   [License](#license)

## Introduction

The School Management System is a robust web application built using Laravel, Livewire, Bootstrap, and MySQL. This system is designed to streamline administrative tasks in educational institutions, making it easier to manage student records, staff information, attendance, and more efficiently.

## Features

### Multilingual Support

The School Management System supports two languages, Arabic and English, allowing users to interact with the system in their preferred language.

### User Roles

The system caters to four distinct user roles, each with its own dashboard and permissions:

-   **Admin Dashboard:** The admin user has access to various features, including managing grades, classes, sections, students, teachers, parents, user accounts, attendance, subjects, quizzes, the library, online classes, system settings, and user management.

-   **Parent Dashboard:** Parents have a dashboard with features tailored to monitor their children's progress, including viewing grades, attendance records, teacher communication, and important notifications.

-   **Teacher Dashboard:** Teachers can manage their classes, record attendance, enter grades, and communicate with parents. They also have access to resources such as subjects, quizzes, and the library.

-   **Student Dashboard:** Students have access to their individual dashboards, allowing them to view their grades, attendance, assignments, and announcements.

### Grade Management

-   Define grading systems and criteria.
-   Assign and calculate grades for assignments, exams, and projects.
-   Generate comprehensive grade reports for students and parents.

### Class and Section Management

-   Create, edit, and manage classes and sections.
-   Assign teachers, subjects, and students to specific classes.
-   Monitor class and section capacities.

### Attendance Tracking

-   Record and track student and teacher attendance.
-   Generate attendance reports for individual students, classes, and time periods.
-   Send automated attendance notifications to parents.

### Library Management

-   Catalog and manage library resources, including books, eBooks, and multimedia.
-   Allow students and teachers to check out and return items.
-   Send overdue reminders and manage fines.

### Online Classes

-   Facilitate virtual classrooms with video conferencing and screen sharing.
-   Schedule and manage online lectures and assignments.
-   Record and archive online classes for future reference.

### Subjects and Curriculum Management

-   Define and manage academic subjects and curricula.
-   Map subjects to classes and grade levels.
-   Track curriculum coverage and alignment.

### Quiz and Exam Creation

-   Create and manage quizzes and exams with various question types.
-   Schedule assessments, assign them to classes, and track results.
-   Automatically grade and provide feedback.

### Financial Management

-   Track school finances, including tuition fees, donations, and expenses.
-   Generate financial statements, invoices, and receipts.
-   Notify parents and staff of payment due dates.

### Student Performance Analytics

-   Provide detailed insights into student performance, attendance trends, and academic progress.
-   Utilize data analytics and visualizations to inform decision-making.

### System Settings and Customization

-   Customize system settings, including school information, logos, and notification preferences.
-   Configure role-based access controls and permissions.
-   Integrate with external systems and tools through APIs.

## Technologies Used

-   **Laravel:** A powerful PHP framework for building robust web applications.
-   **Livewire:** A full-stack framework for Laravel that facilitates real-time, dynamic user interfaces.
-   **Bootstrap:** A popular front-end framework for responsive web design.
-   **MySQL:** A relational database management system for storing and managing data.

## Getting Started

### Prerequisites

Before you begin, ensure you have the following prerequisites:

-   PHP >= 7.4
-   Composer (for Laravel)
-   Node.js and NPM (for Bootstrap)
-   MySQL >= 5.7

### Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/khaleddoosama/school-management-system.git
    ```

````

2. Navigate to the project directory:

    ```bash
    cd school-management-system
    ```

3. Install PHP dependencies using Composer:

    ```bash
    composer install
    ```

4. Install JavaScript dependencies using NPM (for Bootstrap):

    ```bash
    npm install && npm run dev
    ```

5. Copy the `.env.example` file to `.env` and configure your database settings.

6. Generate an application key:

    ```bash
    php artisan key:generate
    ```

7. Run database migrations and seed the database:

    ```bash
    php artisan migrate --seed
    ```

8. Start the development server:

    ```bash
    php artisan serve
    ```

9. Access the application in your web browser at `http://localhost:8000`.

## Usage

-   **Language Selection:** When a user first accesses the system, they can choose their preferred language (Arabic or English) from the language selection menu.

-   **User Login:** Users will log in to the system based on their assigned role (Admin, Parent, Teacher, or Student).

-   **Dashboard Navigation:** After logging in, users will be directed to their respective dashboards, each displaying relevant information and actions according to their role.

### Admin User (Sidebar Navigation)

The Admin user can navigate through the sidebar menu to access various functionalities, such as:

-   Managing Grades
-   Managing Classes
-   Handling Sections
-   Managing Students
-   Managing Teachers
-   Managing Parents
-   User Account Management
-   Recording Attendance
-   Managing Subjects
-   Creating and Managing Quizzes
-   Library Resources
-   Online Classes
-   System Settings
-   User Management

### Parent, Teacher, and Student Dashboards

Parents, teachers, and students can access their respective dashboards, which include features relevant to their roles, such as viewing grades, attendance, teacher communication, and other pertinent information.

Users can easily switch between languages as needed through the language selection menu.


## Contributing

Contributions are welcome! Please follow these steps:

1. Fork the project.
2. Create your feature branch (`git checkout -b feature/YourFeature`).
3. Commit your changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature/YourFeature`).
5. Open a pull request.

## License

Distributed under the MIT License. See `LICENSE` for more information.
