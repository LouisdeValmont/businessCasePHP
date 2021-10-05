<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="#">
    <title>Document</title>
</head>
<body>
<main>

        <form action="loginView.php" method="POST" >
            <p>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" value=""/>
            </p>
            <p>
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password"/>
            </p>
            <p>
                <input type="checkbox" value="1" name="memo" id="memo"/>
                <label for="memo">Se souvenir de moi</label>
            </p>
            <p>
                <input type="submit" name="connection" value="Je m'identifie"/>
            </p>

    </form>
</main>






<script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
