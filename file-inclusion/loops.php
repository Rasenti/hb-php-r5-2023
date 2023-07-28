<?php
$title = 'Boucles';
require_once 'data/users.php';
require_once 'layout/header.php';
?>

<!-- FOREACH -->
<h1 class = "main_title text-info m-4">Foreach</h1>
<div class = "row justify-content-center">
<?php foreach ($users as $user) { ?>
    <div class = "card col-3 m-2 bg-info bg-gradient">
      <h3><?php echo $user["name"]; ?></h3>
      <p class = "infos">
        Email : <?php echo $user["email"]; ?><br/>
        Age : <?php echo $user["age"]; ?>
      </p>
    </div>
<?php } ?>
</div>

<!-- WHILE -->
<h1 class = "main_title text-info m-4">While</h1>
<div class = "row justify-content-center">
<?php 
$i = 0;
while ($i < count($users)) { 
?>
  <div class = "card col-3 m-2 bg-info bg-gradient">
    <h3><?php echo $users[$i]["name"]; ?></h3>
    <p class = "infos">
      Email : <?php echo $users[$i]["email"]; ?><br/>
      Age : <?php echo $users[$i]["age"]; ?>
    </p>
  </div>
<?php 
  $i++; 
} ?>
</div>

<?php require_once 'layout/footer.php';
