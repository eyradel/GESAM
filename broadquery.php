<?php

function getbroadcast()
{
    return json_decode(file_get_contents(__DIR__ . '/broadcast.json'), true);
}



function create($data)
{
    $broadcast = getbroadcast();

    $data['id'] = rand(1000000, 2000000);
    $broadcast[] = $data;
    

    put($broadcast);

    return $data;
}

function put($broadcast)
{
    file_put_contents(__DIR__ . '/broadcast.json', json_encode($broadcast, JSON_PRETTY_PRINT));
}
