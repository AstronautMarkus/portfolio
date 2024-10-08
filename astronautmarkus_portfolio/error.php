<?php
$error_code = isset($_GET['code']) ? $_GET['code'] : 500; 
$error_message = isset($_GET['message']) ? $_GET['message'] : 'An unexpected error occurred!'; 

ob_start();
?>

<section class="section">
    <div class="container">
        <div class="box has-shadow animate__animated animate__fadeIn">
            <div class="box">
                <h1 class="title has-text-centered has-text-white is-21 animate__animated animate__fadeInDown" id="contact-title">
                    <i class="fas fa-exclamation-triangle"></i> Error <?php echo $error_code; ?>
                </h1>
            </div>

            <div class="columns is-vcentered is-centered">
                <div class="column is-narrow has-text-centered animate__animated animate__fadeInRight">
                    <figure class="image">
                        <img src="/assets/img/sad_astronaut.jpg" alt="Error Image" id="error_handler_image">
                    </figure>
                </div>
            </div>

            <div class="columns is-vcentered">
                <div class="column is-full animate__animated animate__fadeInLeft">
                    <p class="subtitle has-text-white has-text-centered" id="contact-intro">
                        <?php echo htmlspecialchars($error_message); ?>
                    </p>
                </div>
            </div>

            <div class="columns">
                <div class="column has-text-centered">
                    <div class="buttons is-centered animate__animated animate__fadeInUp">
                        <a href="/index.php" class="button is-purple animate__animated animate__pulse animate__infinite">
                            <i class="fas fa-home"></i> Go back home
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

$content = ob_get_clean();


$title = "Error $error_code - ReyesAndFriends.cl";


include 'base.php';
