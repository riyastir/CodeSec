<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>CodeSec - Missing Person Finder</title>

    <!-- Styles -->
    <!--<link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="/css/style.css" rel="stylesheet">
	<?php $__env->startSection('header'); ?>
	<?php $__env->stopSection(); ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark primary-color">
    <a class="navbar-brand" href="/">CodeSec</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
        aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/"><i class="fa fa-home"></i> Home</a> <span class="sr-only">(current)</span></a>
            </li>
			<li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="#">
                                <i class="fa fa-envelope"></i> Contact
                            </a>
                        </li>
			
			<?php if(Auth::guest()): ?>
			<li class="nav-item">
               <a class="nav-link waves-effect waves-light" href="/login">
               <i class="fa fa-key"></i> Login</a>
            </li>
			<?php else: ?>
			<li class="nav-item">
               <a class="nav-link waves-effect waves-light" href="#">
               <i class="fa fa-gear"></i> Settings</a>
            </li>
			<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <i class="fa fa-user"></i> Profile </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                                <a class="dropdown-item waves-effect waves-light" href="#">My account</a>
								<a class="dropdown-item waves-effect waves-light" href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
										<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                            </div>
                        </li>
						<?php endif; ?>
        </ul>
		
    </div>
</nav>
	<?php echo $__env->yieldContent('content'); ?>;
    <!-- Scripts -->
    <!--<script src="<?php echo e(asset('js/app.js')); ?>"></script>-->
    <!-- JQuery -->
    <script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="/js/mdb.min.js"></script>
	<?php echo $__env->yieldContent('footer'); ?>
</body>
</html>
