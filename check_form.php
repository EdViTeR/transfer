<?php

$token = "8529900876:AAHi8ge6UXCXRT8oPM4Lh9f368yoqjig3-8";
$chat_id = "757758342";

$name    = $_POST['name'] ?? '';
$phone   = $_POST['phone'] ?? '';
$email   = $_POST['email'] ?? '';
$faculty = $_POST['faculty'] ?? '';
$message = $_POST['message'] ?? '';

$text = "📩 *Новая заявка*\n\n"
      . "👤 ФИО: $name\n"
      . "📞 Телефон: $phone\n"
      . "📧 Email: $email\n"
      . "🎓 Факультет: $faculty\n"
      . "💬 Сообщение:\n$message";

$url = "https://api.telegram.org/bot$token/sendMessage";

file_get_contents($url . "?" . http_build_query([
    'chat_id' => $chat_id,
    'text' => $text,
    'parse_mode' => 'Markdown'
]));

header("Location: index.html?success=1");
exit;