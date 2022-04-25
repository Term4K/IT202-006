CREATE TABLE IF NOT EXISTS CreditsHistory(
    id int AUTO_INCREMENT PRIMARY KEY,
    user_id int,
    credit_diff int,
    reason varchar(15) not null COMMENT 'The type of transaction that occurred',
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES Users(id),
    constraint ZeroTransferNotAllowed CHECK(credit_diff != 0)
)