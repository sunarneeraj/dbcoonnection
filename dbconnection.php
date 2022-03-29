<?php 

$host = "localhost";
$user = "root";
$pwd = "";
$dbname = "dmc";

$conn = mysqli_connect($host,$user,$pwd,$dbname);


if(!$conn){ echo 'Error in Dbconnection'; die();}


/*


$readQuery = "select *from dmc_tbl";

$runR = mysqli_query($conn,$readQuery);

//$result = mysqli_fetch_assoc($runR);

while($row = mysqli_fetch_assoc($runR)){

    echo json_encode($row);
}


*/

?>