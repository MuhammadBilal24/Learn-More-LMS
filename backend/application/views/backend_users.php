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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Actype</th>
                            <th>Profile Picture</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody class="text-center">
                          <?php
                          $sr=1;
                          foreach($bck_user as $value)
                          echo'
                          <tr>
                            <td>'.$sr++.'</td>
                            <td>'.$value->name.'</td>
                            <td>'.$value->email.'</td>
                            <td>'.$value->actype.'</td>
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
              <h5 class="modal-title" id="exampleModalLongTitle" style="color: black;">Add New Backend User</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="insertform" class="">
               <!-- Hidden Id For Edit -->
                  <input type="text" id="id" name="id" hidden>
                    <!-- Hidden Id For Edit --> 
                  <label for="name" style="color: black;">Name</label>
                  <input type="type" class="form-control" name="name" id="name" placeholder="Enter A Name">
                  <label style="color: black;" for="email">Email</label>
                  <input type="type" class="form-control" name="email" id="email" placeholder="Enter An Email">
                  <label style="color: black;" for="password">Password</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Enter A password">
                  <label style="color: black;" for="actype">Account Type</label>
                  <select name="actype" id="actype" class="form-control">
                    <option value="">Choose Account Type</option>
                    <option value="Admin">Admin</option>
                    <option value="Maneger">Maneger</option>
                  </select>
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
      var name= $('#name').val();
      var email= $('#email').val();
      var password= $('#password').val();
      var actype= $('#actype').val();
      var img= $('#img').val();
      event.preventDefault()
      if( name == '')
      {
        swal({
          icon:'error',
          title:'Enter a Full Name',
        })
      }
      else if( email == '')
      {
        swal({
          icon:'error',
          title:'Enter an Email Address',
        })
      }
      else if( password == '')
      {
        swal({
          icon:'error',
          title:'Enter a Password ',
        })
      }
      else if( actype == '')
      {
        swal({
          icon:'error',
          title:'Select a Account Type',
        })
      }
      else if( img == '')
      {
        swal({
          icon:'error',
          title:'Insert an Image',
        })
      }
      $.ajax({
        type:'post',
        url:'<?=base_url()?>Backend_users/insert',
        data: new FormData(this),
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        success: function(data) {
         if(data =='Correct')
          {
            swal({
              title:'New User Added',
              icon:'success',
              text:'Saved, New User Record',
              timer:1500,
            })
            .then(()=>{
              window.location='<?=base_url()?>Backend_users';
            })
          }
          else{
            swal({
              title:'Try Again',
              icon:'error',
              text:'Empty Form, Fill The Required Form',
            })
            .then(()=>{
              window.location='<?=base_url()?>Backend_users';
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
        url: "<?= base_url() ?>Backend_users/delete",
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