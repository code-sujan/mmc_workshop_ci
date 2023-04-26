CREATE TABLE `ci_test`.`user`
(
    `id`       INT         NOT NULL AUTO_INCREMENT,
    `name`     VARCHAR(50) NOT NULL,
    `username` VARCHAR(50) NOT NULL,
    `email`    VARCHAR(50) NOT NULL,
    `password` TEXT        NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;