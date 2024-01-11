TRUNCATE question;
TRUNCATE answer;
DELETE FROM author;

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

INSERT INTO question
(title, content, author_id, date)
VALUES
("Qui est Henry IV ?", "Lroemen ototot dsjhfgsd", (SELECT id FROM author ORDER BY RAND() LIMIT 1), "2023-01-12"),
("Quel légume est rouge ?", "Lroemen ototot dsjhfgsd", (SELECT id FROM author ORDER BY RAND() LIMIT 1), "2023-11-14"),
("Est-ce la HESS?", "Lroemen ototot dsjhfgsd", (SELECT id FROM author ORDER BY RAND() LIMIT 1), "2023-04-12");

INSERT INTO answer
(content, date, author_id, question_id)
VALUES
("C'est un roi français", "2021-12-03", (SELECT id FROM author ORDER BY RAND() LIMIT 1), 1),
("Un poivron", "2024-01-10", (SELECT id FROM author ORDER BY RAND() LIMIT 1), 2),
("Koikoubé", "2022-05-21", (SELECT id FROM author ORDER BY RAND() LIMIT 1), 3),
("C'est celui après Henri III", "2023-12-31", (SELECT id FROM author ORDER BY RAND() LIMIT 1), 1),
("Une tomate", "2021-09-30", (SELECT id FROM author ORDER BY RAND() LIMIT 1), 2),
("42", "2023-02-11", (SELECT id FROM author ORDER BY RAND() LIMIT 1), 3)