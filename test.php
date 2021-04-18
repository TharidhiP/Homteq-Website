<?php
include ("db.php");
$pagename="Details";
echo "<title>".$pagename."</title>";
echo "<h1>adSmart</h1>";
echo "<p></p>";
echo "<h2>".$pagename."</h2>";
$id1=$_GET['agid'];
$id2=$_GET['desid'];
if (!isset($id1) and !isset($id2))
{
echo "<br>Problem with your choice";
echo "<br>Back to <a href=startpage.php>start page</a>";
}
else
{
if (isset($id1))
{
echo "<p>Info on agencies and their advertising campaigns";
$SQL3="select agencyName
from Agency where agencyNo=".$id1;
$exeSQL3=mysqli_query($c,$SQL3) or die (mysqli_error($c));
$thing3=mysqli_fetch_array($exeSQL3);
$SQL4="select cpCode, cpName, cpStartDate, cpEndDate
from Campaign where agencyNo=".$id1;
$exeSQL4=mysqli_query($c,$SQL4) or die (mysqli_error($c));
echo "<p><b>".strtoupper($thing3['agencyName'])."</b>";
while ($thing4=mysqli_fetch_array($exeSQL4))
{
echo "<br>The campaign ".$thing4['cpName'];
echo " runs from ".$thing4['cpStartDate'];
echo " to ".$thing4['cpEndDate'];
}
}
else
{
echo "<p>Info on designers and their created advertisements";
    //selection query
    $SQL5="select desFullName from Designer where designerId=".$id2;
    //execution output
    $exeSQL5=mysqli_query($c,$SQL5) or die (mysqli_error($c));
    //array for storing execution of output
    $thing5=mysqli_fetch_array($exeSQL5);

    $SQL6="select adId, adName, adCost, adDate, cpCode, designerId from 
            Advertisement where designerId=".$id2;
    $exeSQL6=mysqli_query($c,$SQL6) or die (mysqli_error($c));
    //output designer's name from $thing5
    echo "<p><b>".strtoupper($thing5['desFullName'])."</b>";

    while ($thing6=mysqli_fetch_array($exeSQL6)){
        echo "<ul>";
        echo "<li>Ad Id: ".$thing6['adId']."</li>";
        echo "<li>Ad Name: ".$thing6['adName']."</li>";
        echo "<li>Ad Cost: ".$thing6['adCost']."</li>";
        echo "<li>Ad Date: ".$thing6['adDate']."</li>";
        echo "<li>Campaign Code: ".$thing6['cpCode']."</li>";
        echo "<li>Designer Id: ".$thing6['designerId']."</li>";
        echo "</ul>";
    }
}
}
?>