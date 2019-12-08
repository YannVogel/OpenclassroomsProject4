<?php
require_once('../model/AdminPostManager.php');

if(isset($_POST['newPostTitle']) && trim($_POST['newPostTitle']) !== "" && isset($_POST['newPostContent']) && trim($_POST['newPostContent']) !== "")
{
    $myAdmin = new AdminPostManager();
    $myAdmin->createPost($_POST['newPostTitle'], $_POST['newPostContent']);
    require('../view/adminView.php');
} else
{ ?>
    <div>Une erreur s'est produite.<br />
        <a href="../view/adminView.php">Revenir en arrière.</a>
    </div>

<?php
}