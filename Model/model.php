<?php
date_default_timezone_set('Asia/Kolkata');
// error_reporting(0);

class Model
{
    public $connection = "";
    public function __construct()
    {

        // echo "inside constructor";
        // $this->connection=new mysqli("hostname","username","password","databasename");
        try {
            // $this->connection=new mysqli("localhost1","root","","masterdatabase");
            $this->connection = new mysqli("localhost", "root", "", "masterdatabase");

        } catch (\Throwable $th) {
            // echo "<pre>";
            // print_r($th->getMessage());
            // echo "</pre>";
            // echo "<h1>".$th->getMessage()."</h1>";

            if (!file_exists("log")) {
                mkdir("log");
            }

            $ErrorMsg = PHP_EOL . "Error Msg >>>" . $th->getMessage() . PHP_EOL;
            $ErrorMsg .= "Error dateTime >>>" . date("d-m-Y H:i:s A") . PHP_EOL;
            $fileName = date('d_m_Y') . "_Error_log.txt";
            file_put_contents("log/" . $fileName, $ErrorMsg, FILE_APPEND);
            // echo "<h1>".$th->getMessage()."</h1>";
            // exit;
        }
    }
    function login($uname, $pass)
    {
        $SQL = "SELECT * FROM users WHERE password='$pass' AND (username='$uname' OR mobile='$uname'
        OR email='$uname')";
        $SQLEx = $this->connection->query($SQL);
        // echo "<pre>";
        // print_r($SQLEx);
        if ($SQLEx->num_rows > 0) {
            $row = $SQLEx->fetch_object(); //return object access by $row->username
            // echo "<pre>";
            // print_r($row);
            // exit;
            if ($SQLEx > 0) {
                $Res['Code'] = 1;
                $Res['Data'] = $row;
                $Res['Msg'] = "Success";
            } else {
                $Res['Code'] = 0;
                $Res['Data'] = 0;
                $Res['Msg'] = "Try again";
            }
            return $Res;

        }
    }
    function select($tbl, $whr = "")
    {
        $SQL = "SELECT * FROM `$tbl`";
        if ($whr != "") {
            $SQL .= " WHERE ";
            foreach ($whr as $key => $value) {
                $SQL .= "$key = '$value'";
            }
            $SQL = rtrim($SQL, "AND");
        }
        // echo $SQL;
        // exit;
        $SQLEx = $this->connection->query($SQL);
        if ($SQLEx->num_rows > 0) {
            while ($row = $SQLEx->fetch_object()) {
                $Data[] = $row;
            }
            $Res['Code'] = 1;
            $Res['Data'] = $Data;
            $Res['Msg'] = "Success";

        } else {
            $Res['Code'] = 0;
            $Res['Data'] = 0;
            $Res['Msg'] = "Try again";
        }
        return $Res;

    }
    function selectjoin($tbl1, $where,$whr)
    {
        // $SQL = "SELECT $clm FROM $tbl ";
        $SQL="SELECT * FROM $tbl1";
        foreach ($where as $key => $value) {
            $SQL .= " LEFT JOIN $key on $value ";
        }
        if ($whr != "") {
            $SQL .= " WHERE ";
            foreach ($whr as $key => $value) {
                $SQL .= "$key = '$value'";
            }
            $SQL = rtrim($SQL, "AND");
        }
        // echo "<pre>";
        // echo $SQL;
        // exit;
        $SQLEX = $this->connection->query($SQL);
        if ($SQLEX->num_rows > 0) {
            while ($row = $SQLEX->fetch_object()) {
                $Data[] = $row;
            }
            // print_r($Data);
            $Res['Code'] = 1;
            $Res['Data'] = $Data;
            $Res['Msg'] = "Success";

        } else {
            $Res['Code'] = 0;
            $Res['Data'] = 0;
            $Res['Msg'] = "Try again";
        }
        return $Res;

    }
    function insert($tbl, $data)
    {
        // echo "<pre>";
        // print_r($data);
        // $clms=array_keys($data);
        // print_r($clms);
        // print_r($data);
        $clms = implode(",", array_keys($data));
        $vals = implode("','", $data);
        // print_r($clms);
        $SQL = "INSERT INTO $tbl($clms) VALUES('$vals')";
        // echo $SQL;
        // exit;
        $SQLEx = $this->connection->query($SQL);
        // echo "<pre>";
        // print_r($SQLEx);
        if ($SQLEx > 0) {
            $Res['Code'] = 1;
            $Res['Data'] = $data;
            $Res['Msg'] = "Success";
        } else {
            $Res['Code'] = 0;
            $Res['Data'] = 0;
            $Res['Msg'] = "Try again";
        }
        return $Res;
    }
    function update($tbl, $data, $whr)
    {
        $SQL = "UPDATE $tbl SET";
        foreach ($data as $dkey => $dvalue) {
            $SQL .= " $dkey = '$dvalue',";
        }
        $SQL = rtrim($SQL, ",");
        $SQL .= " WHERE ";
        foreach ($whr as $key => $value) {
            $SQL .= " $key = '$value' AND";
        }
        $SQL = rtrim($SQL, "AND");
        // echo $SQL;
        // exit;
        $SQLEx = $this->connection->query($SQL);
        // echo "<pre>";
        // print_r($SQLEx);
        if ($SQLEx > 0) {
            $Res['Code'] = 1;
            $Res['Data'] = 1;
            $Res['Msg'] = "Success";
        } else {
            $Res['Code'] = 0;
            $Res['Data'] = 0;
            $Res['Msg'] = "Try again";
        }
        return $Res;
    }
    function delete($tbl, $whr = "")
    {
        $SQL = "DELETE FROM $tbl";
        if ($whr != "") {
            $SQL .= " WHERE ";
            foreach ($whr as $key => $value) {
                $SQL .= "$key = '$value'";
            }
            $SQL = rtrim($SQL, "AND");
            // echo $SQL;
        }
        $SQLEx = $this->connection->query($SQL);
        if ($SQLEx > 0) {
            $Res['Code'] = 1;
            $Res['Data'] = 1;
            $Res['Msg'] = "Success";
        } else {
            $Res['Code'] = 0;
            $Res['Data'] = 0;
            $Res['Msg'] = "Try again";
        }
        return $Res;
    }
}
// $modelob = new Model;
// echo "<br>";
// $modelob->insert("users",array("username"=>"test","password"=>"123","gender"=>"male"));
// echo "<br>";
// $modelob->insert("cities",array("title"=>"abd"));
// echo "<br>";
// $modelob->insert("products",array("title"=>"p1","price"=>456));
?>