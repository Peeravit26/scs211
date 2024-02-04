<?php
$people_pp = json_decode(file_get_contents("https://raw.githubusercontent.com/arc6828/SCS211/main/week13/staff.json"),true);
$people = $people_pp["people"];
?>

<?php foreach($people as $row){ ?>
    <div><?=$row["name"]?>
<?php } ?>



