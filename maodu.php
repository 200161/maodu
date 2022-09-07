<?php
$num = 240;
$recordDay = 7;
$nowDay = date("d");
$nowTime = date("Y/m/d");
$num = $num + ($nowDay - $recordDay);

?>
<head>
    <meta content="width=device-width,height=device-height,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport">
</head>
<html>
<div style="width: 70%;margin: 0 auto;">
    今天(<u><?=$nowTime?></u>)是毛肚第<b><?=$num?></b>期预约活动<br/>
    请放入要制作的链接：(<a href="">如何获取我的链接？</a> )<br/>
    <form method="post" action="">
        <br/>
        <input style="height: 30px;" type="text" name="mycode" size="40">
        <br/><br/>
        <input style="width: 20%;height30px;margin: 0 auto;" type="submit" name="submit"value="生成">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $mycode = strstr($_POST['mycode'],"code=");
        $myuri = "https://yy.zonma.net//mobile/Mdsmappointmenttest/maotai_table.html?activity_id=".$num."&".$mycode."&select_product=1";
        ?>
        生成成功：
        <br/>
        <textarea rows="5" cols="43" ><?=$myuri?></textarea>
        <br/>
        <a href="<?=$myuri?>">>点击此处查看链接</a>
        <?php
    }else{
        $myuri = "";
    }
    ?>
</div>
</html>

