<?php 
require_once "dbconnection.php"; // dbconnection here 

if(isset($_GET['sub_btn'])){
    $fname = $_GET['firstname']; //get input from form

    $iquery = "insert into dmc_tbl (fname)values('$fname')"; // insert query 
    
    $rquery = mysqli_query($conn , $iquery); // execute query
    if($rquery){echo 'success in inserted Query ';}
}else{

    echo "invalid Access";
}


?>