<?php
    $device = $cust = $process = $module = $length = $type = $sales = $service = $layers = $dpml = $days = "";	

    require_once('config.php');
    if(isset($_POST["insert"])) 
    {   
        // get the post records
        $device = $_POST['device'];
        $cust = $_POST['cust'];
        $process = $_POST['process'];
        $module = $_POST['module'];
        $length = $_POST['length'];
        $type = $_POST['type'];
        $sales = $_POST['sales'];
        $service = $_POST['service'];
        $layers = $_POST['layers'];
        $dpml = $_POST['dpml'];
        $days = $_POST['days'];

        // database insert SQL code
        $sql = "INSERT INTO `userinput`(`Devices`, `Customers`, `Process_Family`, `Module_Category`, `Device_Length`, `Device_Type`, `Sales_pool`, `Service_level`, `No_of_layers`, `DPML`, `No_of_days`) VALUES ('$device','$cust','$process','$module','$length','$type','$sales','$service','$layers','$dpml','$days')";

        // insert in database
        $rs = mysqli_query($con, $sql);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Add orders</title>
    </head>
    <body>
        <?php
            require_once("banner.php");
            require_once("bannerMenu.php");
        ?>
        <h1>Add order</h1>
        <br />
        <form name="userInput" method="post" rel="noopener">
            <table border="0" cellpadding="10" cellspacing="0" width="500" align="left" class="tbl-qa">
                <thead>
                    <tr>
                        <th colspan="2" class="table-header"></th>
                    </tr>
                </thead>
                <tbody>
                    <!--Devices, Customers, Process_Family, Module_Category, Device_Length, Device_Type, Sales_pool, Service_level, No_of_layers, DPML, No_of_days-->
                    <tr class="table-row">
                        <td><label>Devices: </label></td>
                        <td><input type="text" name="device" class="txtField"></td>
                    </tr>
                    <tr class="table-row">
                        <td><label>Customers: </label></td>
                        <td><input type="text" name="cust" class="txtField"></td>
                    </tr>
                    <tr class="table-row">
                        <td><label>Process Family: </label></td>
                        <td><input type="text" name="process" class="txtField"></td>
                    </tr>
                    <tr class="table-row">
                        <td><label>Module Category: </label></td>
                        <td><input type="text" name="module" class="txtField"></td>
                    </tr>
                    <tr class="table-row">
                        <td><label>Device Length: </label></td>
                        <td><input type="text" name="length" class="txtField"></td>
                    </tr>
                    <tr class="table-row">
                        <td><label>Device Type: </label></td>
                        <td><input type="text" name="type" class="txtField"></td>
                    </tr>
                    <tr class="table-row">
                        <td><label>Sales pool: </label></td>
                        <td><input type="text" name="sales" class="txtField"></td>
                    </tr>
                    <tr class="table-row">
                        <td><label>Service level: </label></td>
                        <td><input type="text" name="service" class="txtField"></td>
                    </tr>
                    <tr class="table-row">
                        <td><label>No. of layers: </label></td>
                        <td><input type="text" name="layers" class="txtField"></td>
                    </tr>
                    <tr class="table-row">
                        <td><label>DPML: </label></td>
                        <td><input type="text" name="dpml" class="txtField"></td>
                    </tr>
                    <tr class="table-row">
                        <td><label>No. of days: </label></td>
                        <td><input type="text" name="days" class="txtField"></td>
                    </tr>
                </tbody>
            </table>

            <input type="submit" id="insert" name="insert" value="Insert" onClick="javascript: return confirm('Please confirm to add!');" >
            <input type="reset" id="clear" name="clear" value="Clear form">
            <br>
        </form>
        <?php
            $con->close();
        ?>
    </body>
</html>