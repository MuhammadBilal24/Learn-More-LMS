    <!-- Header Starts -->
      <?php
      include('header.php');
      ?>
    <!-- Header Ends -->
    <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Backend Users</h4>
                    <div class="ml-auto">
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModalCenter">
                        +Add User
                      </button>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr class="text-center">
                            <th>Sr.</th>
                            <th>Subject</th>
                            <th>Bookname</th>
                            <th>Teacher</th>
                            <th>Details</th>
                            <th>Files</th>
                            <th>Image</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody class="text-center">
                          <?php
                          $sr=1;
                          foreach($bcs_table as $value)
                          echo'
                          <tr>
                            <td>'.$sr++.'</td>
                            <td>'.$value->subject.'</td>
                            <td>'.$value->bookname.'</td>
                            <td>'.$value->teacher.'</td>
                            <td>'.$value->details.'</td>
                            <td>'.$value->files.'</td>
                            <td><img src="' . base_url() . 'assets/product/' . $value->img . '"  style=" border-radius:10px; height:80px; width:70px "></td>
                            <td>
                              <button type="button" class="btn btn-success"><i class="fa fa-edit"></i></button>
                              <button type="button" data-id="'.$value->id.'" id="deletebtn" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </td>
                          </tr>';
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle" style="color: black;">Add New Subject</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="insertform" class="">
               <!-- Hidden Id For Edit -->
                  <input type="text" id="id" name="id" hidden>
                    <!-- Hidden Id For Edit --> 
                  <label for="subject" style="color: black;">Subject</label>
                  <input type="type" class="form-control" name="subject" id="subject" placeholder="Enter A Subject">

                  <label style="color: black;" for="bookname">  Bookname</label>
                  <input type="text" class="form-control" name="bookname" id="bookname" placeholder="Enter An Bookname">

                  <label style="color: black;" for="teacher">Teacher</label>
                  <input type="text" class="form-control" name="teacher" id="teacher" placeholder="Enter A Teacher">
                  
                  <label style="color: black;" for="details">Details</label>
                  <input type="text" class="form-control" name="details" id="details" placeholder="Enter An Details">

                  <label style="color: black;" for="files">Files</label>
                  <input type="text" class="form-control" name="files" id="files" placeholder="Enter A Files">
                  
                  <label style="color: black;">Profile Picture</label>
                  <input type="file" class="form-control" name="file" id="image_file" placeholder="Insert A Profile Picture" >
                  <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                  </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>
    <!-- Footer Starts -->
      <?php
      include('footer.php');?>
      <!-- Footer Ends -->

  <script>
    // Insert Function 
      $('#insertform').submit(function(){
      var form = $('#insertform').serialize();
      var subject= $('#subject').val();
      var bookname= $('#bookname').val();
      var teacher= $('#teacher').val();
      var details= $('#details').val();
      var files= $('#files').val();
      var img= $('#img').val();
      event.preventDefault()
      if( subject == '')
      {
        swal({
          icon:'error',
          title:'Enter a Full subject',
        })
      }
      else if( bookname == '')
      {
        swal({
          icon:'error',
          title:'Enter an bookname Address',
        })
      }
      else if( teacher == '')
      {
        swal({
          icon:'error',
          title:'Enter a teacher ',
        })
      }
      else if( details == '')
      {
        swal({
          icon:'error',
          title:'Write Details',
        })
      }
      else if( img == '')
      {
        swal({
          icon:'error',
          title:'Insert an Image',
        })
      }
      else if( files == '')
      {
        swal({
          icon:'error',
          title:'Insert a Files',
        })
      }
      $.ajax({
        type:'post',
        url:'<?=base_url()?>Bcs_dept/insert',
        data: new FormData(this),
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        success: function(data) {
         if(data =='Correct')
          {
            swal({
              title:'New Subject Added',
              icon:'success',
              text:'Saved, New Subject Details',
              timer:1500,
            })
            .then(()=>{
              window.location='<?=base_url()?>Bcs_dept';
            })
          }
          else{
            swal({
              title:'Try Again',
              icon:'error',
              text:'Empty Form, Fill The Required Form',
            })
            .then(()=>{
              window.location='<?=base_url()?>Bcs_dept';
            })
          }
          }
      })
    })
    // Insert Function Ended
     
    // Delete Funtion
    $(document).on('click', '#deletebtn', function() {
      var id = $(this).data('id');
      //alert(id);
      $.ajax({
        type: 'post',
        url: "<?= base_url() ?>Bcs_dept/delete",
        data: {
          id: id
        },
        success: function(data) {
          if (data == 'Correct') {
            swal({
                title: 'Are you sure?',
                text: 'This User and it`s details will be permanantly deleted!',
                icon: 'warning',
                buttons: ["Cancel", "Yes!"],
              })
              .then(function(value) {
                if (value) {
                  swal({
                    icon: "success",
                    title: "Data Deleted",
                    text: "Successfully",
                    timer: 1500,
                  }).then(() => {
                    location.reload();
                  })
                }
              })
          } else {
            swal({
              icon: "Error",
              title: "Try Again",
              text: "Any Issue Occured",
            }).then(() => {
              location.reload();
            })

          }
        }

      })

    })
  </script>    