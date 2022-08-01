<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="image/favicon.png" type="image/png">
    <title>HOTEL-VAHDAT</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/stayle.scss">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<?php

use PhpOffice\PhpSpreadsheet\Calculation\Financial\Securities\Price;

require 'dns.php';

$query = $pdo->prepare("SELECT * FROM rooms");
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<body>
    <!--================Header Area =================-->
    <header class="header_area">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="index.html"><img src="image/Logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="index.php">ГЛОВНОЕ</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">РЕСТОРАН</a></li>
                        <li class="nav-item"><a class="nav-link" href="accomodation.php">НОМЕРА</a></li>
                        <li class="nav-item"><a class="nav-link" href="Medicio/index.html">hospital</a></li>
                        <li class="nav-item"><a class="nav-link" href="elements.php">Elemests</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">КОНТАКТЬ</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Area =================-->

    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="booking_table d_flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h6>ДОБРО ПОЖАЛОВАТЬ В</h6>
                    <h2>HOTEL VAHDAT</h2>

                </div>
            </div>
        </div>
        <div class="hotel_booking_area position">
            <div class="container">
                <div class="hotel_booking_table">
                    <div class="col-md-3">
                        <h4>ЗАБРОНИРОВАТЬ</h4>
                    </div>
                    <div class="col-md-9">
                        <form>
                            <div class="boking_table">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="book_tabel_item">
                                            <div class="form-group">
                                                <label for="in putDate">Введите дату:</label>
                                                <input type="date" id="data" name="user[data]" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputDate">Введите дату:</label>
                                                <input type="date" id="dates" name="user[dates]" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="pt-1">
                                            <label for="formGroupExampleInput">имия</label>
                                            <input type="text" id="name" name="user[name]" class="form-control" id="formGroupExampleInput" placeholder="имия">
                                        </div>
                                        <div class="form-group ">
                                            <label for="formGroupExampleInput2">фамилия</label>
                                            <input type="text" id="surname" name="user[surname]" class="form-control" id="formGroupExampleInput2" placeholder="фамилия">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group pt-2">
                                            <label for="formGroupExampleInput">вводить номер телефона </label>
                                            <input type="phone" id="number" name="user[number]" class="form-control" id="formGroupExampleInput" value="+992" placeholder="номер">
                                        </div>
                                        <div class="book_tabel_item py-2">
                                            <div class="input-group">
                                                <select name="user[course]" id="course" size="1" class="custom-select">
                                                    <option selected>комната</option>

                                                    <?php

                                                    foreach ($result as $row => $val) {
                                                        
                                                        print "<option value=" . $result[$row]['price'].  ">";
                                                        print($result[$row]['name']);
                                                        print "</option>";
                                                    } ?>
                                                </select>
                                                <div id="snackbar">Some text some message..</div>
                                                <button type="button" onclick="show_source()" class="btn btn-primary ml-4 py-2">отправит</button>
                                        <div class="col-md-6">
                                       <h3 id="out"></h3>
                                        <p>день</p>
                                       
                                        </div>
                                            <div class="col,-md-6">
                                                    <div id="prices"></div>
                                                    <p>цена</p>
                                            </div>
                                            </div>
                                          
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Banner Area =================-->

    <!--================ Accomodation Area  =================-->
    <section class="accomodation_area section_gap " id="slideshow">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color">Размещение в гостинице</h2>
            </div>
            <div class="row mb_30">
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="image/room1.jpg" alt="">
                            <a href="#" class="btn theme_btn button_hover">Book Now</a>
                        </div>
                        <a href="nomera/room/room_one.php">
                            <h4 class="sec_h4">Double Deluxe Room</h4>
                        </a>
                        <h5>$250<small>/night</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="image/room2.jpg" alt="">
                            <a href="#" class="btn theme_btn button_hover">Book Now</a>
                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Single Deluxe Room</h4>
                        </a>
                        <h5>$200<small>/night</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="image/room3.jpg" alt="">
                            <a href="#" class="btn theme_btn button_hover">Book Now</a>
                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Honeymoon Suit</h4>
                        </a>
                        <h5>$750<small>/night</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="image/room4.jpg" alt="">
                            <a href="#" class="btn theme_btn button_hover">Book Now</a>
                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Economy Double</h4>
                        </a>
                        <h5>$200<small>/night</small></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Accomodation Area  =================-->

    <!--================ Facilities Area  =================-->
    <section class="facilities_area section_gap">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_w">Royal Facilities</h2>
                <p>Кто очень любит экологически чистую систему.</p>
            </div>
            <div class="row mb_30">
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-dinner"></i>Ресторан</h4>
                        <p>Ресторан VAHDAT - это место, ассоциирующееся с вдохновляющими блюдами интернациональной кухни.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-bicycle"></i>Конференц-залы</h4>
                        <p>Идеальное место для проведения конференций, форумов, деловых презентаций.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-car"></i>Охраняемая стоянка 24/7</h4>
                        <p>На территории отеля во внутреннем дворе располагается охраняемая круглосуточная автостоянка.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-shirt"></i>Новости</h4>
                        <p>Отель "Vahdat" не остается в стороне от реализации молодежной политики в республике. </p>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-construction"></i>Транспортное обслуживание</h4>
                        <p>Отель «Vahdat» предлагает своим гостям транспортное обслуживание: трансферы в Национальный аэропорт «Vahdat», по городу, а также услуги автомобилей.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-coffee-cup"></i>Служба по работе с гостями</h4>
                        <p>Рабочее место администратора по работе с гостями находится на 1 этаже в лобби отеля
                            В службе по работе с гостями могут быть оказаны следующие услуги:.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Facilities Area  =================-->

    <!--================ About History Area  =================-->
    <section class="about_history_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d_flex align-items-center">
                    <div class="about_content ">
                        <h2 class="title title_color">Ресторан<br></h2>
                        <p>Ресторан VAHDAT - это место, ассоциирующееся с вдохновляющими блюдами интернациональной кухни,
                            которые подаются в роскошной восточной атмосфере. Это единственный ресторан в , предлагающий ежедневный
                            шведский стол на обед, ужин и воскресный бранч. С поздней весны до осени гости могут поужинать на свежем воздухе в саду отеля среди очаровательных ароматов цветущих кустов роз. Воскресный бранч предлагает широкий выбор закусок и салатов, горячих блюд, десертов и напитков, а также выбор вафель и блинов. Все сопровождается живой фортепьянной или традиционной музыкой рубаб, что придает нотку элегантности.</p>

                    </div>
                </div>
                <div class="col-md-6">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="image/banner_bg.jpg" alt="Первый слайд">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="image/22.jpg" alt="Второй слайд">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="image/2.jpg" alt="Третий слайд">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ About History Area  =================-->

    <!--================ Testimonial Area  =================-->
    <section class="testimonial_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color">Отзывы наших клиентов</h2>

            </div>
            <div class="testimonial_slider owl-carousel">
                <div class="media testimonial_item">
                    <img class="rounded-circle" src="image/testtimonial-1.jpg" alt="">
                    <div class="media-body">
                        <p>Выбирала отель по территориальному признаку, чтобы было удобно добираться и смотреть достопримечательности пешком. Рядом метро, самый центр Минска. По комфорту - вода, чистота, завтрак - все на достойном уровне. Чистое постельное и полотенца. Все пахнет вкусно. </p>
                        <a href="#">
                            <h4 class="sec_h4">Ольга Р.</h4>
                        </a>
                        <div class="star">
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                        </div>
                    </div>
                </div>
                <div class="media testimonial_item">
                    <img class="rounded-circle" src="image/testtimonial-1.jpg" alt="">
                    <div class="media-body">
                        <p>Красивый вид на центр, уютный номер, чисто и опрятно. </p>
                        <a href="#">
                            <h4 class="sec_h4">Мария Никулина</h4>
                        </a>
                        <div class="star">
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                        </div>
                    </div>
                </div>
                <div class="media testimonial_item">
                    <img class="rounded-circle" src="image/testtimonial-1.jpg" alt="">
                    <div class="media-body">
                        <p>Были в отеле "Минск" в январе 2022 года. Отличный отель, чистота, уют. Приветливый персонал, вкусное питание в ресторане. Отель в центре города, очень удобно для прогулок. Обязательно будем там еще. Единственное, один минус, нет холодильника в номере, без него не очень комфортно, но надеемся может в скором времени появятся. </p>
                        <a href="#">
                            <h4 class="sec_h4">Елена</h4>
                        </a>
                        <div class="star">
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                        </div>
                    </div>
                </div>
                <div class="media testimonial_item">
                    <img class="rounded-circle" src="image/testtimonial-1.jpg" alt="">
                    <div class="media-body">
                        <p>Как сознательные странствующие нищие, мы всегда должны заботиться о нашей дорогой Матери-Земле. Если вы думаете об этом, вы путешествуете по ее лицу, и она </p>
                        <a href="#">
                            <h4 class="sec_h4">Fanny Spencer</h4>
                        </a>
                        <div class="star">
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Testimonial Area  =================-->

    <!--================ Latest Blog Area  =================-->
    <section class="latest_blog_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color">Спецпредложения</h2>

            </div>
            <div class="row mb_30">
                <div class="col-lg-4 col-md-6">
                    <div class="single-recent-blog-post">
                        <div class="thumb">
                            <img class="img-fluid" src="image/1.jpg" alt="post">
                        </div>
                        <div class="details">

                            <a href="#">
                                <h4 class="sec_h4">Тариф «Свадебный»</h4>
                            </a>
                            <p>
                                Воспользуйтесь сказочным предложением!
                                Специальный тариф для молодоженов со скидкой %!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-recent-blog-post">
                        <div class="thumb">
                            <img class="img-fluid" src="image/2.jpg" alt="post">
                        </div>
                        <div class="details">

                            <a href="#">
                                <h4 class="sec_h4">Тариф «С Днём Рождения!»</h4>
                            </a>
                            <p>Специальный тариф для именинников с выгодой до 35%.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-recent-blog-post">
                        <div class="thumb">
                            <img class="img-fluid" src="image/22.jpg" alt="post">
                        </div>
                        <div class="details">

                            <a href="#">
                                <h4 class="sec_h4">Тариф «Раннее бронирование»</h4>
                            </a>
                            <p>Тариф со скидкой до % применяется при бронировании номеров более, чем за 7 дней до даты заезда.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Recent Area  =================-->

    <!--================ start footer Area  =================-->
    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title">ОБ АГЕНТСТВЕ</h6>
                        <p>Мир стал настолько быстрым, что люди не хотят стоять,
                            читая страницу информации, они скорее смотрят презентацию и понимают сообщение. Это пришло к точке</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title">НАВИГАЦИОННЫЕ ССЫЛКИ</h6>
                        <div class="row">
                            <div class="col-4">
                                <ul class="list_style">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Feature</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                </ul>
                            </div>
                            <div class="col-4">
                                <ul class="list_style">
                                    <li><a href="#">Pricing</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title">НОВОСТНАЯ РАССЫЛКА</h6>
                        <p>For business professionals caught between high OEM price and mediocre print and graphic output, </p>
                        <div id="mc_embed_signup">
                            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                <div class="input-group d-flex flex-row">
                                    <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                    <button class="btn sub-btn"><span class="lnr lnr-location"></span></button>
                                </div>
                                <div class="mt-10 info"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget instafeed">
                        <h6 class="footer_title">InstaFeed</h6>
                        <ul class="list_style instafeed d-flex flex-wrap">
                            <li><img src="image/instagram/Image-01.jpg" alt=""></li>
                            <li><img src="image/instagram/Image-02.jpg" alt=""></li>
                            <li><img src="image/instagram/Image-03.jpg" alt=""></li>
                            <li><img src="image/instagram/Image-04.jpg" alt=""></li>
                            <li><img src="image/instagram/Image-05.jpg" alt=""></li>
                            <li><img src="image/instagram/Image-06.jpg" alt=""></li>
                            <li><img src="image/instagram/Image-07.jpg" alt=""></li>
                            <li><img src="image/instagram/Image-08.jpg" alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="border_line"></div>
            <div class="row footer-bottom d-flex justify-content-between align-items-center">
                <p class="col-lg-8 col-sm-12 footer-text m-0">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
                <div class="col-lg-4 col-sm-12 footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-behance"></i></a>
                </div>
            </div>
        </div>
    </footer>
    

    <!--================ End footer Area  =================-->
    <script src="index.js"></script>

    <script type="text/javascript">
        function show_source() {
           let cors = (document.getElementById('course').value)
            console.log(cors)
            let ss = new Date(document.getElementById("dates").value) - new Date(document.getElementById("data").value)
               let d = ss / 1000 / 3600 / 24
               let s = d*cors
               console.log(s)
               document.querySelector('#out').innerHTML=d 
               document.querySelector('#prices').innerHTML= s
            console.log(d)
            if (document.getElementById("name").value.trim() == "") {
                myFunction("Errorn")
            } else
                var jqxhr = $.get("data.php?q=" + document.getElementById("name").value + '&surname=' + document.getElementById("surname").value + '&data=' + document.getElementById("data").value + '&dates=' + document.getElementById("dates").value + '&number=' + document.getElementById("number").value + '&course=' + document.getElementById("course").value +'&out=' + document.getElementById("out").value +'&prices='+  document.getElementById("prices").value , function() {
                    myFunction("Zapros otpravlen")

                })

        }

        function myFunction(txt) {
            var x = document.getElementById("snackbar");
            x.innerText = txt
            x.className = "show";
            setTimeout(function() {
                x.className = x.className.replace("show", "");
            }, 3000);
        }
    </script>




    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>