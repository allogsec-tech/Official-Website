@include('partials.header')
<!-- <link rel="stylesheet" href="/stylesheets/productpage.css"> -->
<link rel="stylesheet" href="/stylesheets/productResponsive.css">
<link rel="stylesheet" href="/stylesheets/footerResponsive.css">
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