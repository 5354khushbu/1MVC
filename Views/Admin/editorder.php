<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
      <div class="card w-100">
        <div class="card-body p-4">
          <h5 class="card-title fw-semibold mb-4">Edit Order</h5>
          <div class="row">
            <div class="col-8">
            <div class="card-body">
               
                <form method="post">
                    <div class="row">
                    <div class="col">
                            <input type="text" placeholder="Enter Order Id" class="form-control" disabled name="o_id" value="<?php echo $UserById['Data'][0]->o_id ?>" id="">
                        </div>
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col">
                            <input type="text" placeholder="Enter User Id" class="form-control" name="c_id" value="<?php echo $UserById['Data'][0]->c_id ?>" id="">
                        </div>
                    </div>
                   
                    <div class="row mt-3">
                        <div class="col">
                            <input type="tel" placeholder="Enter Product Id " class="form-control" name="p_id" value="<?php echo $UserById['Data'][0]->p_id ?>" id="">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <input type="tel" placeholder="Enter Cart Id " class="form-control" name="cart_id" value="<?php echo $UserById['Data'][0]->cart_id ?>" id="">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <input type="tel" placeholder="Enter Quantity " class="form-control" name="quantity" value="<?php echo $UserById['Data'][0]->quantity ?>" id="">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <input type="tel" placeholder="Enter Price " class="form-control" name="price" value="<?php echo $UserById['Data'][0]->price ?>" id="">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <input type="tel" placeholder="Enter Order Date " class="form-control" name="orderdate" value="<?php echo $UserById['Data'][0]->orderdate ?>" id="">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <input type="tel" placeholder="Enter Delivery Date " class="form-control" name="deliverydate" value="<?php echo $UserById['Data'][0]->deliverydate ?>" id="">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <input type="tel" placeholder="Enter Total Price " class="form-control" name="totalprice" value="<?php echo $UserById['Data'][0]->totalprice ?>" id="">
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