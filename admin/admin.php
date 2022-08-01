<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> 
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-sm  bg-dark navbar-dark sticky-top">

          <a class="navbar-brand" href="#">Logo</a>
          <input class="form-control" id="myInput" type="text" placeholder="Search..">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="social-icons " >
              <a href="#"class="f1"></a>
            </li>
          </ul> 
        </nav>  


        <div class = "container-fluid">
          

<div class="row">


<div class="col-md-3 pr-0 ">

    <div class="nav-side-menu let ">
        <div class="brand">Brand Logo</div>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
      
            <div class="menu-list">
      
                <ul id="menu-content" class="menu-content collapse out">
                    <li>
                      <a href="#">
                      <i class="fa fa-dashboard fa-lg"></i> Главная
                      </a>
                    </li>
    
                    <li  data-toggle="collapse" data-target="#products" class="collapsed active">
                      <a href="#"><i class="fa fa-gift fa-lg"></i> меню <span class="arrow"></span></a>
                    </li>
                    <ul class="sub-menu collapse" id="products">
                        <li class="active"><a href="nomer_admin.php">НОМЕРА</a></li>
                        <li><a href="table.html">АКЦИИ</a></li>
                        <li><a href="#">УСЛУГИ</a></li>
                        <li><a href="#">КОНФЕРЕНЦ-ЗАЛЫ</a></li>
                        <li><a href="#">РЕСТОРАНЫ</a></li>
                       
                     
                    </ul>
    
    
                    <li data-toggle="collapse" data-target="#service" class="collapsed">
                      <a href="#"><i class="fa fa-globe fa-lg"></i> Services <span class="arrow"></span></a>
                    </li>  
                    <ul class="sub-menu collapse" id="service">
                      <li>ГАЛЕРЕЯ</li>
                      <li>НОВОСТИ</li>
                      <li>ОТЗЫВЫ</li>
                    </ul>
    
    
                    <li data-toggle="collapse" data-target="#new" class="collapsed">
                      <a href="#"><i class="fa fa-car fa-lg"></i> New <span class="arrow"></span></a>
                    </li>
                    <ul class="sub-menu collapse" id="new">
                      <li>КОНТАКТЫ</li>
                      <li>New New 2</li>
                      <li>New New 3</li>
                    </ul>
        
                   
                </ul>
         </div>
    </div>
</div>
<div class ="col-md-9 main">
<table class="table"  id="myTable"  >
          
<thead>
    
<th scope="col">#</th> 
<th scope="col">ЗАЕД</th>
      <th scope="col">ВЫЕЗД</th>
      <th scope="col">ИМЯ</th>
      <th scope="col">ФАМИЛИЯ</th>
     
      <th scope="col">НОМЕР ТЕЛ</th>
      <th scope="col">КОМНАТА</th>
      <th scope="col">ЦЕНА</th>
    <?php 
    
require 'dsn.php';

$query = $pdo->prepare("SELECT * FROM bron");
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);


// display data
foreach ($result as $row){

  print "<tr>";
    foreach ($row as $key => $val ){
      echo("<script>console.log('PHP: " . $val . "');</script>");

        print "<td>$val </td>";
    }
  
  }
 
   ?>
    <tr>
    </tr>
  </thead>

</table>
</div>  
<script>
// $(document).ready(function(){
//   $("#myInput").on("keyup", function() {
//     var value = $(this).val().toLowerCase();
//     $("#myTable tr").filter(function() {
//       $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
//     });
//   });
// });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</div>
</div>
</body>
</html>