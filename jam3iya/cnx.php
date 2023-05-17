<?php
            $dsn="mysql:host=localhost;dbname=jam3iya";
            $uesr="root";
            $pass="";
            $option=array(
                PDO::MYSSQL_ATTR_COMMAND => "SET NAMES UTF8"
            );
            try{
                $con = new PDO($dsn,$uesr,$pass,$option);
                $con->setAttibute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                echo $e-getMessage();
            }
        ?>