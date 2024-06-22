<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset("css/homepage.css")}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>SayangKeluarga</title>
    <style>
        * {
    padding: 0;
    margin: 0;
}

header {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    background: white;
    padding: 1.3rem 5.1%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-bottom: 1px solid #0287E4;
    z-index: 2;
    position: fixed;
}

header .navbar .icon {
    display: none;
}

.logo {
    font-size: 25px;
    font-family: 'Outfit', sans-serif;
    color: #008DFF;
}

.navbar {
    display: flex;
    gap: 5.5rem;
    padding-right: 31%;
}

.navbar a {
    text-decoration: none;
    color: #0287E4;
    font-size: 20px;
    font-family: 'Outfit', sans-serif;
}

.navbar a.menu:hover {
    opacity: 0.5;
}

.navbar a.active {
    color: rgba(2, 135, 228, 0.5);
}

.active {
    color: rgba(2, 135, 228, 0.5);
}

button {
    background-color: #0287E4;
    color: white;
    font-size: 20px;
    font-family: 'Outfit', sans-serif;
    border: none;
    width: 117px;
    height: 46px;
    padding: 0.5rem 1rem;
    border-radius: 10px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button a {
    text-decoration: none;
    color: inherit;
}

button:hover {
    opacity: 0.5;
}

/*                             START MODAL LOGIN                               */
.modal {
    display: none;
    position: fixed;
    z-index: 3;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0, 0, 0);
    background-color: rgba(0, 0, 0, 0.4);
    padding-top: 60px;
    font-family: 'Outfit', sans-serif;
}

.modal-content {
    background-color: #fefefe;
    margin: 5% auto;
    padding: 20px;
    align-items: center;
    border: 2px solid #888;
    width: 100%;
    border-radius: 10px;
    max-width: 552px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    animation: fadeIn 0.5s;
}

.titlelogin {
    display: flex;
    justify-content: center;
    font-size: 30px;
    font-family: 'Outfit', sans-serif;
    font-weight: 500;
    color: #595151;
    content: 'SayangKeluarga';
}

.highlight {
    color: #0287E4;
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }

    to {
        opacity: 1;
    }
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-top: 10px;
    margin-bottom: 8px;
    font-family: 'Outfit', sans-serif;
    margin-left: 80px;
}

.userbox {
    width: 100%;
    display: flex;
    position: relative;
}

.userbox input {
    margin-left: 80px;
    margin-right: 95px;
    width: 65%;
    padding: 8px;
    font-size: 16px;
    border: 1px solid #595151;
    border-radius: 10px;
}

.password-toggle-icon {
    position: absolute;
    top: 10px;
    right: 110px;
}

.textregister {
    justify-content: center;
    display: flex;
    font-family: 'Outfit', sans-serif;
    font-size: 15px !important;
    margin-top: 10px;
    margin-bottom: 30px;
}

.daftar {
    text-decoration: underline;
    color: #0287E4;
}

.masuk {
    padding: 10px;
    font-size: 16px;
    background-color: #0287E4;
    color: white;
    border: none;
    cursor: pointer;
    width: 200px;
    border-radius: 10px;
    margin-left: 176px;
}

.masuk:hover {
    background-color: rgba(0, 34, 136, 1);
    opacity: 50%;
}

/*                             END MODAL LOGIN                               */


/*                             START MODAL REGISTER                               */

.registbutton {
    background-color: transparent;
    border: none;
    padding: 0;
    margin: 0;
    /* Optionally, you can reset other styles like font, color, etc. */
    font-family: 'Outfit', sans-serif;
    font-size: 15px;
    color: inherit;
    /* Resetting cursor to default */
    cursor: auto;
    width: 200px;
}

.modal2 {
    display: none;
    position: fixed;
    z-index: 3;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0, 0, 0);
    background-color: rgba(0, 0, 0, 0.4);
    padding-top: 60px;
    font-family: 'Outfit', sans-serif;
}

.modal2-content {
    background-color: #fefefe;
    margin: 5% auto;
    padding: 20px;
    align-items: center;
    border: 2px solid #888;
    width: 100%;
    border-radius: 10px;
    max-width: 552px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    animation: fadeIn 0.5s;
}

