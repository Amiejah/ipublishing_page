<?php

function getUserIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) //if from shared
    {
        return $_SERVER['HTTP_CLIENT_IP'];
    }
    else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //if from a proxy
    {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
        return $_SERVER['REMOTE_ADDR'];
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <title>Ipublishing</title>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
    <link type="text/css" rel="stylesheet" href="css/custom.css"/>
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Sintony:400,700"/>
</head>
<body>

    <div class="container">
        <div class="row">
            <section class="col-lg-12">
                <h1><b>Gratis</b> iPad of Samsung Tab?</h1>
                <h2>Kies, stap over op energie van Oxxio en ontvang 'm thuis!</h2>
            </section>
        </div>
        <div class="row">

            <div id="progress_bar" class="ui-progress-bar ui-container">
                <div class="ui-progress" style="width: 79%;">
                    <span class="ui-label" style="display:none;">Processing <b class="value">79%</b></span>
                </div><!-- .ui-progress -->
            </div><!-- #progress_bar -->

            <div class="hide-choices">
                <div class="col-lg-6">
                    <a href="#choice-1" class="select-choice"><img src="images/keuze1.jpg" alt="" class="img-thumbnail img-responsive"/></a>
                </div>
                <div class="col-lg-6">
                    <a href="#choice-2" class="select-choice"><img src="images/keuze2.jpg" alt="" class="img-thumbnail img-responsive"/></a>
                </div>
            </div>

            <section class="col-lg-12 hide">
                <form method="post" action="http://localhost:8888/ipublishing/success.php" name="send_mail" class="form-inline">
                    <div class="form-group">
                        <label>
                            <input type="email" placeholder="E-mail" name="clone_email" />
                        </label>
                        <button class="btn btn-large btn-primary">Bekijk actie!</button>
                    </div>

                    <input name="ip_token" type="hidden" value="<?php echo getUserIpAddr(); ?>"/>
                    <input value="choice-1" type="hidden" name="option_choice"/>
                </form>
            </section>
        </div>
    </div>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
</body>
</html>