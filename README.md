# 📝 PHP Guestbook App

A simple PHP & MySQL-powered guestbook application that allows users to submit and view comments. This project demonstrates the basics of backend development using PHP and database interactions with MySQL.


## 📌 Features

- Users can submit their name and a message.
- Messages are stored in a MySQL database.
- Displays all guestbook entries with timestamps.
- Secure data handling using prepared statements or input sanitization.
- Responsive and clean UI using HTML & CSS.


## 🛠 Technologies Used

- ✅ PHP
- ✅ MySQL
- ✅ HTML/CSS
- ✅ XAMPP (for local development/testing)🚀 How to Run Locally

✅ Prerequisites

XAMPP or any PHP + MySQL environment

A web browser (e.g., Chrome, Firefox)


⚙ Steps to Run

1. Clone this repository:

git clone https://github.com/PreetySinha84/PHP-guestbook-App.git


2. Copy the project folder to:

C:\xampp\htdocs\


3. Start Apache and MySQL from the XAMPP control panel.


4. Open phpMyAdmin and create a new database:

CREATE DATABASE guestbook;

USE guestbook;

CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


5. Open your browser and visit:

http://localhost/guestbook_2/

# 👩‍💻 Author

- *Preety Sinha*
- GitHub: [@PreetySinha84](https://github.com/PreetySinha84)