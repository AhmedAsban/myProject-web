<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <title>MyCV</title>
    <style>

        table {
          width: 100%;
          border-collapse: collapse;
          border: 50px;
          /* text-align: center; */

        }

        th, td {
          padding: 10px;
          border-bottom: 1px solid #ddd;
        }

        th {
          background-color: #f2f2f2;
        }

        .education{

        display: table;
        border-collapse: separate;
        box-sizing: border-box;
        text-indent: initial;
        unicode-bidi: isolate;
        border-spacing: 9px;
        border-color: gray;
        background-color: #f4f4f4;
        width: 100%;
        }




      </style>



</head>

<body>
    <header>
        <div class="row no-gutters">
            <a href="index.html" class="col-md-4 logo">

            </a>
            <div class="col-md-8">
                <div class="row no-gutters bg-color-name-title">
                    <div class="col heading">
                        <h1 class="name">Ahmed Asban</h1>
                        <h2 class="title">Information Technology Student</h2>

                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col">
                        <ul id="nav" class="list-inline menucontainer">
                            <li class="col-6 col-sm-3 ui-menu-color-home list-inline-item menuitem">
                                <a href="about" class="hvr-sweep-to-bottom"><i class="fa fa-home" aria-hidden="true"></i><span>Home</span></a>
                            </li>

                            <li class="col-6 col-sm-3 ui-menu-color-resume list-inline-item menuitem">
                                <a href="qualification" class="hvr-sweep-to-bottom"><i class="fa fa-graduation-cap" aria-hidden="true"></i><span>Qualifications</span></a>
                            </li>

                            <li class="col-6 col-sm-3 ui-menu-color-contact list-inline-item menuitem">
                                <a href="portfolio" class="hvr-sweep-to-bottom"><i class="fa fa-id-card" aria-hidden="true"></i><span>Portfolio</span></a>
                            </li>

                            <li class="col-6 col-sm-3 ui-menu-color-download list-inline-item menuitem">
                                <a href="#" class="hvr-sweep-to-bottom"><i class="fa fa-download" aria-hidden="true"></i><span>Download</span></a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </header>

        @yield('id')


    <footer class="container-fluid">
        <div id="footer-details" class="row">
            <div class="col-sm-4">
                <h5 class="uppercase general-sub">Download</h5>
                <p class="inline-block">
                    Need a printable version of my CV? Download it here.
                    <a href="#" target="_blank" class="cv-pdf">
                        <i class="fa fa-download" aria-hidden="true"></i>
                        <span class="sr-only">Download link.</span>
                    </a>
                </p>
            </div>
            <div class="col-sm-4">
                <h5 class="uppercase general-sub">Social Media</h5>
                <ul class="list-inline social-links">
                    <li class="list-inline-item">
                        <a target="_blank" href="#">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                            <span class="sr-only">Facebook</span>
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a target="_blank" href="#">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                            <span class="sr-only">Instagram</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>

    </footer>
</body>

</html>
