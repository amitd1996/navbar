<?php
$con = mysqli_connect("localhost","hrushikesh",'',"hrushikesh");
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>

    <body>
        <!-- Nav -->

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Container</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExample07">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                    <!-- <ul class="navbar-nav px-3">
                        <li class="nav-item text-nowrap">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModalCenter">Login</a>
                        </li>
                    </ul>
                    </li>
                    </ul> -->

                    <ul class="navbar-nav">
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                    </div>
                </li> -->


                <li class="nav-item text-nowrap">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModalCenter">Login</a>
                        </li>




                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Register</a>
                </li> -->
            </ul>
                </div>
            </div>
        </nav>

        <!-- End Nav -->

        <!-- flex -->
            <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal">Company name</h5>
      <nav class="my-2 my-md-0 mr-md-3">
      <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModalCenter">Login</a>
    </div>

        <!-- end flex -->

        <div class="container">
            <div class="row">
                <div class="col-md-8">



				<script>
					function load() {
					  xhttp = new XMLHttpRequest();
					  var username = document.getElementById('Name').value;
					  var email = document.getElementById('Email').value;
					  alert(email);
					  var form = document.getElementById('form').reset();

					  xhttp.onreadystatechange = function() {
					    if (this.readyState == 4 && this.status == 200) {
					      document.getElementById("show").innerHTML = this.responseText;
					    }
					  };
					  xhttp.open("GET", "insert.php?load=yes&username="+username+"&email="+email, true);
					  xhttp.send();

					  $("#form").trigger( "reset" );
					}
				</script>

                    <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form -->
                    <!-- Card -->
                <div class="justify-content-center">
                    <form method="post" id="register-form" class="">
                        <div class="form-group input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                            </div>
                            <input class="form-control col-md-8" type="text" placeholder="Username" id="Name" required>
                        </div>
                        <div class="form-group input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
                            </div>
                            <input class="form-control col-md-8" type="text" placeholder="Email" id="Email" required>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-outline-info" type="submit" name="submit">Registration</button>
                            <!-- <button type="submit" name="submit">Download!</button> -->
                            <a id="link" href="a.txt" download hidden></a>
                        </div>
                    </form>
                </div>
                                    <!-- End Form -->
            </div>
                <div class="text-muted text-center">To Download Brosure Please Register</div>
            <br>
        </div>
    </div>
</div>
                  <!-- End Modal -->





                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.17.0/jquery.validate.js"></script>
        <script>
            $(function() {
                $("#register-form").validate({
                    rules: {
                        Email: {
                            required: true,
                            email: true
                        },
                        Name: {
                            required: true,
                            minlength: 1
                        }
                    }
                });
            });
        </script>
        <style>
            #register-form label {
                margin-bottom: 0;
                color: red;
            }
            
            #register-form label.error {
                margin-left: 15px;
                clear: both !important;
            }
            
            label.error {
                color: red;
                font-size: 16px;
                font-weight: normal;
                line-height: 1.4;
                margin-top: 0.5em;
                width: 100%;
                clear: both;
            }
            
            em {
                color: red;
                font-weight: bold;
                padding-right: 0.25em;
            }
            
            .input-group > .custom-file,
            .input-group > .custom-select,
            .input-group > .form-control {
                clear: both;
            }
        </style>
        <?php
        if (isset($_POST['submit'])) {
        $Name = mysqli_real_escape_string($con,strip_tags($_POST['Name']));

        $Email = mysqli_real_escape_string($con,strip_tags($_POST['Email']));

        // Insert Operation
        $query = "INSERT INTO hrushikesh (Name,Email)
        VALUES ('$Name','$Email')";
        if($sql =mysqli_query($con,$query)){
                echo "<script>document.getElementById('link').click();</script>";
                echo "<script>window.location='index.php'</script>";
        }else {
            echo "Not Submit Query1";
        }
        }
        ?>
    </body>

    </html>