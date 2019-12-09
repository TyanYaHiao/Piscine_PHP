SELECT datediff(max(`date`), min(`date`)) AS `uptime`
FROM `db_fsmith`.member_history;