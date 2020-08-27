DROP TABLE IF EXISTS user;
DROP TABLE IF EXISTS item;
DROP TABLE IF EXISTS order;

CREATE TABLE user (
    username VARCHAR2(15) PRIMARY KEY,
    passsword VARCHAR2(15) NOT NULL
);

INSERT INTO user VALUES 
('admin', 'root');


CREATE TABLE item (
    id SMALLINT PRIMARY KEY,
    item_name VARCHAR2(20) NOT NULL,
    item_price DECIMAL(6,2) NOT NULL,
    item_description VARCHAR2(100),
    item_image VARCHAR2(100) NOT NULL
);

INSERT INTO item VALUES
('1', 'chair', 14.99, "a simple chair", "images/chair.png");

INSERT INTO item VALUES
('2', 'table', 24.99, "a simple table", "images/table.png");

INSERT INTO item VALUES
('3', 'toaster', 49.99, "toaster with many functions", "images/toaster.png");

INSERT INTO item VALUES
('4', 'pan', 19.99, "a non-stick pan", "images/pan.png");

CREATE TABLE order (
    id SMALLINT PRIMARY KEY,
    item_id SMALLINT NOT NULL
     CONSTRAINT ItemPurchased REFERENCES item(id),
    cust_name VARCHAR2(15) NOT NULL,
    cust_email VARCHAR2(30) NOT NULL,
    cust_address VARCHAR2(100) NOT NULL,
    shipped number(1) NOT NULL
);

COMMIT;