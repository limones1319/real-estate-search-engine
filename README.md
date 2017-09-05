This is a search engine and a crawler made in PHP and Codeigniter.

The crawler is instructed by different scripts to search various tags in different websites. The crawler is also a script interpreter. It stores the crawled data into a Mysql database.

The search engine uses Sphinx Search for faster queries. The data from Mysql database is imported into Sphinx Search daily at midnight.

The application is structured as a MVC.

Controllers:
	
	- comentarii.php: controller for displaying and storing user comments.
	- contact.php: This is a contact form.
	- dm.php: This is the main controller that is displaying the first page, searching results, displaying price charts, and logging
	- fintern.php: This is a backend controller to display and test crawled pages

Models:

	- tarator.php: website crawler 
	- backup_dn.php: APIs for backing up the database
	- comentarii.php: retrievs comments from DB for a specific search
	- comentarii_model.php: retrieves and stores user comments
	- ircd.php: all outbound clicked links are first recorded in the DB and the redirected to the original URL
	- lansator.php: crawler thread launcher
	- repara_contact.php: APIs for reclassifying contacts 
	- repara_locatie.php: reclassifying locations
	- rezultate.php: main model for searching and displaying results

Views:

	- afiseaza_comentarii.php: display user comments
	- afiseaza_ultimul.php: show last comment
	- formular_comentarii.php: user comments submit form
	- home.php: home page
	- rezultate.php: displays search results
	- similar.php: disaplys similar search results
