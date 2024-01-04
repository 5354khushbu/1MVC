<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
      <div class="card w-100">
        <div class="card-body p-4">
          <div class="row">
            <h5 class="col-10">Feedback</h5>
            <div class="table-responsive mt-5">
              <table class=" table text-nowrap mb-0 align-middle" style="border: solid 2px;">
                <thead class="text-dark">
                  <tr>
                    <th>
                      <h6 class="fw-semibold mb-0">Feedback Id</h6>
                    </th>
                    <th>
                      <h6 class="fw-semibold mb-0">Customer Id</h6>
                    </th>
                    <th>
                      <h6 class="fw-semibold mb-0">Feedback Message</h6>
                    </th>
                    <th>
                      <h6 class="fw-semibold mb-0">Feedback Date</h6>
                    </th>
                    <th>
                      <h6 class="fw-semibold mb-0">Action</h6>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  
                  foreach($allfeedback['Data'] as $key => $value) {
                    // echo "<pre>";
                    // print_r($value->role_id);
                    // echo "</pre>";
                  ?>
                  
                  <tr>
                    <td>
                      <div class="d-flex align-items-center gap-2">
                        <a href="editfeedback?f_id=<?php echo $value->f_id; ?>">
                          <!-- <span class="badge bg-primary rounded-3 fw-semibold">
                            Disable / Enable
                          </span></a> -->
                      </div>
                    </td>
                  </tr>
                  <?php //$index++;
                  } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>