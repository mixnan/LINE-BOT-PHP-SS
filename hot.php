<?php


header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');  


include('con_db.php');


$sql = "SELECT *,DATE_FORMAT(birth,'%d/%m/%Y') AS births,2560-YEAR(birth) AS ages ,DATE_FORMAT(birth,'%d/%m/%Y') AS birthday  
 FROM contacts  
   WHERE      MONTH(STR_TO_DATE(birth,'%Y-%m-%d'))= MONTH(NOW()) AND
   
                 DAY(STR_TO_DATE(birth,'%Y-%m-%d'))= DAY(NOW())   AND id_group=4  ";



$resource = mysql_query($sql);

$count_row = mysql_num_rows($resource);

if($count_row > 0) {
 while($result =mysql_fetch_array($resource)){
  $name = $result['name'];
  $birthday =$result['birthday'];
  $age = $result['age'];
  $message = "Happy birthday  ".' '.$name." in ".' '.$birthday;

 echo '<iframe src="bot.php?message='.$message.'  "></iframe>';

 }

}else{
 //
}


