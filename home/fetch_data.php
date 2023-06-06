<?php
// Database connection details
$host = 'db4free.net';
$dbname = 'kousicreddy';
$username = 'kousicreddy2211';
$password = 'kousicreddy2211A!';

try {
    // Connect to the database
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch the updated data from the database
    $stmt = $pdo->query('SELECT * FROM posts order by date DESC');

    // Prepare the HTML markup for each row of data
    $output = '';
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        ob_start();
        $post = $row; // Assign the row to the $post variable
        include('p.php'); // Include the p.php template
        $output .= ob_get_clean(); // Capture the output and append to the $output variable
    }

    // Send the HTML markup as the response
    echo $output;
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    exit();
}
?>
