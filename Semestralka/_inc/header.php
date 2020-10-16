<!DOCTYPE html>
<header>
<head>
    <meta charset="utf-8"> <!-- na zobrazenie diakritiky -->
    <title>EVALUATION</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../assets/style/style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1"> <!--na zobrazenie v smartphonoch -->
</head>
<header>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="../partials/index.php">EVALUATION</a>   <!-- Evaluation -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="../partials/index.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <!--<li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown link
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>-->
            </ul>
            <ul class="nav navbar-nav container-fluid justify-content-md-end">
                <li class="nav-item">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#singin">
                        Sing in
                    </button>
                    <?php include 'singinbutt.php'; ?>
                </li>
                <li class="nav-item">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#singup">
                        Sing up
                    </button>
                    <?php include 'singupbutt.php'; ?>
                </li>
            </ul>
        </div>
    </nav>


</header>
<body>
