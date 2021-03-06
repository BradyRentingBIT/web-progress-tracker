<?php session_start();?>
<!DOCTYPE html>
<html>

<!-- Head -->
<?php require_once 'includes/head.php' ?>

<body class="bg-lighter">
<div class="main-content">

    <!-- Navbar -->
    <?php require_once 'includes/navbar.php' ?>

    <!-- Header -->
    <div class="header bg-lighter py-7 py-lg-8">
        <div class="separator separator-bottom separator-skew zindex-100">
        </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
        <!-- Table -->
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <small>Inloggen</small>
                        </div>
                        <?php require_once 'includes/login-form.php' ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<?php require_once 'includes/scripts.php' ?>

</body>

</html>