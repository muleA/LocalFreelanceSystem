<?php
   require_once "nav.php";
    require_once "../Database/db.php";
?>

<head>
   <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
  <!-- Script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' type='text/javascript'></script>
</head>
<script>
    document.title="Admin-list of system admins";
</script>
<!-- content begins -->

<div class="container-fluid" id="container-wrapper">
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Admin users</h1>
      <ol class="breadcrumb">
         <li class="breadcrumb-item">
            <a href="./">Home</a>
         </li>
         <li class="breadcrumb-item">Users</li>
         <li class="breadcrumb-item active" aria-current="page">Admin users</li>
      </ol>
   </div>
   <div class="row">
      <div class="col-lg-12">
         <div class="card shadow-sm mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
               <h6 class="m-0 font-weight-bold text-primary">List of Admin Users</h6>
            </div>
            <div class="card-body">
               
               <!-- data to be fetched from the database  -->
               <div class="table table-responsive">
                  <table id = "table" class = "table table-bordered table-striped">
                     <a class = "btn btn-success mb-3" href = "create_new_admin.php"><i class = "fa  fa-plus-circle"></i> New Admin Account</a>
                     <thead>
                        <tr>
                           <th>No</th>
                           <th> Username</th>
                           <th> FullName</th>
                           <th> Role</th>
                           <th>Created By</th>
                           <th>Details</th>
                           <th>Permission</th>
                           <th>Delete</th>
                         
                        </tr>
                     </thead>
              
               <!--  ends -->
                
      <tbody>
        <?php
        $query = "select * from Account";
        $result = mysqli_query($con, $query);
        while ($row = mysqli_fetch_array($result)) {
            $No = $row['No'];
            $Username = $row['Username'];
            $FullName = $row['FullName'];
            $Role = $row['Role'];
            $createdby = $row['Createdby'];


            echo "<tr>";
            echo "<td>".$No."</td>";
            echo "<td>".$Username."</td>";
            echo "<td>".$FullName."</td>";
            echo "<td>".$Role."</td>";
            echo "<td>".$createdby."</td>";
            echo "<td><button type='button' data-id='".$No."'
             class='btn btn-info btn-sm btn-popup'><i class='fa  fa-eye'>
             </i>view</button></td>";
            echo "<td><button data-id='".$No."'
             class='btn btn-warning btn-sm btn-popup'><i class='fa fa-pencil'></i>edit</button></td>";
            echo "<td><button data-id='".$No."'
             class='btn btn-danger btn-sm btn-popup'><i class='fa fa-trash'></i></button></td>";


            echo "</tr>";
        }
        ?>
      </tbody>
    
        </table>
      </div>
    <!-- Modal -->
    <div class="modal fade" id="custModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Admin Details</h4>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>
          <div class="modal-body">

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

  </div>


  <script type="text/javascript">
    $(document).ready(function () {

      $('.btn-popup').click(function () {
        var custId = $(this).data('id');
        $.ajax({
          url: 'AdminDetails.php',
          type: 'post',
          data: { custId: custId },
          success: function (response) {
            $('.modal-body').html(response);
            $('#custModal').modal('show');
          }
        });
      });

    });
  </script>


<!--  -->
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- content container ends -->

<script type = "text/javascript">
   function confirmationDelete(anchor){
   	var conf = confirm("Are you sure you want to delete this record?");
   	if(conf){
   		window.location = anchor.attr("href");
   	}
   } 
</script>


<!-- Modal Logout -->

<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
   aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <p>Are you sure you want to logout?</p>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
            <a href="login.html" class="btn btn-primary">Logout</a>
         </div>
      </div>
   </div>
</div>
</div>
</div>

<!-- Footer -->
<?php
   require_once "footer.php";
        ?>
</div>
</div>
<!-- Scrollto to top -->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>
<script src="vendor/jquery/jquery.min.js"></script>  
<script src="vendor/datatables/jquery.dataTables.js" ></script>
<script src="vendor/datatables/jquery.dataTables.min.js" ></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/serelance-admin.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.js" ></script>
<script type = "text/javascript">
   $(document).ready(function(){
   	$("#table").DataTable();
   });
