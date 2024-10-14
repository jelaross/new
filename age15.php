<html>
<head>
<title>AGE CALCULATION</title></head>
<body bgcolor="pink">
<h1><center>AGE CALCULATION PROGRAM</center></h1>
<p align="center">
<?php
$odate="06/26/2000";
$odate=date("m/d/y",strtotime($odate));
$then=new DateTime($odate);
$now=new DateTime();$sinceThen=$then->diff($now);
echo "Date of Birth:".$odate.'<br></br>';
echo "Current Date:".date("m/d/y").'<br></br>';
echo $sinceThen->y.'years have passed.<br></br>';
echo $sinceThen->m.'months have passed.<br></br>';
echo $sinceThen->d.' days have passed.<br></br>';
?>
</p>
</body>
</html>
