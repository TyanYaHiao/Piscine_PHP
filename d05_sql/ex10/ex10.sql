SELECT `title` AS `Title`,
       `summary` AS `Summary`,
       `prod_year`
FROM `db_fsmith`.film
INNER JOIN `db_fsmith`.genre
    ON `db_fsmith`.film.id_genre = `db_fsmith`.genre.id_genre
WHERE `db_fsmith`.genre.name = 'erotic'
ORDER BY  `prod_year` DESC;