<?php
  session_start();
  $bus_number = $_SESSION['bus_number'];
  session_destroy();
?>

<script>
  function startup() {
    var bus_number = "<?php echo $bus_number ?>";
    document.getElementById("bus_number_current").value = bus_number;
  }
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <link href="..\CSS\driver.css" rel="stylesheet" type="text/css"/>
</head>

<body onload="startup()">
    <nav class="navbar navbar-dark sticky-top color-msu">
        <div class="container-fluid">
          <a class="navbar-brand display-1 header-text" href="#"><img id="logo" src="..\media\msu.png" alt="MSU Logo">Driver Home</a>
          <div class="navbar-nav">
            <form method="post" action="driver_logout.php" id="logout-form">
              <input type="hidden" id="bus_number_current" name="bus_number" value="">
              <button type="submit" class="btn btn-link btn-color-msu">Logout</button>
            </form>
          </div>       
        </div>
      </nav>
    
      <section id="content">
        <div class="container-fluid">
            <div class="row g-2">
                <div class="col-md-6 col-sm-12 g-2 text-center">
                    <h5 id="current-title" class="display-6 text-left stop-text-size pb-2 subtitle">Current Stop: [STOP]</h5>
                    <h5 id="next-title" class="display-6 text-left stop-text-size pb-2">Next Stop: [STOP]</h5>
                    <button id="stop-button" type="button" class="btn btn-color-msu-scaling active col-6 mt-3" data-bs-toggle="button">Arrived at Stop</button> 
                </div>
                <div class="col-md-6 col-sm-12 g-2 text-center">
                    <!-- Button trigger modal -->
                    <h5 id="current-title" class="display-6 text-left stop-text-size pb-2 subtitle">Manage Alerts</h5>
                    <button type="button" class="btn btn-color-msu-scaling col-6" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Create Alert
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">New Alert</h5>
                          </div>
                          <form action="submit_alert.php" method="POST" id="alert-form">
                              <div class="modal-body">
                                      <div class="mb-3">
                                              <label for="alertTitle" class="form-label">Alert Title</label>
                                              <input type="text" class="form-control" id="alertTitle" name="alertTitle">
                                      </div>
                              <div class="mb-3">
                                      <label for="alertDetails" class="form-label">Alert Details</label>
                                      <textarea class="form-control" id="alertDetails" name="alertDetails"></textarea>
                              </div>
                              </div>
                                      <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                      <button type="submit" class="btn btn-primary">Save changes</button>
                              </div>
                      </form>
                      </div>
                      </div>
                  </div>
                </div>

                <div class="row subtitle">
                  <!--View Alert Section-->
                  <div class="col-2"></div>
                  <div class="col-8">
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th scope="col">Bus#</th>
                          <th scope="col">Title</th>
                          <th scope="col">Details</th>
                          <th scope="col">Date/Time</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>test</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td colspan="2">Larry the Bird</td>
                          <td>@twitter</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="col-2"></div>
                </div>
            </div>
        </div>
      </section>

      <!-- Footer section -->
      <section id="footer-section">
        <div class="container text-center stick-footer">
          <div class="row">
            <div class="col-12">
              <p class="align-middle">&copy Montclair State University 2023</p>
            </div>
          </div>
        </div>
      </section>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script>

      const alertForm = document.getElementById("alert-form");
      const alertTitleInput = document.getElementById("alertTitle");
      const alertDetailsInput = document.getElementById("alertDetails");
    
      alertForm.addEventListener("submit", (event) => {
        if (!alertTitleInput.value || !alertDetailsInput.value) {
          event.preventDefault();
          alert("Please fill in both fields");
        }
      });
    </script>
</body>
</html>