ALTER TABLE question
ADD author_id INTEGER NOT NULL;

ALTER TABLE question DROP COLUMN author;