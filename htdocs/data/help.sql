select a.author, a.id from author a join book b on a.id = b.author_id and b.author_id = a.id;

select p.publisher, p.id from publisher p join book b on p.id = b.publisher_id and b.publisher_id = p.id;

select * from book b inner join publisher p on b.publisher_id = p.id inner join author a on b.author_id = a.id;

create view author_view
as
select 
* from author a join book b on a.id = b.author_id;

select * from author_view;

create view publisher_view
as
select 
* from publisher p join book b on p.id = b.publisher_id;

select * from publisher_view;

select a.author, a.id from author a join book b on a.id = b.author_id;

select p.publisher, p.id from publisher p join book b on p.id = b.publisher_id;

select a.id, a.author from author a;
select p.id, p.publisher from publisher p;

