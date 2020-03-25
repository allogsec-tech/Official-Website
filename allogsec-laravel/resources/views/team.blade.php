@include('partials.header')
<!-- <link rel="stylesheet" href="/stylesheets/teampage.css"> -->
<link rel="stylesheet" href="/stylesheets/teamResponsive.css">
<link rel="stylesheet" href="/stylesheets/footerResponsive.css">

</head>

<body onload="nav()">

  @include('partials.navbar');

  <main>
    <div class="fluid-container col-sm-12 col-lg-12 shadow profile ">
      <img id="imgProfile" src="/images/team/vivek.jpeg" alt="">



      <div class="col-sm-12  col-lg-6 description">
        <h3>Vivek Iyer</h3>

        <h6 class="lead  ">Co-Founder </h6>
        <div class="social d-flex justifiy-content-around">
          <a class="pl-2" href="https://www.linkedin.com/mwlite/in/vivek-iyer-505586140"><img
              src="/images/team/linkedin.svg" alt=""></a>
          <a class="pl-2" href="https://m.facebook.com/vivekOfficialPage"><img src="/images/team/facebook.svg"
              alt=""></a>
          <a class="pl-2" href="https://www.instagram.com/vivekiyer1998"><img src="/images/team/instagram.svg"
              alt=""></a>
        </div>
        <p class=" texty">
          Endeavour in every encounter and cherish is what I believe in. In the search of an upthrust for my
          career, I found Allogsec as the perfect chariot to travel in. For any joint venture, trust and
          collaboration are key factors and I discovered those in my partner Mr. Karthik. I look forward to put my
          utmost efforts in upcoming challenges and escalate Allogsec to different heights. I thank my college for
          providing me a platform which nourished me with technical skills and helped me to understand my own
          capabilities.
        </p>
      </div>



    </div>
    <div class=" shadow fluid-container col-sm-12  col-lg-12 profile">
      <img id="imgProfile" src="/images/team/karthik.jpg" alt="">



      <div class="col-sm-12  col-lg-9 description ">
        <h3>Karthik Mudaliar</h3>

        <h6 class="lead  ">Co-Founder </h6>
        <div class="social d-flex justifiy-content-around">
          <a class="pl-2" href="https://www.linkedin.com/in/karthik-mudaliar-9b8512b0/"><img
              src="/images/team/linkedin.svg" alt=""></a>
          <a class="pl-2" href="https://m.facebook.com/karthik.mudaliar.37"><img src="/images/team/facebook.svg"
              alt=""></a>
          <a class="pl-2" href="https://www.instagram.com/mudaliarkarthik"><img src="/images/team/instagram.svg"
              alt=""></a>
        </div>
        <p class=" texty">
          Crisp in every course of life is what keeps me alive in the voyage of my career. Impossible expeditions is
          what I look for when I am in the search of a perfect platform for my career development. To give a kickstart
          to such career journey, I trust Allogsec as the perfect ship to sail in.
          Trying is the first step towards success and this statement always pushes me forward to deal with various
          difficulties and complications. I always feel glad of having Mr. Vivek as my partner with whom I have that
          proper wavelength sync in all the journeys that we undergo. I have to thank my college and teachers for
          where I stand today.
        </p>
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