<!DOCTYPE html>
<html lang="zh_CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../_bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">

    <style rel="stylesheet" type="text/css">
        body{
            font-family:黑体;
            background-image:url("images/headbg.png");
            background-repeat:no-repeat;
        }
    </style>
</head>
<body>
<script src="../_bootstrap/js/jquery-1.12.3.min.js">
</script>
<script src="../_bootstrap/js/bootstrap.min.js">
</script>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">THUSAST</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">首页<span class="sr-only">(current)</span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        活动 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="testtable.html">星火论坛</a></li>
                        <li><a href="#">燎原实践</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="kezhan.html">挑战杯科展</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        赛事<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">新生创意大赛</a></li>
                        <li><a href="#">创意大赛</a></li>
                        <li><a href="#">挑战杯</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">院系科创评级</a></li>
                    </ul>
                </li>
                <li><a href="#">学报</a>

                </li>
                <li><a href="#">本科生学术基金</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        contact<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">邮箱</a></li>
                        <li><a href="#">微信公众号</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">通讯录</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        关于校科协<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">历史</a></li>
                        <li><a href="#">部门设置</a></li>
                        <li><a href="#">美洲之猩</a></li>
                    </ul>
                </li>
                <li><a href="joinin.html">加入校科协</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>
<div class="container">
    <p>&nbsp</p>
<div class="page-header">
    <img src="images/tail.gif" width="120px">
</div>

<?php
/**
 * Created by PhpStorm.
 * User: yinya
 * Date: 2016/5/15
 * Time: 15:09
 */
echo "<a href=\"file/user.xls\">下载表格</a>";
?>
<p>表格为utf8编码，如果出现乱码，请用记事本打开，另存为unicode编码再用excel打开即可</p>
</div>
</body>
</html>
