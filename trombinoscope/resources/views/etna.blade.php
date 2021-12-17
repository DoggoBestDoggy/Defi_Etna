<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/formulaire.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="img/etna.png" rel="icon">
    <title>TROMBINOSCOPE</title>
</head>

<body>
    <div class="container">
      <div class="title">Ajouter un membre</div>
      <div class="content">
        <form action="#">
          <div class="user-details">
            <div class="input-box">
              <span class="details">Login :</span>
              <input type="text" placeholder="Entre ton login" required>
            </div>
            <div class="input-box">
              <span class="details">Prénom :</span>
              <input type="text" placeholder="Entre ton prénom" required>
            </div>
            <div class="input-box">
              <span class="details">Nom :</span>
              <input type="text" placeholder="Entre ton nom" required>
            </div>
            <div class="input-box">
              <span class="details">Email :</span>
              <input type="text" placeholder="Entre ton mail" required>
            </div>
            <div class="input-box">
              <span class="details">Poste de travail :</span>
              <input type="text" placeholder="Entre ton poste de travail" required>
            </div>
            <div class="input-box">
            <label for="role"><span class="details">Admin :SA = 1 | A = 2 | U = 3)</label></span>
            <input type="number" name="role" id="role">
          </div>
          <div class="input-box">
            <label for="picture"><span class="details">Photo :</span></label>
            <input type="file" name="picture" id="picture" accept="image/png, image/jpeg">
          </div>
          </div>
          <div class="button">
            <input onclick="alert('Le profil à bien été enregistré !')" type="submit" value="Enregistrer">
          </div>
        </form>
      </div>
    </div>

  </body>
</html>
