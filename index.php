<?php 
    define('__CONFIG__',true);
    require_once "inc/config.php"; 
?>
<?php require_once "inc/header.php"; ?>

        <div class="uk-section uk-container">
              <?php echo "hello world ";
              echo date("Y m d");

              ?>

              <p>
                <a href="login-system-php/login.php">Login</a>
                <a href="login-system-php/register.php">Register</a>
              </p>
        </div>

<?php require_once "inc/footer.php"; ?>