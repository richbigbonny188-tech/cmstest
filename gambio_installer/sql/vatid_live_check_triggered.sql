DROP TABLE IF EXISTS `vatid_live_check_triggered`;
create table `vatid_live_check_triggered`
(
    `id`      int auto_increment
        primary key,
    `ip`      varchar(45)                         not null,
    `updated` timestamp default CURRENT_TIMESTAMP not null on update CURRENT_TIMESTAMP
);

