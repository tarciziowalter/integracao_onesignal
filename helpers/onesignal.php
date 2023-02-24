<?php 

define("APP_ID", "42848735-ddd5-49b0-8666-d90a085afba7");
define("REST_API_KEY", "NDUzMWRmNjgtYTY2ZC00MmRiLWJkNzctZmZmNWViYmFlMDMz");

function createNotification(){

    $data = [
        "included_segments" => [
            "Novo pedido"
        ],
        "contents" => [
            "en" => "O cliente fez um novo pedido na plataforma"
        ],
        "name" => "Novo pedido",
        "external_id" => guidv4(),
        "include_player_ids" => ['fac3324e-be14-430c-b63c-9e73068ca84c'],
        "app_id" => APP_ID
    ]; 
    
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data, true));

    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Accept: application/json",
        "Content-Type: application/json",
        "Authorization: Basic " . REST_API_KEY
    ));

    $response = curl_exec($ch);
    curl_close($ch);
    
    var_dump($response); die;
}

function cancelNotification(string $notification_id){

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications/{$notification_id}?app_id=" . APP_ID);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, FALSE);

    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Accept: application/json",
        "Authorization: Basic " . REST_API_KEY
    ));

    $response = curl_exec($ch);
    curl_close($ch);
    
    var_dump($response); die;
}

function viewApp(){

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/apps/" . APP_ID);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, FALSE);

    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Content-Type: application/json",
        "Accept: text/plain",
        "Authorization: Basic " . REST_API_KEY
    ));

    $response = curl_exec($ch);
    curl_close($ch);

    var_dump($response); die;

}

function viewNotification(string $notification_id){

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications/" . $notification_id . "?app_id=" . APP_ID);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, FALSE);

    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Content-Type: application/json",
        "Authorization: Basic " . REST_API_KEY
    ));

    $response = curl_exec($ch);
    curl_close($ch);

    var_dump($response); die;

}

function viewNotifications(){

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications?app_id=" . APP_ID);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, FALSE);

    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Content-Type: application/json",
        "Accept: text/plain",
        "Authorization: Basic " . REST_API_KEY
    ));

    $response = curl_exec($ch);
    curl_close($ch);

    var_dump($response); die;

}

function viewPlayers(){

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/players?app_id=" . APP_ID);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, FALSE);

    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Content-Type: application/json",
        "Accept: application/json",
        "Authorization: Basic " . REST_API_KEY
    ));

    $response = curl_exec($ch);
    curl_close($ch);

    var_dump($response); die;

}

function viewPlayer(string $player_id){

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/players/" . $player_id);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, FALSE);

    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Content-Type: application/json",
        "Accept: application/json",
        "Authorization: Basic " . REST_API_KEY
    ));

    $response = curl_exec($ch);
    curl_close($ch);

    var_dump($response); die;

}


function deletePlayerRecord(string $player_id){

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/players/{$player_id}?app_id=" . APP_ID);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, FALSE);

    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Accept: application/json",
        "Authorization: Basic " . REST_API_KEY
    ));

    $response = curl_exec($ch);
    curl_close($ch);
    
    var_dump($response); die;
}