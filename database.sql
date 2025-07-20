-- Create the database
CREATE DATABASE IF NOT EXISTS guestbook_2;
USE guestbook_2;

-- Create the table to store guest messages
CREATE TABLE IF NOT EXISTS messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);