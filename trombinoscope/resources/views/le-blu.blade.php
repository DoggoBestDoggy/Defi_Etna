<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <title>TROMBINOSCOPE</title>
  <link href="img/etna.png" rel="icon">
</head>

<body>

    <div class="rotated-half-circle"></div>

  <section class="sec">
    <header>
      <a href="/"><img src="img/logo.png" class="logo"></a>
      <ul>
        <li><a href="/blu">Blu</a></li>
        <li><a href="/studio">Studio</a></li>
        <li><a href="/service-com-admissions">Admissions</a></li>
        <li><a href="/service-pedagogique">Pédagogie</a></li>
        <li><a href="/service-relations-ecole-entreprise">Relation E.E</a></li>
        <li><a href="/service-rh">RH</a></li>
        <li><a href="/">Home</a></li>
    </ul>
    </header>
    <h1>Le BLU</h1>
    <div class="principal-block">
      <div class="block1">
        <div class="profil1"></div>
        <p>1<br>A</p>
      </div>
      <div class="block2">
        @foreach($data as $key => $data)
        <div class="block3">
          <div class="profil2">
            <img class="cadrage" ng-src="https://auth.etna-alternance.net/api/users/{{$data->login}}/photo" alt="{{$data->login}}"
                src="https://auth.etna-alternance.net/api/users/{{$data->login}}/photo" width="100" height="120">
          </div>
          <p>{{$data->firstname}} {{$data->lastname}}<br>{{$data->work}}</p>
        </div>
        @endforeach
      </div>
    </div>
  </section>

</body>

</html>
