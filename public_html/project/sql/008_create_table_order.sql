CREATE TABLE IF NOT EXISTS Orders(
    id int AUTO_INCREMENT PRIMARY  KEY,
    user_id INT,
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    total_price INT,
    address VARCHAR(255), 
    payment_method VARCHAR(30),
    money_received INT,
    first_name VARCHAR(30),
    last_name VARCHAR(30), 
    FOREIGN KEY (`user_id`) REFERENCES Users(`id`)
)
