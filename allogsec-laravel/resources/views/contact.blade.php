@include('partials.header')
<!-- <link rel="stylesheet" href="/stylesheets/contactpage.css"> -->
<!-- <link rel="stylesheet" href="/stylesheets/contactResponsive.css"> -->
<!-- <link rel="stylesheet" href="/stylesheets/footerResponsive1.css"> -->
<style type="text/css">
  @media (min-width: 320px) {
  img#uppercurve, img#lowercurve {
    position: absolute;
    width: 100%;
    height: 50%;
    top: 0;
    left: 0;
    z-index: -2;
  }
  .letter {
    margin: 25% 0 0 32%;
    width: 30%;
  }
  .form {
    position: relative;
    display: inline-block;
    width: 70%;
    z-index: 5;
    left: 20%;
    margin: 0;
  }
  .form .mailForm {
    display: block;
    outline: none;
    border: 1px solid #00d1ff;
    border-radius: 24px 24px;
    padding-left: 30px;
    width: 70%;
    font-size: 0.5rem;
    height: 70%;
  }
  .form button.send {
    background: none;
    position: absolute;
    display: inline-block;
    left: -15%;
    border: none;
  }
  .form button.send img {
    width: 30%;
    left: 0;
  }
}

@media (min-width: 768px) {
  img#uppercurve, img#lowercurve {
    position: absolute;
    width: 100%;
    height: 50%;
    top: 0;
    left: 0;
    z-index: -2;
  }
  .letter {
    margin: 25% 0 0 32%;
    width: 30%;
  }
  .form {
    position: relative;
    display: inline-block;
    left: 10%;
    z-index: 5;
    margin-left: 10%;
    margin-top: 5%;
  }
  .form .mailForm {
    display: inline-block;
    outline: none;
    border: 1px solid #00d1ff;
    border-radius: 24px 24px;
    padding-left: 30px;
    width: 70%;
    font-size: 0.5rem;
    height: 80%;
  }
  .form button.send {
    background: none;
    position: absolute;
    display: inline-block;
    left: -5%;
    border: none;
    bottom: -10%;
  }
  .form button.send img {
    width: 40%;
    left: 0;
  }
}

@media (min-width: 992px) {
  img#uppercurve, img#lowercurve {
    position: absolute;
    width: 100%;
    height: 50%;
    top: 0;
    left: 0;
    z-index: -2;
  }
  .letter {
    margin: 25% 0 0 32%;
    width: 30%;
  }
  .form {
    position: relative;
    display: inline-block;
    left: 10%;
    z-index: 5;
    margin-left: 10%;
    margin-top: 5%;
  }
  .form .mailForm {
    display: inline-block;
    outline: none;
    border: 1px solid #00d1ff;
    border-radius: 24px 24px;
    padding-left: 30px;
    width: 70%;
    font-size: 0.5rem;
    height: 80%;
  }
  .form button.send {
    background: none;
    position: absolute;
    display: inline-block;
    left: -5%;
    border: none;
    bottom: -10%;
  }
  .form button.send img {
    width: 40%;
    left: 0;
  }
}

@media (min-width: 1200px) {
  img#uppercurve, img#lowercurve {
    position: absolute;
    width: 100%;
    height: 50%;
    top: 0;
    left: 0;
    z-index: -2;
  }
  .letter {
    margin: 15% 0 0 0;
    display: inline-block;
    width: 30%;
  }
  .form {
    position: absolute;
    display: inline-block;
    left: 40%;
    z-index: 5;
    margin-left: 10%;
    margin-top: 5%;
  }
  .form .mailForm {
    display: inline-block;
    outline: none;
    border: 1px solid #00d1ff;
    border-radius: 24px 24px;
    padding-left: 30px;
    width: 50%;
    font-size: 1rem;
    height: 80%;
  }
  .form button.send {
    background: none;
    position: absolute;
    display: inline-block;
    left: 0%;
    border: none;
    bottom: -15%;
  }
  .form button.send img {
    width: 100%;
    left: 10%;
  }
}



@media (min-width: 320px) {
  .sec {
    position: static;
    margin-top: 15%;
  }
  .sec .footer {
    position: fixed;
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
    position: fixed;
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
    position: absolute;
    bottom: 0;
    width: 100%;
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
    position: absolute;
    bottom: 0;
    width: 100%;
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
/*# sourceMappingURL=footerResponsive1.css.map */
/*# sourceMappingURL=contactResponsive.css.map */
</style>
<title> Allogsec | Contact Us </title>

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
            <input class="mailForm m-1 py-1" type="text" name="email" id="email" placeholder="Email" required>
            <input class="mailForm m-1 py-1" type="text" name="name" id="name" placeholder="Name" required>
            <input class="mailForm m-1 py-1" type="text" name="subject" id="subject" placeholder="Your Question" required>
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