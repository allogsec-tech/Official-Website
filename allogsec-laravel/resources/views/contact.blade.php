@include('partials.header')
<!-- <link rel="stylesheet" href="/stylesheets/contactpage.css"> -->
<link rel="stylesheet" href="/stylesheets/contactResponsive.css">
<link rel="stylesheet" href="/stylesheets/footerResponsive1.css">

</head>

<body onload="nav()">

  @include('partials.navbar')

  <img src="/images/contact/uppercurve.png" alt="" id="uppercurve">
  <img src="/images/contact/lowercurve.png" alt="" id="lowercurve">
  <main>
    <div class="container">
      <div class="row">
        <div class="col-sm-12   ">
          <img src="/images/contact/letter.png" class="letter" alt="">
        </div>
        <div class="  form">
          <form action="/send" method="POST">
          {{csrf_field()}}
            <input class="mailForm m-1 py-1" type="text" name="email" id="email" placeholder="Email">
            <input class="mailForm m-1 py-1" type="text" name="name" id="name" placeholder="Name">
            <input class="mailForm m-1 py-1" type="text" name="subject" id="subject" placeholder="Your Question">
            <textarea class="mailForm m-1 py-1" name="message" id="message" cols="30" rows="5"
              placeholder="Description..."></textarea>
            <button type="submit" class="send "><img src="/images/contact/send.svg" alt=""></button>
          </form>
        </div>
      </div>
    </div>




  </main>



  <input type="hidden" id="navi" value='<%= nav %>'>


  <!-- 
<img src="/images/contact/Bottomleft.svg" id="bottomleft"  alt="">
<img id="bottomright" src="/images/contact/Bottomright.svg"  alt=""> -->

@include('partials.footer')
@include('partials.scripts')