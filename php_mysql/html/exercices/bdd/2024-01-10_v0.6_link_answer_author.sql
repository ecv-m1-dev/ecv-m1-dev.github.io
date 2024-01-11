USE ecv_m1;

ALTER TABLE answer ADD author_id INTEGER NOT NULL;

ALTER TABLE answer ADD FOREIGN KEY (`author_id`) REFERENCES `author` (`id`);

ALTER TABLE answer ADD question_id INTEGER NOT NULL;

ALTER TABLE answer ADD FOREIGN KEY (`question_id`) REFERENCES `question` (`id`);

ALTER TABLE answer DROP COLUMN author;

