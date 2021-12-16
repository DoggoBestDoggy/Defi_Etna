<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <title>Le Blu</title>
</head>

<body>
    <nav>
        <div class="navbar">
            <div><a href="/"><img src="logo.png" class="logo"></a>
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

        <div class="Grid">
        @foreach($data as $key => $data)

        <input type="radio" name="dot" id="one">
        <input type="radio" name="dot" id="two">
        <div class="main-card">
            <div class="cards">
                <div class="card">
                    <div class="content">
                        <div class="img">
                            <img ng-src="https://auth.etna-alternance.net/api/users/{{$data->login}}/photo" alt="{{$data->login}}" src="https://auth.etna-alternance.net/api/users/{{$data->login}}/photo" width="100" height="120">
                        </div>
                        <div class="details">
                            <div class="name"><a href="/profile/{{$data->id}}">{{$data->firstname}} {{$data->lastname}}</a></div>
                            <div class="job">{{$data->work}}</div>
                        </div>
                        <div class="media-icons">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="button">
            <label for="one" class=" active one"></label>
            <label for="two" class="two"></label>
        </div>

        @endforeach
        </div>

    </div>
</body>

</html>
