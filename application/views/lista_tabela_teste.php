<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login lap</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>produtos usuarios</h1>

<?php
foreach ($LoginModel as $p) {
    echo "$p->user";
}
?>



</body>
</html>
