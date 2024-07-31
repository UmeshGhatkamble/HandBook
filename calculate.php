<?php 
include("lock.php");
?>

<html>
    <head>
    
        <title></title>
    </head>
    

<h1>welcome to Search page</h1>
<button> <a href="logout.php">logout</a></button>

<form action="" method="POST" >
   <b>Search By Expense Value:</b>  <br>

    <input type="text" name="searchname"><br>
    <input type="submit" name="search"><br>
    <input type="date" name="startDate"><br>
    <input type="date" name="endDate"><br>

</form>

<?php
    require_once("config.php");
    
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $search= $_POST["searchname"];
        $startDate= $_POST["startDate"];
        $endDate= $_POST["endDate"];
        $qry = mysql_query( "SELECT *  FROM expense_info
        WHERE exp_date BETWEEN '$startDate' AND '$endDate'   ");
      




while ($row = mysql_fetch_array($qry)) {
    // Process the rows here
    // $row['exp_name'], $row['total_amount'] echo '<div class="grid-item">';
        echo '    <span class="label"> Name:</span>' . $row["exp_name"] . "<br>";
        echo '    <span class="label">Date:</span>' . $row["exp_date"] . "<br>";
        echo '    <span class="label">Amount:</span>' . $row["exp_amount"] . "<br>";
      
        echo '</div>';
}


     //  print_r($row);
    }
    
?>
</html>