<!DOCTYPE html>
<html lang="en">
<!-- <p><a href="home">Home</a> &nbsp; / &nbsp; Registration</p> -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>


<body>
    <div class="row mt-5">
        <div class="col-lg-6 offset-lg-3 mt-5">
            <div class="card border-primary mb-3 mt-5">
                <div class="card-header text-center">Add Delivery Boy</div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="row mt-3">
                            <div class="col">
                                <input type="text" placeholder="Delivery Boy Name" class="form-control"
                                    name="deliveryboyname" id="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="password" placeholder="Password" class="form-control" name="password"
                                    id="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="text" placeholder="Delivery Boy ContactNo" class="form-control"
                                    name="deliveryboycontactno" id="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="text" placeholder="Delivery Boy Email" class="form-control"
                                    name="deliveryboyemail" id="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="text" placeholder="Address" class="form-control" name="address"
                                    id="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col text-center">
                                <input type="submit" class="btn btn-primary" value="Add Delivery" name="btn-delivery"
                                    id="">
                                <a href="alldelivery"><button class="btn btn-danger" name="" id="">Back</button></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>