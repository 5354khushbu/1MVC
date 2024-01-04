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
                <div class="card-header text-center">Add Offer</div>
                <div class="card-body">
                    <form method="post">


                        <div class="row mt-3">
                            <div class="col">
                                <input type="text" placeholder="Offer Id" class="form-control" name="offer id"
                                    id="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="text" placeholder="Product Id" class="form-control" name="product id"
                                    id="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="text" placeholder="Offer Start Date" class="form-control" name="offer startdate"
                                    id="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="text" placeholder="Offer End Date" class="form-control" name="offer enddate"
                                    id="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="text" placeholder="Order Details" class="form-control" name="order detail"
                                    id="">
                            </div>
                        </div>
                        
                        <div class="row mt-3">
                        <div class="col text-center">
                            <input type="submit" class="btn btn-primary" value="Add Offer" name="btn-offer" id="">
                            <a href="alloffer"><button class="btn btn-danger" name="" id="">Back</button></a>
                        </div>
                    </div>
                        
                        

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>