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

<title> Allogsec | DoMVc</title>

</head>

<body onload="nav()">

@include('partials.navbar')

  <main>
    <div class="container text-center">
      <div class="row">
        <div class="col-sm ">
          <h3 class="font-weight-light heading t"><span class="font-weight-bold"><u>DoMVc</u></span>
          </h3>
        </div>
      </div>
    </div>
    <div class="container-fluid feature2">

      <div class="row ">
        <div class="col-sm">
          <div class="container  ">
            <h3 class=""> Features and functionalities:
            </h3>
            <ul class="">
              <li>Complete Document Management system.
              </li>
              <li> Version control and tracking.</li>
              <li>Documents are periodically reviewed, and updated as necessary</li>
              <li>File level and Folder level access privilege.</li>
              <li>File Manager - Standards and QMS.</li>
              <li>User Categories - Super Admin, Admin, Normal user.</li>
              <li> Access controls - Read, Write, Manage Roles.</li>
              <li>Integrated Email System for the Users.</li>
              <li>Master index that shows the latest copy of each file.</li>
              <li>General logs.</li>
              <li>Approval history section summarises editor/moderator details and links to previous version copy of
                each
                file.</li>

            </ul>
            <h3>Management system documentation:</h3>
            <ul class="">
              <li>The software establishes, documents, and maintains policies and objectives for the fulfilment of the
                purposes of the mentioned documents and also ensure that the policies and objectives are acknowledged
                and
                implemented at all levels of the laboratory organization.</li>
              <li>The software addresses the competence, impartiality and consistent operation of the laboratory.</li>
              <li> All documentation, processes, systems, records, related to the fulfilment of the requirements of
                the
                documents are be included in, referenced from, or linked to the management system.</li>
              <li>DoMVc ensures that all personnel involved in laboratory activities have access to the parts of the
                management system documentation and related information that are applicable to their responsibilities.
              </li>
            </ul>
            <h3 class="">Control of management system documents: </h3>
            <ul class="">
              <li>The documents (internal and external) that relate to the fulfilment of this document are controlled.
              </li>
              <li> DoMVc has all documents been approved for adequacy prior to issue by authorized personnel.</li>
              <li>Documents are periodically reviewed, and updated as necessary</li>
              <li>Changes and the current revision status of documents are identified</li>
              <li>Relevant versions of applicable documents are available at points of use and, where necessary, their
                distribution is controlled.</li>
              <li>Documents are uniquely identified.</li>
              <li> The unintended use of obsolete documents is prevented, and suitable identification is applied to
                them if
                they are retained for any purpose. contractual obligations. Access to these records shall be
                consistent
                with the confidentiality commitments, and records shall be readily available.</li>

            </ul>





          </div>

        </div>


      </div>


    </div>

  </main>
  <input type="hidden" id="navi" value='<%= nav %>'>





  <img src="/images/product/bottomleftproduct.png" id="bottomleft" alt="">
  <img id="bottomright" src="/images/product/bottomrightproduct.png" alt="">


@include('partials.footer')
@include('partials.scripts')