<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="css/style.css" rel="stylesheet">
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <title>Le Studio</title>
    <link href="img/logo.png" rel="icon"/>
</head>

<body>
    <nav>
        <div class="navbar">
            <div><a href="/"><img src="img/logo.png" class="logo"></a>
            </div>
            <div class="nav-links">
                <ul class="links">
                    <li><a href="/">HOME</a></li>
                    <li>
                        <a href="#">SERVICES</a>
                        <i class='bx bxs-chevron-down arrow services'></i>
                        <ul class="services-sub-menu sub-menu">
                            <li><a href="/blu">Blu</a></li>
                            <li><a href="/studio">Studio</a></li>
                            <li><a href="/service-com-admissions">Admissions</a></li>
                            <li><a href="/service-pedagogique">Pedagogie</a></li>
                            <li><a href="/service-relations-ecole-entreprise">Relation E.E</a></li>
                            <li><a href="/service-rh">RH</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </div>
      <div class="container">

        @foreach($data as $key => $data)

        <div class="main-card">
          <div class="cards">
            <div class="card">
             <div class="content">
                <div class="img">
                    <img ng-src="https://auth.etna-alternance.net/api/users/{{$data->login}}/photo" alt="akkari_j"
                    src="https://auth.etna-alternance.net/api/users/{{$data->login}}/photo" width="100" height="120">
                 </div>
                 <div class="details">
                   <div class="name">{{$data->firstname}} {{$data->lastname}}</div>
                   <div class="job">{{$data->work}}</div>
                 </div>
               <div class="media-icons">
                <a href="/profile/{{$data->id}}" >
                 <a href="#"><i class="fab fa-facebook-f"></i></a>
                 <a href="#"><i class="fab fa-twitter"></i></a>
               </div>
             </div>
            </div>
          </div>
        </div>

            @endforeach

      </div>
</body>

</html>
