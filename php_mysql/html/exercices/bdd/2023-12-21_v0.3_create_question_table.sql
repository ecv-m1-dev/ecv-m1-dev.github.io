USE ecv_m1;
CREATE TABLE question
(
    id      INTEGER      NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title   VARCHAR(255) NOT NULL,
    content LONGTEXT     NOT NULL,
    author  VARCHAR(255) NOT NULL,
    date    TIMESTAMP    NOT NULL
);
