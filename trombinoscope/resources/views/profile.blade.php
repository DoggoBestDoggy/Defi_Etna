<!DOCTYPE html>

<head>

    <meta charset="UTF-8">
    <link href="../css/profile.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <title>TROMBINOSCOPE</title>
    <link href="img/etna.png" rel="icon">
</head>

<body>
    <div class="rotated-half-circle"></div>
    <section class="sec">
        <header>
            <a href="/"><img src="../img/logo.png" class="logo"></a>
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
        @foreach($data as $key => $data)
        <div class="principal-block">
          <div class="block1">
              <div class="profil1">
                  <img ng-src="https://auth.etna-alternance.net/api/users/{{$data->login}}/photo" alt="{{$data->login}}"
                src="https://auth.etna-alternance.net/api/users/{{$data->login}}/photo" width="100" height="120">
                </div>
              <div class="cadre">
                <p>{{$data->firstname}} {{$data->lastname}}</p>
                <p class="login">{{$data->login}}</p>
                <p class="mail">{{$data->email}}</p>
                <p class="job">{{$data->work}}</p>
              </div>
          </div>
        </div>
        @endforeach
    </section>
</body>

</html>
