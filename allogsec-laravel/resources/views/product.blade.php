@include('partials.header')
<!-- <link rel="stylesheet" href="/stylesheets/productpage.css"> -->
<!-- <link rel="stylesheet" href="/stylesheets/productResponsive.css">
<link rel="stylesheet" href="/stylesheets/footerResponsive.css"> -->
<style type="text/css">
  @media (min-width: 320px) {
  .images {
    margin: 15% 0 15% 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
  }
  .images .title {
    -webkit-box-ordinal-group: -1;
        -ms-flex-order: -2;
            order: -2;
    text-align: center;
    width: 100%;
  }
  .images .title span {
    font-size: 1.5rem;
    color: #00398e;
  }
  .images .paragraph {
    -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
            order: 1;
    position: relative;
    left: 0;
    width: 100%;
  }
  .images .paragraph p {
    font-size: 1rem;
    color: #00398e;
    width: 100%;
  }
  .images .moredetailsimg {
    margin: 1% 0 0 0;
    width: 70%;
  }
  .images .focall {
    -webkit-box-ordinal-group: -4;
        -ms-flex-order: -5;
            order: -5;
    margin: 1% 0 2% 0.1%;
  }
  .images .focall img {
    position: relative;
    width: 100%;
  }
  .wide img {
    display: none;
  }
  .heading {
    position: relative;
    margin: 25% 0 0 0;
    width: 100%;
    text-align: center;
  }
  .context {
    color: #00398e;
    position: relative;
  }
  .context .cards {
    width: 100%;
    position: relative;
  }
  .context .cards .circle {
    margin: 0;
    padding: 0;
    width: 100%;
  }
  .context .cards .head {
    color: #fff;
    position: absolute;
    text-align: center;
    top: 12%;
    width: 85%;
    text-align: center;
    font-size: 1.3rem;
  }
  .context .cards #donor {
    color: #fff;
    position: absolute;
    top: 16%;
    width: 85%;
    text-align: center;
    font-size: 1.3rem;
  }
  .context .cards #manage {
    color: #fff;
    position: absolute;
    top: 8%;
    width: 85%;
    text-align: center;
    font-size: 1.3rem;
  }
  .feature2 {
    margin: 0 0 0 1%;
    color: #00398e;
    width: 100%;
  }
  .feature2 h3 {
    margin: 10% 0 0 0;
    font-size: 1.3rem;
    font-weight: 600;
    width: 100%;
  }
  .feature2 ul {
    margin: 2% 0 15% 0;
    width: 100%;
  }
  .feature2 ul li {
    font-size: 1rem;
  }
  #bottomright {
    display: none;
  }
  #bottomleft {
    display: none;
  }
}

@media (min-width: 768px) {
  .images {
    width: 100%;
    margin: 20% 0 15% 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
  }
  .images .title {
    -webkit-box-ordinal-group: -1;
        -ms-flex-order: -2;
            order: -2;
    text-align: center;
    width: 100%;
  }
  .images .title span {
    font-size: 2.5rem;
    color: #00398e;
  }
  .images .paragraph {
    -webkit-box-ordinal-group: 0;
        -ms-flex-order: -1;
            order: -1;
    -webkit-box-flex: 100%;
        -ms-flex: 100% 2;
            flex: 100% 2;
    position: relative;
    left: 0;
    width: 100%;
  }
  .images .paragraph p {
    font-size: 1.5rem;
    color: #00398e;
    width: 100%;
  }
  .images .moredetailsimg {
    -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
            order: 1;
    margin: 1% 0 0 0;
    width: 100%;
  }
  .images .focall {
    -webkit-box-ordinal-group: -4;
        -ms-flex-order: -5;
            order: -5;
    margin: 1% 0 2% 0.1%;
    -webkit-box-flex: 100%;
        -ms-flex: 100% 1;
            flex: 100% 1;
  }
  .images .focall img {
    position: relative;
    width: 95%;
  }
  .wide img {
    display: none;
  }
  .heading {
    position: relative;
    margin: 25% 0 0 0;
    width: 100%;
    text-align: center;
  }
  .context {
    color: #00398e;
    position: relative;
  }
  .context .cards {
    width: 100%;
    position: relative;
  }
  .context .cards .circle {
    margin: 0;
    padding: 0;
    width: 100%;
  }
  .context .cards .head {
    color: #fff;
    position: absolute;
    text-align: center;
    top: 12%;
    left: 1%;
    width: 100%;
    text-align: center;
    font-size: 1.5rem;
  }
  .context .cards #donor {
    color: #fff;
    position: absolute;
    top: 16%;
    width: 85%;
    text-align: center;
    font-size: 1.3rem;
  }
  .context .cards #manage {
    color: #fff;
    position: absolute;
    top: 8%;
    width: 85%;
    text-align: center;
    font-size: 1.3rem;
  }
  .feature2 {
    margin: 0 0 0 1%;
    color: #00398e;
    width: 100%;
  }
  .feature2 h3 {
    margin: 10% 0 0 0;
    font-size: 1.7rem;
    font-weight: 600;
    width: 100%;
  }
  .feature2 ul {
    margin: 2% 0 15% 0;
    width: 100%;
  }
  .feature2 ul li {
    font-size: 1.3rem;
  }
  #bottomright {
    display: none;
  }
  #bottomleft {
    display: none;
  }
}

