<?
require_once("vendor/vlucas/valitron/src/valitron/Validator.php");

$v = new Valitron\Validator($_POST);
$v->rule('lengthBetween', 'nume', 3, 15);
$v->rule('email', 'email');
$v->rules([
    'min' => [
        ['virsta', 1]
    ],
    'max' => [
        ['virsta', 100]
    ],
    'integer' => [
        ['virsta', true]
    ]
]);
$v->rules([
        'equals' => [
            ['parola', 'parola2']
        ],
        "lengthBetween" => [
            ["parola2", 10, 20]
        ]
    ]);
$v->rule('regex', 'telefon', '/^\+373[0-9]{8,8}$/');
$v->rule('dateFormat', 'dn', 'Y-m-d');
$v->rule('required', ['nume', 'email', 'parola', 'parola2']);
if($v->validate()) {
    echo "Yay! We're all good!";
} else {
    // Errors
    print_r($v->errors());
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        nume: <input type="text" name="nume" value="Anton"><br>
        email: <input type="email" name="email" value="anton@anton.anton"><br>
        telefon: <input type="text" name="telefon" value="+37312345678"><br>
        virsta: <input type="number" name="virsta" value="21"><br>
        password: <input type="password" name="parola" value="1234567890"><br>
        password repetat: <input type="password" name="parola2" value="12345678"><br>
        data nasterii: <input type="date" name="dn" ><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>