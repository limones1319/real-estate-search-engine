This is a search engine and a crawler made in PHP and Codeigniter. The search engine and crawler are mainly used for crawlig real estate ads websites and display search results according to user search words. At the same time the search engine is capable of displaying price charts for specific searched words. User comments are also available and can be added anonymously by visitors. The search engine also has a backend for checking the crawled data.

The crawler is instructed by different scripts to search various tags in different websites. The crawler is also a script interpreter. The scripts are stored in a separate Mysql table. It stores the crawled data into a Mysql database.

The search engine uses Sphinx Search for faster queries. The data from Mysql database is imported into Sphinx Search daily at midnight.

The application is structured as a MVC.

Models:

	- tarator.php: website crawler 
	- rezultate.php: main model for searching and displaying results
	- backup_dn.php: APIs for backing up the database
	- comentarii.php: retrievs comments from DB for a specific search
	- comentarii_model.php: retrieves and stores user comments
	- ircd.php: all outbound clicked links are first recorded in the DB and the redirected to the original URL
	- lansator.php: crawler thread launcher
	- repara_contact.php: APIs for reclassifying contacts 
	- repara_locatie.php: reclassifying locations

Controllers:
	
	- comentarii.php: controller for displaying and storing user comments.
	- contact.php: This is a contact form.
	- dm.php: This is the main controller that is displaying the first page, searching results, displaying price charts, and logging
	- fintern.php: This is a backend controller to display and test crawled pages

Views:

	- afiseaza_comentarii.php: display user comments
	- afiseaza_ultimul.php: show last comment
	- formular_comentarii.php: user comments submit form
	- home.php: home page
	- rezultate.php: displays search results
	- similar.php: disaplys similar search results
