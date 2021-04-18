<?php
session_start();
$pagename="Login"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

echo "<div class='formStyle loginStyle'>";
echo "<form action=login_process.php method=post>";
echo "<table style='border: 0px' >";

echo "<tr><td style='border: 0px'>Email Address : </td>";
echo "<td style='border: 0px'><input type='text' name='email'></td></tr>";

echo "<tr><td style='border: 0px'>Password : </td>";
echo "<td style='border: 0px'><input type='password' name='password'></td></tr>";

echo "<tr><td style='border: 0px'><input type='submit' name='login' value= 'Login' id='submitbtn'></td>";
echo "<td style='border: 0px'><input type='submit' name='clearForm' value= 'Clear Form' id='submitbtn'></td></tr>";

echo "</table>";
echo "</form>";
echo "</div>";


include("footfile.html"); //include head layout
echo "</body>";
?>