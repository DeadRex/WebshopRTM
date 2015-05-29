<?php

require_once 'core/init.php';

if(Session::exists('success')){
    echo Session::flash('success');
}

$user = new User();

if($user->isLoggedIn()){
    ?>

    <p>Hello, <a href="profile.php?user=<?php echo escape($user->data()->username);?>"><?php echo escape($user->data()->username);?></a></p>

    <ul>
        <li><a href="logout.php">Log Out</a></li>
        <li><a href="update.php">Update Detail</a></li>
        <li><a href="changePassword.php">Change Password</a></li>
    </ul>

    <?php

    if($user->hasPermission('admin')){
        echo '<p>You are an administratior.</p>';
    }

}else{
    ?>
    <p>You need to log in.</p>
    <p><a href="register.php">Register</a></p>
    <p><a href="login.php">Login</a></p>
<?php
}

?>

<html>
<?php include_once('resources/head.php'); ?>

<body>
<div id="logo-text">
    <?php include_once('resources/logo-text.php'); ?>
</div>

<div id="content">
    <div id="menu-balk">
        <?php include_once('resources/menu-balk.php'); ?>
    </div>

    <div id="main">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    </div>

    <div id="extra">
        <?php include_once('resources/extra.php'); ?>
    </div>
</div>
</body>

<footer>
    <?php include_once('resources/footer.php'); ?>
</footer>
</html>