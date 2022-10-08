CREATE TABLE IF NOT EXISTS user (
    pseudo TEXT PRIMARY KEY,
    password TEXT NOT NULL,
    status TEXT NOT NULL
CHECK ( status IN ('Administrator','Customer','Visitor'))
);
/* password = pass */
INSERT OR REPLACE INTO user (pseudo,password,status) VALUES ('Jojo','$2y$10$JMuuaDMCavASPKf9KBcD1eaMHJ0zkeD8eYs7HjecoD8QeUVRhKQq6','Visitor');
INSERT OR REPLACE INTO user (pseudo,password,status) VALUES ('Raoul','$2y$10$JMuuaDMCavASPKf9KBcD1eaMHJ0zkeD8eYs7HjecoD8QeUVRhKQq6','Customer');
INSERT OR REPLACE INTO user (pseudo,password,status)VALUES ('Romeo','$2y$10$JMuuaDMCavASPKf9KBcD1eaMHJ0zkeD8eYs7HjecoD8QeUVRhKQq6','Administrator');