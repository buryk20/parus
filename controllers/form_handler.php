<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$token = '7250429929:AAEBr20TNvpbhro2qenmtLTYpKnQOOifAhM'; // Замени на новый токен!
$chat_id = '-1002270394927'; // Замени на свой chat_id

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(array('error' => 'Method Not Allowed'));
    exit;
}

// Получаем данные из формы
$name = isset($_POST['name']) ? $_POST['name'] : null;
$phone = isset($_POST['phone']) ? $_POST['phone'] : null;

if (!$name || !$phone) {
    http_response_code(400);
    echo json_encode(array('error' => 'Missing required fields'));
    exit;
}

// Формируем текст сообщения
$message = "📩 *Нова заявка:*\n\n"
    . "👤 *Ім'я:* " . $name . "\n"
    . "📞 *Телефон:* " . $phone;

$telegram_url = "https://api.telegram.org/bot" . $token . "/sendMessage";
$params = array(
    'chat_id' => $chat_id,
    'text' => $message,
    'parse_mode' => 'Markdown',
);

// Отправляем сообщение в Telegram
$response = file_get_contents($telegram_url . '?' . http_build_query($params));

echo json_encode(array(
    'message' => 'Form successfully submitted!',
    'data' => array('name' => $name, 'phone' => $phone),
    'telegram_response' => json_decode($response, true),
));
