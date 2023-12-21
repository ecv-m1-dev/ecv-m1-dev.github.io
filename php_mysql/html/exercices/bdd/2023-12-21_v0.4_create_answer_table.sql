USE ecv_m1;
CREATE TABLE answer
(
    id      INTEGER      NOT NULL AUTO_INCREMENT PRIMARY KEY,
    content LONGTEXT     NOT NULL,
    author  VARCHAR(255) NOT NULL,
    date    TIMESTAMP    NOT NULL
);
