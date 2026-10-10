
<!DOCTYPE html>
<html>
<head>
    <title>Search</title>
</head>
<body>
    <h1>Search</h1>
<form action="" method="get"> 
    <input type ="text" placeholder="search" name="q">
    <button type ="submit">Search</button>
    <?php
    if(isset($_GET["q"])){
$search=trim($_GET["q"]);
echo"<h2>Search result for:".$search."</h2>";
    }
    ?>
</body>
</html>
