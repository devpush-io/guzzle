<?php

require __DIR__ . '/vendor/autoload.php';

$apiUrl = 'https://dummyjson.com';
$client = new GuzzleHttp\Client(['base_uri' => $apiUrl]);

// Send GET request to get a list of todos
//$response = $client->get('todos');

// Send GET request to a single todo
//$response = $client->get('todos/3');

// Send POST request to add a new todo to JSON Placeholder API
$response = $client->request(
    'POST',
    'todos/add',
    ['json' => ['todo' => 'This is a sample ToDo', 'userId' => 1, 'completed' => false]]
);

// Output API response
echo $response->getBody();
