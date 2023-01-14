<?php
$url =  $_SERVER["REQUEST_URI"];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
    <title>Undangan Pernikahan</title>
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
  </head>
  <body>
    <!-- laguF start -->
    <audio loop id="lagu">
      <source src="audio/audio.mp3" type="audio/mp3" />
    </audio>
    <!-- lagu end -->
    <!-- popup start -->
    <div class="d-none">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" id="klikmodal">Launch Demo</button>
    </div>
    <div class="modal fade" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
          <div class="modal-body bg-wakwak">
            <div class="row justify-content-center text-center h-100">
              <div class="col-md-6 col-12 my-md-auto mt-3">
                <img src="img/1.png" alt="" width="230px" class="rounded-pill shadow-lg" />
              </div>
              <div class="col-md-6 col-12 my-md-auto">
                Pernikahan dari
                <h1 class="font-dancing fs-60">Nabila & Kresno</h1>
                <p>Minggu, 29 Januari 2023</p>
                <hr class="border-secondary w-50 mx-auto" />
                <p class="mb-1">Kepada Bapak/Ibu/Saudara/i</p>
                <p class="mb-1"><?php echo $url; ?></span></p>
                <p class="mb-2">di Tempat</p>
                <button type="button" class="btn bg-berem btn-outline-secondary text-white rounded-4" data-bs-dismiss="modal" onclick="playAudio()">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-heart-fill mb-1" viewBox="0 0 16 16">
                    <path
                      d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555l-4.2 2.568a2.785 2.785 0 0 0-.051-.105c-.666-1.3-2.363-1.917-3.699-1.25-1.336-.667-3.033-.05-3.699 1.25l-.05.105L.05 3.555ZM11.584 8.91a4.694 4.694 0 0 1-.073.139L16 11.8V4.697l-4.003 2.447c.027.562-.107 1.163-.413 1.767Zm-4.135 3.05c-1.048-.693-1.84-1.39-2.398-2.082L.19 12.856A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144L10.95 9.878c-.559.692-1.35 1.389-2.398 2.081L8 12.324l-.551-.365ZM4.416 8.91c-.306-.603-.44-1.204-.413-1.766L0 4.697v7.104l4.49-2.752a4.742 4.742 0 0 1-.074-.138Z"
                    />
                    <path d="M8 5.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z" />
                  </svg>
                  Buka Undangan
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- popup end -->
    <!-- header start -->
    <header class="bg-wakwak">
      <div class="d-flex justify-content-center vh-100" style="background-image: url(img/2.jpg); background-size: cover">
        <div class="container mt-auto">
          <div class="row text-center">
            <div class="col-12 mt-5">
              <img src="img/1.png" alt="" width="230px" />
            </div>
            <div class="col-12 mt-5">
              Pernikahan dari
              <h1 class="font-dancing fs-60">Nabila & Kresno</h1>
              <p>Minggu, 29 Januari 2023</p>
            </div>
            <div class="col-12">
              <div class="row justify-content-center">
                <div class="col-md-8">
                  <div class="row mb-3">
                    <div class="col-3 m-0 p-1">
                      <div class="card p-2 my-auto rounded-4 bg-berem text-white">
                        <p class="p-0 m-0" id="hari"></p>
                        Hari
                      </div>
                    </div>
                    <div class="col-3 m-0 p-1">
                      <div class="card p-2 my-auto rounded-4 bg-berem text-white">
                        <p class="p-0 m-0" id="jam"></p>
                        Jam
                      </div>
                    </div>
                    <div class="col-3 m-0 p-1">
                      <div class="card p-2 my-auto rounded-4 bg-berem text-white">
                        <p class="p-0 m-0" id="menit"></p>
                        Menit
                      </div>
                    </div>
                    <div class="col-3 m-0 p-1">
                      <div class="card p-2 my-auto rounded-4 bg-berem text-white">
                        <p class="p-0 m-0" id="detik"></p>
                        Detik
                      </div>
                    </div>
                  </div>
                  <a href="#date" class="text-decoration-none btn text-white bg-berem mb-3 rounded-4 btn-outline-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save2-fill mb-1" viewBox="0 0 16 16">
                      <path d="M8.5 1.5A1.5 1.5 0 0 1 10 0h4a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6c-.314.418-.5.937-.5 1.5v6h-2a.5.5 0 0 0-.354.854l2.5 2.5a.5.5 0 0 0 .708 0l2.5-2.5A.5.5 0 0 0 10.5 7.5h-2v-6z" />
                    </svg>
                    Save The Date
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- header end -->
    <!-- ayat start -->
    <section class="bg-wakwak">
      <div class="container py-5">
        <div class="row text-center fw-bold justify-content-center" data-aos="zoom-in" data-aos-duration="1300">
          <div class="col-lg-9 col-md-11 col-12">
            <p>
              "Dan diantara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang. Sungguh,
              pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir "
            </p>
            <p>- QS. Ar-Rum 21 -</p>
          </div>
        </div>
      </div>
    </section>
    <!-- ayat end -->
    <svg id="wave" class="bg-wakwak" style="transform: rotate(0deg); transition: 0.3s" viewBox="0 0 1440 160" version="1.1" xmlns="http://www.w3.org/2000/svg">
      <path
        fill="#FFC7C7"
        d="M0,48L60,50.7C120,53,240,59,360,72C480,85,600,107,720,112C840,117,960,107,1080,88C1200,69,1320,43,1440,26.7C1560,11,1680,5,1800,8C1920,11,2040,21,2160,21.3C2280,21,2400,11,2520,18.7C2640,27,2760,53,2880,56C3000,59,3120,37,3240,32C3360,27,3480,37,3600,58.7C3720,80,3840,112,3960,120C4080,128,4200,112,4320,101.3C4440,91,4560,85,4680,85.3C4800,85,4920,91,5040,77.3C5160,64,5280,32,5400,16C5520,0,5640,0,5760,0C5880,0,6000,0,6120,0C6240,0,6360,0,6480,18.7C6600,37,6720,75,6840,85.3C6960,96,7080,80,7200,66.7C7320,53,7440,43,7560,42.7C7680,43,7800,53,7920,56C8040,59,8160,53,8280,53.3C8400,53,8520,59,8580,61.3L8640,64L8640,160L8580,160C8520,160,8400,160,8280,160C8160,160,8040,160,7920,160C7800,160,7680,160,7560,160C7440,160,7320,160,7200,160C7080,160,6960,160,6840,160C6720,160,6600,160,6480,160C6360,160,6240,160,6120,160C6000,160,5880,160,5760,160C5640,160,5520,160,5400,160C5280,160,5160,160,5040,160C4920,160,4800,160,4680,160C4560,160,4440,160,4320,160C4200,160,4080,160,3960,160C3840,160,3720,160,3600,160C3480,160,3360,160,3240,160C3120,160,3000,160,2880,160C2760,160,2640,160,2520,160C2400,160,2280,160,2160,160C2040,160,1920,160,1800,160C1680,160,1560,160,1440,160C1320,160,1200,160,1080,160C960,160,840,160,720,160C600,160,480,160,360,160C240,160,120,160,60,160L0,160Z"
      ></path>
    </svg>
    <svg id="wave" class="bg-wakwak" style="transform: rotate(180deg); transition: 0.3s" viewBox="0 0 1440 160" version="1.1" xmlns="http://www.w3.org/2000/svg">
      <path
        fill="#FFC7C7"
        d="M0,48L60,50.7C120,53,240,59,360,72C480,85,600,107,720,112C840,117,960,107,1080,88C1200,69,1320,43,1440,26.7C1560,11,1680,5,1800,8C1920,11,2040,21,2160,21.3C2280,21,2400,11,2520,18.7C2640,27,2760,53,2880,56C3000,59,3120,37,3240,32C3360,27,3480,37,3600,58.7C3720,80,3840,112,3960,120C4080,128,4200,112,4320,101.3C4440,91,4560,85,4680,85.3C4800,85,4920,91,5040,77.3C5160,64,5280,32,5400,16C5520,0,5640,0,5760,0C5880,0,6000,0,6120,0C6240,0,6360,0,6480,18.7C6600,37,6720,75,6840,85.3C6960,96,7080,80,7200,66.7C7320,53,7440,43,7560,42.7C7680,43,7800,53,7920,56C8040,59,8160,53,8280,53.3C8400,53,8520,59,8580,61.3L8640,64L8640,160L8580,160C8520,160,8400,160,8280,160C8160,160,8040,160,7920,160C7800,160,7680,160,7560,160C7440,160,7320,160,7200,160C7080,160,6960,160,6840,160C6720,160,6600,160,6480,160C6360,160,6240,160,6120,160C6000,160,5880,160,5760,160C5640,160,5520,160,5400,160C5280,160,5160,160,5040,160C4920,160,4800,160,4680,160C4560,160,4440,160,4320,160C4200,160,4080,160,3960,160C3840,160,3720,160,3600,160C3480,160,3360,160,3240,160C3120,160,3000,160,2880,160C2760,160,2640,160,2520,160C2400,160,2280,160,2160,160C2040,160,1920,160,1800,160C1680,160,1560,160,1440,160C1320,160,1200,160,1080,160C960,160,840,160,720,160C600,160,480,160,360,160C240,160,120,160,60,160L0,160Z"
      ></path>
    </svg>
    <!-- calon start -->
    <section class="bg-wakwak">
      <div class="container py-5">
        <div class="row text-center justify-content-center">
          <div class="col-12 mb-5" data-aos="zoom-in" data-aos-duration="1300">
            <img src="img/bismillah.png" alt="" width="200px" class="mb-3" />
            <h5 class="mb-3">Assalamualaikum Wr. Wb.</h5>
            <p class="m-0 p-0">Tanpa mengurangi rasa hormat</p>
            <p class="m-0 p-0">Kami mengundang Bapak/ibu/Saudara/i serta kerabat sekalian untuk menghadiri acara pernikahan kami</p>
          </div>
          <div class="col-md-5 col-12 my-md-4 my-3" data-aos="zoom-in" data-aos-duration="1300" data-aos-delay="500">
            <img src="img/lala1.png" class="rounded-circle shadow-lg border-white mb-3" alt="" width="200px" />
            <h1 class="font-dancing text-dark fs-45">Nabila Az Zahra Ramadhani</h1>
            <p class="m-0 p-0">Putri Kedua</p>
            <p class="m-0 p-0">Bapak Imat Ruhimat & Ibu Ika Tarmika Dewi</p>
          </div>
          <div class="col-md-2 col-12 m-md-auto my-5" data-aos="zoom-in" data-aos-duration="1300" data-aos-delay="600">
            <h1 class="m-0 p-0 font-dancing">&</h1>
          </div>
          <div class="col-md-5 col-12 my-md-4 my-3" data-aos="zoom-in" data-aos-duration="1300" data-aos-delay="1100">
            <img src="img/kresno1.png" class="rounded-circle shadow-lg border-white mb-3" alt="" width="200px" />
            <h1 class="font-dancing text-dark fs-45">Kresno Satrio Kuncoro Zito</h1>
            <p class="m-0 p-0">Putra Pertama</p>
            <p class="m-0 p-0">(Alm.) Bapak Rudjito & Ibu Dede Masitoh</p>
          </div>
        </div>
      </div>
    </section>
    <!-- calon end -->
    <!-- akad start -->
    <svg id="wave" class="bg-wakwak" style="transform: rotate(0deg); transition: 0.3s" viewBox="0 0 1440 210" version="1.1" xmlns="http://www.w3.org/2000/svg">
      <defs>
        <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
          <stop stop-color="rgba(135, 133, 162, 0.84)" offset="0%"></stop>
          <stop stop-color="rgba(135, 133, 162, 1)" offset="100%"></stop>
        </linearGradient>
      </defs>
      <path
        style="transform: translate(0, 0px); opacity: 1"
        fill="url(#sw-gradient-0)"
        d="M0,168L60,157.5C120,147,240,126,360,126C480,126,600,147,720,143.5C840,140,960,112,1080,91C1200,70,1320,56,1440,59.5C1560,63,1680,84,1800,94.5C1920,105,2040,105,2160,105C2280,105,2400,105,2520,105C2640,105,2760,105,2880,105C3000,105,3120,105,3240,108.5C3360,112,3480,119,3600,105C3720,91,3840,56,3960,38.5C4080,21,4200,21,4320,31.5C4440,42,4560,63,4680,87.5C4800,112,4920,140,5040,154C5160,168,5280,168,5400,168C5520,168,5640,168,5760,147C5880,126,6000,84,6120,84C6240,84,6360,126,6480,147C6600,168,6720,168,6840,171.5C6960,175,7080,182,7200,157.5C7320,133,7440,77,7560,49C7680,21,7800,21,7920,45.5C8040,70,8160,119,8280,129.5C8400,140,8520,112,8580,98L8640,84L8640,210L8580,210C8520,210,8400,210,8280,210C8160,210,8040,210,7920,210C7800,210,7680,210,7560,210C7440,210,7320,210,7200,210C7080,210,6960,210,6840,210C6720,210,6600,210,6480,210C6360,210,6240,210,6120,210C6000,210,5880,210,5760,210C5640,210,5520,210,5400,210C5280,210,5160,210,5040,210C4920,210,4800,210,4680,210C4560,210,4440,210,4320,210C4200,210,4080,210,3960,210C3840,210,3720,210,3600,210C3480,210,3360,210,3240,210C3120,210,3000,210,2880,210C2760,210,2640,210,2520,210C2400,210,2280,210,2160,210C2040,210,1920,210,1800,210C1680,210,1560,210,1440,210C1320,210,1200,210,1080,210C960,210,840,210,720,210C600,210,480,210,360,210C240,210,120,210,60,210L0,210Z"
      ></path>
      <defs>
        <linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0">
          <stop stop-color="rgba(135, 133, 162, 0.74)" offset="0%"></stop>
          <stop stop-color="rgba(135, 133, 162, 1)" offset="100%"></stop>
        </linearGradient>
      </defs>
      <path
        style="transform: translate(0, 50px); opacity: 0.9"
        fill="url(#sw-gradient-1)"
        d="M0,42L60,66.5C120,91,240,140,360,136.5C480,133,600,77,720,49C840,21,960,21,1080,28C1200,35,1320,49,1440,45.5C1560,42,1680,21,1800,10.5C1920,0,2040,0,2160,14C2280,28,2400,56,2520,56C2640,56,2760,28,2880,35C3000,42,3120,84,3240,87.5C3360,91,3480,56,3600,38.5C3720,21,3840,21,3960,45.5C4080,70,4200,119,4320,129.5C4440,140,4560,112,4680,94.5C4800,77,4920,70,5040,66.5C5160,63,5280,63,5400,84C5520,105,5640,147,5760,161C5880,175,6000,161,6120,140C6240,119,6360,91,6480,73.5C6600,56,6720,49,6840,42C6960,35,7080,28,7200,38.5C7320,49,7440,77,7560,98C7680,119,7800,133,7920,126C8040,119,8160,91,8280,77C8400,63,8520,63,8580,63L8640,63L8640,210L8580,210C8520,210,8400,210,8280,210C8160,210,8040,210,7920,210C7800,210,7680,210,7560,210C7440,210,7320,210,7200,210C7080,210,6960,210,6840,210C6720,210,6600,210,6480,210C6360,210,6240,210,6120,210C6000,210,5880,210,5760,210C5640,210,5520,210,5400,210C5280,210,5160,210,5040,210C4920,210,4800,210,4680,210C4560,210,4440,210,4320,210C4200,210,4080,210,3960,210C3840,210,3720,210,3600,210C3480,210,3360,210,3240,210C3120,210,3000,210,2880,210C2760,210,2640,210,2520,210C2400,210,2280,210,2160,210C2040,210,1920,210,1800,210C1680,210,1560,210,1440,210C1320,210,1200,210,1080,210C960,210,840,210,720,210C600,210,480,210,360,210C240,210,120,210,60,210L0,210Z"
      ></path>
      <defs>
        <linearGradient id="sw-gradient-2" x1="0" x2="0" y1="1" y2="0">
          <stop stop-color="rgba(135, 133, 162, 0.8)" offset="0%"></stop>
          <stop stop-color="rgba(135, 133, 162, 1)" offset="100%"></stop>
        </linearGradient>
      </defs>
      <path
        style="transform: translate(0, 100px); opacity: 0.8"
        fill="url(#sw-gradient-2)"
        d="M0,168L60,154C120,140,240,112,360,108.5C480,105,600,126,720,140C840,154,960,161,1080,150.5C1200,140,1320,112,1440,94.5C1560,77,1680,70,1800,84C1920,98,2040,133,2160,122.5C2280,112,2400,56,2520,49C2640,42,2760,84,2880,98C3000,112,3120,98,3240,91C3360,84,3480,84,3600,70C3720,56,3840,28,3960,24.5C4080,21,4200,42,4320,63C4440,84,4560,105,4680,101.5C4800,98,4920,70,5040,63C5160,56,5280,70,5400,66.5C5520,63,5640,42,5760,31.5C5880,21,6000,21,6120,38.5C6240,56,6360,91,6480,98C6600,105,6720,84,6840,84C6960,84,7080,105,7200,105C7320,105,7440,84,7560,70C7680,56,7800,49,7920,59.5C8040,70,8160,98,8280,108.5C8400,119,8520,112,8580,108.5L8640,105L8640,210L8580,210C8520,210,8400,210,8280,210C8160,210,8040,210,7920,210C7800,210,7680,210,7560,210C7440,210,7320,210,7200,210C7080,210,6960,210,6840,210C6720,210,6600,210,6480,210C6360,210,6240,210,6120,210C6000,210,5880,210,5760,210C5640,210,5520,210,5400,210C5280,210,5160,210,5040,210C4920,210,4800,210,4680,210C4560,210,4440,210,4320,210C4200,210,4080,210,3960,210C3840,210,3720,210,3600,210C3480,210,3360,210,3240,210C3120,210,3000,210,2880,210C2760,210,2640,210,2520,210C2400,210,2280,210,2160,210C2040,210,1920,210,1800,210C1680,210,1560,210,1440,210C1320,210,1200,210,1080,210C960,210,840,210,720,210C600,210,480,210,360,210C240,210,120,210,60,210L0,210Z"
      ></path>
    </svg>
    <section class="bg-berem" id="date">
      <div class="container py-5">
        <div class="row text-center justify-content-center">
          <div class="col-12 mb-5" data-aos="zoom-in" data-aos-duration="1300">
            <h1 class="font-dancing fs-40 text-white">Save The Date</h1>
          </div>
          <div class="col-md-12 col-12 py-3" data-aos="zoom-in" data-aos-duration="1300" data-aos-delay="500">
            <div class="card p-3 shadow bg-fee">
              <h1 class="font-dancing mb-3 fs-40">Akad Nikah & Ramah Tamah</h1>
              <p class="fw-bold p-0 m-0">Minggu, 29 Januari 2023</p>
              <p class="m-0 p-0">Pukul 08.00 - 12.00 WIB</p>
              <p class="m-0 p-0">Kab. Kuningan, Jawa Barat, Indonesia</p>
            </div>
          </div>
          <div class="col-12 py-3" data-aos="zoom-in" data-aos-duration="1300" data-aos-delay="1000">
            <h1 class="font-dancing mb-3 fs-40 text-white">Lokasi</h1>
            <iframe 
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d990.0296235634861!2d108.48961736973978!3d-6.995323375362832!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa0dddb7fb4e705fa!2zNsKwNTknNDMuNyJTIDEwOMKwMjknMjQuMCJF!5e0!3m2!1sid!2sid!4v1673671619635!5m2!1sid!2sid" 
              width="100%" 
              height="450"
              style="border:0;" 
              allowfullscreen="" 
              loading="lazy" 
              referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            <a href="https://goo.gl/maps/aqgcgKusLG8aZAD3A" target="_blank" class="text-decoration-none btn btn-light btn-outline-secondary mb-3 rounded-4">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill mb-1" viewBox="0 0 16 16">
                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
              </svg>
              Lihat Lokasi</a
            >

          </div>
        </div>
      </div>
    </section>
    <svg id="wave" class="bg-wakwak" style="transform: rotate(180deg); transition: 0.3s" viewBox="0 0 1440 180" version="1.1" xmlns="http://www.w3.org/2000/svg">
      <defs>
        <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
          <stop stop-color="rgba(135, 133, 162, 0.84)" offset="0%"></stop>
          <stop stop-color="rgba(135, 133, 162, 1)" offset="100%"></stop>
        </linearGradient>
      </defs>
      <path
        style="transform: translate(0, 0px); opacity: 1"
        fill="url(#sw-gradient-0)"
        d="M0,54L60,69C120,84,240,114,360,129C480,144,600,144,720,123C840,102,960,60,1080,54C1200,48,1320,78,1440,87C1560,96,1680,84,1800,69C1920,54,2040,36,2160,48C2280,60,2400,102,2520,108C2640,114,2760,84,2880,72C3000,60,3120,66,3240,75C3360,84,3480,96,3600,102C3720,108,3840,108,3960,90C4080,72,4200,36,4320,42C4440,48,4560,96,4680,99C4800,102,4920,60,5040,42C5160,24,5280,30,5400,30C5520,30,5640,24,5760,33C5880,42,6000,66,6120,63C6240,60,6360,30,6480,39C6600,48,6720,96,6840,99C6960,102,7080,60,7200,39C7320,18,7440,18,7560,15C7680,12,7800,6,7920,21C8040,36,8160,72,8280,78C8400,84,8520,60,8580,48L8640,36L8640,180L8580,180C8520,180,8400,180,8280,180C8160,180,8040,180,7920,180C7800,180,7680,180,7560,180C7440,180,7320,180,7200,180C7080,180,6960,180,6840,180C6720,180,6600,180,6480,180C6360,180,6240,180,6120,180C6000,180,5880,180,5760,180C5640,180,5520,180,5400,180C5280,180,5160,180,5040,180C4920,180,4800,180,4680,180C4560,180,4440,180,4320,180C4200,180,4080,180,3960,180C3840,180,3720,180,3600,180C3480,180,3360,180,3240,180C3120,180,3000,180,2880,180C2760,180,2640,180,2520,180C2400,180,2280,180,2160,180C2040,180,1920,180,1800,180C1680,180,1560,180,1440,180C1320,180,1200,180,1080,180C960,180,840,180,720,180C600,180,480,180,360,180C240,180,120,180,60,180L0,180Z"
      ></path>
      <defs>
        <linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0">
          <stop stop-color="rgba(135, 133, 162, 0.74)" offset="0%"></stop>
          <stop stop-color="rgba(135, 133, 162, 1)" offset="100%"></stop>
        </linearGradient>
      </defs>
      <path
        style="transform: translate(0, 50px); opacity: 0.9"
        fill="url(#sw-gradient-1)"
        d="M0,108L60,93C120,78,240,48,360,57C480,66,600,114,720,132C840,150,960,138,1080,123C1200,108,1320,90,1440,87C1560,84,1680,96,1800,105C1920,114,2040,120,2160,111C2280,102,2400,78,2520,78C2640,78,2760,102,2880,117C3000,132,3120,138,3240,129C3360,120,3480,96,3600,87C3720,78,3840,84,3960,78C4080,72,4200,54,4320,66C4440,78,4560,120,4680,117C4800,114,4920,66,5040,60C5160,54,5280,90,5400,105C5520,120,5640,114,5760,96C5880,78,6000,48,6120,57C6240,66,6360,114,6480,138C6600,162,6720,162,6840,156C6960,150,7080,138,7200,117C7320,96,7440,66,7560,60C7680,54,7800,72,7920,90C8040,108,8160,126,8280,132C8400,138,8520,132,8580,129L8640,126L8640,180L8580,180C8520,180,8400,180,8280,180C8160,180,8040,180,7920,180C7800,180,7680,180,7560,180C7440,180,7320,180,7200,180C7080,180,6960,180,6840,180C6720,180,6600,180,6480,180C6360,180,6240,180,6120,180C6000,180,5880,180,5760,180C5640,180,5520,180,5400,180C5280,180,5160,180,5040,180C4920,180,4800,180,4680,180C4560,180,4440,180,4320,180C4200,180,4080,180,3960,180C3840,180,3720,180,3600,180C3480,180,3360,180,3240,180C3120,180,3000,180,2880,180C2760,180,2640,180,2520,180C2400,180,2280,180,2160,180C2040,180,1920,180,1800,180C1680,180,1560,180,1440,180C1320,180,1200,180,1080,180C960,180,840,180,720,180C600,180,480,180,360,180C240,180,120,180,60,180L0,180Z"
      ></path>
      <defs>
        <linearGradient id="sw-gradient-2" x1="0" x2="0" y1="1" y2="0">
          <stop stop-color="rgba(135, 133, 162, 0.8)" offset="0%"></stop>
          <stop stop-color="rgba(135, 133, 162, 1)" offset="100%"></stop>
        </linearGradient>
      </defs>
      <path
        style="transform: translate(0, 100px); opacity: 0.8"
        fill="url(#sw-gradient-2)"
        d="M0,162L60,135C120,108,240,54,360,30C480,6,600,12,720,24C840,36,960,54,1080,72C1200,90,1320,108,1440,120C1560,132,1680,138,1800,144C1920,150,2040,156,2160,135C2280,114,2400,66,2520,48C2640,30,2760,42,2880,54C3000,66,3120,78,3240,78C3360,78,3480,66,3600,75C3720,84,3840,114,3960,123C4080,132,4200,120,4320,96C4440,72,4560,36,4680,39C4800,42,4920,84,5040,96C5160,108,5280,90,5400,96C5520,102,5640,132,5760,129C5880,126,6000,90,6120,81C6240,72,6360,90,6480,99C6600,108,6720,108,6840,90C6960,72,7080,36,7200,27C7320,18,7440,36,7560,60C7680,84,7800,114,7920,114C8040,114,8160,84,8280,66C8400,48,8520,42,8580,39L8640,36L8640,180L8580,180C8520,180,8400,180,8280,180C8160,180,8040,180,7920,180C7800,180,7680,180,7560,180C7440,180,7320,180,7200,180C7080,180,6960,180,6840,180C6720,180,6600,180,6480,180C6360,180,6240,180,6120,180C6000,180,5880,180,5760,180C5640,180,5520,180,5400,180C5280,180,5160,180,5040,180C4920,180,4800,180,4680,180C4560,180,4440,180,4320,180C4200,180,4080,180,3960,180C3840,180,3720,180,3600,180C3480,180,3360,180,3240,180C3120,180,3000,180,2880,180C2760,180,2640,180,2520,180C2400,180,2280,180,2160,180C2040,180,1920,180,1800,180C1680,180,1560,180,1440,180C1320,180,1200,180,1080,180C960,180,840,180,720,180C600,180,480,180,360,180C240,180,120,180,60,180L0,180Z"
      ></path>
    </svg>
    <!-- akad end -->
    <!-- Ucapan start -->
    <section class="bg-wakwak">
      <div class="container py-5">
        <div class="row text-center justify-content-center">
          <div class="col-12 mb-5" data-aos="zoom-in" data-aos-duration="1300" data-aos-delay="2250">
            <h1 class="font-dancing fs-40">Wishes</h1>
            <p class="p-0 m-0">Doa Restu Anda merupakan karunia</p>
            <p class="p-0 m-0">yang sangat berarti bagi kami.</p>
          </div>
          <div class="col-md-10 col-12 mx-2" data-aos="zoom-in" data-aos-duration="1300" data-aos-delay="2500">
            <div class="card bg-fee rounded-3 p-3">
              <form action="" method="post">
                <div class="mb-3">
                  <input type="text" name="nama" placeholder="Nama" class="form-control" required />
                </div>
                <div class="mb-3">
                  <textarea name="ucapan" placeholder="Ucapan" rows="4" class="form-control" required></textarea>
                </div>
                <div class="mb-3">
                  <select name="konfirmasi" class="form-select" required>
                    <option disabled selected>Konfirmasi Kehadiran</option>
                    <option value="Hadir">Hadir</option>
                    <option value="Tidak Hadir">Tidak Hadir</option>
                  </select>
                </div>
                <div class="mb-3 text-start">
                  <button type="submit" class="btn bg-berem btn-outline-secondary text-white">Kirim</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Ucapan end -->
    <!-- amplop start -->
    <section class="bg-wakwak">
      <div class="container py-5">
        <div class="row text-center justify-content-center">
          <div class="col-12 mb-5" data-aos="zoom-in" data-aos-duration="1300">
            <div class="card bg-berem shadow text-white mb-2 w-75 p-2 mx-auto">
              <h1 class="font-dancing fs-40">Amplop Digital</h1>
            </div>
          </div>
          <div class="col-lg-8 col-md-10 col-12 mb-5" data-aos="zoom-in" data-aos-duration="1300" data-aos-delay="500">
            <p class="p-0 m-0 fw-bold">Doa Restu Anda merupakan karunia yang sangat berarti bagi kami. Dan jika memberi adalah ungkapan tanda kasih Anda, Anda dapat memberi kado secara cashless.</p>
          </div>
          <div class="col-md-6 mb-3" data-aos="zoom-in" data-aos-duration="1300" data-aos-delay="1000">
            <div class="card bg-fee rounded-3 shadow p-3">
              <img src="img/Bank_Central_Asia.svg" height="50px" alt="" class="mx-auto" />
              <hr />
              <p>No. Rekening : 0380968509 <input type="hidden" value="0380968509" class="bg-fee norek" id="rek1" readonly /></p>
              <p>A/n Kresno Satrio Kuncoro Zito</p>
              <div>
                <button class="btn bg-berem text-white btn-outline-secondary rounded-pill" id="salin1">
                  <div class="mx-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard2-check-fill mb-1" viewBox="0 0 16 16">
                      <path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5Z" />
                      <path
                        d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585c.055.156.085.325.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5c0-.175.03-.344.085-.5Zm6.769 6.854-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708.708Z"
                      />
                    </svg>
                    Salin
                  </div>
                </button>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-3" data-aos="zoom-in" data-aos-duration="1300" data-aos-delay="1500">
            <div class="card bg-fee rounded-3 shadow p-3">
              <img src="img/bank-bni.png" height="50px" alt="" class="mx-auto" />
              <hr />
              <p>No. Rekening : 0587904869<input type="hidden" value="0587904869" class="bg-fee norek" id="rek2" readonly /></p>
              <p>A/n Nabila Az Zahra Ramadhani</p>
              <div>
                <button class="btn bg-berem text-white btn-outline-secondary rounded-pill" id="salin2">
                  <div class="mx-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard2-check-fill mb-1" viewBox="0 0 16 16">
                      <path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5Z" />
                      <path
                        d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585c.055.156.085.325.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5c0-.175.03-.344.085-.5Zm6.769 6.854-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708.708Z"
                      />
                    </svg>
                    Salin
                  </div>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- amplop end -->
    <!-- protokol start -->
    <section class="bg-wakwak">
      <div class="container py-5">
        <div class="row text-center justify-content-center">
          <div class="col-lg-8 col-md-10 col-12 mb-5" data-aos="zoom-in" data-aos-duration="1300" data-aos-delay="1750">
            <h1 class="font-dancing fs-40">Protokol Kesehatan</h1>
            <p class="fw-bold">Guna mencegah penyebaran Covid-19, diharapkan bagi tamu undangan untuk mematuhi Protokol Kesehatan di bawah ini :</p>
          </div>
          <div class="col-lg-8 col-md-10 col-12">
            <div class="row justify-content-center" data-aos="zoom-in" data-aos-duration="1300" data-aos-delay="2000">
              <div class="col-4">
                <img src="img/cuci-tangan-2.png" class="scale" width="100px" alt="" />
                <p class="text-sm">Cuci Tangan</p>
              </div>
              <div class="col-4">
                <img src="img/pakai-masker.png" class="scale" width="100px" alt="" />
                <p class="text-sm">Gunakan Masker</p>
              </div>
              <div class="col-4">
                <img src="img/jaga-jarak-2.png" class="scale" width="100px" alt="" />
                <p class="text-sm">Jaga Jarak</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- protokol end -->
    <!-- salam start -->
    <section class="bg-wakwak">
      <div class="container py-5">
        <div class="row text-center justify-content-center">
          <div class="col-lg-9 col-md-11 col-12">
            <div data-aos="zoom-in" data-aos-duration="1300" data-aos-delay="1000">
              <img src="img/1.png" alt="" width="300px" />
              <br>
              <p class="m-0 p-0 mb-3">Merupakan suatu kehormatan dan kebahagiaan bagi kami, apabila Bapak/Ibu/Saudara/i berkenan hadir dan memberikan doa restu. Atas kehadiran dan doa restunya, kami mengucapkan terima kasih.</p>
              <h5 class="mb-5">Wassalamualaikum Wr. Wb.</h5>
            </div>
            <div data-aos="zoom-in" data-aos-duration="1300" data-aos-delay="1250">
              <h1 class="font-dancing fs-60">Nabila</h1>
              <h1 class="font-dancing fs-60">&</h1>
              <h1 class="font-dancing fs-60">Kresno</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- salam end -->
    <svg id="wave" class="bg-wakwak" viewBox="0 0 1440 240" version="1.1" xmlns="http://www.w3.org/2000/svg">
      <path
        fill="#FFC7C7"
        d="M0,144L60,128C120,112,240,80,360,88C480,96,600,144,720,140C840,136,960,80,1080,72C1200,64,1320,104,1440,120C1560,136,1680,128,1800,108C1920,88,2040,56,2160,64C2280,72,2400,120,2520,148C2640,176,2760,184,2880,184C3000,184,3120,176,3240,156C3360,136,3480,104,3600,96C3720,88,3840,104,3960,124C4080,144,4200,168,4320,148C4440,128,4560,64,4680,56C4800,48,4920,96,5040,108C5160,120,5280,96,5400,72C5520,48,5640,24,5760,40C5880,56,6000,112,6120,148C6240,184,6360,200,6480,172C6600,144,6720,72,6840,44C6960,16,7080,32,7200,48C7320,64,7440,80,7560,80C7680,80,7800,64,7920,76C8040,88,8160,128,8280,124C8400,120,8520,72,8580,48L8640,24L8640,240L8580,240C8520,240,8400,240,8280,240C8160,240,8040,240,7920,240C7800,240,7680,240,7560,240C7440,240,7320,240,7200,240C7080,240,6960,240,6840,240C6720,240,6600,240,6480,240C6360,240,6240,240,6120,240C6000,240,5880,240,5760,240C5640,240,5520,240,5400,240C5280,240,5160,240,5040,240C4920,240,4800,240,4680,240C4560,240,4440,240,4320,240C4200,240,4080,240,3960,240C3840,240,3720,240,3600,240C3480,240,3360,240,3240,240C3120,240,3000,240,2880,240C2760,240,2640,240,2520,240C2400,240,2280,240,2160,240C2040,240,1920,240,1800,240C1680,240,1560,240,1440,240C1320,240,1200,240,1080,240C960,240,840,240,720,240C600,240,480,240,360,240C240,240,120,240,60,240L0,240Z"
      ></path>
    </svg>
    <!-- footer start -->
    <footer class="bg-kulit">
      <div class="container pb-5">
        <div class="row text-center">
          <div class="col-12">
            <p class="p-0 m-0">
              Design With
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill text-danger" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
              </svg>
            </p>
            <p class="p-0 m-0">Created By Nabila & Kresno | 2023  </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer end -->
    <!-- button audio -->
    <div class="text-end fixed-bottom me-3 mb-3">
      <div class="btn-group">
        <button type="button" class="btn btn-sm bg-berem btn-outline-secondary" onclick="stopAudio()">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stop-fill text-white" viewBox="0 0 16 16">
            <path d="M5 3.5h6A1.5 1.5 0 0 1 12.5 5v6a1.5 1.5 0 0 1-1.5 1.5H5A1.5 1.5 0 0 1 3.5 11V5A1.5 1.5 0 0 1 5 3.5z" />
          </svg>
        </button>
        <button type="button" class="btn btn-sm bg-berem btn-outline-secondary" onclick="playAudio()">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play-fill text-light" viewBox="0 0 16 16">
            <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z" />
          </svg>
        </button>
      </div>
    </div>
    <!-- button audio -->
    <script src="js/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/aos.js"></script>
    <script>
      AOS.init({
        once: true,
      });
    </script>
  </body>
</html>
