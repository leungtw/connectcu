drop table users;
drop table questions;
drop table answers;

create table users (id integer primary key auto_increment, email char(40), username char(20));
create table questions (id integer primary key auto_increment, message char(255), subject char(16), score integer, user char(20) references users(username));
create table answers (id integer primary key auto_increment, question_id integer references questions(id), message char(255), score integer, user char(20) references users(username));

insert into users values (1, "tymo1918@colorado.edu", "tylermoore");

insert into questions values (1, "What''s 2 + 2?", "Math", 5, "tylermoore");

insert into answers values (1, 1, "The answer is 4", 10, "tylermoore");
