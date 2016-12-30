<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>管理后台</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The styles -->
    <link id="bs-css" href="/assets/css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="/assets/css/charisma-app.css" rel="stylesheet">
    <link href='/assets/components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='/assets/components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='/assets/components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='/assets/components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='/assets/components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='/assets/components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='/assets/css/jquery.noty.css' rel='stylesheet'>
    <link href='/assets/css/noty_theme_default.css' rel='stylesheet'>
    <link href='/assets/css/elfinder.min.css' rel='stylesheet'>
    <link href='/assets/css/elfinder.theme.css' rel='stylesheet'>
    <link href='/assets/css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='/assets/css/uploadify.css' rel='stylesheet'>
    <link href='/assets/css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="/assets/components/jquery/jquery.min.js"></script>

</head>

<body>

<div class="ch-container">
    <div class="row">

        <div class="row">
            <div class="col-md-12 center login-header">
                <h2>欢迎来到后台世界</h2>
            </div>
            <!--/span-->
        </div><!--/row-->

        <div class="row">
            <div class="well col-md-5 center login-box">
                <div class="alert alert-info">
                    <?php
                    if (isset($auth) && $auth == 'null') {
                    ?>
                    请输入用户名和密码
                    <?php
                    } else {
                    ?>
                    用户名密码错误
                    <?php
                    }
                    ?>
                </div>
                <form class="form-horizontal" action="login" method="post">
                    <fieldset>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                            <input type="text" class="form-control" placeholder="Username" name="username"/>
                        </div>
                        <div class="clearfix"></div>
                        <br>

                        <div class="input-group input-group-lg">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                            <input type="password" class="form-control" placeholder="Password" name="password"/>
                        </div>
                        <div class="clearfix"></div>

                        <p class="center col-md-5">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </p>
                    </fieldset>
                </form>
            </div>
            <!--/span-->
        </div><!--/row-->
    </div><!--/fluid-row-->

</div><!--/.fluid-container-->

<!-- external javascript -->
<script src="/assets/components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="/assets/js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='/assets/components/moment/min/moment.min.js'></script>
<script src='/assets/components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='/assets/js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="/assets/components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="/assets/components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="/assets/js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="/assets/components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="/assets/components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="/assets/js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="/assets/js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="/assets/js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="/assets/js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="/assets/js/jquery.history.js"></script>


</body>
</html>
