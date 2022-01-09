<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
$menupont = filter_input(INPUT_GET, 'menu', FILTER_SANITIZE_STRING);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tesla</title>
        <link rel="icon" href="images/favicon.svg" sizes="any" type="image/svg+xml" />
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <link rel='apple-touch-icon' type='image/png' sizes='72x72' href='images/icon.72.png'> <!-- iPad -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="tesla.css" />
    </head>
    <body>
        <div id="sheet">
            <nav>
                <!-- Links -->
                <ul>
                  <li>
                      <a href="index.php?menu=fooldal">Főoldal</a>
                  </li>
                  <li>
                      <a href="index.php?menu=tortenete">Története</a>
                  </li>
                </ul>
            </nav>
            <div id="tartalom">
<?php
switch ($menupont) {
    case 'fooldal':
        require_once './fooldal.php';
        break;
    case 'tortenete':
        require_once './tortenet.php';
        break;

    default:
        require_once './fooldal.php';
        break;
}
?>
            </div>
            <footer>
                Forrás: Wikipedia
            </footer>
        </div>
    </body>
</html>
