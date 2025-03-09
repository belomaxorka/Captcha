<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Captcha gallery</title>
</head>
<body>
<div>
    <h1>Other examples:</h1>
    <ul>
        <li><a href="demo.php">Demo (Saves out.jpg local)</a></li>
        <li><a href="inline.php">Inline</a></li>
        <li><a href="form.php">Form</a></li>
        <li><a href="output.php">Output</a></li>
        <li><a href="fingerprint.php">Fingerprint</a></li>
        <li><a href="ocr.php">Ocrad</a></li>
        <li><a href="session.php">Session</a></li>
    </ul>
    <h1>Captcha gallery</h1>
    <?php for ($x = 0; $x < 8; $x++) { ?>
        <?php for ($y = 0; $y < 5; $y++) { ?>
            <img src="output.php?n=<?php echo 5 * $x + $y; ?>"/>
        <?php } ?>
        <br/>
    <?php } ?>
</div>
</body>
</html>
