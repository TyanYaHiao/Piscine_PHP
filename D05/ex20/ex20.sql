SELECT `db_fsmith`.film.id_genre,
       `db_fsmith`.genre.name AS `name_genre`,
       `db_fsmith`.film.id_distrib,
       `db_fsmith`.distrib.name AS `name_distrib`,
       `title` AS `title_film`
FROM `db_fsmith`.film
LEFT JOIN `db_fsmith`.genre
    ON `db_fsmith`.genre.id_genre = `db_fsmith`.film.id_genre
LEFT JOIN `db_fsmith`.distrib
    ON `db_fsmith`.distrib.id_distrib = `db_fsmith`.film.id_distrib
WHERE `db_fsmith`.film.id_genre
    BETWEEN 4
        AND 8;