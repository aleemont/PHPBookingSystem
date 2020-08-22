# phpBookingSystem

Building an appointments booking system.

Requirements:

A web server. (Using Apache2.4)
MySQL.
PHP. (Using PHP 7.3.10)
Nette Latte framework. (v. 3.0)
PHPMyAdmin.

You can also use a web-host service which provides support to PHP, MySQL and PHPMyAdmin.

   ***NOTICE!***
    ***YOU WILL NEED TO CHANGE SOME VARIABLES NAMES OR VALUES TO MAKE "testPHPMA_PDO.php" WORK***

If you need a ready-to-use version of this project contact me via email: alessandro.monticelli@live.it

Updates:

Update 08/20/2020@1:26 P.M.:
This is just a test version for my PHPBookingSystem. It just takes data from an HTML form and puts them in a table, showing data on the screen.

Update 08/20/2020@5:05 P.M.:
Added an error page which is loaded whenever the data storing into the table goes wrong.

Update 08/21/2020@12:05 P.M.:
Deleted double language files. Wrote the whole php code again using PDO for better security and readability.

***MAJOR UPDATE 08/22/2020@3:45 A.M.:***
Wrote the whole code using Nette Latte framework (official site: https://latte.nette.org/)
Improved security, code readability.
Automatic escaping to avoid XSS and MySQL injection.
Shorter and smarter code.
New project is located in PHPBookingSystem/bookingSystem folder. Old files still available.

***NOTICE!!!***
    **THE CODE IS NOT READY-TO-USE, YOU WILL NEED TO CONFIG YOUR SETTINGS FOLLOWING INSTRUCTIONS ON THE OFFICIAL SITE**
    
    THE CODE I MADE IS LOCATED AT:
    
    bookingSystem\app\Presenters\HomepagePresenter.php
    bookingSystem\app\Presenters\templates\Homepage\default.latte
    bookingSystem\app\Presenters\templates\Homepage\index.latte
    
to make it work on Apache2 server you will need to:
1)download Composer from the official site: https://doc.nette.org/en/3.0/composer;
2)navigate to ../Apache24/www/ create a new nette web project with cmd command: 

    composer create-project Nette/web-project name_of_the_project;

3)configurate your server and db infos at bookingSystem\app\config\local.neon;
4)modify bookingSystem\app\Presenters\HomepagePresenter.php with my code;
5)modify bookingSystem\app\Presenters\templates\Homepage\default.latte with my code;
6)create bookingSystem\app\Presenters\templates\Homepage\index.latte;
7)navigate to: localhost/bookingSystem/www in your browser.

visit official docs for further information: https://doc.nette.org/
