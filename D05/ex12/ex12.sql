SELECT `last_name`,
       `first_name`
FROM `db_fsmith`.user_card
WHERE `db_fsmith`.user_card.last_name LIKE '%-%'
      OR `db_fsmith`.user_card.first_name LIKE '%-%'
ORDER BY  `db_fsmith`.user_card.last_name ASC, `db_fsmith`.user_card.first_name ASC;