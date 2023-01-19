<!doctype HTML>
<html>

<head>
    <title>Ricypeas - Login</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href=>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <main>
        <div id="error"></div>

        <form id='login' method='POST'>
            <h3>Welcome!</h3>
            <input type='text' name='username' placeholder='username'>
            <input type='password' name='password' placeholder='password'>
            <button id='logBtn' type='submit'>Log in</button>
        </form>

        <form id='register'>
            <h2>Don't have an account? Register!</h2>
            <a class='regBtn' href="register.php">Register</a>
        </form>

    </main>

    <?php
    include 'sections/footer.php';
    ?>