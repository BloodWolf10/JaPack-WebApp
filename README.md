# JaPack Database Setup and Application Guide

## Overview
This document outlines the prerequisites and setup instructions for running the JaPack application. The application requires a database setup to function correctly.

### Company Description
JaPack is a courier service company specializing in the transportation of a wide range of items both within Jamaica and internationally. The company offers customers the ability to track their packages in real time, from the point of collection to final delivery, ensuring transparency and peace of mind throughout the process.

### Mission Statement
JaPack's mission is to deliver a safe, reliable, and stress-free solution for transporting items both within Jamaica and internationally, offering customers peace of mind every step of the way.

### Vision Statement
Our vision is to be the premier provider of seamless, door-to-door delivery solutions, setting the standard for reliability and efficiency when guaranteeing customer satisfaction in the courier industry.

### Technology Used
- PHP
- HTML
- CSS

## Instructions

### Step 1: Database Setup
1. Ensure you have a compatible database management system (e.g., MySQL) installed and running on your system.
2. Open your database management tool (e.g., MySQL Workbench, phpMyAdmin, or a terminal with MySQL client).
3. Import the provided SQL file:
   - Locate the file named `japackdb - stock.sql`.
   - Use the tool to execute the SQL script. This will create the necessary database schema and populate it with the required data.

### Step 2: Application Setup
1. Ensure you have a local server environment set up (e.g., XAMPP, WAMP, or similar).
2. Place the application files in the server's document root (e.g., `htdocs` for XAMPP).
3. Update the database configuration file in the application (if necessary) to match your database credentials (e.g., host, username, password, database name).

### Step 3: Running the Application
1. Start your local server.
2. Access the application through your web browser by navigating to `http://localhost/your_project_directory`.

### Important Notes
- The `japackdb - stock.sql` file **must** be executed in your database before running the application.
- Verify your server environment supports the technologies used (PHP, HTML, CSS).
- Ensure your database connection details are correct to avoid errors during runtime.

By following the above steps, you will successfully set up and run the JaPack application.

Video Presentation link- https://drive.google.com/file/d/1L7xV-tY0TwEYs7qHPQihMBTHIShWAS3b/view?usp=sharing
