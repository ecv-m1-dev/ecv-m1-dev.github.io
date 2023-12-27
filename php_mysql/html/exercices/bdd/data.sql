DELETE FROM author;
ALTER TABLE author AUTO_INCREMENT = 1;

INSERT INTO author (name, email)
VALUES
("Georgina", "georgina.berrezel@gmail.com"),
("Olivia", "olivia@gmail.com"),
("Louisa", "Louisa@gmail.com"),
("Romain", "romaincoeur@gmail.com"),
("Fabio", "fabio@gmail.com"),
("Yaakov", "yaakov@gmail.com"),
("Clement", "clement@gmail.com"),
("Louis", "Louis@gmail.com"),
("Maxime", "maximus@gmail.com"),
("Sylvestrine", "sylvestrinecoeur@gmail.com");

DELETE FROM question;
ALTER TABLE question AUTO_INCREMENT = 1;

INSERT INTO question
(title, content, author_id, date)
VALUES
("Qui est Henry IV ?", "Lroemen ototot dsjhfgsd", 5, "2023-01-12"),
("Qui rouge ?", "Lroemen ototot dsjhfgsd", 4, "2023-11-14"),
("Est-ce la HESS?", "Lroemen ototot dsjhfgsd", 2, "2023-04-12");
