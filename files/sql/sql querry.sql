SELECT a.*
FROM duplicates a
JOIN (SELECT value, COUNT(*)
FROM duplicates 
GROUP BY value
HAVING count(*) > 1 ) b
ON a.value = b.value
ORDER BY a.id