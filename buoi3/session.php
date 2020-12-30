<?php 
session_start();
$name = "Duc";
// $_SESSION['name'] = $name;
session_destroy();
// unset($_SESSION['name']);
?>
<a href="session2.php?name=<?php echo $name ?>">session2</a>