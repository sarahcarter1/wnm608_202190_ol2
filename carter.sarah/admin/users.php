<?php

include"../lib/php/functions.php";

$users = file_get_json("../data/users.json");



// file_put_contents json_encode explode $_POST
// CRUD, Create Read Update Delete



function showUserPage($user) {

    $classes = implode(",", $user->classes);


    // heredoc
    echo <<<HTML
    <nav class="nav nav-crumbs">
        <ul>
            <li><a href="users.php">Back</a></li>
        </ul>
    </nav>

    <form method="POST" action="">
       
        <div class="form-control">
            <label class="form-label" for="name">Name</label>
            <input type="text" class="form-input" value="$user->name" name="name" id="name" placeholder="John"><br>
        </div>
        <div class="form-control">
            <label class="form-label" for="role">Role</label>
            <input type="text" class="form-input" value="$user->role" name="role" id="role" placeholder="ex. Student, Teacher"><br>
        </div>
        <div class="form-control">
            <label class="form-label" for="user-email">Email</label>
            <input type="text" class="form-input" value="$user->email" name="email" id="email" placeholder="xxx@gmail.com"><br>
        </div>
        <div class="form-control">
            <label class="form-label" for="user-classes">Classes</label>
            <input type="text" class="form-input" value="$classes" name="classes" id="classes" placeholder="ex. 100, 101, 102">
        </div>
        <div class="form-control">
            <input type="submit" class="form-button" value="Save">
        </div>
    </form>
    HTML;
}








?>
<!DOCTYPE html>
<html lang="en">
   <head>
    <meta charset="UTF-8">
    <title>User Admin Page</title>

    <?php include "../parts/meta.php"; ?>
    <?php include "../parts/csspractice.php";?>
   </head>
<body>
    
<header class="navbar">
    <div class="container display-flex">
        <div class="flex-none">
            <h1>User Admin</h1>
        </div>
        <div class="flex-stretch"></div>
        <div class="nav nav-flex flex-none">
            <ul>
                <li><a href="users.php">User List</a></li>
            </ul>
        </div>
    </div>
</header>

<div class="container">
    <div class="card soft">
    
    <?php

    if(isset($_GET['id'])) {
       showUserPage($users[$_GET['id']]);
    }  else {

    ?>
        <h2>User List</h2>
        

        <nav class="nav">
            <ul>
        <?php

        for($i=0;$i<count($users);$i++) {
            echo "<li>
                <a href='users.php?id=$i'>{$users[$i]->name}</a>
                </li>";
        }

        ?>
        </ul>
        </nav>

        <?php } ?>
    </div>
</div>

</body>
</html>