<?php


            if(isset($_POST['choosen'])) {
                $choon = $_POST['gotit'];


    $host = '127.0.0.1';
    $db   = 'northwind';
    $user = 'root';
    $pass = '';
    $charset = 'utf8';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $my_Data_Base = new PDO($dsn, $user, $pass, $opt);

                        $DB_Computers = $my_Data_Base->query('SELECT * FROM l40_computers');
                        $DB_Screens = $my_Data_Base->query('SELECT * FROM l40_screens');
                        $DB_Mouses = $my_Data_Base->query('SELECT * FROM l40_mouses');
                        $DB_Keyboards = $my_Data_Base->query('SELECT * FROM l40_keyboards');

                     while ($row = $DB_Computers->fetch())
                    {   
                            if($choon == $row["id"]){
                                echo "your order is complete, you orderd: " . $row['manufacturer'];
                            }
                    }
                     while ($row = $DB_Screens->fetch())
                    {   
                            if($choon == $row["id"]){
                                echo "your order is complete, you orderd: " . $row['manufacturer'];
                            }
                    }
                     while ($row = $DB_Mouses->fetch())
                    {   
                            if($choon == $row["id"]){
                                echo "your order is complete, you orderd: " . $row['manufacturer'];
                            }
                    }
                     while ($row = $DB_Keyboards->fetch())
                    {   
                            if($choon == $row["id"]){
                                echo "your order is complete, you orderd: " . $row['manufacturer'];
                            }
                    }


            }
