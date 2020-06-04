CREATE TABLE users (
  user_id int(20) AUTO_INCREMENT PRIMARY KEY not null,
  user_name varchar(256) not null,
  user_email varchar(256) not null,
  user_quantity int(12) not null,
  user_date varchar(256) not null,
  user_time varchar(256) not null
);

INSERT INTO users (user_name,user_email,user_quantity,user_date,user_time) VALUES('Tharidu','tharidu@gmail.com','5','2020-06-09','12:44');
