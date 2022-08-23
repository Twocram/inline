CREATE SCHEMA `inline` DEFAULT CHARACTER SET utf8 ;

CREATE TABLE `inline`.`post` (
                                 `id` INT NOT NULL,
                                 `body` VARCHAR(255) NOT NULL,
                                 `title` VARCHAR(255) NOT NULL,
                                 PRIMARY KEY (`id`),
                                 UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE);
CREATE TABLE `inline`.`comment` (
                                    `id` INT NOT NULL,
                                    `post_id` INT NOT NULL,
                                    `name` VARCHAR(255) NOT NULL,
                                    `email` VARCHAR(255) NOT NULL,
                                    `body` VARCHAR(255) NOT NULL,
                                    PRIMARY KEY (`id`),
                                    INDEX(`post_id`),
                                    UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE);