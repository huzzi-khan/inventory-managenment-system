🏢 Inventory Management System
A robust PHP-based Inventory Management System for efficient stock tracking, order processing, and inventory reporting.

📌 Features
✅ User Authentication – Secure login/logout system.
✅ Product Management – Add, update, and delete products.
✅ Category & Brand Management – Organize inventory efficiently.
✅ Stock Tracking – Real-time monitoring of available stock.
✅ Order Processing – Manage sales orders and transactions.
✅ Reporting & Analytics – Generate insightful sales reports.
✅ Multi-User Role Support – Admin, Manager, and Staff access control.

🚀 Technology Stack
🔹 Frontend: HTML, CSS, Bootstrap
🔹 Backend: PHP, MySQL
🔹 Database: MySQL
🔹 Libraries & Plugins: jQuery, DataTables, FontAwesome

🎯 Installation Guide
1️⃣ Clone the Repository
git clone https://github.com/huzzi-khan/inventory-managenment-system.git
cd inventory-managenment-system

2️⃣ Set Up XAMPP
Install XAMPP and start Apache & MySQL.
Move the project folder to C:\xampp\htdocs\inventory.

3️⃣ Database Setup
Open phpMyAdmin (http://localhost/phpmyadmin).
Create a database inventory_db.
Import the SQL file (inventory.sql).

4️⃣ Configure the Database Connection
Edit "php_action/db_connect.php" and update the database credentials:

**php
Copy
Edit
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "inventory_db";
$connect = new mysqli($localhost, $username, $password, $dbname);**

5️⃣ Run the Project
Open a browser and visit:
👉 http://localhost/inventory

Login using default admin credentials:
user: admin
password: password

🤝 Contributing
Feel free to fork this repository and submit pull requests with improvements.

📜 License
This project is open-source and licensed under the MIT License.

