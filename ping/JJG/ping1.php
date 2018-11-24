<?php
header("Content-Type:text/html; charset=utf-8");
?>
<?php 
include_once('Ping.php');
use JJG\Ping as Ping;
for ( $i=0 ; $i<5 ; $i++ ) {
$host = 'saas.xuedianyun.com';
$ping = new Ping($host);
$latency = $ping->ping();
$host2='pclive.xuedianyun.com';
$ping2 = new Ping($host2);

$latency2 = $ping2->ping();


if ($i==1){
	$latency5=$latency2;
	$latency6=$latency;
}
if ($i==2){
	$latency7=$latency2;
	$latency8=$latency;
}
if ($i==3){
	$latency9=$latency2;
	$latency10=$latency;
}
if ($i==4){
	$latency11=$latency2;
	$latency12=$latency;
}

}



if ($latency5 !== false) { 
 print 'pclive ping  is ' . $latency5 . ' ms' ;
}
echo '<br>'; 
if ($latency7 !== false) { 
 print 'pclive ping  is ' . $latency7 . ' ms' ;
}
echo '<br>'; 
if ($latency9 !== false) { 
 print 'pclive ping  is ' . $latency9 . ' ms' ;
}
echo '<br>'; 
if ($latency11 !== false) { 
 print 'pclive ping  is ' . $latency11 . ' ms' ;
}
echo '<br>';
print '---------------------------------------' ;
echo '<br>';




if ($latency6 !== false) { 
 print 'saas ping  is ' . $latency6 . ' ms' ;
}
echo '<br>'; 
if ($latency8 !== false) { 
 print 'saas ping  is ' . $latency8 . ' ms' ;
}
echo '<br>'; 
if ($latency10 !== false) { 
 print 'saas ping  is ' . $latency10 . ' ms' ;
}
echo '<br>'; 
if ($latency12 !== false) { 
 print 'saas ping  is ' . $latency12 . ' ms' ;
}
echo '<br>';



	
	
?>

