CREATE TABLE IF NOT EXISTS Products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) UNIQUE,
    description TEXT,
    category VARCHAR(30),
    stock INT DEFAULT 0,
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    unit_price INT,
    visibility BOOLEAN DEFAULT true,
    check (stock >= 0),
    check (unit_price >= 0)
);
