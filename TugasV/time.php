<?php

date_default_timezone_set("Asia/Jakarta");
echo " Time : " .date("h:i:s a");

$b = time();
$hour = date("G",$b);

if ($hour>=0 && $hour<=11)
{
echo "Good Morning, Mr.Aprivisi :) \n<br/><br/>";
}
elseif ($hour >=12 && $hour<=14)
{
echo "Good Afternoon, Mr. Aprivisi :) \n<br/><br/> ";
}
elseif ($hour >=15 && $hour<=20)
{
echo " Good Evening,  Mr.Aprivisi :) \n<br/><br/> ";
}
elseif ($hour >=21 && $hour<=24)
{
echo " Good Night, Mr.Aprivisi :) \n<br/><br/>";
}

$info=$_SERVER['HTTP_USER_AGENT'];

echo "Browser yang Anda Gunakan Adalah $info";

?>