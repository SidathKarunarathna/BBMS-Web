<?php
session_start();
include('connection.php');
if(isset($_POST["submitDonation"])){
    $nic = $_POST['Nic'];
    $date = date("Y-m-d");
    $bloodGroup=$_POST['Blood'];
    $bloodUnits = $_POST['units'];
    $plasma=$_POST['plasma'];
    $platelet = $_POST['platelet'];
    $query1 = "INSERT INTO `donation`( `NIC`, `BloodGroup`, `Units`, `Date`) VALUES ('$nic','$bloodGroup','$bloodUnits','$date')";
    $saved1 = mysqli_query($Con, $query1);
    $query2 = "INSERT INTO `plasma`( `Amount`, `date`) VALUES ('$plasma','$date')";
    $saved2 = mysqli_query($Con, $query2);
    $query3 = "INSERT INTO `platelet`( `nic`,  `BloodGroup`, `Amount`, `date`) VALUES ('$nic','$bloodGroup','$platelet','$date')";
    $saved3 = mysqli_query($Con, $query3);
    $query4 = "INSERT INTO `donar_donation`(`NIC`, `LastDonationDate`) VALUES ('$nic','$date')";
    $saved4 = mysqli_query($Con, $query4);
    
    if ($saved1 && $saved2 && $saved3 && $saved4) {
      $_SESSION['addDonationStatus']=1;
    }
    else{
        $_SESSION['addDonationStatus']=0;
    }

}
  
  header("location:Donation.php");
?>