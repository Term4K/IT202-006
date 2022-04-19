CREATE TABLE IF NOT EXISTS Scores(
    id int AUTO_INCREMENT PRIMARY KEY,
    score int DEFAULT 0,
    prest int DEFAULT 0,
    user_id int UNIQUE,
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES Users(id),
    check (score > 0),
    check (prest >= 0)
)