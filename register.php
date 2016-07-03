<!DOCTYPE html>
<html lang="zh_CN">
<head>
    <!--bootstrap -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../_bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <!--bootstrap -->

    <style type="text/css">
        body {
            font-family:黑体;
        }
    </style>
    <title>
        报名成功
    </title>
</head>
<body>
<!-- script -->
<script src="../_bootstrap/js/jquery-1.12.3.min.js"></script>
<script src="../_bootstrap/js/bootstrap.min.js"></script>
<!--请将js放在这里-->
<script>
    function returnindex()
    {
        window.open("index.html","_self");
    }
</script>
<!-- script -->

<div class="container">
    <div class="page-header">
        <h1 align="center">成功提交报名信息</h1>
    </div>

    <div align="center">
        <table>
            <tr>
                <td>
                    <img src="images/success.png">
                </td>
                <td width="50px">&nbsp</td>
                <td width="300px">
                    <h4>亲爱的
                        <span style="color:blue">
                        <?php
                        /**
                         * Created by PhpStorm.
                         * User: yinya
                         * Date: 2016/5/14
                         * Time: 19:17
                         */
                        header("Content-type: text/html; charset=utf-8");
                        $con=mysqli_connect("localhost","root","root","thusast");
                        if(!$con){
                            echo "数据库连接失败";
                        }
                        else{
                            mysqli_query($con,"set names 'utf8' ");
                            mysqli_query($con,"set character_set_client=utf8");
                            mysqli_query($con,"set character_set_results=utf8");

                            $u_n=$_GET['user_name'];
                            $u_s=$_GET['user_sex'];
                            $u_s_n=$_GET['user_student_number'];
                            $u_s_d=$_GET['user_student_depart'];
                            $u_s_c=$_GET['user_student_class'];
                            $u_p_n=$_GET['user_phone_number'];
                            $u_e=$_GET['user_email'];
                            $u_hs=$_GET['user_hobby&speciality'];
                            $u_i1=$_GET['user_intention1'];
                            $u_i2=$_GET['user_intention2'];
                            $u_i3=$_GET['user_intention3'];mysqli_query($con,"INSERT INTO new_member_register(u_n,u_s,u_s_n,u_s_d,u_s_c,u_p_n,u_e,u_hs,u_i1,u_i2,u_i3) VALUES('$u_n',$u_s,'$u_s_n','$u_s_d','$u_s_c','$u_p_n','$u_e','$u_hs','$u_i1','$u_i2','$u_i3')");
                            echo $_GET['user_name'];
                            unlink("file/user.xls");
                            mysqli_query($con,"select * from new_member_register into outfile 'G:/www/thusast/file/user.xls'");
                            }
                        ?>
                        </span>
                        同学，您已成功报名，请关注邮件中的面试提醒！
                    </h4>
                </td>
            </tr>
        </table>
        <br><br>
        <p align="center">
            <button class="btn btn-info" onclick="returnindex()">
                返回首页
            </button>
        </p>

    </div>
</div>


</body>
</html>
