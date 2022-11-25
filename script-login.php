<?php
@$memberid = $_SESSION["UserID"];
if (isset($_POST['register'])) {
    echo "<script type='text/javascript'>";
    echo "window.location='https://aff.123vip.link/aff/11hm7iydum/signup';";
    echo "</script>";
}
if (isset($_POST['contact'])) {
    echo "<script type='text/javascript'>";
    echo "window.location='https://aff.123dic.com/mb/VIP/affiliate';";
    echo "</script>";
}
if (isset($_POST['create-post'])) {
    $name = $_POST["name"];
    $pass = $_POST["pass"];
    $str = $name;
    $num = "0,1,2,3,4,5,6,7,8,9";
    $strlen = strlen($str);
    $TxtOnly = "";
    $NumOnly = "";
    for ($i = 0; $i < $strlen; $i++) {
        $item = substr($str, $i, 1);
        if (strstr($num, $item)) {
            $TxtOnly .= $item;
        } else {
            $NumOnly .= $item;
        }
    }
    $textname = $NumOnly;
    if ($textname == "VIP" || $textname == "vip") {
        echo "<script type='text/javascript'>";
        echo "window.location='https://123mic.com/#!/redirect?username=$name&password=$pass&url=https://app.123vip.link/vip/login&hash=5d85ae864421f769f89ced22';";
        echo "</script>";
    } else {
        echo "<script type='text/javascript'>";
        echo "alert('กรุณาสมัครสมาชิกก่อน !! (เข้าสู่ระบบ)');";
        echo "window.location = 'https://aff.123vip.link/aff/11hm7iydum/signup'; ";
        echo "</script>";
    }
}
