SELECT upper(`last_name`) AS `NAME`,
       `first_name`,
       `db_fsmith`.subscription.price
FROM `db_fsmith`.user_card
INNER JOIN `db_fsmith`.member
    ON `db_fsmith`.member.id_user_card = `db_fsmith`.user_card.id_user
INNER JOIN `db_fsmith`.subscription
    ON `db_fsmith`.subscription.id_sub = `db_fsmith`.member.id_sub
WHERE `db_fsmith`.subscription.price > 42
ORDER BY  `db_fsmith`.user_card.last_name ASC, `db_fsmith`.user_card.first_name ASC;