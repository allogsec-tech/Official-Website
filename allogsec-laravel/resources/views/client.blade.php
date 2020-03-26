@include('partials.header') 
<!-- <link rel="stylesheet" href="/stylesheets/teampage.css"> -->
<!-- <link rel="stylesheet" href="/stylesheets/teamResponsive.css">
<link rel="stylesheet" href="/stylesheets/footerResponsive.css"> -->
<style type="text/css">
  @media (min-width: 320px) {
  .profile {
    width: 95%;
    margin: 25% 2.5% 0 2.5%;
  }
  .profile #imgProfile {
    width: 70%;
    display: inline-block;
    height: 100%;
    position: relative;
    margin: 10% 15%;
    border-radius: 3%;
  }
  .profile .description {
    display: inline-block;
    position: static;
    color: #00398e;
    width: 100%;
  }
  .profile .description h3 {
    width: 100%;
    margin: 10% 0 0 0;
    font-size: 2rem;
  }
  .profile .description h6 {
    width: 100%;
    font-size: 1.2rem;
    margin: 5% 0 0 0;
  }
  .profile .description .social {
    width: 100%;
    margin: 10% 5%;
  }
  .profile .description .social a img {
    width: 40%;
  }
  .profile .description .texty {
    font-size: 1rem;
    padding: 0 0 5% 0;
    width: 100%;
  }
  #rightcurve {
    display: none;
  }
  .centered {
    width: 80%;
    margin: 15% auto;
  }
  .centered .card {
    margin: 10% 0 0 0;
  }
  .centered .card img {
    margin: 5% auto;
    width: 100%;
  }
}

@media (min-width: 768px) {
  .profile {
    width: 90%;
    margin: 20% 2.5% 0 2.5%;
  }
  .profile #imgProfile {
    display: inline-block;
    margin: 0;
    width: 45%;
    height: 100%;
    position: absolute;
    border-radius: 3%;
  }
  .profile .description {
    display: inline-block;
    position: relative;
    left: 50%;
    color: #00398e;
    width: 50%;
  }
  .profile .description h3 {
    width: 100%;
    margin: 5% 0 0 0;
    font-size: 1.5rem;
  }
  .profile .description h6 {
    width: 100%;
    font-size: 1rem;
    margin: 2% 0 0 0;
  }
  .profile .description .social {
    width: 100%;
    margin: 5% 2%;
  }
  .profile .description .social a img {
    width: 50%;
  }
  .profile .description .texty {
    font-size: 1rem;
    padding: 0 0 0 0;
    width: 100%;
  }
  #rightcurve {
    display: none;
  }
  .centered {
    width: 100%;
    margin: 25% 0 0 0;
  }
  .centered .card {
    margin: 15% 0 0 0;
  }
  .centered .card img {
    margin: 5% auto;
    width: 100%;
  }
}

@media (min-width: 992px) {
  .profile {
    width: 90%;
    margin: 10% 2.5% 0 2.5%;
  }
  .profile #imgProfile {
    display: inline-block;
    margin: 0;
    width: 45%;
    height: 100%;
    position: absolute;
    border-radius: 3%;
  }
  .profile .description {
    display: inline-block;
    position: relative;
    left: 50%;
    color: #00398e;
    width: 50%;
  }
  .profile .description h3 {
    width: 100%;
    margin: 5% 0 0 0;
    font-size: 1.5rem;
  }
  .profile .description h6 {
    width: 100%;
    font-size: 1rem;
    margin: 2% 0 0 0;
  }
  .profile .description .social {
    width: 100%;
    margin: 5% 2%;
  }
  .profile .description .social a img {
    width: 50%;
  }
  .profile .description .texty {
    font-size: 1rem;
    padding: 0 0 0 0;
    width: 100%;
  }
  #rightcurve {
    display: inline-block;
    position: fixed;
    right: -1%;
    width: 20%;
    top: 38%;
    opacity: 1;
  }
  .centered {
    width: 100%;
    margin: 0 0 0 0;
  }
  .centered .card {
    margin: 15% 0 0 0;
  }
  .centered .card img {
    margin: 5% auto;
    width: 100%;
  }
}

@media (min-width: 1200px) {
  .profile {
    width: 90%;
    margin: 5% 2.5% 0 2.5%;
  }
  .profile #imgProfile {
    display: inline-block;
    margin: 0;
    width: 30%;
    height: 100%;
    position: absolute;
    border-radius: 3%;
  }
  .profile .description {
    display: inline-block;
    position: relative;
    left: 35%;
    color: #00398e;
    width: 60%;
  }
  .profile .description h3 {
    width: 100%;
    margin: 5% 0 0 0;
    font-size: 3rem;
  }
  .profile .description h6 {
    width: 100%;
    font-size: 2rem;
    margin: 2% 0 0 0;
  }
  .profile .description .social {
    width: 100%;
    margin: 5% 2%;
  }
  .profile .description .social a img {
    width: 40%;
  }
  .profile .description .texty {
    font-size: 1.5rem;
    padding: 0 0 0 0;
    width: 100%;
  }
  #rightcurve {
    display: inline-block;
    position: fixed;
    right: -1%;
    width: 15%;
    top: 38%;
    opacity: 1;
  }
  .centered {
    width: 100%;
    margin: 0 0 0 0;
  }
  .centered .card {
    margin: 5% 0 5% 5%;
  }
  .centered .card img {
    margin: 5% auto;
    width: 100%;
  }
}
/*# sourceMappingURL=teamResponsive.css.map */

