ALTER TABLE question
ADD author_id INTEGER NOT NULL DEFAULT 1;

ALTER TABLE `question`
ADD FOREIGN KEY (`author_id`) REFERENCES `author` (`id`);

ALTER TABLE question DROP COLUMN author;

