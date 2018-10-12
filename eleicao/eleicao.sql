create database eleicao;

use eleicao;

create table if not exists nomes(
membro varchar(255),
vicePresidente varchar(255),
tesoureiro varchar(255),
secretario varchar(255),
dirigentes varchar(255),
dirigentes2 varchar(255),
dirigentes3 varchar(255),
som varchar(255),
midia varchar(255),
recepcionista varchar(255),
ebd varchar(255),
missoes varchar(255),
fiscal varchar(255),
infantil varchar(255),
eventos varchar(255),
patrimonial varchar(255),
primary key(membro)
);

drop table nomes;
select*from nomes;