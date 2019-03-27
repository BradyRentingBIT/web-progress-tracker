### Progress Tracker WebApp

- Login-system
- Register-system
- Safe authentication
- Track progress
- Effective and easy-to-use UI

```sql
CREATE DATABASE `BIT_MASTER`;
```

```sql
USE `BIT_MASTER`;
```

```sql
CREATE TABLE user_table (
    ID int NOT NULL AUTO_INCREMENT,
    user_login varchar(255) NOT NULL,
    user_password varchar(255) NOT NULL,
    user_name varchar(255) NOT NULL,
    PRIMARY KEY (ID)
);
```
```sql
ALTER TABLE `bit_master`.`user_table` 
ADD COLUMN `current_assignment1` INT NULL AFTER `current_assignment`;

``` 

```sql
CREATE TABLE assignment_table (
    ID int NOT NULL AUTO_INCREMENT,
    assignment_name varchar(255) NOT NULL,
    PRIMARY KEY (ID)
);
```
```sql
ALTER TABLE `user_table` ADD FOREIGN KEY (`current_assignment`) REFERENCES `assignment_table`(`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
```