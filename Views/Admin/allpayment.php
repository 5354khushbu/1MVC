<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
      <div class="card w-100">
        <div class="card-body p-4">
          <div class="row">
            <h5 class="col-10">Payment</h5>
            <div class="table-responsive mt-5">
              <table class=" table text-nowrap mb-0 align-middle" style="border: solid 2px;">
                <thead class="text-dark">
                  <tr>
                    <th>
                      <h6 class="fw-semibold mb-0">Payment Id</h6>
                    </th>
                    <th>
                      <h6 class="fw-semibold mb-0">Customer Id</h6>
                    </th>
                    <th>
                      <h6 class="fw-semibold mb-0">Oredr Id</h6>
                    </th>
                    <th>
                      <h6 class="fw-semibold mb-0">Payment Date</h6>
                    </th>
                    <th>
                      <h6 class="fw-semibold mb-0">Payment Amount</h6>
                    </th>
                    <th>
                      <h6 class="fw-semibold mb-0">Payment Type </h6>
                    </th>
                    <th>
                      <h6 class="fw-semibold mb-0"> Action </h6>
                    </th>

                  </tr>
                </thead>
                <tbody>
                  <?php //$index = 1;
                  foreach ($allpayment['Data'] as $key => $value) {
                    // echo "<pre>";
                    // print_r($value->role_id);
                    // print_r($allcategories['Data'][0]);
                    // echo "</pre>";
                  
                    ?>
                    <tr>

                      <td>
                        <h6 class="fw-semibold mb-1">
                          <?php echo $value->pay_id; ?>
                        </h6>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal">
                          <?php echo $value->c_id; ?>
                        </p>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal">
                          <?php echo $value->o_id; ?>
                        </p>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal">
                          <?php echo $value->pay_date; ?>
                        </p>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal">
                          <?php echo $value->pay_amount; ?>
                        </p>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal">
                          <?php echo $value->pay_type; ?>
                        </p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center gap-2">
                          <a href="editpayment?pay_id=<?php echo $value->pay_id; ?>">
                            <span class="badge bg-primary rounded-3 fw-semibold">
                              Accept
                            </span></a>
                          <a href="deletepayment?pay_id=<?php echo $value->pay_id; ?>">
                            <span class="badge bg-danger rounded-3 fw-semibold">
                              Deny
                            </span></a>
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