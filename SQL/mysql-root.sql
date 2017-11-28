--
-- Ce fichier sert à créer un utilisateur
-- root_admin pour la DB pinterest.
--
-- Vous devrez définir le mot de passe manuellement
--

CREATE USER 'root_pinterest'@'localhost' IDENTIFIED WITH mysql_native_password AS 'pinterest';GRANT USAGE ON *.* TO 'root_pinterest'@'localhost' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;

GRANT ALL PRIVILEGES ON `projet\_pinterest`.* TO 'root_pinterest'@'localhost' WITH GRANT OPTION;
