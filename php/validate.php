<?php

    $users = [
        [   'id' => 1,
            'name' => 'Илья Муромец',
            'email' => 'muromets@gmail.com'],
        [   'id' => 2,
            'name' => 'Алёша Попович',
            'email' => 'popovich@gmail.com'],
        [   'id' => 3,
            'name' => 'Добрыня Никитич',
            'email' => 'nikitich@gmail.com']
    ];

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    $data = Array();

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $data["emailError"] = "Неверный формат EMAIL";
    }

    if ($password !== $confirm) {
        $data["passwordError"] = "Пароли не совпадают";
    }

    foreach ($users as $user) {
        if ($email === $user['email']) {
            $data["userError"] = "Пользователь c таким EMAIL уже зарегистрирован";
        }
    }

    $file = '../log.txt';

    if(!is_file($file)){
        $contents = "This is a log file!\n";
        file_put_contents($file, $contents);
    }

    // Open the file to get existing content
    $current = file_get_contents($file);
    // Append a new person to the file
    $info = date("d-m-Y h:i:s" )." - ".$name." ".$surname." - ".$email." - ";
    if (isset($data["emailError"])) {
        $current .= $info."ERROR - ".$data["emailError"]."\n";
    }
    if (isset($data["passwordError"])) {
        $current .= $info."ERROR - ".$data["passwordError"]."\n";
    }
    if (isset($data["userError"])) {
        $current .= $info."ERROR - ".$data["userError"]."\n";
    }
    if ( (!isset($data["emailError"])) && (!isset($data["passwordError"])) && (!isset($data["userError"])) ) {
        $current .= $info."OK - Успешная регистрация пользователя\n";
    }
    // Write the contents back to the file
    file_put_contents($file, $current);

    echo json_encode($data);
