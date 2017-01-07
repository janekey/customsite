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

<!-- topbar starts -->
<div class="navbar navbar-default" role="navigation">

    <div class="navbar-inner">
        <a class="navbar-brand" href="/admin"><span>后台管理</span></a>

        <!-- user dropdown starts -->
        <div class="btn-group pull-right">
            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> 管理员</span>
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="/login/logout">Logout</a></li>
            </ul>
        </div>
        <!-- user dropdown ends -->

        <ul class="collapse navbar-collapse nav navbar-nav top-menu">
            <li><a href="/" target="_blank"><i class="glyphicon glyphicon-globe"></i>前台页面</a></li>
        </ul>

    </div>
</div>

<!-- topbar ends -->
<div class="ch-container">
    <div class="row">

        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <?php $menu = $this->config->item('menu');
                    ?>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li <?php if ($menu == 'index') echo 'class="active"' ?>

                        ><a href="/admin"><i
                                        class="glyphicon glyphicon-home"></i><span> 控制面板</span></a></li>
                        <li <?php if ($menu == 'category') echo 'class="active"' ?>>
                            <a href="/admin/category"><i class="glyphicon glyphicon-align-justify"></i><span> 栏目</span></a>
                        </li>
                        <li <?php if ($menu == 'article') echo 'class="active"' ?>>
                            <a href="/admin/article"><i class="glyphicon glyphicon-font"></i><span> 文章</span></a>
                        </li>
                        <li <?php if ($menu == 'navigation') echo 'class="active"' ?>>
                            <a href="/admin/navigation">
                                <i class="glyphicon glyphicon-globe"></i><span> 导航栏</span>
                            </a>
                        </li>
                        <li <?php if ($menu == 'page') echo 'class="active"' ?>>
                            <a href="/admin/page">
                                <i class="glyphicon glyphicon-globe"></i><span> 页面</span>
                            </a>
                        </li>
                        <li <?php if ($menu == 'image') echo 'class="active"' ?>>
                            <a href="/admin/image"><i
                                        class="glyphicon glyphicon-list-alt"></i><span> 图集</span></a></li>
                        <li <?php if ($menu == 'message') echo 'class="active"' ?>><a href="/admin/message"><i class="glyphicon glyphicon-edit"></i><span> 留言板</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->
        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
                <ul class="breadcrumb">
                    <li><a href="/admin">首页</a></li>
                    <?php
                    $crumbs = $this->config->item('crumbs');
                    while (isset($crumbs)) {
                        if (isset($crumbs['url'])) {
                            echo '<li><a href="' . $crumbs['url'] . '">' . $crumbs['name'] . '</a></li>';
                        } else {
                            echo '<li>' . $crumbs['name'] . '</li>';
                        }
                        $crumbs = isset($crumbs['next']) ? isset($crumbs['next']) : null;
                    }
                    ?>
                </ul>
            </div>