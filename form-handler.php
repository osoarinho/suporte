<?php
require_once __DIR__ . '/../form_security.php';

// Handler de formulário - Suporte Técnico
$config = [
    'site_name'      => 'Suporte Técnico Remoto',
    'recipient'      => 'contato@soarinho.com',
    'subject_prefix' => '[Suporte]',
    'fields'         => ['name', 'email', 'phone', 'problem'],
    'required'       => ['name', 'email', 'phone', 'problem'],
    'email_field'    => 'email',
    'phone_field'    => 'phone',
    'name_field'     => 'name',
    'subject_field'  => 'problem',
];

$result  = form_security_process($config);
$status  = $result['success'] ? 'ok' : 'error';
$message = urlencode($result['message']);

$redirectUrl = 'index.html?status=' . $status . '&msg=' . $message . '#contact';
header('Location: ' . $redirectUrl);
exit;

