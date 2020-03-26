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


<title> Allogsec | Charapp </title>
</head>

<body onload="nav()">

@include('partials.navbar')

  <main>
    <div class="container heading">
      <div class="row">
        <div class="col-sm ">
          <h3 class="font-weight-light"><span class="font-weight-bold">CharApp</span>
          </h3>
        </div>
      </div>
    </div>
    <div class="container-fluid d-block  context">

      <div class="row ">
        <!-- F I R S T -->
        <div class="col-sm-12 mt-3 col-md-6 col-lg-4">
          <div class="fluid-container  ">

            <div class="card cards">

              <div class="card-body">
                <div class="card-title ">
                  <img id="placeholder" class="circle" src="/images/product/circle.png" alt="">
                  <h3 class="head">Application portal</h3>
                </div>
                <ul style="list-style: lower-roman;list-style-position: inside;">
                  <hr>
                  <li>Registration
                  </li>
                  <hr>
                  <li>Dashboard</li>
                  <hr>
                  <li>Browse, apply for schemes</li>
                  <hr>
                  <li>Profile with supporting documents and details</li>
                  <hr>
                  <li>Support, online chat</li>
                  <hr>
                  <li>Track application status</li>


                </ul>
              </div>
              <!-- <ul class="list-group list-group-flush">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Vestibulum at eros</li>
              </ul> -->

            </div>
          </div>

        </div>

        <!-- S E C O N D -->
        <div class="col-sm-12 mt-3 col-md-6 col-lg-4">
          <div class="fluid-container  ">

            <div class="card cards">

              <div class="card-body">
                <div class="card-title ">
                  <img id="placeholder" class="circle" src="/images/product/circle.png" alt="">
                  <h3 id="donor">Donor portal</h3>
                </div>
                <ul style="list-style: lower-roman;list-style-position: inside;">
                  <hr>
                  <li>Registration
                  </li>
                  <hr>
                  <li>Dashboard</li>
                  <hr>
                  <li>Track donated funds</li>
                  <hr>
                  <li>Secured Payment Portal</li>


                </ul>
              </div>
              <!-- <ul class="list-group list-group-flush">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Vestibulum at eros</li>
              </ul> -->

            </div>
          </div>

        </div>

        <!-- T H I R D -->
        <div class="col-sm-12 mt-3 mb-3 col-md-6 col-lg-4">
          <div class="fluid-container  ">

            <div class="card cards">

              <div class="card-body">
                <div class="card-title ">
                  <img id="placeholder" class="circle" src="/images/product/circle.png" alt="">
                  <h3 id="manage">Management portal</h3>
                </div>
                <ul style="list-style: lower-roman;list-style-position: inside;">
                  <hr>
                  <li>Manage donor information

                  </li>
                  <hr>
                  <li> Manage Applicant entries
                  </li>
                  <hr>
                  <li>Manage bank details</li>
                  <hr>
                  <li>Manage saving accounts, funds</li>
                  <hr>
                  <li>Manage FDs and other investment areas
                  </li>
                  <hr>
                  <li>Track application status</li>
                  <hr>




                  <li>Secured payment portal for fund disbursement</li>
                  <hr>
                  <li>Online chat and support system</li>
                  <hr>
                  <li>Financial and statistical overview</li>
                  <hr>
                  <li>Voucher Printing</li>



                </ul>
              </div>
              <!-- <ul class="list-group list-group-flush">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Vestibulum at eros</li>
              </ul> -->

            </div>
          </div>

        </div>
      </div>

    </div>


    </div>

  </main>
  <input type="hidden" id="navi" value='<%= nav %>'>


  <!-- 
<img src="/images/Bottomleft.svg" id="bottomleft" width="300" alt="">
<img id="bottomright" src="/images/Bottomright.svg" width="150" alt=""> -->


  @include('partials.footer')
 @include('partials.scripts')