.namabox {
    margin-top: 10px;
    width: fit-content;
    display: inline-flex;
}

.namabox a {
    display: flex;
    align-items: center;
    margin-left: 10px;
}

.namabox input {
    margin-left: 40px;
    width: 350px;
    padding: 8px;
    font-size: 16px;
    border: 2px solid #D9D9D9;
    border-radius: 10px;
}


.genderbox {
    margin-top: 15px;
    width: fit-content;
    display: inline-flex;
}

.genderbox a {
    display: flex;
    align-items: center;
    margin-left: 10px;
}

.genderbox select {
    margin-left: 52px;
    width: 100px;
    padding: 8px;
    font-size: 16px;
    border: 2px solid #D9D9D9;
    border-radius: 10px;
}


.datebox {
    margin-top: 15px;
    width: fit-content;
    display: inline-flex;
}

.datebox a {
    display: flex;
    align-items: center;
    margin-left: 10px;
}

.datebox input {
    margin-left: 50px;
    width: 150px;
    padding: 8px;
    font-size: 16px;
    border: 2px solid #D9D9D9;
    border-radius: 10px;
}

.nikbox {
    margin-top: 15px;
    width: fit-content;
    display: inline-flex;
}

.nikbox a {
    display: flex;
    align-items: center;
    margin-left: 10px;
}

.nikbox input {
    margin-left: 120px;
    width: 350px;
    padding: 8px;
    font-size: 16px;
    border: 2px solid #D9D9D9;
    border-radius: 10px;
}

.kotakabupatenbox {
    margin-top: 15px;
    width: fit-content;
    display: inline-flex;
}

.kotakabupatenbox a {
    display: flex;
    align-items: center;
    margin-left: 10px;
}

.kotakabupatenbox input {
    margin-left: 28px;
    width: 350px;
    padding: 8px;
    font-size: 16px;
    border: 2px solid #D9D9D9;
    border-radius: 10px;
}

.alamatbox {
    margin-top: 10px;
    width: fit-content;
    display: inline-flex;
    margin-bottom: 10px;
}

.alamatbox a {
    display: flex;
    align-items: center;
    margin-left: 10px;
}

.alamatbox input {
    margin-left: 92px;
    width: 350px;
    padding: 8px;
    font-size: 16px;
    border: 2px solid #D9D9D9;
    border-radius: 10px;
}

.linedivider {
    border-bottom: 2px solid #D9D9D9;
    width: 512px;
    margin-left: 10px;
}

.emailbox {
    margin-top: 10px;
    width: fit-content;
    display: inline-flex;
}

.emailbox a {
    display: flex;
    align-items: center;
    margin-left: 10px;
}

.emailbox input {
    margin-left: 105px;
    width: 350px;
    padding: 8px;
    font-size: 16px;
    border: 2px solid #D9D9D9;
    border-radius: 10px;
}


.numberbox {
    margin-top: 10px;
    width: fit-content;
    display: inline-flex;
}

.numberbox a {
    display: flex;
    align-items: center;
    margin-left: 10px;
}

.numberbox input {
    margin-left: 37px;
    width: 350px;
    padding: 8px;
    font-size: 16px;
    border: 2px solid #D9D9D9;
    border-radius: 10px;
}

.passwordbox {
    margin-top: 10px;
    width: fit-content;
    display: inline-flex;
    margin-bottom: 50px;
}

.passwordbox a {
    display: flex;
    align-items: center;
    margin-left: 10px;
}

.passwordbox input {
    margin-left: 30px;
    width: 350px;
    padding: 8px;
    font-size: 16px;
    border: 2px solid #D9D9D9;
    border-radius: 10px;
}

.textlogin {
    justify-content: center;
    display: flex;
    font-family: 'Outfit', sans-serif;
    font-size: 15px !important;
    margin-top: 10px;
    margin-bottom: 30px;
}

.logintext {
    text-decoration: underline;
    color: #0287E4;
}


.titleregister {
    display: flex;
    justify-content: center;
    font-size: 30px;
    font-family: 'Outfit', sans-serif;
    font-weight: 500;
    color: #595151;
    content: 'SayangKeluarga';
    margin-bottom: 20px;
}

