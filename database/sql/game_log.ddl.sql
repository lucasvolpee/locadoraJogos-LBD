CREATE TABLE games_log (
    log_id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    operation VARCHAR(255),
    game_id INT,
    created_at DATE DEFAULT (datetime('now','localtime'))
);