</script> 
</body>
</html>
<!--  -->
</head>
<script>
    document.title="Admin-list of system admins";
</script>
<!-- content begins -->

<div class="container-fluid" id="container-wrapper">
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Admin users</h1>
      <ol class="breadcrumb">
         <li class="breadcrumb-item">
            <a href="./">Home</a>
         </li>
         <li class="breadcrumb-item">Users</li>
         <li class="breadcrumb-item active" aria-current="page">Admin users</li>
      </ol>
   </div>
   <div class="row">
      <div class="col-lg-12">
         <div class="card shadow-sm mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
               <h6 class="m-0 font-weight-bold text-primary">List of Admin Users</h6>
            </div>
            <div class="card-body">
               
               <!-- data to be fetched from the database  -->
               <div class="table table-responsive">
                  <table id = "table" class = "table table-bordered table-striped">
                     <a class = "btn btn-success mb-3" href = "create_new_admin.php"><i class = "fa  fa-plus-circle"></i> New Admin Account</a>
                     <thead>
                        <tr>
                           <th>No</th>
                           <th> Username</th>
                           <th> FullName</th>
                           <th> Role</th>
                           <th>Created By</th>
                           <th>Details</th>
                           <th>Permission</th>
                           <th>Delete</th>
                         
                        </tr>
                     </thead>
              
               <!--  ends -->
                
      <tbody>
        <?php
        $query = "select * from Account";
        $result = mysqli_query($con, $query);
        while ($row = mysqli_fetch_array($result)) {
            $No = $row['No'];
            $Username = $row['Username'];
            $FullName = $row['FullName'];
            $Role = $row['Role'];
            $createdby = $row['Createdby'];


            echo "<tr>";
            echo "<td>".$No."</td>";
            echo "<td>".$Username."</td>";
            echo "<td>".$FullName."</td>";
            echo "<td>".$Role."</td>";
            echo "<td>".$createdby."</td>";
            echo "<td><button type='button' data-id='".$No."'
             class='btn btn-info btn-sm btn-popup'><i class='fa fa-eye'>
             </i>Detail</button></td>";
            echo "<td><button data-id='".$No."'
             class='btn btn-info btn-sm btn-popup'><i class='fa fa-pencil'></i>edit</button></td>";
            echo "<td><button data-id='".$No."'
             class='btn btn-info btn-sm btn-popup'><i class='fa fa-trash'></i>Delete</button></td>";


            echo "</tr>";
        }
        ?>
      </tbody>
    
        </table>
      </div>
    <!-- Modal -->
    <div class="modal fade" id="custModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Admin Details</h4>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>
          <div class="modal-body">

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="container">
    ...
    ...
  </div>

  <script type="text/javascript">
    $(document).ready(function () {

      $('.btn-popup').click(function () {
        var custId = $(this).data('id');
        $.ajax({
          url: 'AdminDetails.php',
          type: 'post',
          data: { custId: custId },
          success: function (response) {
            $('.modal-body').html(response);
            $('#custModal').modal('show');
          }
        });
      });

    });
  </script>


<!--  -->
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- content container ends -->

<script type = "text/javascript">
   function confirmationDelete(anchor){
   	var conf = confirm("Are you sure you want to delete this record?");
   	if(conf){
   		window.location = anchor.attr("href");
   	}
   } 
</script>


<!-- Modal Logout -->

<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
   aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <p>Are you sure you want to logout?</p>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
            <a href="login.html" class="btn btn-primary">Logout</a>
         </div>
      </div>
   </div>
</div>
</div>
</div>

<!-- Footer -->
<?php
   require_once "footer.php";
        ?>
</div>
</div>
<!-- Scrollto to top -->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>
<script src="vendor/jquery/jquery.min.js"></script>  
<script src="vendor/datatables/jquery.dataTables.js" ></script>
<script src="vendor/datatables/jquery.dataTables.min.js" ></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/serelance-admin.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.js" ></script>
<script type = "text/javascript">
   $(document).ready(function(){
   	$("#table").DataTable();
   });
</script> 
</body>
</html>
<!--  -->