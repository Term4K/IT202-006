ALTER TABLE UserComps ADD COLUMN start_score INT 
not null default 0 
COMMENT 'saves the starting score with default 0';