CREATE TABLE users (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    full_name VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(100),
    role VARCHAR(20)
);

CREATE TABLE fir_reports (
    fir_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    complaint_title VARCHAR(255),
    complaint_description TEXT,
    status VARCHAR(50),
    date_created DATE
);

CREATE TABLE police_stations (
    station_id INT PRIMARY KEY AUTO_INCREMENT,
    station_name VARCHAR(100),
    location VARCHAR(100)
);

CREATE TABLE officers (
    officer_id INT PRIMARY KEY AUTO_INCREMENT,
    officer_name VARCHAR(100),
    station_id INT
);
