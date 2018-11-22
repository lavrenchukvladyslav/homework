<?php
//require_once __DIR__.'/../data/database.php';

namespace src;

Class Sort{
//    public function __construct($database, $class){
//
//    }



    public function renderStart($database, $class)
    {
        echo '<table>';

        foreach ($database as $item){
                if ($item['class'] === $class){
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


    public function renderStart1($database, $class)
    {
        echo '<table>';

        foreach ($database as $item){
            if ($item['class'] === $class){
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


