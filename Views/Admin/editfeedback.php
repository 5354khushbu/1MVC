<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
      <div class="card w-100">
        <div class="card-body p-4">
          <h5 class="card-title fw-semibold mb-4">Edit Feedback</h5>
          <div class="row">
            <div class="col-8">
            <div class="card-body">
               
                <form method="post">
                    <div class="row">
                    <div class="col">
                            <input type="text" placeholder="Enter Feedback Id" class="form-control" disabled name="f_id" value="<?php echo $UserById['Data'][0]->f_id ?>" id="">
                        </div>
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col">
                            <input type="text" placeholder="Enter Customer Id" class="form-control" name="c_id" value="<?php echo $UserById['Data'][0]->c_id ?>" id="">
                        </div>
                    </div>
                   
                    <div class="row mt-3">
                        <div class="col">
                            <input type="tel" placeholder="Enter Feedback Message " class="form-control" name="f_message" value="<?php echo $UserById['Data'][0]->f_message ?>" id="">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <input type="tel" placeholder="Enter Feedback Date " class="form-control" name="f_date" value="<?php echo $UserById['Data'][0]->f_date ?>" id="">
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