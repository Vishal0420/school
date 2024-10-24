<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing</title>
</head>
<body>
    <?php

if(!empty($achievement)) {
    echo "<pre>";
    print_r($achievement);
    echo "</pre>";
}else {
    echo "no data found";
}
    ?>
</body>
</html>