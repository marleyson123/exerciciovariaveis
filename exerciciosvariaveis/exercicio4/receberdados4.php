<?php
   $cota = $_POST["cota"];
   $real = $_POST["real"];


   $dolar = $real / $cota;
   
   echo"O valor em dolar e: {$dolar}";



?>