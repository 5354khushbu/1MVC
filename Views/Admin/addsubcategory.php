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
                <div class="card-header text-center">Add Sub Category</div>
                <div class="card-body">
                    <form method="post">
                        <div class="row mt-3">

                            <select name="category" class="form-control" onchange="sub(this.value)" id="category">
                                <option value="">--Select Category--</option>
                                <option value="makeup">Makeup</option>
                                <option value="skincare">Skin Care</option>
                                <option value="haircare">Hair Care</option>
                            </select> <br>
                            <select name="subcategory" class="form-control" id="subcategory">
                                <option value="">--Select Category--</option>
                            </select>
                        </div>
                        <script>
                            function sub(SubCategory) {
                                if (SubCategory == "makeup") {
                                    let makeup = `<option value="">--Select Sub Category--</option>
                                <option value="makeup">Compact</option>
                                <option value="skincare">Foundation</option>
                                <option value="haircare">Lipstick</option>
                                <option value="haircare">Eyelinear</option>
                                <option value="haircare">Eyeshadow</option>`;
                                    // console.log(makeup);
                                    $("#subcategory").html(makeup);
                                } else if(SubCategory == "skincare") {
                                    let skincare = `<option value="">--Select Sub Category--</option>
                                <option value="makeup">Face wash</option>
                                <option value="skincare">Moisturizer</option>
                                <option value="haircare">Sunscreen</option>
                                <option value="haircare">Sheetmask</option>`;
                                    // console.log(makeup);
                                    $("#subcategory").html(skincare);
                                }else{
                                    let haircare = `<option value="">--Select Sub Category--</option>
                                <option value="makeup">Shampoo & Conditioner</option>
                                <option value="skincare">Hair Oil</option>`;
                                
                                    // console.log(makeup);
                                    $("#subcategory").html(haircare);
                                }

                            }
                        </script>
                        <div class="row mt-3">
                            <input type="file" class="form-control">
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label for="subcategorydescription">Sub Category Description</label>
                                <textarea name="subcategorydescription" id="subcategorydescription" class="form-control"
                                    cols="30" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col text-center">
                                <input type="submit" class="btn btn-primary" value="Add SubCategory" name="btn-regist"
                                    id="">
                                <a href="addsubcategories"><button class="btn btn-danger" name=""
                                        id="">Back</button></a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>