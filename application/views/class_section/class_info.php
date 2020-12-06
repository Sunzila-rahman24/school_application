
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
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">


      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addclassinfo">
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
                    
                    
                    <td><button class_id="<?php echo $class->class_auto_iid; ?>" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editclassinfo"><i class="fa fa-edit"></i> </button></td>


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
<div class="modal fade" id="addclassinfo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Class</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"> &times; </span>
        </button>
      </div>
      <div class="modal-body">
       
<!-- form sart-->

<form action="classinfo/add_new_class" method="post" enctype="">


    <div class="form-group">
        <label for="class_name" class="form-control-label">Class full name</label>
        <input class="form-control" type="text" value="" id="class_name" name="class_name" placeholder=" Type class full name (e.g : one)">

    </div>


    <div class="form-group">
        <label for="class_shortname" class="form-control-label">Class short name</label>
        <input class="form-control" type="text" value="" id="class_shortname" name="class_shortname" placeholder=" Type class short name (e.g : 1st)">

    </div>









      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!--form end-->



<!-- Edit class-->

<div class="modal fade" id="editclassinfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

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
 
      
<!-- Edit class-->


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