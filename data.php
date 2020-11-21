<?php

$server="localhost";
$user="root";
$pass="";
$dbname="covid_data";

//Creating the cnnection with sql

$conn= new mysqli($server,$user,$pass,$dbname);

//Checking the connection

if($conn->connect_error)
{
    die("The connection with database failed".$conn->connect_error);
}

//Fetching the details of the user

$Age=$_POST["Your_Age"];

$Gender=$_POST["Gender"];

$HealthConditions=$_POST["HealthConditions"];

$highimpact=$_POST["highimpact"];

$lowimpact=$_POST["lowimpact"];

$Guidelines=$_POST["Guidelines"];

$Exposures=$_POST["Exposures_area"];

$XRay=$_POST["XRay"];

$Smoke=$_POST["Smoke"];

$sql="insert into data(Age,Gender,HealthConditions,highimpact,lowimpact,Guidelines,Exposures,XRay,Smoke) values ('$Age','$Gender','$HealthConditions','$highimpact','$lowimpact','$Guidelines','$Exposures','$XRay','$Smoke')";

if($conn->query($sql)===TRUE)

{
    echo"<h1>Your data has been successfully submitted</h1>";
}

else

{
    echo"Error".$sql."</br>".$conn->error;

}

$conn->close();

header("refresh:2;url=index.html")

?>