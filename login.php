<?php
// Start a new session or resume the existing session
session_start();

// Sample array to store user data
$users = [
    'maaz' => 
    [
        'password' => 'maaz123',
        'email' => 'maaz@gmail.com',
        'address' => 'Malir Cantt, Sector Dz Karachi'
    ]
    ,
    'sooraj' => 
    [
        'password' => 'sooraj123',
        'email' => 'sooraj@hotmail.com',
        'address' => 'Clifton near SZABIST'
    ],
    'ahmed' => 
    [
        'password' => 'ahmed123',
        'email' => 'ahmed@yahoo.com',
        'address' => 'SD Houses, Asakari 5'
    ],
];

// Check if the login form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $enteredUsername = $_POST['username'];
    $enteredPassword = $_POST['password'];

    // Check if the entered username exists in the user array
    if (isset($users[$enteredUsername])) {
        // Check if the entered password matches the stored password
        if ($enteredPassword === $users[$enteredUsername]['password']) {
            // Valid login, store the username in the session
            $_SESSION['username'] = $enteredUsername;
            $_SESSION['address'] = $users[$enteredUsername]['address'];
            $_SESSION['email'] = $users[$enteredUsername]['email'];
            
            // Redirect to the home page
            header('Location: home.php');
            exit();
        } else {
            $error = "Invalid password. Please try again.";
        }
    } else {
        $error = "Invalid username. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Login Page</h2>
        <form action="login.php" method="POST">
            <input type="text" name="username" placeholder="Enter Username" required>
            <input type="password" name="password" placeholder="Enter Password" required>
            <div class="button-container">
                <button type="submit">Login</button>
            </div>
        </form>
        <div class="button-container">
            <a href="index.php"><button>Back</button></a>
        </div>
        <?php if (isset($error)) : ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
