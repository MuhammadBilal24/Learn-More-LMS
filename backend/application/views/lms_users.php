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
                    <h4>Registered LMS Website Users</h4>
                    <!-- <div class="ml-auto">
                      <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModalCenter">
                        +Add User
                      </button>
                    </div> -->
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr class="text-center">
                            <th>Sr.</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Profesion</th>
                            <th>Department</th>
                            <th>Batch Year</th>
                            <th>University</th>
                          </tr>
                        </thead>
                        <tbody class="text-center">
                          <?php
                          $sr=1;
                          foreach($lms_users as $value)
                          echo'
                          <tr>
                            <td>'.$sr++.'</td>
                            <td>'.$value->fname.'</td>
                            <td>'.$value->email.'</td>
                            <td>'.$value->usertype.'</td>
                            <td>'.$value->department.'</td>
                            <td>'.$value->batch.'</td>
                            <td>'.$value->university.'</td>
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
      
    <!-- Footer Starts -->
      <?php
      include('footer.php');?>
      <!-- Footer Ends -->

   