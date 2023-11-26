<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <title>Fetch Data</title>

    <style>
      body {
        background-color: #3b2448;
        padding: 70px 0;
        font-family: Lucida Console;
      }
      .btn-custom-outline {
        border-width: 2px;
      }

      .custom-radio .form-check-input:checked {
        background-color: #3b2448;
        border-color: #3b2448;
      }
    </style>

  </head>
  <body>
    <div class="container" style="background-color: #a298ae; border-radius: 10px">
      <div class="row mt-5">
        <div class="col">
          <div class="card mt-5" style="background-color: #a298ae">
            <div class="card-header text-center">
              <h2 class="display-6">Response Messages</h2>
            </div>
            <div class="card-body">
              <table class="table table-bordered text-center">
                <!-- Header row -->
                <tr>
                  <td>User Id</td>
                  <td>Name</td>
                  <td>Email</td>
                  <td>Phone Number</td>
                  <td>Message</td>
                </tr>

                <!-- Data rows fetched from the database -->
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "cse309_assignment_3";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM contactinfo"; // table name
                $result = $conn->query($sql);

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['phoneNo'] . "</td>";
                    echo "<td>" . $row['message'] . "</td>";
                    echo "</tr>";
                }

                // Close the database connection
                $conn->close();
                ?>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
        
        
            

    <!--                                                     
                           ╱|、
                          (˚ˎ 。7  
                           |、˜〵          
                           じしˍ,)ノ
    -->
    <!-- Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <!-- Separate Popper and Bootstrap JS -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
    ></script>
  </body>
</html>


