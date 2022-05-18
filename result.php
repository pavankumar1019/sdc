<?php
$servername = "localhost";
$username = "u430139865_sdc";
$password = "Pavan5639";
$dbname = "u430139865_sdc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

function language($code) {
if($code==1){
  echo "KANNADA";
}
if($code==3){
  echo "HINDI";
}
if($code==8){
  echo "URDU";
}
if($code==9){
  echo "SANSKRIT";
}
};

function subj($id) {
if($id==1){
  $s1="BASIC MATHS";
  $s2=" BUSINESS STUDIES";
  $s3="ACCOUNTANCY";
  echo "STATISTICS";
}
if($id==2){
  $s1="ECONOMICS";
  $s2="BUSINESS STUDIES";
  $s3="ACCOUNTANCY";
  $s="COMPUTER SCIENCE";
}
if($id==3){
  $s1="ECONOMICS";
  $s2="BUSINESS STUDIES";
  $s3="ACCOUNTANCY";
  $s="STATISTICS";
}
if($id==4){
  $s1="PHYSICS";
  $s2="CHEMISTRY";
  $s3="MATHEMATICS";
  $s="COMPUTER SCIENCE";
}
if($id==5){
  $s1="PHYSICS";
  $s2="CHEMISTRY";
  $s3="MATHEMATICS";
  $s="BIOLOGY";
}
}

$sql = "SELECT * FROM bpet_ist_puc_result where reg_no='".$_POST['reg']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    subj($row['class_code']);
   ?>
   <table style="width:100%">
  <tr>
    <th>Register number : </th>
    <th colspan="2">Name :</th>

  </tr>
  <tr>
    <td colspan="3"> Father Name : <br>
    Mother Name :
    </td>
   
  </tr>
  <tr style="text-align: center; font-size: 20px;font-weight: bold;">
    <td><b>Subjects</b></td>
    <td colspan="2">Marks</td>
  </tr>
  <tr>
    <td ><b><?php echo language($row['lang_code'])?></b></td>
    <td colspan="2" style="text-align: center;"><?php echo $row['']?></td>
  </tr>
  <tr>
    <td ><b>ENGLISH</b></td>
    <td colspan="2" style="text-align: center;"><?php echo $row['']?></td>
  </tr>
  <tr>
    <td ><b><?php echo $s1;?></b></td>
    <td colspan="2" style="text-align: center;"><?php echo $row['s1']?></td>
  </tr>
  <tr>
    <td ><b><?php echo $s2;?></b></td>
    <td colspan="2" style="text-align: center;"><?php echo $row['s2']?></td>
  </tr>
  <tr>
    <td ><b><?php echo $s3;?></b></td>
    <td colspan="2" style="text-align: center;"><?php echo $row['s3']?></td>
  </tr>
  <tr>
    <td ><b><?php echo $s4;?></b></td>
    <td colspan="2" style="text-align: center;"><?php echo $row['s4']?></td>
  </tr>


</table>
   <?php
  }
} else {
  echo "Not Found Result Contact Office ";
}

$conn->close();
?>