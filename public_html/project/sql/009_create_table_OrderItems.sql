CREATE TABLE IF NOT EXISTS OrderItems(
    id int AUTO_INCREMENT PRIMARY  KEY,
    order_id INT,
    product_id INT,
    quantity INT,
    unit_price INT,
    check (quantity > 0),
    check (unit_price >= 0), 
    FOREIGN KEY (`order_id`) REFERENCES Orders(`id`),
    FOREIGN KEY (`product_id`) REFERENCES Products(`id`)
)
