CREATE DATABASE `laravel` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

use laravel;

CREATE TABLE IF NOT EXISTS category (
  id INT primary key AUTO_INCREMENT,
  name VARCHAR(100) not null unique,
  status INT null default 0,
  created_at TIMESTAMP default current_timestamp(),
  updated_at date null 
) ENGINE = InnoDB;

drop database larevel;