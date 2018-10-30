<?php


spl_autoload_register(function ($class) {

    // project-specific namespace prefix
    $prefix = 'src\\';

    // base directory for the namespace prefix
    $base_dir = __DIR__ . '/src/';

    // does the class use the namespace prefix?
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        // no, move to the next registered autoloader
        return;
    }

    // get the relative class name
    $relative_class = substr($class, $len);

    // replace the namespace prefix with the base directory, replace namespace
    // separators with directory separators in the relative class name, append
    // with .php
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    // if the file exists, require it
    if (file_exists($file)) {
        require $file;
    }
});











$database = [
    ['id'=> 1, 'class' => 'A', 'name' => 'Вася Ветров', 'vehicle' => 'yamaha'],
    ['id'=> 2, 'class'=> 'C', 'name'=> 'Петя Пупкин', 'vehicle'=> 'suzuki'],
    ['id'=> 3, 'class' => 'A', 'name' => 'Александр Петров', 'vehicle' => 'honda'],
    ['id'=> 4, 'class' => 'A', 'name' => 'Олег Меньшиков', 'vehicle' => 'yamaha'],
    ['id'=> 5, 'class'=> 'C', 'name'=> 'Евгений Стычкин', 'vehicle'=> 'suzuki'],
    ['id'=> 6, 'class' => 'B', 'name' => 'Таисия Вилкова', 'vehicle' => 'honda'],
    ['id'=> 7, 'class' => 'B', 'name' => 'Алексей Чупов', 'vehicle' => 'yamaha'],
    ['id'=> 8, 'class'=> 'C', 'name'=> 'Ян Цапник', 'vehicle'=> 'suzuki'],
    ['id'=> 9, 'class' => 'A', 'name' => 'Егор Баранов', 'vehicle' => 'honda'],
    ['id'=> 10, 'class' => 'A', 'name' => 'Валерий Федорович', 'vehicle' => 'yamaha'],
    ['id'=> 11, 'class'=> 'B', 'name'=> 'Сергей Трофимов', 'vehicle'=> 'suzuki'],
    ['id'=> 12, 'class' => 'A', 'name' => 'Александр Цекало', 'vehicle' => 'honda'],
    ['id'=> 13, 'class' => 'B', 'name' => 'Дастин Хоффман', 'vehicle' => 'yamaha'],
    ['id'=> 14, 'class'=> 'C', 'name'=> 'Том Круз', 'vehicle'=> 'suzuki'],
    ['id'=> 15, 'class' => 'C', 'name' => 'Джералд Р. Молен', 'vehicle' => 'honda'],
    ['id'=> 16, 'class' => 'B', 'name' => 'Джек Мёрдок', 'vehicle' => 'yamaha'],
    ['id'=> 17, 'class'=> 'C', 'name'=> 'Ральф Сеймур', 'vehicle'=> 'suzuki'],
    ['id'=> 18, 'class' => 'B', 'name' => 'Бонни Хант', 'vehicle' => 'honda'],
    ['id'=> 19, 'class' => 'A', 'name' => 'Гэйл Матракс', 'vehicle' => 'yamaha']
];