CREATE TABLE `subscribers` (
	id INT(11) NOT NULL AUTO_INCREMENT,
	email VARCHAR(60) NOT NULL,
    `time` TIMESTAMP  NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);

INSERT INTO subscribers (email) VALUES ("riad123@aol.com"),("riad@mail.ru"),("some@mail.com");