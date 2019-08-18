<?php
namespace RsaEncryptionApi\Service;

include_once '../../../vendor/autoload.php';

use phpseclib\Crypt\RSA;

$ciphertext = 'DX9hVurnhWvKOF5fjS+0G3hUpcFi8mFjyFNpiPizHJnCkZy6NB41VKb7EMtVzvCPEEZeiPSABNdqaZ3qJ9D2g5aPtVcPxqNKAh0s7cisYk44vOd/xKs9fnxK9rYnb2pwV6gSyCQ0K04J3myK+OXs+XDYxy/Cx3z5tnk9eB1q6e0=';

$rsa = new RSA();

$rsa->loadKey(file_get_contents('../../../assets/keypair/private.key')); // private key
echo $rsa->decrypt(base64_decode($ciphertext));