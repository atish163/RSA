<?php
namespace RsaEncryptionApi\Service;

include_once '../../../vendor/autoload.php';

use phpseclib\Crypt\RSA;

$rsa = new RSA();
$rsa->setHash('sha1');
$rsa->setMGFHash('sha1');
$rsa->setEncryptionMode(RSA::ENCRYPTION_OAEP);
$rsa->setPrivateKeyFormat(RSA::PRIVATE_FORMAT_PKCS1);
$rsa->setPublicKeyFormat(RSA::PUBLIC_FORMAT_PKCS1);

$res = $rsa->createKey(1024);

$privateKey = $res['privatekey'];
$publicKey  = $res['publickey'];

file_put_contents('../../../assets/keypair/public.key', $publicKey);
file_put_contents('../../../assets/keypair/private.key', $privateKey);

echo base64_encode($privateKey);