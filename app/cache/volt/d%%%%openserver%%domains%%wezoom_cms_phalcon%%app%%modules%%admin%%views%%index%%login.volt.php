<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo $this->helper->translate('Login'); ?></title>

        <link href="/vendor/semantic/css/semantic.min.css" rel="stylesheet" type="text/css">

        

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="/vendor/js/html5shiv.js"></script>
            <script src="/vendor/js/respond.min.js"></script>
        <![endif]-->
        <style>
        .container {
            width: 600px;
            margin: 100px auto 0;
        }
        </style>
    </head>
    <body>
        <div class="container">
            <form class="ui form segment" method="post">
                <?php echo $this->flash->output(); ?>
                <div class="field">
                    <label>Username</label>
                    <div class="ui left labeled icon input">
                        <input name="login" type="text" placeholder="Username">
                        <i class="user icon"></i>
                        <div class="ui corner label">
                            <i class="icon asterisk"></i>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label>Password</label>
                    <div class="ui left labeled icon input">
                        <input name="password" type="password">
                        <i class="lock icon"></i>
                        <div class="ui corner label">
                            <i class="icon asterisk"></i>
                        </div>
                    </div>
                </div>
                <div class="ui error message">
                    <div class="header">We noticed some issues</div>
                </div>
                <input type="submit" class="ui blue submit button" value="Login">
            </form>
        </div> <!-- /container -->
    </body>
</html>
