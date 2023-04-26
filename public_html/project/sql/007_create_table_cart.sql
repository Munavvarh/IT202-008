CREATE TABLE IF NOT EXISTS Product_Cart(
    id int AUTO_INCREMENT PRIMARY  KEY,
    product_id INT,
    user_id INT,
    desired_quantity INT,
    unit_price INT,
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    check (desired_quantity > 0),
    check (unit_price >= 0), 
    FOREIGN KEY (`product_id`) REFERENCES Products(`id`),
    FOREIGN KEY (`user_id`) REFERENCES Users(`id`),
    UNIQUE KEY (`product_id`, `user_id`)
)
