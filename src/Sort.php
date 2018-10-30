<?php
require_once __DIR__.'/../data/database.php';
Class Sort1{

    public function __construct($database)
    {
        echo '<table>';

        foreach ($database as $item){
                if ($item['class'] === 'A'){
                    echo '<tr>';
                    echo '<td>';
                    echo $item['id'];
                    echo '<td>';

                    echo '<td>';
                    echo $item['class'];
                    echo '<td>';

                    echo '<td>';
                    echo $item['name'];
                    echo '<td>';

                    echo '<td>';
                    echo $item['vehicle'];
                    echo '<td>';
                    echo '</tr>';
                }
        }




        echo '</table>';
    }


}

Class Sort2{

    public function __construct($database)
    { echo '<table>';

        foreach ($database as $item){
            if ($item['class'] === 'B'){
                echo '<tr>';
                echo '<td>';
                echo $item['id'];
                echo '<td>';

                echo '<td>';
                echo $item['class'];
                echo '<td>';

                echo '<td>';
                echo $item['name'];
                echo '<td>';

                echo '<td>';
                echo $item['vehicle'];
                echo '<td>';
                echo '</tr>';
            }
        }




        echo '</table>';
    }


}
Class Sort3{

    public function __construct($database)
    { echo '<table>';

        foreach ($database as $item){
            if ($item['class'] === 'C'){
                echo '<tr>';
                echo '<td>';
                echo $item['id'];
                echo '<td>';

                echo '<td>';
                echo $item['class'];
                echo '<td>';

                echo '<td>';
                echo $item['name'];
                echo '<td>';

                echo '<td>';
                echo $item['vehicle'];
                echo '<td>';
                echo '</tr>';
            }
        }




        echo '</table>';
    }


}
