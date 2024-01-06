![](Images/Amaterasu_Logo.png)

## About Amaterasu

This Laravel project is a prototoype Content Management System (CMS) for a made up restaurant.

## Setup

### 1 - Create a New MySQL User	
You first need to create a user for the MySQL database.

Open up *CMD* and sign in to MySQL as the root account

```cmd
mysql -u root -p
```

Create a user and password to be used, the default username is ``admin`` and the default password is ``password``
To change it, change the `.env` file, search for the lines that say `DB_USERNAME=admin` and `DB_PASSWORD=password`

```cmd
CREATE USER 'admin'@'localhost' IDENTIFIED BY 'password';
```

Grant Privileges to the new account
```cmd
GRANT ALL PRIVILEGES ON * . * TO 'admin'@'localhost';
FLUSH PRIVILEGES;
```

Exit MySQL
```cmd
exit;
```

### 2 - Create Database

The default database for this project is `amaterasu` and can be changed in the `env` at the lib `DB_DATABASE=amaterasu`

Sign in to the MySQL user you're using
```cmd
mysql -u admin -p
```

Input password
```cmd
password
```
Create the database
```cmd
CREATE DATABASE amaterasu;
```
		
### 3 - Seed the Database

In `cmd` navigate to the project folder that contains the file `artisan`
```cmd
cd Amaterasu
```
Commit the migrations to the database
```cmd
php artisan migrate:refresh --seed
```
Make a symbolic link in the "Amaterasu/public" folder linking to "Amaterasu\storage\app\public"
This is required since any newly added images are added in storage, and this allows them to be accessed as assets
```cmd
php artisan storage:link
```


### 4- Start the Server
```cmd
php artisan serve
```
	
