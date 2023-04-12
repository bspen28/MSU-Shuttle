<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>Student Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"rel="stylesheet">
        <link href="http://localhost/MSU-Shuttle-briana/CSS/student.css" rel="stylesheet" type="text/css" />
    </head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #d1190d;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#hero-target"><img id="logo"
                src="http://localhost/MSU-Shuttle-briana/media/msu.png"
                alt="MSU Logo"></a>
        <span class="navbar-brand mb-0 h1 header-text display-1">Student Home</span> 
        <button type="button" class="btn btn-danger">Logout</button>
    </div>
</nav>

<div class="container">
    <hr>
    <div class="row">
        <div class="col">
            <h3><strong>Campus Map</strong></h3>
            <img id="map" src="/MSU-Shuttle-briana/media/map.png">
        </div>

    </div>
    <div class="row">
        <h3><strong>Bus Schedule</strong></h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Bus #</th>
                    <th scope="col">Current Stop</th>
                    <th scope="col">Next Stop</th>
                    <th scope="col">Wait Time</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>University Hall</td>
                    <td>Lot 60</td>
                    <td>10 minutes</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Red Hawk Deck</td>
                    <td>University Hall</td>
                    <td>3 minutes</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Lot 60</td>
                    <td>Hawk Crossings</td>
                    <td>2 minutes</td>
                </tr>
            </tbody>
        </table>
    </div>
<div>
    <div class="row">
        <h3><strong>Announcements</strong></h3>
        <div class="alert alert-info" role="alert">
            Bus #2 currently delayed 5 minutes.
        </div>
    </div>
</div>
</div>
<section id="footer-section">
    <div class="container text-center">
        <div class="row">
            <div class="col-12">
                <p class="align-middle">&copy Montclair State University 2023</p>
            </div>
        </div>
    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"crossorigin="anonymous"></script>
</body>
</html>
