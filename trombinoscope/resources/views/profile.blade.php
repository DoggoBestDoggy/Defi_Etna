<!DOCTYPE html>

<head>

    <meta charset="UTF-8">
    <link href="../profile.css" rel="stylesheet">
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Trombi</title>

</head>

<body>
    <nav>
        <div class="navbar">
            <div><a href="/"><img src="../logo.png" class="logo"></a>
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
    @foreach($data as $key => $data)
    <div class="info">
        <div class="cadre" href="https://auth.etna-alternance.net/api/users/{{$data->login}}/photo"></div>
    </div>
    @endforeach
</body>

</html>
