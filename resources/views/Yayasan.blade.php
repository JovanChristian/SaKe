<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sayang Keluarga</title>
    <style>
      
    </style>

    <!-- biar ada icon menu and search -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> -->

    <!-- link untuk symbol location -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- link bar -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;700&display=swap">

<!-- link icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0..1,0" />


    <!-- link ke css  -->
    <link rel="stylesheet" href="{{asset('css/yayasan.css')}}">
</head>

<body> 


     <!-- header dulu -->
    
     <header>
        <a class="logo">SaKe</a>
        <div class="navbar" id="myNav">
            <a href="homepagelogin.html" class="menu">Beranda</a>
            <a href="Yayasan.html" class="active">Yayasan</a>
            <a href="#tentangkami" class="menu">Tentang Kami</a>
            <a href="" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    
            <div class = "profile">
                <img src="images/notes.png" class="icon">
                <div class="text">
                    <button><a href="aktivitas.html">Aktivitas saya</a></button>
                </div>
                <a href="Prof.html">
                    <img src="{{asset("images/icon.jpg")}}" class="account">
                </a>
            </div>
    
    
            <!-- <div class="icons">
                <i class="fas fa-bars" id="bars"></i>
    
            </div> -->
    </header>
 


<section class="Home" id="Home">


        <div class="swiper-slide slide" >
            <div class="Home-Info">
                <h1 class="sub-heading1">Mendapatkan perawat dan pengasuh yang terbaik</h1>
                <p class="verification-symbol">
                    <span class="symbol">&#10003;</span>
                    Perawat dan pengasuh yang profesional dan berkualitas
                </p>
                <p class="verification-symbol">
                    <span class="symbol">&#10003;</span>
                    Dari Yayasan yang terbaik
                </p>
                <p class="verification-symbol">
                    <span class="symbol">&#10003;</span>
                    Perjanjian sah
                </p>
                
                <div class="wrapper">
                <div class="city">
                    <!-- <span class="material-symbols-rounded" aria-hidden="true">location_on</span> -->
                    <button class="custom"><i class="material-symbols-rounded" aria-hidden="true">location_on</i> Semua Lokasi ▼</button>
                    <div class="dropdown">
                        <label><input type="checkbox" name="Jakarta Barat">Jakarta Barat</label>
                        <label><input type="checkbox" name="Jakarta Pusat">Jakarta Pusat</label>
                        <label><input type="checkbox" name="Jakarta Selatan">Jakarta Selatan</label>
                        <label><input type="checkbox" name="Jakarta Utara">Jakarta Utara</label>
                        <label><input type="checkbox" name="Jakarta Timur">Jakarta Timur</label>
                        <label><input type="checkbox" name="Bekasi">Bekasi</label>
                        <label><input type="checkbox" name="Depok">Depok</label>
                        <label><input type="checkbox" name="Tangerang">Tangerang</label>
                        <label><input type="checkbox" name="Bogor">Bogor</label>
                        <button class="select-btn">Select</button>
                    </div>
                </div>

                

                <form class="loc-bar" id="searchForm">

                    <label class="search-loc">
                        <span class="material-symbols-rounded" aria-hidden="true">search</span>
                        <input type="text" name="search" placeholder="cari yayasan" class="search-item-field body-medium" style="text-align: center;">
                    </label>

                    <button type="submit" class="search-btn">
                    <span class="material-symbols-rounded" aria-hidden="true">search</span>
                    <span class="label-medium">Search</span>
                    </button>
                </form>

            </div>
            </div>

        </div>

    


