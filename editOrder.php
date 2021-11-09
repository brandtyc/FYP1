<?php
    include "config.php"; // Using database connection file here

    $id = $_GET['id']; // get id through query string

    $qry = mysqli_query($con,"select * from UserInput where ID='$id'"); // select query

    $data = mysqli_fetch_array($qry); // fetch data

    if(isset($_POST['update'])) // when click on Update button
    {
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
        
        $edit = mysqli_query($con, "update UserInput set Devices='$device', Customers='$cust', Process_Family='$process', Module_Category='$module', Device_Length='$length', Device_Type='$type', Sales_pool='$sales', Service_level='$service', No_of_layers='$layers', DPML='$dpml', No_of_days='$days' where ID='$id'");
        
        if($edit)
        {
            mysqli_close($con); // Close connection
            header("location:viewOrder.php"); // redirects to all records page
            exit;
        }
        else
        {
            echo mysqli_error($con);
        }    	
    }
    require_once("banner.php");
    require_once("bannerMenu.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Edit Order</title>
    </head>
    <body>
        <h1>Update Order</h1>

        <form method="POST">
            <table border="0" cellpadding="10" cellspacing="0" width="500" align="left" class="tbl-qa">
                <thead>
                    <tr>
                        <th colspan="2" class="table-header"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><label>Device Name: </label></td>
                        <td><input type="text" name="device" value="<?php echo $data['Devices'] ?>" placeholder="Enter Device Name"></td>
                    </tr>
                    <tr>
                        <td><label>Customer Name: </label></td>
                        <td><input type="text" name="cust" value="<?php echo $data['Customers'] ?>" placeholder="Enter Customer Name"></td>
                    </tr>
                    <tr>
                        <td><label>Process Family: </label></td>
                        <td><input type="text" name="process" value="<?php echo $data['Process_Family'] ?>" placeholder="Enter Process Family"></td>
                    </tr>
                    <tr>
                        <td><label>Module Category: </label></td>
                        <td><input type="text" name="module" value="<?php echo $data['Module_Category'] ?>" placeholder="Enter Module Category"></td>
                    </tr>
                    <tr>
                        <td><label>Device Length: </label></td>
                        <td><input type="text" name="length" value="<?php echo $data['Device_Length'] ?>" placeholder="Enter Device Length"></td>
                    </tr>
                    <tr>
                        <td><label>Device Type: </label></td>
                        <td><input type="text" name="type" value="<?php echo $data['Device_Type'] ?>" placeholder="Enter Device Type"></td>
                    </tr>
                    <tr>
                        <td><label>Salespool: </label></td>
                        <td><input type="text" name="sales" value="<?php echo $data['Sales_pool'] ?>" placeholder="Enter Salespool"></td>
                    </tr>
                    <tr>
                        <td><label>Service Level: </label></td>
                        <td><input type="text" name="service" value="<?php echo $data['Service_level'] ?>" placeholder="Enter Service Level"></td>
                    </tr>
                    <tr>
                        <td><label>No. of Layers: </label></td>
                        <td><input type="text" name="layers" value="<?php echo $data['No_of_layers'] ?>" placeholder="Enter Layers"></td>
                    </tr>
                    <tr>
                        <td><label>DPML: </label></td>
                        <td><input type="text" name="dpml" value="<?php echo $data['DPML'] ?>" placeholder="Enter DPML"></td>
                    </tr>
                    <tr>
                        <td><label>No. of Days: </label></td>
                        <td><input type="text" name="days" value="<?php echo $data['No_of_days'] ?>" placeholder="Enter Days"></td>
                    </tr>
                </tbody>
            </table>

            <input type="submit" name="update" value="Update">
            <br><br>
            <input type="reset" name="clear" value="Clear">
        </form>
    </body>
</html>