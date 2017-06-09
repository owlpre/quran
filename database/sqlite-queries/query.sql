select * from texts order by aya_id;
select * from ayas where id = 25;
select * from texts;

DELETE FROM texts;
DELETE FROM sqlite_sequence WHERE name = 'texts';

select id, count(aya_id) from texts GROUP BY aya_id ORDER BY count(aya_id) DESC;

select * from texts where id = 3977;
select * from texts where aya_id = 25;