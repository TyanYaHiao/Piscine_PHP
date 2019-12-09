SELECT `floor_number` AS `floor`,
       sum(nb_seats) AS `seats`
FROM `db_fsmith`.cinema
GROUP BY `floor`
ORDER BY  `seats` DESC;