@media (min-width: 992px) {
  .images {
    width: 100%;
    margin: 1% 0 15% 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
  }
  .images .title {
    -webkit-box-ordinal-group: -1;
        -ms-flex-order: -2;
            order: -2;
    text-align: center;
    width: 100%;
  }
  .images .title span {
    font-size: 2.5rem;
    color: #00398e;
  }
  .images .paragraph {
    -webkit-box-ordinal-group: 0;
        -ms-flex-order: -1;
            order: -1;
    -webkit-box-flex: 100%;
        -ms-flex: 100% 2;
            flex: 100% 2;
    position: relative;
    left: 0;
  }
  .images .paragraph p {
    font-size: 1.5rem;
    color: #00398e;
    width: 100%;
  }
  .images .moredetailsimg {
    -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
            order: 1;
    margin: 1% 0 0 0;
    width: 100%;
  }
  .images .focall {
    -webkit-box-ordinal-group: -4;
        -ms-flex-order: -5;
            order: -5;
    margin: 1% 0 2% 0.1%;
    -webkit-box-flex: 100%;
        -ms-flex: 100% 1;
            flex: 100% 1;
  }
  .images .focall img {
    position: relative;
    width: 100%;
  }
  .wide img {
    display: none;
  }
  .heading {
    position: relative;
    margin: 1% 0 0 0;
    width: 100%;
    text-align: center;
  }
  .context {
    color: #00398e;
    position: relative;
  }
  .context .cards {
    width: 100%;
    position: relative;
  }
  .context .cards .circle {
    margin: 0;
    padding: 0;
    width: 100%;
  }
  .context .cards .head {
    color: #fff;
    position: absolute;
    text-align: center;
    top: 12%;
    left: 1%;
    width: 100%;
    text-align: center;
    font-size: 1.5rem;
  }
  .context .cards #donor {
    color: #fff;
    position: absolute;
    top: 16%;
    width: 85%;
    text-align: center;
    font-size: 1.3rem;
  }
  .context .cards #manage {
    color: #fff;
    position: absolute;
    top: 8%;
    width: 85%;
    text-align: center;
    font-size: 1.3rem;
  }
  .feature2 {
    margin: 0 0 0 1%;
    color: #00398e;
    width: 100%;
  }
  .feature2 h3 {
    margin: 5% 0 0 0;
    font-size: 1.7rem;
    font-weight: 600;
    width: 100%;
  }
  .feature2 ul {
    margin: 2% 0 5% 0;
    width: 100%;
  }
  .feature2 ul li {
    font-size: 1.3rem;
  }
  #bottomright {
    display: none;
  }
  #bottomleft {
    display: none;
  }
}

@media (min-width: 1200px) {
  .images {
    width: 100%;
    margin: 1% 0 15% 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
  }
  .images .title {
    text-align: center;
    width: 100%;
  }
  .images .title span {
    font-size: 2.5rem;
    color: #00398e;
  }
  .images .paragraph {
    -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
            order: 1;
    margin: 3% 0 0 0;
    position: relative;
    left: 0;
  }
  .images .paragraph p {
    margin-left: -3%;
    font-size: 1.3rem;
    color: #00398e;
    width: 100%;
  }
  .images .moredetailsimg {
    -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
            order: 2;
    margin: 1% 0 0 0;
    width: 100%;
  }
  .images .focall {
    -webkit-box-ordinal-group: 0;
        -ms-flex-order: -1;
            order: -1;
    margin: -1% 0 2% 0.1%;
    -webkit-box-flex: 50%;
        -ms-flex: 50% 0;
            flex: 50% 0;
  }
  .images .focall img {
    position: relative;
    width: 80%;
  }
  .wide img {
    margin-top: 19%;
    display: inline-block;
    position: fixed;
    width: 20%;
    bottom: -2%;
    left: 40%;
  }
  .heading {
    position: relative;
    margin: 1% 0 0 0;
    left: 20%;
    width: 100%;
  }
  .t {
    left: -10%;
  }
  .context {
    color: #00398e;
    position: relative;
  }
  .context .cards {
    width: 100%;
    position: relative;
  }
  .context .cards .circle {
    margin: 0;
    padding: 0;
    height: 20vh;
    width: 100%;
  }
  .context .cards .head {
    color: #fff;
    position: absolute;
    text-align: center;
    top: 17%;
    left: 1%;
    width: 100%;
    text-align: center;
    font-size: 2rem;
  }
  .context .cards #donor {
    color: #fff;
    position: absolute;
    top: 21%;
    width: 85%;
    text-align: center;
    font-size: 2rem;
  }
  .context .cards #manage {
    color: #fff;
    position: absolute;
    top: 13%;
    width: 85%;
    text-align: center;
    font-size: 2rem;
  }
  .feature2 {
    margin: 0 0 0 1%;
    color: #00398e;
    width: 100%;
  }
  .feature2 h3 {
    margin: 5% 0 0 0;
    font-size: 1.9rem;
    font-weight: 600;
    width: 100%;
  }
  .feature2 ul {
    margin: 1% 0 0 0;
    width: 100%;
  }
  .feature2 ul li {
    font-size: 1.3rem;
  }
  #bottomright {
    display: inline-block;
    position: fixed;
    right: 0;
    bottom: 0;
    width: 15%;
  }
  #bottomleft {
    display: inline-block;
    position: fixed;
    left: 0;
    bottom: 0;
    width: 10%;
  }
}
/*# sourceMappingURL=productResponsive.css.map */



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

