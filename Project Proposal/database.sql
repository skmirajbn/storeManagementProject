CREATE TABLE `unit` (
  `unit_id` INT,
  `unit` varchar(50),
  PRIMARY KEY (`unit_id`)
);

CREATE TABLE `roles` (
  `role_id` INT,
  `role_name` varchar(50),
  PRIMARY KEY (`role_id`)
);

CREATE TABLE `users` (
  `user_id` INT,
  `email` varchar(50),
  `password` varchar(50),
  `username` varchar(50),
  `role_id` INT,
  `status` varchar(50),
  PRIMARY KEY (`user_id`),
  FOREIGN KEY (`role_id`) REFERENCES `roles`(`role_id`)
);

CREATE TABLE `customers` (
  `customer_id` INT,
  `customer_name` varchar(200),
  `customer_address` varchar(200),
  `customer_phone` varchar(20),
  PRIMARY KEY (`customer_id`)
);

CREATE TABLE `sales_order` (
  `order_id` INT,
  `product_id` INT,
  `quantity` INT,
  `price` DECIMAL(10,2),
  `customer_id` INT,
  PRIMARY KEY (`order_id`),
  FOREIGN KEY (`customer_id`) REFERENCES `customers`(`customer_id`)
);

CREATE TABLE `brands` (
  `brand_id` INT,
  `brand_name` varchar(50),
  PRIMARY KEY (`brand_id`)
);

CREATE TABLE `categorys` (
  `category_id` INT,
  `category_name` varchar(50),
  PRIMARY KEY (`category_id`)
);

CREATE TABLE `products` (
  `product_id` INT,
  `category_id` INT,
  `brand_id` INT,
  `product_name` varchar(50),
  `description` text,
  `unit_id` INT,
  `selling_price` DECIMAL(10,2),
  PRIMARY KEY (`product_id`),
  FOREIGN KEY (`brand_id`) REFERENCES `brands`(`brand_id`),
  FOREIGN KEY (`unit_id`) REFERENCES `unit`(`unit_id`),
  FOREIGN KEY (`category_id`) REFERENCES `categorys`(`category_id`)
);

CREATE TABLE `Inventory` (
  `inventory_id` INT,
  `product_id` INT,
  `unit_id` INT,
  `stock` DECIMAL(10,2),
  PRIMARY KEY (`inventory_id`),
  FOREIGN KEY (`product_id`) REFERENCES `products`(`product_id`)
);

CREATE TABLE `purchase_order` (
  `purchase_order_id` INT,
  `quantity` INT,
  `buying_price` DECIMAL(10,2),
  `time_stamp` DATETIME,
  PRIMARY KEY (`purchase_order_id`)
);

CREATE TABLE `s_order_product` (
  `s_order_product_id` INT,
  `order_id` INT,
  `product_id` INT,
  `quantity` INT,
  `price` DECIMAL(10,2),
  PRIMARY KEY (`s_order_product_id`),
  FOREIGN KEY (`product_id`) REFERENCES `products`(`product_id`),
  FOREIGN KEY (`order_id`) REFERENCES `sales_order`(`order_id`)
);

CREATE TABLE `b_order_purchase` (
  `b_order_product_id` Type,
  `purchase_order_id` Type,
  `product_id` Type,
  `quantity` Type,
  `price` Type,
  PRIMARY KEY (`b_order_product_id`),
  FOREIGN KEY (`product_id`) REFERENCES `products`(`product_id`),
  FOREIGN KEY (`purchase_order_id`) REFERENCES `purchase_order`(`purchase_order_id`),
  KEY `Key` (`quantity`, `price`)
);

