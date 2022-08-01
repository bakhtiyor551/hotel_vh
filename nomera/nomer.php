

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
    integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet"
    id="bootstrap-css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/stayle.css">

  <title>Document</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg mb-4 bg-dark   navbar-dark text-center  sticky-top">
    <!-- шапка сайт -->
    <a class="navbar-brand" href="#">VAHDAT</a><!-- logo -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <!-- бургер мену  -->
      <span class="navbar-toggler-icon"></span> <!-- икон бургер  -->
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <!--  -->
      <ul class="navbar-nav">
        <!--  -->
        <li class="nav-item ">
          <!--  -->
          <a class="nav-link " href="#">главное</a> <!--  -->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">номер</a> <!--  -->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">новости</a> <!--  -->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">новости</a> <!--  -->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">новости</a> <!--  -->
        </li>
      </ul>
    </div>
  </nav>
  <?php 
require '../dns.php';

$query = $pdo->prepare("SELECT * FROM rooms");
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);
?>
  <div class="container-fluid">
    <div class="row mb-4">
      <?php foreach($result as $row=>$val):?>
   
      <?php endforeach;?>
      <?php 
      foreach($result as $row=>$val){
        echo "
      <div class='col-md-4 mb-4 '>
        <div class='card'>
          <div class='card__thumb'>
            <img src='img/09.jpg' class='card-img-top' alt='...'>
          </div>
          <div class='card-body'>

            <h6 class='card-title'>".$result[$row]['name']."<br> ".$result[$row]['price']. "</h6>

            <div class='card__description'>
              <p class='card-text'>Номер идеально подходит для тех, кто приезжает в столицу один и ценит атмосферу покоя
                и уединения.</p>

              <a href='./room/room_one.php' button class='custom-btn text-center btn-3'><span>подробно</span></button></a>
              <button type='button' class='custom-btn text-center btn-3' data-toggle='modal'
                data-target='#exampleModalCenter'><span>Забронировать</span></button>

            </div>

          </div>
        </div>
      </div>";
      }?>
      
     
    </div>

    <!-- <div class="row mb-4">
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="card__thumb">
            <img src="img/04.jpg" class="card-img-top" alt="...">
          </div>
          <div class="card-body">
            <h6 class="card-title">Двухместный улучшенный номер</h6>
            <div class="card__description ">

              <p class="card-text">Просторный и элегантно декорированный 2-местный 1-комнатный номер.</p>
              <a href="#" button class="custom-btn text-center btn-3"><span>подробно</span></button></a>
              <a href="#" button class="custom-btn text-center btn-3"><span>Забронировать</span></button></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="card__thumb">
            <img src="img/05.jpg" class="card-img-top" alt="...">
          </div>
          <div class="card-body">
            <h5 class="card-title">Двухместный двухкомнатный номер Люкс</h5>
            <div class="card__description ">
              <p class="card-text">Комфортабельный двухкомнатный номер, ширина кровати - 160 см.</p>
              <a href="#" button class="custom-btn text-center btn-3"><span>подробно</span></button></a>
              <a href="#" button class="custom-btn text-center btn-3"><span>Забронировать</span></button></a>
            </div>
          </div>
        </div>

      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="card__thumb">
            <img src="img/06.jpg" class="card-img-top" alt="...">
          </div>
          <div class="card-body">
            <h5 class="card-title">Двухместный двухкомнатный Люкс Улучшенный</h5>
            <div class="card__description ">
              <p class="card-text">2-местный 2-комнатный номер повышенной комфортности.</p>
              <a href="#" button class="custom-btn text-center btn-3"><span>подробно</span></button></a>
              <a href="#" button class="custom-btn text-center btn-3"><span>Забронировать</span></button></a>
            </div>
          </div>
        </div>
        <div>
        </div>

      </div>
    </div>
    <div class="row mb-4">
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="card__thumb">
            <img src="img/08.jpg" class="card-img-top" alt="...">
          </div>
          <div class="card-body">
            <h5 class="card-title">Апартаменты</h5>
            <div class="card__description ">
              <p class="card-text">Трехкомнатный уютный номер.</p>
              <a href="#" button class="custom-btn text-center btn-3"><span>подробно</span></button></a>
              <a href="#" button class="custom-btn text-center btn-3"><span>подробно</span></button></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="card__thumb">
            <img src="img/01.jpg" class="card-img-top" alt="...">
          </div>
          <div class="card-body">
            <h5 class="card-title">Апартаменты Улучшенные</h5>
            <div class="card__description ">
              <p class="card-text">Трехкомнатный уютный номер.</p>
              <a href="#" button class="custom-btn text-center btn-3"><span>подробно</span></button></a>
              <a href="#" button class="custom-btn text-center btn-3"><span>подробно</span></button></a>
            </div>
          </div>
        </div>

      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="card__thumb">
            <img src="img/02.jpg" class="card-img-top" alt="...">
          </div>
          <div class="card-body">
            <h5 class="card-title">Президентский номер</h5>
            <div class="card__description ">
              <p class="card-text">Президентский номер соответствует требованиям гостей, которым присуще превосходство
                во всем.</p>
              <a href="#" button class="custom-btn text-center btn-3"><span>подробно</span></button></a>
              <a href="#" button class="custom-btn text-center btn-3"><span>подробно</span></button></a>
            </div>
          </div>
        </div>
        <div>
        </div>

      </div>
    </div> -->
  </div>

  <footer id="sticky-footer" class="py-5 bg-dark text-white-50">
    <div class="container text-center">
      <small>Copyright &copy; Your Website</small>
    </div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>

</html>