@media (min-width: 320px) {
  .sec {
    position: relative;
    margin-top: 15%;
  }
  .sec .footer {
    position: static;
    width: 100%;
    bottom: 0;
    color: #fff;
    background-color: #10182F;
  }
  .sec .footer .ifra {
    display: none;
    margin: 0;
  }
  .sec .footer .ifra iframe {
    bottom: 105%;
    width: 50%;
    position: absolute;
    left: 35%;
    margin: -10% 0 0 0;
  }
  .sec .footer .address {
    position: static;
    width: 90%;
    margin: 5% 0 0 2%;
    color: #fff;
  }
  .sec .footer .address h4 {
    font-size: 0.7rem;
  }
  .sec .footer .credits {
    position: relative;
    width: 100%;
    height: 5%;
  }
  .sec .footer .credits h4 {
    font-size: 0.7rem;
  }
}

@media (min-width: 768px) {
  .sec {
    position: relative;
    margin-top: 15%;
  }
  .sec .footer {
    position: static;
    width: 100%;
    bottom: 0;
    color: #fff;
    background-color: #10182F;
  }
  .sec .footer .ifra {
    display: inline-block;
    position: relative;
    width: 100%;
    bottom: 50%;
    height: 50px;
    margin: 0;
  }
  .sec .footer .ifra iframe {
    bottom: 105%;
    width: 50%;
    position: absolute;
    left: 48%;
    margin: -10% 0 0 0;
  }
  .sec .footer .address {
    position: static;
    width: 45%;
    margin: 5% 0 0 2%;
    color: #fff;
  }
  .sec .footer .address h4 {
    font-size: 1rem;
  }
  .sec .footer .credits {
    position: relative;
    width: 100%;
    height: 5%;
  }
  .sec .footer .credits h4 {
    font-size: 1rem;
  }
}

@media (min-width: 992px) {
  .sec {
    position: relative;
    bottom:0;
    top:10%;
    margin-top: 15%;
  }
  .sec .footer {
    position: absolute;
    width: 100%;
    bottom: 0;
    color: #fff;
    background-color: #10182F;
  }
  .sec .footer .ifra {
    display: inline-block;
    position: relative;
    width: 100%;
    bottom: 50%;
    height: 50px;
    margin: 0;
  }
  .sec .footer .ifra iframe {
    bottom: 105%;
    width: 50%;
    position: absolute;
    left: 48%;
    margin: -10% 0 0 0;
  }
  .sec .footer .address {
    position: static;
    width: 45%;
    margin: 5% 0 0 2%;
    color: #fff;
  }
  .sec .footer .address h4 {
    font-size: 1.3rem;
  }
  .sec .footer .credits {
    position: relative;
    width: 100%;
    height: 5%;
  }
  .sec .footer .credits h4 {
    font-size: 1.3rem;
  }
}

@media (min-width: 1200px) {
  .sec {
    position: relative;
    margin: 0;
  }
  .sec .footer {
    position: relative;
    width: 100%;
    bottom: 0;
    color: #fff;
    background-color: #10182F;
  }
  .sec .footer .ifra {
    display: inline-block;
    position: relative;
    width: 100%;
    bottom: 50%;
    height: 50px;
    margin: 0;
  }
  .sec .footer .ifra iframe {
    bottom: 15%;
    width: 50%;
    position: absolute;
    left: 48%;
    margin: -10% 0 0 0;
  }
  .sec .footer .address {
    position: static;
    width: 45%;
    margin: 5% 0 0 2%;
    color: #fff;
  }
  .sec .footer .address h4 {
    font-size: 1.3rem;
  }
  .sec .footer .credits {
    position: relative;
    width: 100%;
    height: 5%;
  }
  .sec .footer .credits h4 {
    font-size: 1.3rem;
  }
}
/*# sourceMappingURL=footerResponsive.css.map */


</style>
<title> Allogsec | Our Clients </title>

</head>

<body onload="nav()">

  @include('partials.navbar')

  <main>
    <div class="fluid-container  centered ">
      <div class="row     d-flex align-items-center justify-content-center">
        <div class="   col-sm-12 col-lg-3 card   ">
          <img class="card-img-top" src="/images/clients/solidus.jpeg" alt="Card image cap">
          <div class="card-body">
            <hr>
            <h5 class="card-title text-center font-weight-bold">SOLIDUS SYSTEMWARE</h5>

          </div>


        </div>
        <div class=" clearfix  col-sm-12 col-lg-3  card  ">
          <img class="card-img-top" src="/images/clients/elca.jpeg" alt="Card image cap">

          <div class="card-body">
            <hr>
            <h5 class="card-title text-center font-weight-bold">ELCA LABORATORIES</h5>

          </div>

        </div>

        <div class=" clearfix  col-sm-12 col-lg-3 card  ">
          <img src="/images/clients/trust.jpeg" alt="Card image cap">
          <div class="card-body">
            <hr>
            <h5 class="card-title text-center font-weight-bold">BMK TRUST</h5>

          </div>


        </div>

      </div>
    </div>
  </main>
  <input type="hidden" id="navi" value='<%= nav %>'>


  <img id="rightcurve" src="/images/team/rightcurve.png" alt="">

  <!-- 
<img src="/images/Bottomleft.svg" id="bottomleft" width="300" alt="">
<img id="bottomright" src="/images/Bottomright.svg" width="150" alt=""> -->


 @include('partials.footer')
 @include('partials.scripts')