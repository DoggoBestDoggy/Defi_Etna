<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <title>Le Blu</title>
    <link href="img/logo.png" rel="icon"/>
</head>

<body>

    <div class="rotated-half-circle"></div>

  <section class="sec">
    <header>
      <a href="/"><img src="img/logo.png" class="logo"></a>
      <ul>
        <li><a href="/">Home</a></li>
      </ul>
    </header>
    <div class="principal-block">
      <div class="block1">
        <div class="profil1"></div>
        <p>1<br>A</p>
      </div>
      <div class="block2">
        @foreach($data as $key => $data)
        <div class="block3">
          <div class="profil2">
            <img ng-src="https://auth.etna-alternance.net/api/users/{{$data->login}}/photo" alt="{{$data->login}}"
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

