<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">
    <style>
      html,body{
        height: 100%;
        background-image: linear-gradient(162deg, #001929 22.92%, #290019 90.1%);
      }

      .square{
        position: absolute;
        width: 500px;
        max-width: 80%;
        height: 400px;
        left: auto;
        top: auto;
        border: 3px solid #FFFFFF;
        box-sizing: border-box;
        padding-bottom: 20%;
        stroke: 300px;
      }

      .square::after{
        height: 30%;
        /* max-width: 10%; */
      }

      .judul{
        line-height: 0.8;
        letter-spacing: -0.005em;
        text-align: center;
        font-size: 80px;
        font-weight: 800;
        font-family: 'Marck Script';
      }

      .frontPict{
        z-index: 1;
        margin-left: -15px;
        margin-top: 230px;
      }

      .tombolOpen{
        border-radius: 20px;
        background: #FFFFFF;
        height: 34px;
      }


      </style>


    <title>Hello, world!</title>
  </head>
  <body>

    <div class="container text-white">
      <div class="row">
        <div class="col-12 mt-2 pt-5 d-flex justify-content-center">
          <!-- <h1>Hello, world!</h1> -->
          <div class="square">
            <div class="content mt-3 d-flex justify-content-center">
              <div class="judul mt-3">Samsul<br>&<br>Wulan</div>  
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12  d-flex justify-content-center">
          <img src="image/wedding.png" class="frontPict" alt="SW" srcset="" height="400px">
        </div>
      </div>
      <div class="row">
        <div class="col-12 d-flex justify-content-center">
          <a href="home.php" class="btn btn-outline-light btn-sm mt-5" type="button">Buka Undangan</a>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>