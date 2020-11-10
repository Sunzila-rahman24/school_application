
    <!-- Header -->
    
    <div class="header bg-secondary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-black d-inline-block mb-0">Class Info</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Class Info</li>
                </ol>
              </nav>
            </div>
            <!-- <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div> -->
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">


      <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
  Add New Class
</button>


      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Class List</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush data_table_asign">
                <thead class="thead-light">
                  <tr>
                    <th >SL</th>
                    <th >Full Name</th>
                    <th >Short Name</th>                   
                    <th >Action</th>
                  </tr>
                </thead>
                <tbody class="list">

                  <?php 
                  $sl = 1;
                  foreach ($all_class as $class ) { ?>

                
                  

                  <tr>

                    <td><?php echo $sl; ?></td>
                    <td><?php echo $class->class_full_name; ?></td>
                    <td><?php echo $class->class_short_name; ?></td>
                    <td><?php echo 'next';?></td>

                  </tr> 

                  <?php  
                  $sl+=1;
                   }

                  ?>
                     


                </tbody>
              </table>
            </div>
            
          </div>
        </div>
      </div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
<!-- form sart-->

<form action="" method="post" enctype="">
    <div class="form-group">
        <label for="class_name" class="form-control-label">Class full name</label>
        <input class="form-control" type="text" value="" id="class_name" name="class_name" placeholder=" Type class full name (e.g : one)">

    </div>


    <div class="form-group">
        <label for="class_shortname" class="form-control-label">Class short name</label>
        <input class="form-control" type="text" value="" id="class_shortname" name="class_shortname" placeholder=" Type class short name (e.g : 1st)">

    </div>




</form>





<!--form end-->


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>






      <script>
        $('.data_table_asign').dataTable();
      </script>