@include('partials.header') 
<!-- <link rel="stylesheet" href="/stylesheets/teampage.css"> -->
<link rel="stylesheet" href="/stylesheets/teamResponsive.css">
<link rel="stylesheet" href="/stylesheets/footerResponsive.css">
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