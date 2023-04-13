<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/styles/main.css">
    <title>About</title>
</head>
<body>
    <h1>Halaman About</h1>

    <img src="assets/images/<?= $image ?>" alt="<?= $name; ?>" width="200px">
    <p><?= $name ?></p>
    <p><?= $email ?></p>

    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/blog">Blog</a></li>
    </ul>
</body>
</html>