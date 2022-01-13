<?php

function createJson(array $data, int $qnt) {
    $result_array = [];

    for ($i = 0; $i <= $qnt; ++$i) {
        $item_data = [];
        $item_data['id'] = $i;
        foreach ($data as $title => $value) {
            $item_data[$title] = $value . '_' . $i;
        }
        $result_array[] = $item_data;
    }
    return json_encode($result_array);
}

$data = [
    'name' => 'Anthony',
    'username' => 'Nickname',
    'email' => 'email@mail.com',
    'phone' => '88007006655',
    'website' => 'website.com',
];
$arr = createJson($data, 6);
var_dump($arr);
//file_put_contents(__DIR__ . '/../users.json', $arr);
