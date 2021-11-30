<?php 

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$wno=$_POST['wno'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$ptype=$_POST['ptype'];
$dname=$_POST['dname'];
$nda=$_POST['nda'];
$message=$_POST['message'];

$conn=new mysqli('localhost','root','','project');

if ($conn->connect_error) {
    die('connection Failed :'.$conn->connect_error);

}else{
    $stmt=$conn->prepare("INSERT INTO `minor3`(`id`, `fname`, `lname`, `email`, `wno`, `gender`, `age`, `patienttype`, `dname`, `lda`, `nextda`, `reason`, `message`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
  $stmt->bind_param("ssssssssss",$fname,$lname,$email,$wno,$gender,$age,$ptype,$dname,$doa,$message);
  $stmt->execute();
  echo "appointment is  successfull...";
  $stmt->close();
  $conn->close();
}


?>