DELETE FROM author;

INSERT INTO author 
(name, email) 
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

INSERT INTO question 
(title, content, author, date) 
VALUES
("Qui est Henry IV ?", "Lroemen ototot dsjhfgsd", "La soeur du pape", "2023-01-12"),
("Qui rouge ?", "Lroemen ototot dsjhfgsd", "ton pere", "2023-11-14"),
("Est-ce la HESS?", "Lroemen ototot dsjhfgsd", "Ton frère", "2023-04-12");