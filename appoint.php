<?php 

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$wno=$_POST['wno'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$ptype=$_POST['ptype'];
$dname=$_POST['dname'];
$lda=$_POST['lda'];
$nda=$_POST['nda'];
$reason=$_POST['reason'];
$message=$_POST['message'];

$conn=new mysqli('localhost','root','','project');

if ($conn->connect_error) {
    die('connection Failed :'.$conn->connect_error);

}else{
    $stmt=$conn->prepare("insert into minor3(fname,lname,email,wno,gender,age,patienttype,dname,lda,nextda,reason,message)
    values(?,?,?,?,?,?,?,?,?,?,?,?)");
  $stmt->bind_param("ssssssssssss",$fname,$lname,$email,$wno,$gender,$age,$ptype,$dname,$lda,$nda,$reason,$message);
  $stmt->execute();
  echo "appointment is  successfull...";
  $stmt->close();
  $conn->close();
}


?>