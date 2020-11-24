
    <!-- Header -->
    <div class="header bg-secondary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-black d-inline-block mb-0">Tables</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Tables</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      
      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_new_student_sss">
Add New Student
</button>


      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Light table</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush data_table_asign">
                <thead class="thead-light">
                  
                    <tr>
                    <th >SL</th>
                    <th >student Name</th>
                    <th >student address</th>    
                    <th>student roll</th>
                    <th>birth certificate</th>
                    <th>blood group</th>
                    <th>father's name</th>
                    <th>father's mobile</th>
                    <th>father's NID</th>
                    <th>mother's name</th>
                    <th>mother's mobile</th>
                    <th>mother's NID</th>
                    <th>local guardian name</th>
                    <th>relation</th>
                    <th>mobile number</th>
                    <th>NID number</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody class="list">

                  <?php 
                  $sl = 1;
                  foreach ($std_info as $info ) { ?>

                <tr>

                    <td><?php echo $sl; ?></td>
                    <td><?php echo $info->student_name; ?></td>
                    <td><?php echo $info->student_address; ?></td>
                    <td><?php echo $info->student_roll ;?></td>
                    <td><?php echo $info->birth_certificate_no  ;?></td>
                    <td><?php echo $info->blood_group  ;?></td>
                    <td><?php echo $info->father_name  ;?></td>
                    <td><?php echo $info->fathers_mobile_no  ;?></td>
                    <td><?php echo $info->fathers_NID_no  ;?></td>
                    <td><?php echo $info->mother_name  ;?></td>
                    <td><?php echo $info->mothers_mobile_no ;?></td>
                    <td><?php echo $info->mothers_NID_no  ;?></td>
                    <td><?php echo $info->local_guardian_name ;?></td>
                    <td><?php echo $info->relation_with_lg  ;?></td>
                    <td><?php echo $info->lg_mobile_no  ;?></td>
                    <td><?php echo $info->lg_NID_no  ;?></td>

                    <td><button student_id="<?php echo $info->student_auto_iid; ?>" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editstudentinfo"><i class="fa fa-edit"></i> </button></td>








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
<div class="modal fade" id="add_new_student_sss" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<!-- form sart-->

<form action="student/add_new_student" method="post" enctype="">
    

    <div class="form-group">
        <label for="student_name" class="form-control-label">Student Name</label>
        <input class="form-control date_pic" type="text" value="" id="student_name" name="student_name" placeholder="Type student name ">

    </div>

     <div class="form-group">
        <label for="student_address" class="form-control-label">Student Adress</label>
        <input class="form-control date_pic" type="text" value="" id="student_address" name="student_address" placeholder="Type student address ">

    </div>

     <div class="form-group">
        <label for="student_roll" class="form-control-label">Student Roll</label>
        <input class="form-control date_pic" type="text" value="" id="student_roll" name="student_roll" placeholder="Type student roll no.">

    </div>


     <div class="form-group">
        <label for="birth_certificate" class="form-control-label">Birth Certificate No.</label>
        <input class="form-control date_pic" type="text" value="" id="birth_certificate" name="birth_certificate" placeholder="Type birth certificate number">

    </div>


     <div class="form-group">
        <label for="blood_group" class="form-control-label">Blood Group</label>
        <input class="form-control date_pic" type="text" value="" id="blood_group" name="blood_group" placeholder="Type student's blood group (e.g : A+)">

    </div>


     <div class="form-group">
        <label for="student_gender" class="form-control-label">Gender</label>
        <input class="form-control date_pic" type="text" value="" id="student_gender" name="student_gender" placeholder="Type student's gender (e.g : male)">

    </div>


     <div class="form-group">
        <label for="father_name" class="form-control-label">Father's Name</label>
        <input class="form-control date_pic" type="text" value="" id="father_name" name="father_name" placeholder="Type father's name ">

    </div>


     <div class="form-group">
        <label for="nid_no" class="form-control-label">Father's NID No.</label>
        <input class="form-control date_pic" type="text" value="" id="nid_no" name="nid_no" placeholder="Type father's NID no. ">

    </div>


     <div class="form-group">
        <label for="mobile_no" class="form-control-label">Father's Mobile No.</label>
        <input class="form-control date_pic" type="text" value="" id="nid_no" name="nid_no" placeholder="Type father's mobile number ">

    </div>


     <div class="form-group">
        <label for="mail_add" class="form-control-label">Father's E-mail Address</label>
        <input class="form-control date_pic" type="text" value="" id="mail_add" name="mail_add" placeholder="Type father's e-mail address (if any) ">

    </div>


     <div class="form-group">
        <label for="mother_name" class="form-control-label">Mother's Name</label>
        <input class="form-control date_pic" type="text" value="" id="mother_name" name="mother_name" placeholder="Type mother's name">

    </div>

     <div class="form-group">
        <label for="nid_no" class="form-control-label">Mother's NID No.</label>
        <input class="form-control date_pic" type="text" value="" id="nid_no" name="nid_no" placeholder="Type mother's NID no.">

    </div>


     <div class="form-group">
        <label for="mobile_no" class="form-control-label">Mother's Mobile No.</label>
        <input class="form-control date_pic" type="text" value="" id="nid_no" name="nid_no" placeholder="Type mother's mobile no.">

    </div>


     <div class="form-group">
        <label for="mail_add" class="form-control-label">Mother's E-mail Address</label>
        <input class="form-control date_pic" type="text" value="" id="mail_add" name="mail_add" placeholder="Type mother's e-mail address (if any) ">

    </div>

     <div class="form-group">
        <label for="local_guardian" class="form-control-label">Local Guardian name </label>
        <input class="form-control date_pic" type="text" value="" id="local_guardian" name="local_guardian" placeholder="Type local guardian's name (in absence of parents)">

    </div>


     <div class="form-group">
        <label for="guardian_relation" class="form-control-label">Relation with Local Guardian</label>
        <input class="form-control date_pic" type="text" value="" id="guardian_relation" name="guardian_relation" placeholder="Type relation (e.g : Uncle )">

    </div>


     <div class="form-group">
        <label for="nid_no" class="form-control-label">Local Guardian's NID No.</label>
        <input class="form-control date_pic" type="text" value="" id="nid_no" name="nid_no" placeholder="Type NID no.">

    </div>

     <div class="form-group">
        <label for="mobile_no" class="form-control-label">Mobile Number</label>
        <input class="form-control date_pic" type="text" value="" id="mobile_no" name="mobile_no" placeholder="Type mobile number">

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




<!-- Edit student-->
<div class="modal fade" id="editstudentinfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <label for="student_name" class="form-control-label">Student Name</label>
        <input class="form-control date_pic" type="text" value="" id="student_name" name="student_name" placeholder="Type student name ">

    </div>

     <div class="form-group">
        <label for="student_address" class="form-control-label">Student Adress</label>
        <input class="form-control date_pic" type="text" value="" id="student_address" name="student_address" placeholder="Type student address ">

    </div>

     <div class="form-group">
        <label for="student_roll" class="form-control-label">Student Roll</label>
        <input class="form-control date_pic" type="text" value="" id="student_roll" name="student_roll" placeholder="Type student roll no.">

    </div>


     <div class="form-group">
        <label for="birth_certificate" class="form-control-label">Birth Certificate No.</label>
        <input class="form-control date_pic" type="text" value="" id="birth_certificate" name="birth_certificate" placeholder="Type birth certificate number">

    </div>


     <div class="form-group">
        <label for="blood_group" class="form-control-label">Blood Group</label>
        <input class="form-control date_pic" type="text" value="" id="blood_group" name="blood_group" placeholder="Type student's blood group (e.g : A+)">

    </div>


     <div class="form-group">
        <label for="student_gender" class="form-control-label">Gender</label>
        <input class="form-control date_pic" type="text" value="" id="student_gender" name="student_gender" placeholder="Type student's gender (e.g : male)">

    </div>


     <div class="form-group">
        <label for="father_name" class="form-control-label">Father's Name</label>
        <input class="form-control date_pic" type="text" value="" id="father_name" name="father_name" placeholder="Type father's name ">

    </div>


     <div class="form-group">
        <label for="nid_no" class="form-control-label">Father's NID No.</label>
        <input class="form-control date_pic" type="text" value="" id="nid_no" name="nid_no" placeholder="Type father's NID no. ">

    </div>


     <div class="form-group">
        <label for="mobile_no" class="form-control-label">Father's Mobile No.</label>
        <input class="form-control date_pic" type="text" value="" id="nid_no" name="nid_no" placeholder="Type father's mobile number ">

    </div>


     <div class="form-group">
        <label for="mail_add" class="form-control-label">Father's E-mail Address</label>
        <input class="form-control date_pic" type="text" value="" id="mail_add" name="mail_add" placeholder="Type father's e-mail address (if any) ">

    </div>


     <div class="form-group">
        <label for="mother_name" class="form-control-label">Mother's Name</label>
        <input class="form-control date_pic" type="text" value="" id="mother_name" name="mother_name" placeholder="Type mother's name">

    </div>

     <div class="form-group">
        <label for="nid_no" class="form-control-label">Mother's NID No.</label>
        <input class="form-control date_pic" type="text" value="" id="nid_no" name="nid_no" placeholder="Type mother's NID no.">

    </div>


     <div class="form-group">
        <label for="mobile_no" class="form-control-label">Mother's Mobile No.</label>
        <input class="form-control date_pic" type="text" value="" id="nid_no" name="nid_no" placeholder="Type mother's mobile no.">

    </div>


     <div class="form-group">
        <label for="mail_add" class="form-control-label">Mother's E-mail Address</label>
        <input class="form-control date_pic" type="text" value="" id="mail_add" name="mail_add" placeholder="Type mother's e-mail address (if any) ">

    </div>

     <div class="form-group">
        <label for="local_guardian" class="form-control-label">Local Guardian name </label>
        <input class="form-control date_pic" type="text" value="" id="local_guardian" name="local_guardian" placeholder="Type local guardian's name (in absence of parents)">

    </div>


     <div class="form-group">
        <label for="guardian_relation" class="form-control-label">Relation with Local Guardian</label>
        <input class="form-control date_pic" type="text" value="" id="guardian_relation" name="guardian_relation" placeholder="Type relation (e.g : Uncle )">

    </div>


     <div class="form-group">
        <label for="nid_no" class="form-control-label">Local Guardian's NID No.</label>
        <input class="form-control date_pic" type="text" value="" id="nid_no" name="nid_no" placeholder="Type NID no.">

    </div>

     <div class="form-group">
        <label for="mobile_no" class="form-control-label">Mobile Number</label>
        <input class="form-control date_pic" type="text" value="" id="mobile_no" name="mobile_no" placeholder="Type mobile number">

    </div>



    
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- Edit student-->

      <script>
        $('.data_table_asign').dataTable();
      </script>