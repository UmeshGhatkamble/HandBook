<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adding expenses</title>
</head>
<body>
    <center>
<h2>Add Expenses Here!</h2>
<form action="addinsert.php" method="POST">

<label for="addingdate"> Select The Date</label>
<input type="date" name="date" id="addingdate"  ><br>

<label for="item"> Name Of The Item</label>
<input type="text" name="item" id="item"  ><br>

<label for="amount"  >Enter The Amount</label>
<input type="text" name="amount" id="addingdate"  ><br>

<label for="name"> Select The Name</label>
<input type="text" name="name" id="addingdate"  ><br>

 <button>submit</button>
</form>
</center>
</body>
</html>