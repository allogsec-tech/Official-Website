@include('partials.header')
<!-- <link rel="stylesheet" href="/stylesheets/productpage.css"> -->
<link rel="stylesheet" href="/stylesheets/productResponsive.css">
<link rel="stylesheet" href="/stylesheets/footerResponsive.css">

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