<title> Allogsec | Products </title>
</head>

<body onload="nav()">

@include('partials.navbar')
  <div class="images">
    <main class="slide img1" id="slide1">
      <div class="container title">
        <div class="row ">
          <div class="col-sm ">
            <h3 class="font-weight-light"><span class="font-weight-bold"><u>DoMVc</u></span>
            </h3>
          </div>
        </div>
      </div>
      <div class="container-fluid paragraph">

        <div class="row ">
          <div class="col-sm container ">

            <p class="font-weight-light ">The testing laboratories face a huge problem when it comes to manage
              the
              documents which includes, policy statements, procedures, specifications, manufacturer’s instructions,
              calibration tables, charts, text books, posters, notices, memoranda, drawings, plans, etc. The ISO
              standards have defined a set of rules to be followed when it comes to Management of system
              documentation.
              Testing laboratories aims at following all the rules manually and physically which consumes a lot of
              time
              and also created some uncertainty when documents are not managed properly. So we have come up with a
              solution to overcome this problem with a software which may ease the work for testing laboratories to
              manage their documents. The DoMVc – Document Management and Version Control tries to achieve the
              following
              viabilities:... </p>
            <a class=" font-weight-bold d-inline-block" href="/domvc">
              <img src="/images/product/moreDetails.svg" class="moredetailsimg" alt=""></a>


          </div>
          <div class="col-sm  focall">
            <img src="/images/product/domvc.jpeg" alt="">
          </div>

        </div>


      </div>

    </main>
    <hr style="width:80%;position:relative;left:10%;margin-top:20%;border-radius:50%;background-color: #00398e">
    <!-- Second Product -->

    <main class="slide " id="slide2">
      <div class="container-fluid mt-5 title">
        <div class="row ">
          <div class="col-sm ">
            <h3 class="font-weight-light "><span class="font-weight-bold "><u>CharApp</u></span>
            </h3>
          </div>
        </div>
      </div>
      <div class="container-fluid  paragraph">

        <div class="row  ">
          <div class="col-sm container ">

            <p class="font-weight-light  ">A Web based application for Trust/Charity/NGO organizations to manage
              their
              charity activities, maintaining applicant records, donor transactions, local expenses and funds. The
              application helps to integrate Donors, Recipients, and management authorities under a single platform.
              It
              also stands as a medium to track fund disbursements, donor information and other liabilities. The
              application also provides a finance and accounting module (Including taxation). </p>
            <a class="font-weight-bold d-inline-block" href="/charapp"><img src="/images/product/moreDetails.svg"
                class="moredetailsimg" alt=""></a>


          </div>
          <div class="col-sm  focall">
            <img src="/images/product/product1.svg" alt="">
          </div>

        </div>


      </div>

    </main>



  </div>
  <!-- <div class="buttons">
    <a href="#" class="btn1 active"></a>
    <a href="#" class="btn2"></a>
  </div> -->

  <input type="hidden" id="navi" value='<%= nav %>'>


  <div class="container wide">
    <img src="/images/product/bottom.png" id="bottomcenter" alt="">
  </div>
  <!-- <script>
    $(document).ready(function () {


      $(".btn1").click(function () {
        $(".img1").css("marginLeft", "0");
        $("#slide1").css("display", "block");
        $("#slide2").css("display", "none");

        // $(".img1").css("transition", "2s");


        $('p')
          .addClass("content")
          .siblings()
          .removeClass("content");
      });
      $(".btn2").click(function () {

        $(".img1").css("marginLeft", "-100%");
        $("#slide2").css("display", "block");
        $("#slide1").css("display", "none");

        // $(".img1").css("transition", "2s");

        $('p')
          .addClass("content")
          .siblings()
          .removeClass("content");
      });
      // $(".btn3").click(function () {
      //   $(".img1").css("marginLeft", "-40%");
      // });
      // $(".btn4").click(function () {
      //   $(".img1").css("marginLeft", "-60%");
      // });
      // $(".btn5").click(function () {
      //   $(".img1").css("marginLeft", "-80%");
      // });
      $("a").click(function () {
        $(this)
          .addClass("active")
          .siblings()
          .removeClass("active");
      });
    });

  </script> -->

  <!-- 
<img src="/images/Bottomleft.png" id="bottomleft" width="300" alt="">
<img id="bottomright" src="/images/Bottomright.png" width="150" alt=""> -->


 @include('partials.footer')
  @include('partials.scripts')