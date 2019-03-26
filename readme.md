**Progress Tracker WebApp**

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
