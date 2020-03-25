@include('partials.header')
<!-- <link rel="stylesheet" href="/stylesheets/productpage.css"> -->
<link rel="stylesheet" href="/stylesheets/productResponsive.css">
<link rel="stylesheet" href="/stylesheets/footerResponsive.css">

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