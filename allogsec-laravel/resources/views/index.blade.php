@include('partials.header') 

<link rel="stylesheet" href="/stylesheets/footerResponsive.css">
<link rel="stylesheet" href="/stylesheets/teamResponsive.css">

</head>

<body onload="nav()">

  @include('partials.navbar')

  <main>
    <div class="container-fluid mt-5 content">
      <div class="row alignment">
        <div class="col-sm container-fluid  pt-5 para ">
          <h3 class="font-weight-light"><span class="font-weight-bold">Introduction In</span> Nutshell
          </h3>
          <p class="font-weight-light"><span class="font-weight-bold">ALLOGSEC</span> is a joint venture and a
            paramount
            idea by two aspiring software
            engineers. The firm
            cardinally
            aims to
            provide technical solutions to various <span class="font-weight-bold">small scale as well as large scale
              businesses</span>. We encourage
            engrossing
            ideas and creativity in the form of challenging problem statements that we acquire from our beloved
            customers. We
            believe, this proves as the key mantra for our success and a roadway for us to reach huge heights.
            <span class="font-weight-bold">Customer
              satisfaction, optimum development, delivery on deadline</span> and <span
              class="font-weight-bold">innovative strategies</span> are our key
            factors which
            keeps
            us alive in the race. </p>
        </div>
        <div class="col-sm svg focal">
          <img src="/images/home/SVGImage.png" alt="">
        </div>

      </div>

      <div class="row">
        <div class="col-sm container   align">
          <h3 class="ml-1">What<span class="font-weight-bold"> we deal with ?</span>
          </h3>
          <p class="break">We never stick to a <span class="font-weight-bold">limited tech stack</span>. We encourage
            <span class="font-weight-bold">new challenging problem statements</span>
            from
            our
            existing
            and
            to-be home. Still to summarize the platforms we firm with,
            <!-- <ol class='container p-1  ml-4'>
              <li>Web Development</li>
              <li>Mobile App Development (Cross Platform)</li>
              <li>Desktop Applications</li>
              <li>Data Analytics</li>
              <li>Machine Learning</li>
              <li>AI</li>
              <li>Industrial solutions</li>
            </ol> -->


            <!-- applications -->




          </p>
          <div class="fluid-container aligning centered">
            <div class="row  d-flex ">
              <div class="card col-lg-3 ml-5 mr-5 col-sm-3   ">
                <img class="card-img-top" src="/images/home/web.jpeg" alt="Card image cap">
                <div class="card-body">
                  <hr>
                  <h5 class="card-title text-center font-weight-bold">Web Development</h5>

                </div>


              </div>
              <div class="card col-lg-3 mr-5 col-sm-3 ">
                <img class="card-img-top" src="/images/home/android.jpeg" alt="Card image cap">

                <div class="card-body">
                  <hr>
                  <h5 class="card-title text-center font-weight-bold">Mobile App Development(Cross Platform)</h5>

                </div>

              </div>

              <div class="card col-lg-3 col-sm-3 ">
                <img src="/images/home/desktop.jpeg" alt="Card image cap">
                <div class="card-body">
                  <hr>
                  <h5 class="card-title text-center font-weight-bold">Desktop Application</h5>

                </div>


              </div>


            </div>

            <div class="row  ">
              <div class="card col-lg-3 ml-5 mr-5 col-sm-3 ">
                <img src="/images/home/data.jpeg" alt="Card image cap">
                <div class="card-body">
                  <hr>
                  <h5 class="card-title text-center font-weight-bold">Data Analytics</h5>

                </div>


              </div>
              <div class="card col-lg-3 mr-5 col-sm-3 ">
                <img src="/images/home/ml.jpeg" alt="Card image cap">
                <div class="card-body">
                  <hr>
                  <h5 class="card-title text-center font-weight-bold">Machine Learning</h5>

                </div>


              </div>


              <div class="card col-lg-3 col-sm-3 ">
                <img src="/images/home/ai.jpeg" alt="Card image cap">
                <div class="card-body">
                  <hr>
                  <h5 class="card-title text-center font-weight-bold">AI</h5>

                </div>


              </div>



            </div>

            <div class="row  ">



              <div class="card col-lg-3 ml-5 mr-5 col-sm-3 ">
                <img src="/images/home/industry.jpeg" alt="Card image cap">
                <div class="card-body">
                  <hr>
                  <h5 class="card-title text-center font-weight-bold">Industrial Solutions</h5>

                </div>


              </div>

            </div>

          </div>
          <!-- <h3 class="ml-1"><span class="font-weight-bold">Tech Stack : </span>
          </h3>
          <div class="fluid-container   centered">
            <div class="row  d-flex ">
              <div class="card col-lg-3 ml-5  mr-5 col-sm-3   ">
                <img class="card-img-top" src="/images/home/php.jpeg" alt="Card image cap">
                <div class="card-body">
                  <hr>
                  <h5 class="card-title text-center font-weight-bold">PHP</h5>

                </div>


              </div>
              <div class="card col-lg-3 mr-5 col-sm-3 ">
                <img class="card-img-top" src="/images/home/laravel.jpeg" alt="Card image cap">

                <div class="card-body">
                  <hr>
                  <h5 class="card-title text-center font-weight-bold">Laravel</h5>

                </div>

              </div>

              <div class="card col-lg-3 col-sm-3 ">
                <img src="/images/home/node.jpeg" alt="Card image cap">
                <div class="card-body">
                  <hr>
                  <h5 class="card-title text-center font-weight-bold">NodeJs</h5>

                </div>


              </div>


            </div>

            <div class="row  ">
              <div class="card col-lg-3 ml-5  mr-5 col-sm-3 ">
                <img src="/images/home/android.jpeg" alt="Card image cap">
                <div class="card-body">
                  <hr>
                  <h5 class="card-title text-center font-weight-bold">Android</h5>

                </div>


              </div>
              <div class="card col-lg-3 mr-5 col-sm-3 ">
                <img src="/images/home/py.jpeg" alt="Card image cap">
                <div class="card-body">
                  <hr>
                  <h5 class="card-title text-center font-weight-bold">Python</h5>

                </div>


              </div>


              <div class="card col-lg-3 mr-5  col-sm-3 ">
                <img src="/images/home/mongo.jpeg" alt="Card image cap">
                <div class="card-body">
                  <hr>
                  <h5 class="card-title text-center font-weight-bold">MongoDB</h5>

                </div>


              </div>



            </div>

            <div class="row  ">


              <div class="card col-lg-3 ml-5 col-sm-3 ">
                <img src="/images/home/mysql.jpeg" alt="Card image cap">
                <div class="card-body">
                  <hr>
                  <h5 class="card-title text-center font-weight-bold">MySQL</h5>

                </div>


              </div>

            </div>
          </div> -->
          <h3 class="ml-1">Know more<span class="font-weight-bold"> about our venture</span>
          </h3>
          <p class="break ">We believe,<span class="font-weight-bold">open source community</span> is a great boon for
            rising entrepreneurs like us and being a beneficiary of that community, we would like to put <span
              class="font-weight-bold">our possible efforts to contribute towards it</span> and return back the favour
            <!-- <ol class='container p-1  ml-4'>
              <li>Web Development</li>
              <li>Mobile App Development (Cross Platform)</li>
              <li>Desktop Applications</li>
              <li>Data Analytics</li>
              <li>Machine Learning</li>
              <li>AI</li>
              <li>Industrial solutions</li>
            </ol> -->


            <!-- applications -->




          </p>
          <div class="fluid-container  centered  ">
            <div class="row  vent   ">
              <div class="   col-lg-3 col-sm-3   ">
                <a href="https://github.com/allogsec-tech">
                  <img id="git" src="/images/home/git.svg" alt="Card image cap">

                </a>
                <!-- <div class="card-body">
                  <hr>
                  <h5 class="card-title text-center font-weight-bold">SOLIDUS SYSTEMWARE</h5>

                </div> -->


              </div>
              <div class=" col-lg-3 col-sm-3     ">
                <a href="https://www.instagram.com/allogsec/"><img id="insta" src="/images/home/insta.jpeg"
                    alt="Card image cap"></a>



              </div>


            </div>
          </div>
        </div>


      </div>
    </div>

  </main>
  <input type="hidden" id="navi" value='<%= nav %>'>

  <img src="/images/home/Bottomleft.png" id="bottomleft" alt="">
  <img id="bottomright" src="/images/home/Bottomright.png" alt="">


 @include('partials.footer')
 @include('partials.scripts')