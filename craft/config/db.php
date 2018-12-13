<?php

/** Note: Rename this file to db.php and set it to IGNORE before commiting!  */
/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/config/defaults/db.php
 */

 return array(
   '*' => array(
     'server' => 'localhost',
     'database' => 'responsiveWebDesign',
     'tablePrefix' => 'craft',
     'user' => 'PUT USER NAME HERE',
     'password' => 'PUT PASSWORD HERE',
   ),

   'responsivewebdesign.web' => array(
     'user' => 'root',
     'password' => 'root',
   ),

	 /* Don't commit the production user name and password - change on server instead */
   'PRODUCTIONURL.com' => array(
     'user' => 'PUT USER NAME HERE',
     'password' => 'PUT PASSWORD HERE',
   )
 );
