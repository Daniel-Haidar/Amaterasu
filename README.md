I - SETUP

1 - Create a new MySQL User, name = Daniel, Password = password
	Steps in cmd:
		- mysql -u root -p
		- CREATE USER 'Daniel'@'localhost' IDENTIFIED BY 'password';
		- GRANT ALL PRIVILEGES ON * . * TO 'Daniel'@'localhost';
FLUSH PRIVILEGES;
		- exit;

2 - Create database (named "amaterasu")
	Steps in cmd:
		- mysql -u Daniel -p
		(and then input Password = "password")
		- CREATE DATABASE amaterasu;
		- exit;
		
3 - Seed Database:
	line 1: cd Amaterasu
	line 2: php artisan migrate:refresh --seed
	(line 2 migrates the tables and seeds the database)
	line 3: php artisan storage:link
	(line 3 is used to make a symbolic link in the "Amaterasu/public" folder linking to "Amaterasu\storage\app\public")
	(this line is required since any newly added images are added in storage, and this allows them to be accessed as assets)

4- Start the Server
	- php artisan serve
	cmd in the amaterasu project folder
	
IF THERE IS A PROBLEM IN THE SETUP, CONTACT ME: daniel.haidar53@gmail.com




II - USERS AND PASSWORD
 (login can be accessed through url "/login", logout is through "/logout')
	
	KITCHEN/ADMIN:
		username: admin
		password: password
	
	TABLES/CUSTOMERS
		username: Table 1
		password: password
		
		username: Table 2
		password: password
		
		username: Table 3
		password: password
		
III - INSERT FOOD ITEM TEST
	In the admin manage restaurant page, in edit menu, to add a new item, all fields are required,
	and the image has a constraint of being 200;125 ratio
		
IV - NOTES
	The second line in the seed database batch file is important, since without it no images appear
