<?php
    require_once('config.php');

    $sql = "SELECT * FROM UserInput";
    $result = $con->query($sql);
    $arr_users = [];

    if ($result->num_rows > 0) {
        $arr_users = $result->fetch_all(MYSQLI_ASSOC);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.3/af-2.3.7/b-2.0.1/b-print-2.0.1/cr-1.5.5/kt-2.6.4/sc-2.0.5/sb-1.3.0/sl-1.3.3/datatables.min.css"/>
    <title>View orders</title>
</head>
<body>
    <?php
        require_once("banner.php");
        require_once("bannerMenu.php");
    ?>
    <h1>View order</h1>
    <br /><br />
    <table id="userTable">
        <thead>
            <th>ID</th>
            <th>Devices</th>
            <th>Customers</th>
            <th>Process_Family</th>
            <th>Module_Category</th>
            <th>Device_Length</th>
            <th>Device_Type</th>
            <th>Sales_pool</th>
            <th>Service_level</th>
            <th>No_of_layers</th>
            <th>DPML</th>
            <th>No_of_days</th>
            <th>Edit</th>
			<th>Delete</th>
        </thead>
        <tbody>
            <?php if(!empty($arr_users)) { ?>
                <?php foreach($arr_users as $user) { ?>
                    <tr>
                        <td><?php echo $user['ID']; ?></td>
                        <td><?php echo $user['Devices']; ?></td>
                        <td><?php echo $user['Customers']; ?></td>
                        <td><?php echo $user['Process_Family']; ?></td>
                        <td><?php echo $user['Module_Category']; ?></td>
                        <td><?php echo $user['Device_Length']; ?></td>
                        <td><?php echo $user['Device_Type']; ?></td>
                        <td><?php echo $user['Sales_pool']; ?></td>
                        <td><?php echo $user['Service_level']; ?></td>
                        <td><?php echo $user['No_of_layers']; ?></td>
                        <td><?php echo $user['DPML']; ?></td>
                        <td><?php echo $user['No_of_days']; ?></td>
                        <td><a onClick="javascript: return confirm('Please confirm to edit!');" href="editOrder.php?id=<?php echo $user['ID']; ?>">Edit</a></td>
                        <!-- Confirmation on clicking delete button -->
                        <td><a onClick="javascript: return confirm('Please confirm deletion!');" href="deleteOrder.php?id=<?php echo $user['ID']; ?>">Delete</a></td>
                    </tr>
                <?php } ?>
            <?php } ?>
        </tbody>
    </table>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#userTable').DataTable();
        });
    </script>
</body>
</html>