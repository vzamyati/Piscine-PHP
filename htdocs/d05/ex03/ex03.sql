INSERT INTO db_vzamyati.ft_table (`login`, `group`, `creation_date`) SELECT `last_name`,'other', `birthdate` FROM db_vzamyati.user_card WHERE CHAR_LENGTH(`last_name`) < 9 AND `last_name` LIKE '%a%' ORDER BY `last_name` ASC LIMIT 10;