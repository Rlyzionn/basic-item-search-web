
<?PHP

	include("itemdata.php");
	
	$item = $items_data[$_GET["id"]];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Items Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <div class="text-header">
            <h2>Available Items</h2>
        </div>

    
        <?PHP	
	    //print_r($items_data);
	
		foreach($items_data as $key => $value){
			//print_r($value);	?>  
    	<li>
        <img src="images/<?PHP echo $value["Image"] . '" width="170" height="150"'; ?>" />
                <p>Price <?PHP echo $value["Price"]; ?> PKR</p>
                <a href="itemdetails.php?id=<?PHP echo $key; ?>" title="Home"><?PHP echo $value["Name"]; ?> </a>
                <p>   </p>
                <p>   </p>
        </li>
        <?PHP
		}
		?>
        
        <div class="button-container">
            <a href="home.php"><button>Back to Home</button></a>
        </div>
        

        
    </div>
    
</body>
</html>
