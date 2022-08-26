<?php
$insert=false;
$update=false;

// Connect to the Database
$servername = "localhost";
$username = "id18717508_toppers";
$password = "BXAQ-|Jpt|/%uH2d";
$database = "id18717508_cls";

$conn = mysqli_connect($servername,$username,$password,$database);


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    <title>Toppes-Query</title>

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">TOPPER'S</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <!-- <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Users</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li> -->
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Users
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="index.php">Log Out</a></li>
                      <!-- <li><a class="dropdown-item" href="#">Sign Up</a></li> -->
                      <li><hr class="dropdown-divider"></li>
                      <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                    </ul>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Apply
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="https://student.nielit.gov.in/">CCC</a></li>
                        <li><a class="dropdown-item" href="https://student.nielit.gov.in/">O LEVEL</a></li>
                        <li><a class="dropdown-item" href="https://forms.gle/mcBEPqZ6jwUjKXnn8">OTHERS</a></li>
                        
                        <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                      </ul>

                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Get Certificate
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="https://certificate.nielit.gov.in/">CCC</a></li>
                          <li><a class="dropdown-item" href="https://certificate.nielit.gov.in/">O LEVEL</a></li>
                          <li><a class="dropdown-item" href="https://forms.gle/WsRLMc9a6UYKLfbb7">OTHERS</a></li>
                          
                          <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                        </ul>

                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Admit Cards
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="https://student.nielit.gov.in/">CCC</a></li>
                            <li><a class="dropdown-item" href="https://student.nielit.gov.in/">O LEVEL</a></li>
                            <li><a class="dropdown-item" href="#">OTHERS</a></li>
                            
                            <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                          </ul>
                  <!-- </li>
                  <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                  </li> -->
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
    



    <div class="container my-4">

        <table id="myTable" class="table">
            <thead>
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Contact No</th>
                    <th scope="col">Query</th>

                </tr>
            </thead>
            <tbody>
                <?php
          $sql= "SELECT * FROM `popup`";
          $result= mysqli_query($conn,$sql);
          $sno=0;
          while($row= mysqli_fetch_assoc($result)){
            $sno= $sno+1;
            echo "<tr>
            <th scope='row'>".$sno."</th>
            <td>".$row['name']."</td>
            <td>".$row['contactno']."</td>
            <td>".$row['query']."</td>
          </tr>";
          }

          ?>


            </tbody>
        </table>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script> -->

    <!-- jquery defined here -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>


    <script type="text/javascript">
    $(document).ready(function() {
        $('#myTable').dataTable();
    });
    </script>
    <!-- For Edit Modal -->
    <script>
    edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach(element => {
        element.addEventListener("click", (e) => {
            console.log("edit", );
            tr = e.target.parentNode.parentNode;
            title = tr.getElementsByTagName("td")[0].innerText;
            description = tr.getElementsByTagName("td")[1].innerText;
            console.log(title, description);
            snoEdit.value = e.target.id;
            titleedit.value = title;
            descriptionedit.value = description;
            $('#editModal').modal('toggle');
            console.log(e.target.id);
        })
    });

    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach(element => {
        element.addEventListener("click", (e) => {
            console.log("edit", );
            sno = e.target.id.substr(1, );

            if (confirm("Press a button!")) {
                console.log("yes");
                window.location = `index.php?delete=${sno}`;
            } else {
                console.log("no");
            }
        })
    });
    </script>
</body>

</html>