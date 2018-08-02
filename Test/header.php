<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
    <title>LED Kontrol</title>

<?php

$url1='/Test/index/led1.php';
$url2='/Test/index/led2.php';
$url3='/Test/index/led3.php';

//-- settings --//

//brainboxes serial ports
//on 'nix start with cu.usbserial-
//on windows starts with com : must be lower case in windows and end with a colon
$portName = 'COM4';
$baudRate = 38400;
$bits = 8;
$spotBit = 1;
$readLength=1024;

function echoFlush($string)
{
  echo $string . "\n";
  flush();
  ob_flush();
}

if(!extension_loaded('dio'))
{
  echoFlush( "PHP Direct IO does not appear to be installed for more info see: http://www.php.net/manual/en/book.dio.php" );
  exit;
}



if($_SERVER['SCRIPT_NAME']==$url1){

  //document.getElementById("deneme").innerHTML="Oldu mu?";
  try 
  {
  //the serial port resource
  $bbSerialPort;
  
  echoFlush(  "Connecting to serial port: {$portName}" );
  
  if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') 
  { 
    $bbSerialPort = dio_open($portName, O_RDWR );
    //we're on windows configure com port from command line
    exec("mode {$portName} baud={$baudRate} data={$bits} stop={$spotBit} parity=n xon=on");
  } 
  else //'nix
  {

  }
  
  if(!$bbSerialPort)
  {
    echoFlush( "Seri Port Açılamadı {$portName} ");
    exit;
  }
  
  // send data
  $dataToSend = "A\n";
  echoFlush( "\n Seri Porttan Gelen Bilgi: \"{$dataToSend}\"" );
  $bytesSent = dio_write($bbSerialPort, $dataToSend );
  
  dio_close($bbSerialPort);

  } 
  catch (Exception $e) 
  {
    echoFlush(  $e->getMessage() );
    exit(1);
  }

}
else if($_SERVER['SCRIPT_NAME']==$url2){

  //document.getElementById("deneme").innerHTML="Oldu mu?";
  try 
  {
  //the serial port resource
  $bbSerialPort;
  
  echoFlush(  "Connecting to serial port: {$portName}" );
  
  if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') 
  { 
    $bbSerialPort = dio_open($portName, O_RDWR );
    //we're on windows configure com port from command line
    exec("mode {$portName} baud={$baudRate} data={$bits} stop={$spotBit} parity=n xon=on");
  } 
  else //'nix
  {

  }
  
  if(!$bbSerialPort)
  {
    echoFlush( "Seri Port Açılamadı {$portName} ");
    exit;
  }
  
  // send data
  $dataToSend = "B\n";
  echoFlush( "\n Seri Porttan Gelen Bilgi: \"{$dataToSend}\"" );
  $bytesSent = dio_write($bbSerialPort, $dataToSend );
  
  dio_close($bbSerialPort);

  } 
  catch (Exception $e) 
  {
    echoFlush(  $e->getMessage() );
    exit(1);
  }
}
else if($_SERVER['SCRIPT_NAME']==$url3){

  //document.getElementById("deneme").innerHTML="Oldu mu?";
  try 
  {
  //the serial port resource
  $bbSerialPort;
  
  echoFlush(  "Connecting to serial port: {$portName}" );
  
  if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') 
  { 
    $bbSerialPort = dio_open($portName, O_RDWR );
    //we're on windows configure com port from command line
    exec("mode {$portName} baud={$baudRate} data={$bits} stop={$spotBit} parity=n xon=on");
  } 
  else //'nix
  {

  }
  
  if(!$bbSerialPort)
  {
    echoFlush( "Seri Port Açılamadı {$portName} ");
    exit;
  }
  
  // send data
  $dataToSend = "C\n";
  echoFlush( "\n Seri Porttan Gelen Bilgi: \"{$dataToSend}\"" );
  $bytesSent = dio_write($bbSerialPort, $dataToSend );
  
  dio_close($bbSerialPort);

  } 
  catch (Exception $e) 
  {
    echoFlush(  $e->getMessage() );
    exit(1);
  }
}

?>

    
    <script src="/Test/Content/Templete/js/html5.js"></script>

    <script src="/Test/Content/Templete/js/app.js"></script>


    <script src="/Test/Content/Templete/js/jquery-1.7.2.min.js"></script>
    <!--[if (gte IE 6)&(lte IE 8)]><script src="/Test/Content/Templete/js/selectivizr.js"></script><![endif]-->
    <script src="/Test/Content/Templete/js/jquery.flexslider-min.js"></script>
    <script src="/Test/Content/Templete/js/scripts.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery.js"></script>

    <script>
    var led1durum = "kapali";
    var led2durum = "kapali";
    var led3durum = "kapali";

    function changeImage1() {
      var image = document.getElementById('myImage1');

      if (image.src.match("bulbon")) {
        image.src = "/Test/Content/Templete/img/pic_bulboff.gif";
        led1durum = "kapali";
      } else {

        image.src = "/Test/Content/Templete/img/pic_bulbon.gif";
        led1durum = "acik";
      }
    }



    function changeImage2() {

      var image = document.getElementById('myImage2');

      if (image.src.match("bulbon")) {
        image.src = "/Test/Content/Templete/img/pic_bulboff.gif";
        led2durum = "kapali";
      } else {

        image.src = "/Test/Content/Templete/img/pic_bulbon.gif";
        led2durum = "acik";
      }
    }
    function changeImage3() {
	
      var image = document.getElementById('myImage3');

      if (image.src.match("bulbon")) {
        image.src = "/Test/Content/Templete/img/pic_bulboff.gif";
        led3durum = "kapali";
      } else {

        image.src = "/Test/Content/Templete/img/pic_bulbon.gif";
        led3durum = "acik";
      }
    }

    function changeButton1()
    {
      var elem = document.getElementById("myButton1");
     

      if (led1durum == "acik") {
        elem.textContent = "KAPAT";
      }
      else {
        elem.textContent = "AÇ";
      }
    }

    function changeButton2()
    {
      var elem = document.getElementById("myButton2");

      if (led2durum == "acik") {
        elem.textContent = "KAPAT";
      }
      else {
        elem.textContent = "AÇ";
      }
    }

    function changeButton3()
    {
      var elem = document.getElementById("myButton3");

      if (led3durum == "acik") {
        elem.textContent = "KAPAT";
      }
      else {
        elem.textContent = "AÇ";
      }
    }

    function initialButtons()
    {
      var led1 = document.getElementById("myButton1");
      var led2 = document.getElementById("myButton2");
      var led3 = document.getElementById("myButton3");

      if (led1durum == "kapali") {
        led1.textContent = "AÇ";
      }
      else {
        led1.textContent = "KAPAT";
      }

      if (led2durum == "kapali") {
        led2.textContent = "AÇ";
      }
      else {
        led2.textContent = "KAPAT";
      }

      if (led3durum == "kapali") {
        led3.textContent = "AÇ";
      }
      else {
        led3.textContent = "KAPAT";
      }

    }

    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" type="image/x-icon" href="/Test/Content/Templete/img/favicon.ico">
    <link rel="stylesheet" href="/Test/Content/bootstrap-theme.css">
    <link rel="stylesheet" href="/Test/Content/bootstrap.css">
    <link rel="stylesheet" href="/Test/Content/site.css">
    <link rel="shortcut icon" type="image/png" href="/Test/Content/Templete/img/favicon.png">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/Test/Content/Templete/css/style.css">
    <!--[if lt IE 9]><script src="/Test/Content/Templete/js/html5.js"></script><![endif]-->
</head>
<body onload="initialButtons()">
    <div class="container">
        