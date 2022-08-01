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
    <link rel="stylesheet" href="stayle.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container  bg-dark"  >
<form >
<div class="form-group">
    <label for="exampleFormControlTextarea1"  class="cols">КОМНАТА NAME</label>
    <input class="form-control" type="text" id = "name"  name="user[name]"  rows="3"></input>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1" class="cols">TITEL komnata</label>
    <input class="form-control" type="text" id = "desc"  name="user[desc]"  rows="3"></input>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1" class="cols">IMAGE KOMNATA</label>
    <input class="form-control" type="text" id = "image"  name="user[image]" ></input>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1" class="cols">ЦЕНА КОМНАТА</label>
    <input class="form-control" type="text" id = "price"  name="user[price]" ></input>
  </div>

  <div class="form-group">

  </div>
  <div id="snackbar">Some text some message..</div>
  <button type="button" class="btn btn-primary" onclick="show_source()">Sign in</button>
</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script type="text/javascript">
  function show_source(){
  var jqxhr = $.get("data.php?q=" + document.getElementById("name").value+'&desc='+ document.getElementById("desc").value+'&image='+ document.getElementById("image").value+'&price='+ document.getElementById("price").value, function() {
})
  .done(function() {
    alert("second success" );
  })
  .fail(function() {
    alert("error" );
  });
  }

 
 
 
//  function show_source(){
//       console.log(document.getElementById("name").value);
//       var xmlhttp = new XMLHttpRequest();
//       if(document.getElementById("name").value!=""){
//         xmlhttp.open("GET", "data.php?q=" + document.getElementById("name").value+'desc='+ document.getElementById("desc").value+'&image='+ document.getElementById("image").value+'&price='+ document.getElementById("price").value, true);

//         xmlhttp.send();
//         xmlhttp.onload = function() {
//           if (xmlhttp.status != 200) { // анализируем HTTP-статус ответа, если статус не 200, то произошла ошибка
//             myFunction("Errorn") // Например, 404: Not Found
//           } else { // если всё прошло гладко, выводим результат
//             myFunction("Zapros otpravlen") // response -- это ответ сервера
//           }
//         };

//       }else{
//         myFunction("neverno")
//       }
      
//   }
  
  function myFunction(txt) {
  var x = document.getElementById("snackbar");
  x.innerText = txt
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}

  
  </script>
</body>
</html>