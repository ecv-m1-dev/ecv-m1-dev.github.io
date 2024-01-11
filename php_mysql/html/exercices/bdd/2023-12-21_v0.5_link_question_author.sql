ALTER TABLE question ADD author_id INTEGER NOT NULL;

ALTER TABLE `question`
ADD
    FOREIGN KEY (`author_id`) REFERENCES `author` (`id`);

ALTER TABLE question DROP COLUMN author;