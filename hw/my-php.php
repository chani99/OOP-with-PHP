<?php
if(isset($_POST['submit'])) {


    //conect to data base

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


    //select

    $Selected = $_POST['select'];

if( $Selected == 'computer') {
            $DB_Computers = $my_Data_Base->query('SELECT * FROM l40_computers');
            echo "<form action='php-choose.php' method='post'><select>";
                    while ($row = $DB_Computers->fetch())
                    {
                    echo "<option value=" . $row["id"] . "  name='gotit'>" . "manufacturer: " . $row['manufacturer'] . ", price: " . $row['price'] ."</option>";
                    }
            echo "</select>";
                        echo "<input type='submit' name='choosen'></form>";


} elseif ($Selected  == 'screen') {
            $DB_Screens = $my_Data_Base->query('SELECT * FROM l40_screens');
            echo "<form action='php-choose.php' method='post'><select>";
                    while ($row = $DB_Screens->fetch())
                    {
                    echo "<option value=" . $row["id"] . "  name='gotit'>" . "manufacturer: " . $row['manufacturer'] . ", price: " . $row['price'] ."</option>";
                    }
            echo "</select>";
                        echo "<input type='submit' name='choosen'></form>";

}

elseif ($Selected  == 'mouse') {
            $DB_Mouses = $my_Data_Base->query('SELECT * FROM l40_mouses');
            echo "<form action='php-choose.php' method='post'><select>";
                    while ($row = $DB_Mouses->fetch())
                    {
                    echo "<option value=" . $row["id"] . "  name='gotit'>" . "manufacturer: " . $row['manufacturer'] . ", price: " . $row['price'] ."</option>";
                    }
            echo "</select>";
                        echo "<input type='submit' name='choosen'></form>";

} 

elseif ($Selected  == 'keyboard') {
            $DB_Keyboards = $my_Data_Base->query('SELECT * FROM l40_keyboards');
            echo "<form action='php-choose.php' method='post'><select>";
                    while ($row = $DB_Keyboards->fetch())
                    {
                    echo "<option value=" . $row["id"] . "  name='gotit'>" . "manufacturer: " . $row['manufacturer'] . ", price: " . $row['price'] ."</option>";
                    }
            echo "</select>";
                        echo "<input type='submit' name='choosen'></form>";



            }

}


?>