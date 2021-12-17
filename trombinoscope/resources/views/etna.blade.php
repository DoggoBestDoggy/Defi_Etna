<!DOCTYPE html>

<html>

<head>
    <link href="img/etna.png" rel="icon">
    <title>Trombi ETNA</title>
</head>

<body>
    <div class="formulaire">
        <form action="" method="post">

            @csrf

            <label for="login">Login :</label>
            <input type="text" name="login" id="login">
            <br />

            <label for="firstname">Firstname :</label>
            <input type="text" name="firstname" id="firstname">
            <br />

            <label for="lastname">Lastname :</label>
            <input type="text" name="lastname" id="lastname">
            <br />

            <label for="email">Email :</label>
            <input type="email" name="email" id="email">
            <br />

            <label for="work">Work Station :</label>
            <input type="text" name="work" id="work">
            <br />

            <label for="role">Role : (SuperAdmin = 1 | Admin = 2 | User = 3)</label>
            <input type="number" name="role" id="role">
            <br />

            <label for="picture">Picture :</label>
            <input type="file" name="picture" id="picture" accept="image/png, image/jpeg">
            <br />

            <br />
            <input onclick="alert('Le profil à bien été enregistré !')"type="submit" value="Add Profile">
            <br />

        </form>
    </div>
</body>

</html>
