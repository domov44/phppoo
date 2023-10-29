<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require 'Personnage.php';
    require 'form.php';
    require 'text.php';

    $merlin = new Personnage('Merlin', 80, 50);

    $merlin->regenerer();
    var_dump($merlin);



    $form = new Form($_POST);
    var_dump(Text::withZero(10));

    ?>

    <form action="#" method="post">
        <?php
        echo $form->input('username');
        echo $form->input('name');
        echo $form->input('password');
        echo $form->submit();

        var_dump($_POST)
        ?>
    </form>
</body>

</html>