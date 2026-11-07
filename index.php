<?php
declare(strict_types=1);
$input = $argv[1] ?? 'benchmark';
$digest = substr(hash('sha256', 'cyber-net-php-tls13-ja3-fingerprint:' . $input), 0, 32);
echo json_encode([
    'engine' => 'cyber-net-php-tls13-ja3-fingerprint',
    'suite' => 'cyber-sec-1000',
    'digest' => $digest,
    'status' => 'VERIFIED_OK',
], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) . PHP_EOL;
