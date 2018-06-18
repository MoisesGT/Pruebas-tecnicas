<?php
$registered = $_POST['registered'];
$tradingName = $_POST['tradingName'];
$ABN = $_POST['ABN'];
$fullName = $_POST['fullName'];
$birth = $_POST['birth'];
$phone = $_POST['phone'];
$addres = $_POST['addres'];
$taxFile = $_POST['taxFile'];
$dateEmploye = $_POST['dateEmploye'];
// $ongoing = $_POST['ongoing'];
// $temporary = $_POST['temporary'];
// $other1 = $_POST['other1'];
// $full = $_POST['full'];
// $part = $_POST['part'];
// $casual = $_POST['casual'];
// $other2 = $_POST['other2'];
$ordinaryHourWork = $_POST['ordinaryHourWork'];
$methodPay = $_POST['methodPay'];
$payPeriod = $_POST['payPeriod'];
$payDay = $_POST['payDay'];
$Apprenticeship = $_POST['Apprenticeship'];
$nameOfAward = $_POST['nameOfAward'];
$clasification = $_POST['clasification'];

$nombre_archivo = "logs.txt"; 
  
     if(file_exists($nombre_archivo))
     {
         $mensaje = "El Archivo $nombre_archivo se ha modificado";
         $mensaje = "Registered " . $registered . "," . "Trading Name" . $tradingName ;
     }
  
     else
     {
         $mensaje = "El Archivo $nombre_archivo se ha creado";
     }
  
     if($archivo = fopen($nombre_archivo, "a"))
     {
         if(fwrite($archivo, date("d m Y H:m:s"). " ". $mensaje. "\n"))
         {
             echo validarValor($registered,"Registered:");
             echo validarValor($tradingName,"Trading Name:");
             echo validarValor($ABN,"ABN:");
             echo validarValor($fullName,"Full Name:");
             echo validarValor($birth,"Bith:");
             echo validarValor($phone,"Phone:");
             echo validarValor($addres,"Addres:");
             echo validarValor($dateEmploye,"Date Employe:");
            //  echo validarValor($ongoind,"Ongoing:");
            //  echo validarValor($temporary,"emporary:");
            //  echo validarValor($other1,"Other 1:");
            //  echo validarValor($full,"Full Time:");
            //  echo validarValor($part,"Part Time:");
            //  echo validarValor($casual,"Casual:");
            //  echo validarValor($other2,"Other 2:");
             echo validarValor($ordinaryHourWork," Ordinary Hour Work:");
             echo validarValor($methodPay,"Method Pay:");
             echo validarValor($payDay,"Pay Dary:");
             echo validarValor($Apprenticeship,"Apprenticeship:");
             echo validarValor($nameOfAward,"Name of Award:");
             echo validarValor($clasification,"Clasification:");
         }
         else
         {
             echo "Ha habido un problema al crear el archivo";
         }
  
         fclose($archivo);
     }

     function validarValor($arg,$clave)
    {
        if($arg != null && $arg != "")
        return  $clave  . " " . $arg;
    }

?>
