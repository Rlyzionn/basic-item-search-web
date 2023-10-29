<?PHP

	include("itemdata.php");
	
	$item = $items_data[$_GET["id"]];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>



<div class="container">
	<p>Item: <?PHP echo $item["Name"]; ?></p>
    <p><img src="images/<?PHP echo $item["Image"]. '" width="150" height="150"';?>" /></p>
    <p>Price: <?PHP echo $item["Price"]; ?></p>
    <p><?PHP echo $item["Detail"]; ?></p>
</div>

<div class="button-container">
            <a href="itemslist.php"><button class="curved-button2">Back to Items</button></a>
        </div>
</body>