.daftar2 {
    padding: 10px;
    font-size: 16px;
    background-color: #0287E4;
    color: white;
    border: none;
    cursor: pointer;
    width: 200px;
    border-radius: 10px;
    margin-left: 176px;
    text-decoration: none;
}

.daftar2:hover {
    background-color: rgba(0, 34, 136, 1);
    opacity: 50%;
}

/*                             END MODAL REGISTER                               */

.swipecontent {
    z-index: 1;
    display: block;
    float: none;
}

.swiper {
    float: none !important;
    width: 80%;
    height: 80%;
    margin: 100px;
}

.swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;
    display: block;
    justify-content: center;
    align-items: center;
}

.swiper-slide img {
    display: block;
    width: 100%;
    float: none;
    height: 100%;
    border-radius: 20px;
    /* object-fit: cover; */
}

@media screen and (max-width: 814px) {
    header {
        padding: 1rem 2%;
    }

    .navbar a:not(:first-child) {
        display: none;
    }

    .navbar a.icon {
        display: block;
    }

    .navbar.responsive {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        padding-right: 0;
    }

    .navbar.responsive a {
        font-size: 18px;
        padding: 0.5rem 0;
        text-align: center;
    }

    button {
        display: none;
    }
}

.content {
    margin-top: 130px;
}

.yayasan {
    font-family: 'Outfit', sans-serif;
    border: solid #C3E3FD;
    border-radius: 20px;
    background-color: #C3E3FD;
}

.yayasantext {
    margin-left: 50px;
    margin-right: 50px;
    margin-top: 45px;
    display: flex;
}

.yayasantext a {
    font-size: 45px;
    font-weight: bold;
    color: #0287E4;
}

.yayasantextcontent {
    color: #595151;
    width: 1060px;
    font-size: 25px;
}

.yayasantext img {
    display: block;
    margin-left: 100px;
}

.yayasancontent {
    display: flex;
    justify-content: space-between;
}

.ycontent1 {
    background-color: #fff;
    width: 401px;
    height: 350px;
    border-radius: 30px;
    /* margin-bottom: 65px; */
    margin-left: 50px;
    margin-right: 50px;
}

#logo1 {
    margin-top: 22px;
    margin-left: 55px;
}

#logo2 {
    margin-top: 22px;
    margin-left: 55px;
    width: 300px;
    height: 180px;
}

#logo3 {
    margin-top: 22px;
    margin-left: 120px;
    width: 180px;
    height: 180px;
}

.yc1text {
    margin-left: 28px;
    margin-right: 32px;
}

.yc1text1 {
    font-size: 30px;
}

.ycontent1:hover{
    opacity: 50%;
}

.yc1text2 {
    background-color: #008DFF;
    color: #fff;
    text-align: center;
    width: 40%;
    border-radius: 7px;
    margin-top: 5px;
    font-size: 15px;
}
.yc3text2 {
    background-color: #FF00C7;
    color: #fff;
    text-align: center;
    width: 40%;
    border-radius: 7px;
    margin-top: 5px;
}

.yc1info {
    display: flex;
    justify-content: space-between;
    margin-left: 0px;
    margin-top: 30px;
    font-size: 20px;
    color: #757070;
}

.yayasanmelihat button {
    background: none;
    border: none;
    color: #0287E4;
    font-size: 20px;
    cursor: pointer;
    text-align: right;
    margin-bottom: 27px;
    margin-left: 1080px;
    margin-top: 10px;
    text-align: right;
    margin-right: 51px;
    white-space: nowrap;
}


.yayasanmelihat:hover{
    opacity: 50%;
}

.tentangkami {
    font-family: 'Outfit', sans-serif;
    display: block;
    align-items: center;
    margin-bottom: 100px;
    margin-top: 80px;
}

.headertentangkami {
    font-weight: bold;
    font-size: 45px;
    color: #0287E4;
    justify-content: center;
    display: flex;
    margin-bottom: 50px;
}

.tentangkamicontent {
    display: flex;
    justify-content: space-between;

}

.content1 {
    justify-content: center;
    display: block;
    margin-left: 129px;
    margin-right: 129px;
}

.content1 img {
    width: 236px;
    height: 200px;
    display: block;
    border: 2px solid #C3E3FD;
    background-color: #C3E3FD;
    border-radius: 50%;
    margin-left: 12px;
}

