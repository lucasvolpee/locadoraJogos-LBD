CREATE TRIGGER IF NOT EXISTS create_log_game_on_update
   AFTER UPDATE
   ON games FOR EACH ROW
BEGIN
    INSERT INTO games_log (operation, game_id)
                 VALUES ('UPDATE', OLD.game_id);
END;


CREATE TRIGGER IF NOT EXISTS create_log_game_on_delete
   AFTER DELETE
   ON games FOR EACH ROW
BEGIN
    INSERT INTO games_log (operation, game_id)
                 VALUES ('DELETE', OLD.game_id);
END;
