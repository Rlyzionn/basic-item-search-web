<?php
include("itemdata.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <div class="text-header">
            <h2>Available Items</h2>
        </div>

        <!-- Add a search bar -->
        <form method="post">
            <div class="search-container">
                <input type="text" name="search" placeholder="Search for items...">
                <button type="submit">Search</button>
            </div>
        </form>

        <!-- Display the search results here -->
        <div id="search-results">
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Get the search query from the form submission
                $searchQuery = $_POST['search'];
                $searchQuery = strtolower($searchQuery);

                // Search for items in the items_data array
                foreach ($items_data as $item) {
                    $itemName = strtolower($item['Name']);

                    if (strpos($itemName, $searchQuery) !== false) {
                        // If the item matches the search query, display it
                        echo '<div class="item-result">';
                        echo '<img src="images/' . $item['Image'] . '" width="100" height="90">';
                        echo '<p>Name: ' . $item['Name'] . '</p>';
                        echo '<p>Price: ' . $item['Price'] . ' PKR</p>';
                        echo '</div>';
                    }
                }

                // If no items match the search query, display "Not found"
                if (ob_get_length() === 0) {
                    echo '<p>Not found</p>';
                }
            }
            ?>
        </div>

        <div class="button-container">
            <a href="logout.php"><button>Logout</button></a>
            <a href="itemslist.php"><button>All Items</button></a>
        </div>
    </div>
</body>
</html>
