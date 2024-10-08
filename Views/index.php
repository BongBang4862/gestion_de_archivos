
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <!-- Title -->
    <title><?php echo $data['title']; ?></title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="<?php echo BASE_URL .'Assets/plugins/bootstrap/css/bootstrap.min.css'?>" rel="stylesheet">
    <link href="<?php echo BASE_URL .'Assets/plugins/perfectscroll/perfect-scrollbar.css'?>" rel="stylesheet">
    <link href="<?php echo BASE_URL .'Assets/plugins/pace/pace.css'?>" rel="stylesheet">

    
    <!-- Theme Styles -->
    <link href="<?php echo BASE_URL. 'Assets/css/main.min.css'?>" rel="stylesheet">
    <link href="<?php echo BASE_URL. 'Assets/css/custom.css'?>" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo BASE_URL . 'Assets/images/neptune.png'?>" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo BASE_URL . 'Assets/images/neptune.png' ?>" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="app app-auth-sign-in align-content-stretch d-flex flex-wrap justify-content-end">
        <div class="app-auth-background">

        </div>
        <div class="app-auth-container">
            <div class="logo">
                <a href="index.html"><?php echo $data['title'];?></a>
            </div>
            <p class="auth-description">Gestor de Archivos </p>

            <div class="auth-credentials m-b-xxl">
                <label for="signInEmail" class="form-label">Email address</label>
                <input type="email" class="form-control m-b-md" id="signInEmail" aria-describedby="signInEmail" placeholder="example@neptune.com">

                <label for="signInPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="signInPassword" aria-describedby="signInPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
            </div>

            <div class="auth-submit">
                <a href="#" class="btn btn-primary">Sign In</a>
                <a href="#" class="auth-forgot-password float-end">Forgot password?</a>
            </div>
            <div class="divider"></div>
            <div class="auth-alts">
                <a href="#" class="auth-alts-google"></a>
                <a href="#" class="auth-alts-facebook"></a>
                <a href="#" class="auth-alts-twitter"></a>
            </div>
        </div>
    </div>
    
    <!-- Javascripts -->
    <script src="<?php echo BASE_URL . 'Assets/plugins/jquery/jquery-3.5.1.min.js'?>"></script>
    <script src="<?php echo BASE_URL . 'Assets/plugins/bootstrap/js/bootstrap.min.js'?>"></script>
    <script src="<?php echo BASE_URL . 'Assets/plugins/perfectscroll/perfect-scrollbar.min.js'?>"></script>
    <script src="<?php echo BASE_URL . 'Assets/plugins/pace/pace.min.js'?>"></script>
    <script src="<?php echo BASE_URL . 'Assets/js/main.min.js'?>"></script>
    <script src="<?php echo BASE_URL . 'Assets/js/custom.js'?>"></script>
</body>
</html>