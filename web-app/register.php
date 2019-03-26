<!DOCTYPE html>
<html>

<!-- We require the header here -->
<?php require_once 'includes/head.php' ?>

<body class="bg-lighter">
<div class="main-content">

    <!-- We require the header here -->
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
                            <small>Registreren</small>
                        </div>
                        <?php require_once 'includes/register-form.php' ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Argon Scripts -->
<!-- Core -->
<script src="assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- Argon JS -->
<script src="assets/js/argon.js?v=1.0.0"></script>
</body>

</html>