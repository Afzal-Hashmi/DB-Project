# Project Name

Online Shoe Store Named "OUTDOORS"

## Prerequisites

- XAMPP installed on your local machine

## Getting Started

1. Clone the repository to your local machine.

2. Importing the Database:
   - Launch XAMPP control panel.
   - Start Apache and MySQL services.
   - Open your web browser and go to http://localhost/phpmyadmin.
   - Create a new database named "project".
   - Import the included .sql file into the "project" database. This file contains the necessary tables and data for the project.

3. Configuring Localhost:
   - Open the XAMPP installation folder.
   - Navigate to the "mysql" folder and open the "conf" directory.
   - Locate the "my.ini" file and open it with a text editor.
   - Search for the line that starts with "Listen" (usually around line 3306) and change the port to 3308. Save the file.

4. Running the Project:
   - Move the cloned project folder to the appropriate directory in your local web server (htdocs folder in XAMPP).
   - Launch XAMPP control panel if not already running.
   - Start Apache and MySQL services.
   - Open your web browser and go to http://localhost/site/Start_Here/Prelogin.php (paste this as it is).
   - The site should now be accessible, and you can interact with the project.

## Usage

Login Instructions
Admin Access:

	Username: admin
	Password: admin
		Upon successful login, you will be directed to the Admin side of the site.
		In the Admin panel, you can perform the following actions:
			1.Add new products
			2.Delete existing products
			3.Update product details
			4.View pending orders from customers
	Customer Access:

	Username: customer
	Password: customer
		Upon successful login, you will be directed to the Customer side of the site.
		In the Customer panel, you can perform the following actions:
			1.Search for products
			2.View search results on the Checkout page
			3.Enter product details on the Checkout page to place an order
		
Please note that the credentials mentioned above are for demonstration purposes only. In a real-world scenario, it is recommended to use secure and unique credentials.