.content1 .textcontent1 {
    width: 252px;
    text-align: center;
    border: 5px solid #C3E3FD;
    color: #757070;
    border-radius: 25px;
    font-size: 15px;
}


.footer {
    font-family: 'Outfit', sans-serif;
    position: relative;
    background-color: #008DFF;
    height: 400px;
    color: #fff;
    font-size: 25px;
    display: flex;
    justify-content: space-between;
}

.desc {
    display: block;
    margin-left: 70px;
    margin-top: 40px;
}

.desc a {
    font-size: 25px !important;
    font-weight: bold;
}

.desc .text {
    width: 400px;
    margin-top: 36px !important;
    font-size: 20px;
}

.explore {
    margin-top: 40px;
    font-size: 25px;
    font-weight: bold;
}

.footerLink {
    display: block;
    margin-top: 25px;
}

.linkcontent {
    display: block;
    font-size: 20px;
    font-weight: normal;
    text-decoration: none;
    color: white;
}

.layanankami {
    margin-top: 40px;
}

.layanankami a {
    font-size: 25px !important;
    font-weight: bold;
}

.layanankamicontent {
    margin-top: 25px;
}

.layanankami .info {
    display: block;
    font-size: 20px;
}

.kontak {
    margin-top: 40px;
    margin-right: 70px;
}

.kontak a {
    font-size: 25px !important;
    font-weight: bold;
}

.mail {
    margin-right: 10px;
    margin-top: 5px;
}

.isikontak {
    display: flex;
    justify-content: space-between;
    font-weight: normal;
    margin-top: 20px;
    font-size: 20px;
}

.copyright {
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    margin-bottom: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 50px;
    font-size: 15px;
}

.imgcopyr {
    position: absolute;
    bottom: 60px;
    display: block;
    justify-content: center;
    align-items: center;
}
    </style>
</head>

