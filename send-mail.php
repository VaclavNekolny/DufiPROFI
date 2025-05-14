<?php

// ⚠️ Vlož si svůj MailerSend API klíč a ID šablony:
$apiToken = 'mlsn.c9cddbb6c4bbfa709c50b487260f5d01e5666817c44975480903b1ecf61fafd8';
$templateId = '3z0vklo8xq747qrx';
$recipientEmail = 'vaclav.nekolny50@gmail.com'; // kam má email přijít

// Získání dat z formuláře
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$eventDate = $_POST['eventDate'];
$serviceType = $_POST['serviceType'];
$message = $_POST['message'];

// Příprava dat pro API
$data = [
    'from' => [
        'email' => $email,
        'name' => "DufiProfi - formulář: $fullName"
    ],
    'to' => [[
        'email' => $recipientEmail,
        'name' => 'Příjemce'
    ]],
    'template_id' => $templateId,
    'variables' => [
        'fullName' => $fullName,
        'email' => $email,
        'eventDate' => $eventDate,
        'serviceType' => $serviceType,
        'message' => $message
    ]
];

// Odeslání požadavku na MailerSend
$ch = curl_init('https://api.mailersend.com/v1/email');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer ' . $apiToken,
    'Content-Type: application/json'
]);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

// Reakce pro uživatele
if ($httpCode === 202) {
    echo "Zpráva byla úspěšně odeslána.";
} else {
    echo "Došlo k chybě při odesílání. Zkuste to prosím znovu.";
    // Pro debug:
    echo $response;
}
