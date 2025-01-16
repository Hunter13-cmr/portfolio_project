CREATE DATABASE IF NOT EXISTS subscriptions_db;
USE subscriptions_db;

CREATE TABLE IF NOT EXISTS subscriptions (
    id INT AUTO_INCREMENT PRIMARY KEY,               -- Unique ID for each subscription
    email VARCHAR(255) UNIQUE NOT NULL,              -- Subscriber's email (must be unique)
    subscribed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- Subscriptions time
);