<body>
    <header>
        <div class="navbar" id="myNav">
            <a class="logo">SaKe</a>
            <a href="#beranda" class="active">Beranda</a>
            <a href="{{route('yayasanlogin')}}" class="menu">Yayasan</a>
            <a href="#tentangkami" class="menu">Tentang Kami</a>
            <a href="" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <button id="loginBtn">
            <a href="#login" \>Login</a>
        </button>
    </header>

    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <a class="titlelogin">
                Masuk ke akun&nbsp;<span class="highlight">SayangKeluarga</span>
            </a>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <label for="email">Email</label>
                <div class="userbox">
                    <input type="email" id="email" name="email" required>
                </div>
                <label for="password">Kata Sandi</label>
                <div class="userbox">
                    <input type="password" id="password" name="password" required>
                    <span class="password-toggle-icon" onclick="togglePasswordVisibility()">
                        <i class="fas fa-eye"></i>
                    </span>
                </div>
                <div class="textregister">
                    <a href="#">Akun belum terdaftar?</a>
                    <a id="registerBtn" class="daftar" href="{{ route('register') }}">Daftar Sekarang</a>
                </div>
                <button class="masuk" type="submit">Masuk</button>
            </form>
        </div>
    </div>

    <div id="registerModal" class="modal2">
        <div class="modal2-content">
            <span class="close">&times;</span>
            <a class="titleregister">
                Membuat akun&nbsp;<span class="highlight">SayangKeluarga</span>
            </a>
            <form>

                <div class="namabox">
                    <a>Nama Lengkap</a>
                    <input type="text" id="uname" name="uname" required>
                </div>

                <div class="genderbox">
                    <a>Jenis Kelamin</a>
                    <select id="gender" name="gender">
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>

                <div class="datebox">
                    <a>Tanggal Lahir</a>
                    <input type="date" id="date" name="date">
                </div>

                <div class="nikbox">
                    <a>NIK</a>
                    <input type="text" id="nik" name="nik" required>
                </div>

                <div class="kotakabupatenbox">
                    <a>Kota/Kabupaten</a>
                    <input type="text" id="kotakabupaten" name="kotakabupaten" required>
                </div>

                <div class="alamatbox">
                    <a>Alamat</a>
                    <input type="text" id="alamat" name="alamat" required>
                </div>

                <div class="linedivider"></div>

                <div class="emailbox">
                    <a>Email</a>
                    <input type="text" id="email" name="email" required>
                </div>

                <div class="numberbox">
                    <a>Nomor telepon</a>
                    <input type="tel" id="phone" name="phone">
                </div>

                <div class="passwordbox">
                    <a>Buat Kata Sandi</a>
                    <input type="password" id="pass" name="pass" required>
                </div>


                <div class="textlogin">
                    <a>Sudah ada akun?</a>
                    <a id="loginBtn2" class="logintext"href="">Masuk Sekarang</a>
                </div>
                <button class="daftar2" type="submit"><a href="homepagelogin.html">Daftar</a></button>
            </form>
        </div>
    </div>

    <div class="content">
        <div class="banner">
            <section class="swipecontent">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{asset("image/Rectangle 3.png")}}" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset("image/orangsakit.png")}}" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset("image/semimedis.png")}}" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset("image/lansiaindex.png")}}" alt=""></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </section>
        
            <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        
            <script>
                var swiper = new Swiper(".mySwiper", {
                    cssMode: true,
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                    pagination: {
                        el: ".swiper-pagination",
                    },
                    mousewheel: true,
                    keyboard: true,
                });
            </script>
        </div>

        <div class="yayasan">
            <div class="yayasantext">
                <div class="yayasantextcontent">
                    <a>Temukan Yayasan Terpercaya di Sake!</a><br>
                    Anda akan mendapatkan akses ke pelayanan dari yayasan perawat yang terbaik di Indonesia. Kami telah
                    menjalin kerjasama dengan yayasan-yayasan yang terkemuka dan terpercaya, memastikan bahwa setiap
                    klien mendapatkan perawatan yang berkualitas tinggi.
                </div>
                <img src="{{asset("image/nanny1.png")}}" alt="">
            </div>
            <div class="yayasancontent">
                <div class="ycontent1">
                    <img id="logo1" src="{{asset("image/insanmedika.jpg")}}" alt="">
                    <div class="yc1text">
                        <div class="yc1text1">Insan Medika</div>
                        <div class="yc1text2"> Pengasuh Lansia </div>
                        <div class="yc1info">
                            <div class="rating1">
                                <img src="{{asset("image/Vector.png")}}" alt="">
                                <a>4.7</a>
                            </div>
                            <div class="lokasi1">
                                <img src="{{asset("image/vectorrr.png")}}" alt="">
                                <a>Jakarta Selatan</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ycontent1">
                    <img id="logo2" src="{{asset("image/Capten-Care-Logo-Low-px.jpg")}}" alt="">
                    <div class="yc1text">
                        <div class="yc1text1">Capten Care</div>
                        <div class="yc1text2"> Pengasuh Lansia </div>
                        <div class="yc1info">
                            <div class="rating1">
                                <img src="{{asset("image/Vector.png")}}" alt="">
                                <a>4.2</a>
                            </div>
                            <div class="lokasi1">
                                <img src="{{asset("image/vectorrr.png")}}" alt="">
                                <a>Jakarta Selatan</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ycontent1">
                    <img id="logo3" src="{{asset("image/new-logo.png")}}" alt="">
                    <div class="yc1text">
                        <div class="yc1text1">Nanny Care</div>
                        <div class="yc3text2"> Pengasuh Anak </div>
                        <div class="yc1info">
                            <div class="rating1">
                                <img src="{{asset("image/Vector.png")}}" alt="">
                                <a>4.9</a>
                            </div>
                            <div class="lokasi1">
                                <img src="{{asset("image/vectorrr.png")}}" alt="">
                                <a>Bogor</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="yayasanmelihat">
                <form action="{{route('yayasanlogin')}}">
                    <button type="submit">Melihat selengkapnya</button>
                </form>
            </div>
            
        </div>

        <div class="tentangkami">
            <div class="headertentangkami">Mengapa Memilih Kami ?</div>
            <div class="tentangkamicontent">
                <div class="content1">
                    <img src="{{asset("image/contract_icon-removebg-preview.png")}}" alt="">
                    <div class="textcontent1">Memiliki sistem kontrak yang menjamin kesepakatan sah antara Yayasan dan
                        Klien</div>
                </div>
                <div class="content1">
                    <img src="{{asset("image/trophy-removebg-preview.png")}}" alt="">
                    <div class="textcontent1">Kerjasama dengan Yayasan-Yayasan Terkemuka di Indonesia yang Diakui dan
                        Terpercaya</div>
                </div>
                <div class="content1">
                    <img src="{{asset("image/document-removebg-preview.png")}}" alt="">
                    <div class="textcontent1">Menyediakan informasi lengkap mengenai Yayasan, memudahkan Anda dalam
                        memilih dengan bijaksana</div>
                </div>


            </div>

        </div>

    </div>

    <footer>
        <div class="footer">
            <div class="desc"><a>Sayang Keluarga</a>
                <div class="text">Melalui platform kami, Anda dapat menemukan informasi lengkap mengenai setiap yayasan,
                    termasuk reputasi, layanan yang disediakan, dan ulasan dari klien sebelumnya.</div>
            </div>
            <div class="explore"><a>Explore</a>
                <div class="footerLink">
                    <a class="linkcontent" href="{{route('homepage')}}">Beranda</a>
                    <a class="linkcontent" href="{{route('yayasanlogin')}}">Yayasan</a>
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

