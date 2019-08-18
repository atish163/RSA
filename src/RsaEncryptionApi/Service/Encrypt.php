<?php
namespace RsaEncryptionApi\Service;

include_once '../../../vendor/autoload.php';

use phpseclib\Crypt\RSA;
use RsaEncryptionApi\Config;

$rsa = new RSA();
$rsa->loadKey(file_get_contents('../../../assets/keypair/public.key')); // public key

$plaintext = 'hgnghjghjghjhgj';

$rsa->setHash('sha1');
$rsa->setMGFHash('sha1');
$rsa->setEncryptionMode(RSA::ENCRYPTION_OAEP);
$ciphertext = $rsa->encrypt($plaintext);

echo base64_encode($ciphertext);