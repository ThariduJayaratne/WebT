

CREATE TABLE `users` (
  `user_id` int(20) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_quantity` int(12) NOT NULL,
  `user_date` varchar(256) NOT NULL,
  `user_time` varchar(256) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;


INSERT INTO users VALUES
("2","James","James@gmail,com","12","2020-06-03","04:18"),
("23","feasdf","werwerdwe","4","2020-06-12","00:12"),
("24","test","test1","4","2020-06-05","03:09");


