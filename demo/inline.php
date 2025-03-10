<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Gregwar\Captcha\CaptchaBuilder;

$captcha = new CaptchaBuilder();
$captcha->build();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Inline Captcha</title>
</head>
<body>
<div>
    <h1>Inline Captcha</h1>
    <img src="<?php echo $captcha->inline(); ?>"/><br/>
    Phrase: <?php echo $captcha->getPhrase(); ?>
</div>
</body>
</html>
