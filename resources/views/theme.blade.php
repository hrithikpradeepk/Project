<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hairified Spa</title>
</head>
<body style="background-color: black;">

    <nav class="navbar navbar-expand-lg navbar-white bg-white">
        <div class="container-fluid">
          <a class="navbar-brand" href="/" style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; font-size: 50px;">Hairified</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 20px;">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/service" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 20px;">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 20px;">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/spagallery" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 20px;">Gallery</a>
              </li>
             
            </ul>
          </div>
        </div>
      </nav>

    @yield("content")

      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>