<script>

document.querySelector('form').addEventListener('submit', function(event) {
    console.log('Form is being submitted'); // Debugging line
    // Ensure the default submission is not prevented
});
    document.addEventListener('DOMContentLoaded', function() {
    var loginModal = document.getElementById("loginModal");
    var registerModal = document.getElementById("registerModal");
    var loginBtn = document.getElementById("loginBtn");
    var registerBtn = document.getElementById("registerBtn");
    var closeLoginBtn = document.getElementsByClassName("close")[0];
    var closeRegisterBtn = document.getElementsByClassName("close")[1];

    loginBtn.onclick = function() {
        loginModal.style.display = "block";
    }

    closeLoginBtn.onclick = function() {
        loginModal.style.display = "none";
    }

    document.getElementById("registerBtn").addEventListener("click", function(event) {
        event.preventDefault();
        loginModal.style.display = "none"; 
        registerModal.style.display = "block"; 
    });

    document.getElementById("loginBtn2").addEventListener("click", function(event) {
        event.preventDefault();
        loginModal.style.display = "block"; 
        registerModal.style.display = "none"; 
    });

    closeRegisterBtn.onclick = function() {
        registerModal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == loginModal) {
            loginModal.style.display = "none";
        }
        if (event.target == registerModal) {
            registerModal.style.display = "none";
        }
    }
});

function togglePasswordVisibility() {
    var passwordField = document.getElementById('password');
    var passwordToggleIcon = document.querySelector('.password-toggle-icon i');
    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        passwordToggleIcon.classList.remove('fa-eye');
        passwordToggleIcon.classList.add('fa-eye-slash');
    } else {
        passwordField.type = 'password';
        passwordToggleIcon.classList.remove('fa-eye-slash');
        passwordToggleIcon.classList.add('fa-eye');
    }
}

document.getElementById('registrationForm').addEventListener('submit', function(event) {
    // Validate NIK
    const nik = document.getElementById('nik').value;
    if (nik.length !== 16) {
        alert('NIK harus 16 karakter.');
        event.preventDefault();
        return;
    }

    // Validate Email
    const email = document.getElementById('email').value;
    const emailPattern = /^[a-zA-Z0-9._%+-]+@gmail\.com$/;
    if (!emailPattern.test(email)) {
        alert('Email harus merupakan email @gmail.com yang valid.');
        event.preventDefault();
        return;
    }

    // Validate Phone Number
    const phone = document.getElementById('phone').value;
    if (!phone.startsWith('+62')) {
        alert('Nomor telepon harus berawalan +62.');
        event.preventDefault();
        return;
    }
});

const passwordField = document.getElementById("password");
const togglePassword = document.querySelector(".password-toggle-icon i");

togglePassword.addEventListener("click", function () {
    if (passwordField.type === "password") {
        passwordField.type = "text";
        togglePassword.classList.remove("fa-eye");
        togglePassword.classList.add("fa-eye-slash");
    } else {
        passwordField.type = "password";
        togglePassword.classList.remove("fa-eye-slash");
        togglePassword.classList.add("fa-eye");
    }
});
</script>
</body>