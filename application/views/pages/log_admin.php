<!DOCTYPE html>
<html>
    <head>
        <title> Login</title>
        <meta charset="UTF-8"> 
        <link href="<?php echo site_url('assets/bootstrap/css/bootstrap.css')?>" rel="stylesheet">
        <link href="<?php echo site_url('assets/css/styles.css')?>" rel="stylesheet">
	</head>
	<body>
        <form action="<?php echo site_url('Login/check_logAdmin') ;?>" method="get">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-2"></div>
                    <div class="col-lg-6 col-md-8 login-box">
                        <div class="col-lg-12 login-key">
                            <i class="fa fa-key" aria-hidden="true"></i>
                        </div>
                        <div class="col-lg-12 login-title">
                            Login
                        </div>

                        <div class="col-lg-12 login-form">
                            <div class="col-lg-12 login-form">
                                <form>
                                    <div class="form-group">
                                        <label class="form-control-label">Votre email</label>
                                        <input type="text" class="form-control" name="email" value="<?php echo $admin['email']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Votre mot de passe</label>
                                        <input type="password" class="form-control" name="mdp" value="<?php echo $admin['mdp']; ?>">
                                    </div>

                                    <div class="col-lg-12 loginbttm">
                                        <div class="col-lg-6 login-btm login-text">
                                            <!-- Error Message -->
                                        </div>
                                        <div class="col-lg-6 login-btm login-button">
                                            <button type="submit" class="btn btn-outline-primary">Se connecter</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-2"></div>
                    </div>
                </div>
            </form>
</body>
</html>



