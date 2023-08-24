<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="menu.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,600;1,400&family=Roboto+Condensed&display=swap" rel="stylesheet">
<script src="style.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div id="brand-container">
                    <h3 id="bran">devchallenges</h3>
                    <p id="brand1">Login</p>
                <form class="form" action="process_form.php" method="post">
                    <label>
                    <i class='bx bx-envelope'></i>
                        <input type="email" id="email" name="correo" placeholder="Email" class="input">
                        </label>
                      
                        <label>
                        <i class='bx bx-lock-alt' ></i>
                        <input type="password" id="password" name="contrasena" placeholder="Password" class="input">
                        </label>
                    </div>
                    <div  id="start-coding-btn" >
                        <button  class="button" type="submit">Start coding now</button>
                    </div>
                </form>
                <h5 id="parrafo">or continue with these social profiles</h5>
                <div class=" icons">
                <i class='bx bxl-google' ></i>
                <i class='bx bxl-facebook-circle' ></i>
                <i class='bx bxl-twitter' ></i>
                <i class='bx bxl-github' ></i>
                </div>
                <p> Already a Menber? <a class="directorio" href="/acceso.php">Login</a> </p>

            </div>
        </div>
    </div>
    <div>
</div>

</body>
</html>
