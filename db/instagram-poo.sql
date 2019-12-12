create database fakeinstagram;
use fakeinstagram;
create table posts(
	
    id INT PRIMARY KEY AUTO_INCREMENT,
    img VARCHAR(500) NOT NULL,
    descript VARCHAR(266) NOT NULL,
    id_user INT,
    FOREIGN KEY(id_user) REFERENCES users(id) 
);

create table users(

	id INT PRIMARY KEY AUTO_INCREMENT,
    username varchar(60) NOT NULL,
    email varchar(60) NOT NULL,
    pass varchar(256) NOT NULL
    	
);
use fakeinstagram;