<?php

$dbname = "world";
$username = "root";
$password = "root";
$dsn = "mysql:dbname=$dbname;host=mysql;charset=utf8mb4";
$driver_options = [];
$query = "show tables";
$records = [];

try {
    $pdo = new PDO($dsn, $username, $password, $driver_options);
    $st = $pdo->query("show tables");
    $records = $st->fetchAll();
}
catch (Exception $e) {
    header("HTTP/1.1 404 Not Found");
    print("<h1>Exception occured</h1>");
    print("<h3>message</h3>");
    print "<pre>";
    print($e->getMessage());
    print "</pre>";
    exit;
}
?>

<h2>Query</h1>
<pre><?php echo "$query;" ?></pre>
<h2>Result</h1>
<pre><?php var_dump($records); ?></pre>

