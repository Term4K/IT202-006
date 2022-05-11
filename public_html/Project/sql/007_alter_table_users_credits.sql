ALTER TABLE Users ADD COLUMN credits INT 
not null default 0 
COMMENT 'credits amount that defaults to 0';