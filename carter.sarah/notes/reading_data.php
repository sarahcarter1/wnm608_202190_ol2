<?php

include"../lib/php/functions.php";

// $filename = "notes.json";
// $file = file_get_contents($filename);
// $notes_object = json_decode($file);

// $filename = "notes.json";
// $file = file_get_contents($filename);
// $notes_object = json_decode($file);

$notes_object = file_get_json("notes.json");
$users_array = file_get_json("../data/users.json");


// print_p($notes);


?>

<!DOCTYPE html>
<html lang="en">
   <head>
    <meta charset="UTF-8">
    <title>Reading Data</title>

    <?php include "../parts/meta.php";?>
    <?php include "../parts/csspractice.php";?>
    
   </head>
<body>
    
<div class="container">
    <div class="card soft">
        <h2>Notes</h2>

        <?php

        for($i=0;$i<count($notes_object->notes);$i++) {
            echo "<li>{$notes_object->notes[$i]}</li>";

        }

        ?>
    </div>

    <div class="card soft">
        <h2>Users</h2>

        <?php

        for($i=0;$i<count($users);$i++) {
            echo "<li>
                <strong>{$users[$i]->name}</strong>
                <span>{$users[$i]->role}</span>
                </li>";

        }

        ?>
    </div>
</div>

</body>
</html>