# phpBookingSystem

Building an appointments booking system.

Requirements:

A web server (Using Apache2.4);
MySQL;
PHP (Using PHP 7.3.10);
Nette Latte framework (v. 3.0);
PHPMyAdmin.

You can also use a web-host service which provides support to PHP, MySQL and PHPMyAdmin.

   ***NOTICE!***
    ***YOU WILL NEED TO CHANGE SOME VARIABLES NAMES OR VALUES TO MAKE "testPHPMA_PDO.php" WORK***

If you need a ready-to-use version of this project contact me via email: alessandro.monticelli@live.it

Updates:

***NOT SUPPORTED ANYMORE{
 TESTING Nette Framework:
***MAJOR UPDATE 08/22/2020@3:45 A.M.:***
Wrote the whole code using Nette Latte framework (official site: https://latte.nette.org/)
Improved security and code readability.
Automatic escaping to avoid XSS and MySQL injection.
Shorter and smarter code.
New project is located in PHPBookingSystem/bookingSystem folder. Old files still available but not supported anymore.

Update 08/25/2020@19:55 P.M:
Added a check on age submission. If age inserted already exists into db,
the script will require to insert a different age and won't insert data into db.
This feature will be useful to check if a certain Date/Time has been already booked.

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

}***

***MAJOR UPDATE COMING SOON: Migrating to Laravel***
**The old code won't be supported anymore but it's going to be available**
*Writing back the whole code using Laravel*

