<?php
session_start();
require_once("Model/model.php");
class controller extends Model
{
    public $base_url = "http://localhost/1MVC/Public/Assets/";
    public function __construct()
    {
        ob_start();
        parent::__construct();
        // echo "inside constructor";
        // include_once("../Views/header.php");
        // include_once("../Views/footer.php");
        // include_once("../Views/main.php");
        // echo "<pre>";
        // print_r($_SERVER);
        // echo "<pre>";

        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {
                case '/':
                case '/home':
                    include_once("Views/header.php");
                    include_once("Views/main.php");
                    include_once("Views/footer.php");

                    break;
                case '/about':
                    // echo "<h3>About us</h3>";
                    include_once("Views/header.php");
                    include_once("Views/about.php");
                    include_once("Views/footer.php");
                    break;

                case '/login':
                    include_once("Views/header.php");
                    include_once("Views/login.php");
                    include_once("Views/footer.php");
                    if (isset($_REQUEST['btn-login'])) {
                        $LoginREs = $this->login($_POST['username'], $_POST['password']);
                        if ($LoginREs['Code'] == 1) {
                            // echo "inside if true auth";
                            // echo "<pre>";
                            // print_r($LoginREs['Data']->role_id);
                            // exit;
                            $_SESSION['UserData'] = $LoginREs['Data'];
                            if ($LoginREs['Data']->role_id == 1) {
                                header("location:allusers");

                            } else {
                                header("location:home");
                            }
                        }
                        // else{
                        //     // echo "inside else invalid user";
                        // }

                    }
                    break;
                case '/registration':
                    include_once("Views/header.php");
                    include_once("Views/registration.php");
                    include_once("Views/footer.php");
                    if (isset($_REQUEST['btn-regist'])) {
                        // echo "<pre>";
                        // print_r($_REQUEST);
                        // echo "</pre>";

                        $InsertData = array(
                            "username" => $_REQUEST['username'],
                            "mobile" => $_REQUEST['mobile'],
                            "email" => $_REQUEST['email'],
                            "password" => $_REQUEST['password'],
                            "gender" => $_REQUEST['gender'],
                            "city" => $_REQUEST['city']
                        );

                        // echo "<pre>";
                        // print_r($InsertData);
                        // echo "</pre>";

                        $res = $this->insert("users", $InsertData);
                        // print_r($res['Code']);
                        if ($res['Code'] == 1) {
                            header("location:login");
                        }
                    }
                    break;
                case '/gallery':
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/allgallery.php");
                    include_once("Views/Admin/footer.php");
                    break;
                case '/addgallery':
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/addgallery.php");
                    include_once("Views/Admin/footer.php");
                    break;
                case '/allorder':
                    $allorder = $this->select("order");
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/allorder.php");
                    include_once("Views/Admin/footer.php");
                    break;
                case '/contact':
                    include_once("Views/header.php");
                    include_once("Views/contact.php");
                    include_once("Views/footer.php");
                    break;
                case '/payment':
                    $allpayment = $this->select("payment");

                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/allpayment.php");
                    include_once("Views/Admin/footer.php");
                    break;
                case '/invoice':
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/allinvoice.php");
                    include_once("Views/Admin/footer.php");
                    break;
                case '/feedback':
                    $allfeedback = $this->select("feedback");

                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/allfeedback.php");
                    include_once("Views/Admin/footer.php");
                    break;

                // case '/makeup':
                //     include_once("Views/header.php");
                //     include_once("Views/makeup.php");
                //     include_once("Views/footer.php");
                //     break; 

                case '/compact':
                    include_once("Views/header.php");
                    include_once("Views/compact.php");
                    include_once("Views/footer.php");
                    break;
                case '/foundation':
                    include_once("Views/header.php");
                    include_once("Views/foundation.php");
                    include_once("Views/footer.php");
                    break;
                case '/lipstick':
                    include_once("Views/header.php");
                    include_once("Views/lipstick.php");
                    include_once("Views/footer.php");
                    break;
                case '/kajal':
                    include_once("Views/header.php");
                    include_once("Views/kajal.php");
                    include_once("Views/footer.php");
                    break;
                case '/eyelinear':
                    include_once("Views/header.php");
                    include_once("Views/eyelinear.php");
                    include_once("Views/footer.php");
                    break;
                case '/eyeshadow':
                    include_once("Views/header.php");
                    include_once("Views/eyeshadow.php");
                    include_once("Views/footer.php");
                    break;
                case '/skincare':
                    include_once("Views/header.php");
                    include_once("Views/skincare.php");
                    include_once("Views/footer.php");
                    break;
                case '/facewash':
                    include_once("Views/header.php");
                    include_once("Views/facewash.php");
                    include_once("Views/footer.php");
                    break;
                case '/moisturizer':
                    include_once("Views/header.php");
                    include_once("Views/moisturizer.php");
                    include_once("Views/footer.php");
                    break;
                case '/scrub':
                    include_once("Views/header.php");
                    include_once("Views/scrub.php");
                    include_once("Views/footer.php");
                    break;
                case '/sunscreen':
                    include_once("Views/header.php");
                    include_once("Views/sunscreen.php");
                    include_once("Views/footer.php");
                    break;
                case '/sheetmask':
                    include_once("Views/header.php");
                    include_once("Views/sheetmask.php");
                    include_once("Views/footer.php");
                    break;
                case '/facepack':
                    include_once("Views/header.php");
                    include_once("Views/facepack.php");
                    include_once("Views/footer.php");
                    break;
                case '/haircare':
                    include_once("Views/header.php");
                    include_once("Views/haircare.php");
                    include_once("Views/footer.php");
                    break;
                case '/hairoil':
                    include_once("Views/header.php");
                    include_once("Views/hairoil.php");
                    include_once("Views/footer.php");
                    break;
                case '/shampoo&conditioner':
                    include_once("Views/header.php");
                    include_once("Views/shampoo&conditioner.php");
                    include_once("Views/footer.php");
                    break;
                case '/forgetpassword':
                    include_once("Views/header.php");
                    include_once("Views/forgetpassword.php");
                    include_once("Views/footer.php");
                    break;
                case '/formdetails':
                    include_once("Views/header.php");
                    include_once("Views/formdetails.php");
                    include_once("Views/footer.php");
                    break;
                case '/buynow':
                    include_once("Views/header.php");
                    include_once("Views/buynow.php");
                    include_once("Views/footer.php");
                    break;

                case '/allusers':
                    // $allUsers = $this->select("users");
                    $allUsers = $this->select("users");
                    // echo "<pre>";
                    // print_r($allUsers);
                    // echo "</pre>";
                    // exit;
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/allusers.php");
                    include_once("Views/Admin/footer.php");
                    break;
                case '/editcategory':
                    $CitiesData = $this->select("category");
                    $UserById = $this->select("category", array("cat_id" => $_REQUEST['cat_id']));
                    // $UserById = $this->selectjoin("users",array("cities_data"=>"cities_data.
                    // id=users.city"),array("id"=>$_GET['userid']));
                    // echo "<pre>";
                    // print_r($CitiesData );
                    // echo "</pre>";
                    // exit;
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/editcategory.php");
                    include_once("Views/Admin/footer.php");
                    if (isset($_POST['btn-update'])) {
                        array_pop($_POST);
                        unset($_POST['btn-update']);
                        //$data = array_merge($_POST,array('hobby' => $hob));
                        $data = $_POST;
                        $UpdateRes = $this->update("category", $data, array("cat_id" => $_GET['cat_id']));
                        if ($UpdateRes['Code'] == 1) {
                            header("location:category");
                        } else {
                            echo "please try again";
                        }

                    }
                    break;
                case '/editsubcategory':
                    $CitiesData = $this->select("subcategory");
                    $UserById = $this->select("subcategory", array("sc_id" => $_REQUEST['sc_id']));
                    // $UserById = $this->selectjoin("users",array("cities_data"=>"cities_data.
                    // id=users.city"),array("id"=>$_GET['userid']));
                    // echo "<pre>";
                    // print_r($CitiesData );
                    // echo "</pre>";
                    // exit;
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/editsubcategory.php");
                    include_once("Views/Admin/footer.php");
                    if (isset($_POST['btn-update'])) {
                        array_pop($_POST);
                        unset($_POST['btn-update']);
                        //$data = array_merge($_POST,array('hobby' => $hob));
                        $data = $_POST;
                        $UpdateRes = $this->update("subcategory", $data, array("sc_id" => $_GET['sc_id']));
                        if ($UpdateRes['Code'] == 1) {
                            header("location:subcategory");
                        } else {
                            echo "please try again";
                        }

                    }
                    break;
                case '/editfeedback':
                    $CitiesData = $this->select("feedback");
                    $UserById = $this->select("feedback", array("f_id" => $_REQUEST['f_id']));
                    // $UserById = $this->selectjoin("users",array("cities_data"=>"cities_data.
                    // id=users.city"),array("id"=>$_GET['userid']));
                    // echo "<pre>";
                    // print_r($CitiesData );
                    // echo "</pre>";
                    // exit;
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/editfeedback.php");
                    include_once("Views/Admin/footer.php");
                    if (isset($_POST['btn-update'])) {
                        array_pop($_POST);
                        unset($_POST['btn-update']);
                        //$data = array_merge($_POST,array('hobby' => $hob));
                        $data = $_POST;
                        $UpdateRes = $this->update("feedback", $data, array("f_id" => $_GET['f_id']));
                        if ($UpdateRes['Code'] == 1) {
                            header("location:feedback");
                        } else {
                            echo "please try again";
                        }
                    }
                    break;
                case '/editdelivery':
                    $CitiesData = $this->select("deliveryboy");
                    $UserById = $this->select("deliveryboy", array("d_id" => $_REQUEST['d_id']));
                    // $UserById = $this->selectjoin("users",array("cities_data"=>"cities_data.
                    // id=users.city"),array("id"=>$_GET['userid']));
                    // echo "<pre>";
                    // print_r($CitiesData );
                    // echo "</pre>";
                    // exit;
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/editdelivery.php");
                    include_once("Views/Admin/footer.php");
                    if (isset($_POST['btn-update'])) {
                        array_pop($_POST);
                        unset($_POST['btn-update']);
                        //$data = array_merge($_POST,array('hobby' => $hob));
                        $data = $_POST;
                        $UpdateRes = $this->update("deliveryboy", $data, array("d_id" => $_GET['d_id']));
                        if ($UpdateRes['Code'] == 1) {
                            header("location:deliveryboy");
                        } else {
                            echo "please try again";
                        }
                    }
                    break;
                case '/editpayment':
                    $CitiesData = $this->select("payment");
                    $UserById = $this->select("payment", array("pay_id" => $_REQUEST['pay_id']));
                    // $UserById = $this->selectjoin("users",array("cities_data"=>"cities_data.
                    // id=users.city"),array("id"=>$_GET['userid']));
                    // echo "<pre>";
                    // print_r($CitiesData );
                    // echo "</pre>";
                    // exit;
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/editpayment.php");
                    include_once("Views/Admin/footer.php");
                    if (isset($_POST['btn-update'])) {
                        array_pop($_POST);
                        unset($_POST['btn-update']);
                        //$data = array_merge($_POST,array('hobby' => $hob));
                        $data = $_POST;
                        $UpdateRes = $this->update("payment", $data, array("pay_id" => $_GET['pay_id']));
                        if ($UpdateRes['Code'] == 1) {
                            header("location:payment");
                        } else {
                            echo "please try again";
                        }
                    }
                    break;
                case '/editorder':
                    $CitiesData = $this->select("order");
                    $UserById = $this->select("order", array("o_id" => $_REQUEST['o_id']));
                    // $UserById = $this->selectjoin("users",array("cities_data"=>"cities_data.
                    // id=users.city"),array("id"=>$_GET['userid']));
                    // echo "<pre>";
                    // print_r($CitiesData );
                    // echo "</pre>";
                    // exit;
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/editorder.php");
                    include_once("Views/Admin/footer.php");
                    if (isset($_POST['btn-update'])) {
                        array_pop($_POST);
                        unset($_POST['btn-update']);
                        //$data = array_merge($_POST,array('hobby' => $hob));
                        $data = $_POST;
                        $UpdateRes = $this->update("order", $data, array("o_id" => $_GET['o_id']));
                        if ($UpdateRes['Code'] == 1) {
                            header("location:allorder");
                        } else {
                            echo "please try again";
                        }
                    }
                    break;
                case '/edituser':
                    $CitiesData = $this->select("cities_data");
                    $UserById = $this->select("users", array("c_id" => $_REQUEST['c_id']));
                    // $UserById = $this->selectjoin("users",array("cities_data"=>"cities_data.
                    // id=users.city"),array("id"=>$_GET['userid']));
                    // echo "<pre>";
                    // print_r($CitiesData );
                    // echo "</pre>";
                    // exit;
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/edituser.php");
                    include_once("Views/Admin/footer.php");
                    if (isset($_POST['btn-update'])) {
                        array_pop($_POST);
                        unset($_POST['btn-update']);
                        //$data = array_merge($_POST,array('hobby' => $hob));
                        $data = $_POST;
                        $UpdateRes = $this->update("users", $data, array("c_id" => $_GET['c_id']));
                        if ($UpdateRes['Code'] == 1) {
                            header("location:allusers");
                        }

                    }
                    break;
                case '/deleteuser':
                    $UsersDeleteResponse = $this->delete("users", array("id" => $_GET['userid']));
                    echo "<pre>";
                    print_r($UsersDeleteResponse);
                    if ($UsersDeleteResponse['Code'] == 1) {
                        header("location:allusers");
                    } else {
                        echo "Error while deleting data try again after sometime";
                    }
                    break;
                case '/deletecategory':
                    $UsersDeleteResponse = $this->delete("category", array("cat_id" => $_GET['cat_id']));
                    echo "<pre>";
                    print_r($UsersDeleteResponse);
                    try {
                        if ($UsersDeleteResponse['Code'] == 1) {
                            header("location:category");
                        }
                    } catch (\Exception $e) {
                        echo $e->getMessage();
                    }
                    // if ($UsersDeleteResponse['Code'] == 1) {
                    //     header("location:category");
                    // } else {
                    //     echo "Error while deleting data try again after sometime";
                    // }
                    break;
                case '/deletesubcategory':
                    $UsersDeleteResponse = $this->delete("subcategory", array("sc_id" => $_GET['sc_id']));
                    echo "<pre>";
                    print_r($UsersDeleteResponse);
                    try {
                        if ($UsersDeleteResponse['Code'] == 1) {
                            header("location:subcategory");
                        }
                    } catch (\Exception $e) {
                        echo $e->getMessage();
                    }
                    // if ($UsersDeleteResponse['Code'] == 1) {
                    //     header("location:category");
                    // } else {
                    //     echo "Error while deleting data try again after sometime";
                    // }
                    break;
                case '/deletedelivery':
                    $UsersDeleteResponse = $this->delete("deliveryboy", array("d_id" => $_GET['d_id']));
                    echo "<pre>";
                    print_r($UsersDeleteResponse);
                    try {
                        if ($UsersDeleteResponse['Code'] == 1) {
                            header("location:deliveryboy");
                        }
                    } catch (\Exception $e) {
                        echo $e->getMessage();
                    }
                    // if ($UsersDeleteResponse['Code'] == 1) {
                    //     header("location:category");
                    // } else {
                    //     echo "Error while deleting data try again after sometime";
                    // }
                    break;
                case '/deletepayment':
                    $UsersDeleteResponse = $this->delete("payment", array("pay_id" => $_GET['pay_id']));
                    echo "<pre>";
                    print_r($UsersDeleteResponse);
                    try {
                        if ($UsersDeleteResponse['Code'] == 1) {
                            header("location:payment");
                        }
                    } catch (\Exception $e) {
                        echo $e->getMessage();
                    }
                    // if ($UsersDeleteResponse['Code'] == 1) {
                    //     header("location:category");
                    // } else {
                    //     echo "Error while deleting data try again after sometime";
                    // }
                    break;

                case '/deleteorder':
                    $UsersDeleteResponse = $this->delete("order", array("o_id" => $_GET['o_id']));
                    echo "<pre>";
                    print_r($UsersDeleteResponse);
                    try {
                        if ($UsersDeleteResponse['Code'] == 1) {
                            header("location:allorder");
                        }
                    } catch (\Exception $e) {
                        echo $e->getMessage();
                    }
                    // if ($UsersDeleteResponse['Code'] == 1) {
                    //     header("location:category");
                    // } else {
                    //     echo "Error while deleting data try again after sometime";
                    // }
                    break;

                case '/logout':
                    session_destroy();
                    header("location:login");
                    break;
                case '/category':
                    $allcategories = $this->select("category");
                    // print_r($allCategories);
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/allcategory.php");
                    include_once("Views/Admin/footer.php");
                    break;
                case '/addcategory':
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/addcategory.php");
                    include_once("Views/Admin/footer.php");
                    break;
                case '/subcategory':
                    $allsubcategories = $this->select("subcategory");
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/allsubcategory.php");
                    include_once("Views/Admin/footer.php");
                    break;
                case '/addsubcategory':
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/addsubcategory.php");
                    include_once("Views/Admin/footer.php");
                    break;
                case '/product':
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/allproduct.php");
                    include_once("Views/Admin/footer.php");
                    break;
                case '/addproduct':
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/addproduct.php");
                    include_once("Views/Admin/footer.php");
                    break;
                case '/offers':
                    $alloffer = $this->select("offers");
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/alloffer.php");
                    include_once("Views/Admin/footer.php");
                    break;
                case '/addoffer':
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/addoffer.php");
                    include_once("Views/Admin/footer.php");
                    break;
                case '/deliveryboy':
                    $alldelivery = $this->select("deliveryboy");
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/alldelivery.php");
                    include_once("Views/Admin/footer.php");
                    break;
                case '/adddelivery':
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/adddelivery.php");
                    include_once("Views/Admin/footer.php");
                    break;
                case '/generatereport':
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/allgeneratereport.php");
                    include_once("Views/Admin/footer.php");
                    break;

                default:
                    break;
            }
        } else {
            header("location:home");
        }

        ob_flush();
    }


}
$controllerobj = new controller;
?>