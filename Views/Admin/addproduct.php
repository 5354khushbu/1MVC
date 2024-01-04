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
                <div class="card-header text-center">Add Product</div>
                <div class="card-body">
                    <form method="post">
                        <div class="row mt-3">
                            <div class="col">
                                <input type="text" placeholder="Product Name" class="form-control" name="product name"
                                    id="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="text" placeholder="Product Price" class="form-control" name="product price"
                                    id="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="text" placeholder="Product Manufacturing Date" class="form-control"
                                    name="product manufacturing date" id="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="text" placeholder="Product Expiry Date" class="form-control"
                                    name="product expiry date" id="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="text" placeholder="Product Description" class="form-control"
                                    name="product Description" id="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col text-center">
                                <input type="submit" class="btn btn-primary" value="Add Product" name="btn-product"
                                    id="">
                                <a href="allproduct"><button class="btn btn-danger" name="" id="">Back</button></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>