<?php

session_start();
require_once __DIR__. '/vendor/autoload.php';

if (file_exists(__DIR__ . '/.env')) {
    $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
}

$host = $_ENV['DB_HOST'];
$dbname = $_ENV['DB_NAME'];
$user = $_ENV['DB_USER'];
$pass = $_ENV['DB_PASSWORD'];        

$bdd = new \PDO(
    "mysql:host=".$host.";dbname=".$dbname.";charset=utf8", 
    $user, 
    $pass
);

$articles = $bdd->prepare('SELECT * FROM articles');
$articles->execute(array());
$articles = $articles->fetchAll();

foreach($articles as $article): 
?>

<h1><?= $article['title']; ?></h1>
<p><?= $article['content']; ?></p>

<?php endforeach; ?>