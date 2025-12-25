DROP TABLE IF EXISTS `vatid_live_check_cache`;
create table `vatid_live_check_cache` (
	`vatid`   varchar(50)                         not null,
	`valid`   tinyint(1)                          not null,
	`error`   varchar(255)                        null,
	`updated` timestamp default CURRENT_TIMESTAMP not null on update CURRENT_TIMESTAMP,
	primary key (`vatid`)
);
