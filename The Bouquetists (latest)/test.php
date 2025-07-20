<!DOCTYPE html>
<html>
<head>
    <title>Railway Database Test</title>
</head>
<body>
    <h1>The Bouqetists - Railway Debug Test</h1>
    
    <?php
    require_once('config_test.php');
    ?>
    
    <hr>
    <p><strong>Next Steps:</strong></p>
    <ul>
        <li>If variables show "NOT SET" → Railway MySQL connection wasn't properly configured</li>
        <li>If variables show values but connection fails → Check Railway MySQL service status</li>
        <li>If connection succeeds → We can update the main config.php</li>
    </ul>
</body>
</html> 