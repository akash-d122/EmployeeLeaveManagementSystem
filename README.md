# Employee Leave Management System

## Project Overview

This project is an Employee Leave Management System built using PHP.  It allows for the management of employee leave requests, including adding employees, leave types, tracking leave history (approved, declined, pending), and managing employee profiles.  The system features a dedicated admin panel for managing all aspects of the leave process and a separate employee portal for submitting and viewing leave requests.

## Features

* **Admin Panel:**
    * Add and Update Employees
    * Add and Edit Leave Types
    * View Leave History (Approved, Declined, Pending)
    * Manage Departments
    * Detailed Employee Leave Information
    * Dashboard with Counters (Employees, Departments, Leave Types, Pending/Approved/Declined Requests)
* **Employee Portal:**
    * Submit Leave Requests
    * View Leave History
    * Manage Employee Profile


## Installation

This project requires a web server (like Apache or Nginx) with PHP enabled and a MySQL database.  No specific package managers or environment managers were detected within the project directory.

**Steps:**

1. **Database Setup:** Create a MySQL database and import the necessary database schema (not included in this repository - you will need to create this yourself).
2. **Configuration:** Update `includes/dbconn.php` with your database credentials (hostname, username, password, database name).
3. **Upload:** Upload the entire `EmployeeLeaveManagement` directory to your web server's document root.
4. **Access:** Access the application through your web browser using the appropriate URL.


## Usage

**Admin Panel:** Access the admin panel by navigating to `http://your-server-address/EmployeeLeaveManagement/admin/index.php` after completing the installation steps.

**Employee Portal:** The employee portal access point needs to be defined within the application logic (it is not directly apparent from the file structure).  You will need to determine the correct URL based on the application's internal routing mechanisms.

**Note:** This README assumes a basic understanding of PHP, web server configuration, and MySQL database management.  The application's specific functionality and user interface depend on the PHP code within the individual files and are not directly described in this README file due to the lack of source code analysis.
