<?php
session_start();


function is_session(){
    return isset($_SESSION['login']);
}


?>
<?php if(is_session()): ?>

<h2>
    <?php echo "Hello " . $_SESSION['login']?>
</h2>

<?php endif;?>

<li><a href="first.php">First page</a></li>
