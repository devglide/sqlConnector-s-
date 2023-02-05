<?php

  //Notice that this file is inside a "includes" folder. This is not required, but I personally think it is better to place PHP files that are not actual pages, inside a different folder. Just so we don't mix page files with script files.

  //Another question I sometimes get, is why we create the connection in a separate file?
  //We do this because it allow for us to link to this file instead of having to re-create the code each time we need to connect. Which is MUCH better and saves us time.

  //Bellow we create the necessary database connection info

  //Since we are using XAMPP in this tutorial, which is a local server, the servername will be "localhost".
  $dbServername = "103.231.30.155";
  //XAMPPs default username is "root".
  $dbUsername = "devongl_Devon";
  //XAMPPs default password is "", which means we don't have one.
  $dbPassword = "(yc{z[~Ps~]Y";
  //Here we insert the name of the database we created in phpMyAdmin. In my example I have a database named "dbmmtuts".
  $dbName = "devongl_HSK1_Vocab_List";

  //Here we create the connection and set it equal to a variable so we can refer to it later when we need to connect.
  $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
