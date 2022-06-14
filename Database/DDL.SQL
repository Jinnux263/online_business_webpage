CREATE DATABASE IF NOT EXISTS ecommerceapp DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE ecommerceapp;

DROP TABLE IF EXISTS PRODUCT;
CREATE TABLE PRODUCT (
    ID CHAR(10) NOT NULL,
    NAME VARCHAR(1000) NOT NULL,
    DESCRIPTION VARCHAR(2000),
    IMG VARCHAR(1000) NOT NULL,
    PRIMARY KEY(ID),
    PRICE INT(10) NOT NULL,
    DAYS INT(10) NOT NULL
);

DROP TABLE IF EXISTS USERS;
CREATE TABLE USERS (
    USERNAME VARCHAR(100) NOT NULL,
    EMAIL VARCHAR(100) NOT NULL,
    REALNAME VARCHAR(100) NOT NULL,
    PHONENUM VARCHAR(20) NOT NULL,
    PASSWORD VARCHAR(100),
    USER_TYPE VARCHAR(20),
    PRIMARY KEY(USERNAME)
);

DROP TABLE IF EXISTS DOCTOR;
CREATE TABLE DOCTOR (
    ID VARCHAR(12) NOT NULL,
    NAME VARCHAR(1000) NOT NULL,
    DESCRIPTION VARCHAR(2000) NOT NULL,
    IMG VARCHAR(1000) NOT NULL,
    PRIMARY KEY(ID)
);

DROP TABLE IF EXISTS ORDERS;
CREATE TABLE ORDERS (
    NUM INT AUTO_INCREMENT NOT NULL,
    O_DATE DATETIME NOT NULL,
    PRODUCT_ID CHAR(10),
    USERNAME VARCHAR(100),
    PRIMARY KEY(NUM),
    FOREIGN KEY(PRODUCT_ID) REFERENCES PRODUCT(ID),
    FOREIGN KEY(USERNAME) REFERENCES USERS(USERNAME)
);

INSERT INTO `doctor` (`ID`, `NAME`, `DESCRIPTION`, `IMG`) VALUES
('100245368715', 'Hoàng Thị B', 'Bác sĩ khoa Ngoại, Chỉnh hình', 'https://www.hanhphuchospital.com/wp-content/uploads/2022/02/Bs-Nguyen-Ngoc-Phuong-Quynh-min.jpeg'),
('110234568', 'Trần Công D', 'Bác sĩ khoa Nội', 'https://img.freepik.com/free-photo/doctor-with-his-arms-crossed-white-background_1368-5790.jpg?w=2000'),
('201452305', 'Nguyễn Văn A', 'Bác sĩ khoa Ngoại', 'https://www.hanhphuchospital.com/wp-content/uploads/2019/12/Bs-Trinh-Cong-Quyen-277x327.jpg');

INSERT INTO `product` (`ID`, `NAME`, `DESCRIPTION`, `IMG`, `PRICE`, `DAYS`) VALUES
('0000000001', 'Chỉnh hình', 'Chỉnh cơ hàm', 'https://www.hangngoainhap.com.vn/cdn3/images/bo-nao/vien-uong-nattokinase-2000fus-doctors-best-cua-my-5.jpg', 1500000, 8),
('0000000002', 'Khám khoa nội', 'ABCDEF', 'https://www.hangngoainhap.com.vn/cdn3/images/bo-nao/vien-uong-nattokinase-2000fus-doctors-best-cua-my-5.jpg', 2000000, 10);

INSERT INTO `users` (`USERNAME`, `EMAIL`, `REALNAME`, `PHONENUM`, `PASSWORD`, `USER_TYPE`) VALUES
('bao12345', 'bao@gmail.com' , 'Lê Hồ Hoài Bão', '0854557858', 'bao123456789', 'user');

INSERT INTO `users` (`USERNAME`, `EMAIL`, `REALNAME`, `PHONENUM`, `PASSWORD`, `USER_TYPE`) VALUES
('admin', 'admin@gmail.com' , 'Admin', '0123456789', 'password', 'admin');
