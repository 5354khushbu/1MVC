<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
      <div class="card w-100">
        <div class="card-body p-4">
          <h5 class="card-title fw-semibold mb-4">Edit Delivery Boy</h5>
          <div class="row">
            <div class="col-8">
            <div class="card-body">
               
                <form method="post">
                    <div class="row">
                    <div class="col">
                            <input type="text" placeholder="Enter Delivery Boy Id" class="form-control" disabled name="d_id" value="<?php echo $UserById['Data'][0]->d_id ?>" id="">
                        </div>
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col">
                            <input type="text" placeholder="Enter Delivery Boy Name" class="form-control" name="d_name" value="<?php echo $UserById['Data'][0]->d_name ?>" id="">
                        </div>
                    </div>
                   
                    <div class="row mt-3">
                        <div class="col">
                            <input type="tel" placeholder="Enter Delivery Boy password " class="form-control" name="d_pass" value="<?php echo $UserById['Data'][0]->d_pass ?>" id="">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <input type="tel" placeholder="Enter Delivery Boy Contact No " class="form-control" name="d_contactno" value="<?php echo $UserById['Data'][0]->d_contactno ?>" id="">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <input type="tel" placeholder="Enter Delivery Boy Email " class="form-control" name="d_email" value="<?php echo $UserById['Data'][0]->d_email ?>" id="">
                        </div>
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col text-center">
                            <input type="submit" class="btn btn-primary" value="Update" name="btn-update" id="">
                            <input type="reset" class="btn btn-danger" name="" id="">
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>