<?php

use ramit\phpmvc\Application;

/** @var $this ramit\phpmvc\View */

?>

<head>
    <title><?php echo $this->title ?></title>
</head>

<a href="/">Home</a>
<a href="/contact">Contact</a>

<?php if (Application::isGuest()) : ?>
    <a href="/login">Login</a>
    <a href="/register">Register</a>
<?php else : ?>
    <a href="/profile">Profile</a>
    <a href="/logout">Welcome <?php echo Application::$app->user->getDisplayName(); ?> (Logout)</a>
<?php endif; ?>


<?php if (Application::$app->session->getFlash('success')) : ?>
    <div>
        <?php echo Application::$app->session->getFlash('success'); ?>
    </div>

<?php endif; ?>
{{content}}