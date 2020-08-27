DROP TABLE IF EXISTS user;
DROP TABLE IF EXISTS item;
DROP TABLE IF EXISTS order;

CREATE TABLE user (
    username VARCHAR2(15) PRIMARY KEY,
    passsword VARCHAR2(15) NOT NULL
);

INSERT INTO user ('admin', 'root');


CREATE TABLE item (
    id SMALLINT PRIMARY KEY,
    item_name VARCHAR2(20) NOT NULL,
    item_price DECIMAL(6,2) NOT NULL,
    item_description VARCHAR2(100)
);

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