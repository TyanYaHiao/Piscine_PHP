SELECT count(*) AS `movies`
FROM `db_fsmith`.member_history
WHERE (`date` >= '2006-10-30'
      AND `date` <= '2007-07-27')
      OR (MONTH(`date`) = '12'
      AND DAY(`date`) = '24');