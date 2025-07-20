<?php
// TEST CONFIG - Debug Railway environment
echo "<h3>Railway Environment Debug:</h3>";
echo "<pre>";
echo "MYSQLHOST: " . ($_SERVER['MYSQLHOST'] ?? 'NOT SET') . "\n";
echo "MYSQLUSER: " . ($_SERVER['MYSQLUSER'] ?? 'NOT SET') . "\n";
echo "MYSQLDATABASE: " . ($_SERVER['MYSQLDATABASE'] ?? 'NOT SET') . "\n";
echo "MYSQLPORT: " . ($_SERVER['MYSQLPORT'] ?? 'NOT SET') . "\n";
echo "MYSQLPASSWORD: " . (isset($_SERVER['MYSQLPASSWORD']) ? '[HIDDEN]' : 'NOT SET') . "\n";

// Force production mode for testing
echo "\n--- Attempting Railway Connection ---\n";

if (isset($_SERVER['MYSQLHOST'])) {
    $servername = $_SERVER['MYSQLHOST'];
    $username = $_SERVER['MYSQLUSER'];
    $password = $_SERVER['MYSQLPASSWORD'];
    $dbname = $_SERVER['MYSQLDATABASE'];
    $port = $_SERVER['MYSQLPORT'];
    
    echo "Connecting to: $servername:$port\n";
    echo "Database: $dbname\n";
    echo "User: $username\n";
    
    $handler = mysqli_connect($servername, $username, $password, $dbname, $port);
    
    if ($handler) {
        echo "✅ SUCCESS! Railway MySQL connection works!\n";
        mysqli_close($handler);
    } else {
        echo "❌ CONNECTION FAILED: " . mysqli_connect_error() . "\n";
    }
} else {
    echo "❌ Railway environment variables not found!\n";
}

echo "</pre>";

// Function for main app to use
function getTestDBConnection() {
    if (isset($_SERVER['MYSQLHOST'])) {
        return mysqli_connect(
            $_SERVER['MYSQLHOST'],
            $_SERVER['MYSQLUSER'], 
            $_SERVER['MYSQLPASSWORD'],
            $_SERVER['MYSQLDATABASE'],
            $_SERVER['MYSQLPORT']
        );
    }
    return false;
}
?> 