</section>
  
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<section class="yayasan-menu" id="yayasan-menu">


    <div class="box-container1">
     
        <div class="box1" data-name ="Capten Care" data-location="Jakarta Selatan"><a href="#captencare">
            <img src="{{asset("/image/Capten-Care-Logo-Low-px.jpg")}}" alt="Capten Care">
            <h1>Capten Care</h1>
            <div class="buttons-container">
                <button>Pengasuh Lansia</button>
            </div>
            <div class="rating-location-container">
                <span class="rating">⭐4.2</span>
                <i class="material-icons"aria-hidden="true"style="color:red">place</i>
                <span class="location"> Jakarta Selatan</span>
            </div>
            </a></div>

        <div class="box1" data-name ="CaregiverID" data-location="Depok"><a href="#caregive">
            <img src="{{asset("/image/images.jpg")}}" alt="">
            <h1>CaregiverID</h1>
            <div class="buttons-container">
                <button>Pengasuh Lansia</button>
            </div>
            <div class="rating-location-container">
                <span class="rating">⭐3.2</span>
                <i class="material-icons"aria-hidden="true"style="color:red">place</i>
                <span class="location"> Depok</span>            
            </div>    
            </a></div>

        <div class="box1" data-name ="Insan Medika"  data-location="Tangerang"><a href="InsanMedika.html">
            <img src="{{asset("/image/insanmedika.jpg")}}" alt="">
            <h1>Insan Medika</h1>
            <div class="buttons-container">
                <button>Pengasuh Lansia</button>
                <!-- <button>Pengasuh Anak</button> -->
            </div>
            <div class="rating-location-container">
                <span class="rating">⭐4.7</span>
                <i class="material-icons"aria-hidden="true"style="color:red">place</i>
                <span class="location"> Tangerang</span>
            </div>
        </a>
        </div>

        <div class="box1" data-name ="Nanny Care" data-location="Bogor"><a href="#nanny">
            <img src="{{asset("/image/new-logo.png")}}" alt="">
            <h1>Nanny Care</h1>
            <div class="buttons-container1">
                <!-- <button>Pengasuh Lansia</button> -->
                <button>Pengasuh Anak</button>
            </div>
            <div class="rating-location-container">
                <span class="rating">⭐4.9</span>
                <i class="material-icons"aria-hidden="true"style="color:red">place</i>
                <span class="location"> Bogor</span>
            </div>         
        </a>   
        </div>

        <div class="box1" data-name ="My Nurze" data-location="Jakarta Barat"><a href="#nurz">
            <img src="{{asset("/image/photo1654222896.jpg")}}" alt="">
            <h1>My Nurz</h1>
            <div class="buttons-container">
                <button>Pengasuh Lansia</button>
                <!-- <button>Pengasuh Anak</button> -->
            </div>
            <div class="rating-location-container">
                <span class="rating">⭐3.5</span>
                <i class="material-icons"aria-hidden="true"style="color:red">place</i>
                <span class="location"> Jakarta Barat</span>
            </div> 
        </a>           
        </div>

        <div class="box1" data-name ="Putra Insan Mandiri" data-location="Bekasi"><a href="#putrainsan">
            <img src="{{asset("/image/yayasan4.png")}}" alt="">
            <h1>Putra Insan Mandiri</h1>
                    <div class="buttons-container">
                        <button>Pengasuh Lansia</button>
                    
                    <div class="buttons-container1">
                        <button>Pengasuh Anak</button>
                    </div>
                </div>
                    <div class="rating-location-container">
                        <span class="rating">⭐3.9</span>
                        <i class="material-icons"style="color:red">place</i>
                        <span class="location"> Bekasi</span>
                    </div>
                </a>
        </div>

    </div>

</section>

<footer>
    <div class="footer">
        <div class="desc"><a>Sayang Keluarga</a>
            <div class="text">Melalui platform kami, Anda dapat menemukan informasi lengkap mengenai setiap yayasan,
                termasuk reputasi, layanan yang disediakan, dan ulasan dari klien sebelumnya.</div>
        </div>
        <div class="explore"><a>Explore</a>
            <div class="footerLink">
                <a class="linkcontent" href="homepage.html">Beranda</a>
                <a class="linkcontent" href="Yayasan.html">Yayasan</a>
                <a class="linkcontent" href="">Tentang Kami</a>
            </div>
        </div>
        <div class="layanankami"><a>Layanan Kami</a>
            <div class="layanankamicontent">
                <div class="info">Perawat Lansia</div>
                <div class="info">Pengasuh Anak</div>
            </div>
        </div>
        <div class="kontak"><a>Kontak</a>
            <div class="isikontak">
                <img src="{{asset("image/mail.png")}}" alt="" class="mail">
                <div class="gmail" href="contact@sayangkeluarga@gmail.com">contact@sayangkeluarga@gmail.com</div>
            </div>
        </div>
        <div class="copyright">
            <img class="imgcopyr" src="{{asset("image/Line 2.png")}}" alt="">
            <a class="copyr">©2024</a>
            <a class="copyr">Terms of Service</a>
            <a class="copyr">Privacy Policy</a>
        </div>
    </div>
</footer>




    <script src="{{asset("Yayasan.js")}}"></script>
</body>


</html>