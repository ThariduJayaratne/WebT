

CREATE TABLE `users` (
  `user_id` int(20) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_quantity` int(12) NOT NULL,
  `user_date` varchar(256) NOT NULL,
  `user_time` varchar(256) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;


INSERT INTO users VALUES
("2","James","James@gmail,com","12","2020-06-03","04:18"),
("39","Tharidu Jayaratne","tj17908@bristol.ac.uk","2","2020-05-07","20:41"),
("43","Tom","Tom@gmail.com","7","2020-07-03","02:29");


