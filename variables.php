<?php
$title = "Variables";
$headingOne = "First Level Heading";
$description = "This is the description about what this web page is about.";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?= $description ?>">
    <title><?= $title ?></title>
</head>
<body>
    <h1><?= $headingOne; ?></h1>
<!-- Passing a variable into a string -->
<?php
$fName = "Tim";
$lName = "Unkert"
?>

    <p><?php echo "Hi, my name is $fName $lName." ?></p>
</body>
</html>
