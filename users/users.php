<?php

function getUsers() {
    return json_decode(file_get_contents(__DIR__ . '/users.json'), true);
}

function getUserById($id) {
    $users = getUsers();
    foreach ($users as $user) {
        if ($user['id'] == $id) {
            return $user;
        }
    }
    return null;
}

function putJson($users) {
    file_put_contents(__DIR__ . '/users.json', json_encode($users, JSON_PRETTY_PRINT));
}

function updateUser($data, $id) {
    $updateUser = [];
    $users = getUsers();
    foreach ($users as $i => $user) {
        if ($user['id'] == $id) {
            $users[$i] = $updateUser = array_merge($user, $data);
        }
    }
    putJson($users);
    return $updateUser;
}

function uploadImage($file, $userId) {
    if (isset($_FILES['picture']) && !empty($_FILES['picture']['name'])) {
        if (!is_dir(__DIR__ . "/images")) {
            mkdir(__DIR__ . "/images");
        }
        // Get the file extension from filename
        $fileName = $file['name'];
        $dotPosition = strpos($fileName, '.');
        $extension = substr($fileName, $dotPosition + 1);
        move_uploaded_file($file['tmp_name'], __DIR__ . "/images/$userId.$extension");

        $user['extension'] = $extension;

        updateUser($user, $userId);
    }
}


function createUser($data) {
    $users = getUsers();
    $data['id'] = rand(100000, 200000);
    $users[] = $data;

    echo '<pre>';
    echo "USERS:\n";
    var_dump($users);
    echo '</pre>';
    putJson($users);
    return $data;
}

function deleteUser($id){
    $users = getUsers();

    foreach($users as $i => $user) {
        if($user['id'] == $id){
            array_splice($users, $i,1);
        }
    }
    var_dump($users);
    putJson($users);
}
