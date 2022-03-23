<?php
// catch the xml data as an array
$employees = simplexml_load_file('data/employee.xml');
?>

<html>
<head>
    <title>All_Users</title>
    <link href="table.css" rel="stylesheet">
</head>
<body>
<center>
    <h1>List Users</h1>
    <form method="post">
        <input style="width: 400px;height: 30px" type="search" name="searchInput" placeholder="Enter name or Email to search..">
        <input style="height: 30px;width: 100px;background-color: #6c6363;color: white;border-radius: 5px;" name="search" type="submit" value="search">
    </form>
    <table class="tablestyle">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Salary</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <?php foreach ($employees as $employee) { ?>
            <tr>
                <td><?= $employee['id']; ?></td>
                <td><?php echo $employee->name; ?></td>
                <td><?php echo $employee->email; ?></td>
                <td><?php echo $employee->address; ?></td>
                <td><?php echo $employee->salary; ?></td>
                <td> <a href="XML_Edit.php?id=<?php echo $employee['id']; ?>">Edit</a> |
                    <a href="XML_Delete.php?action=delete&id=<?php echo $employee['id'] ?>"
                       >Delete</a>
                </td>
            </tr>
        <?php } ?>
        <tfoot>
        <tr>
            <td colspan="3" ><?=count($employees)?> users</td>
            <td colspan="3"><a href="XML_Add.php">Add User</a> </td>
        </tr>
        </tfoot>
    </table>


</center>
</body>
</html>
<?php


if (isset($_POST["search"])) {

    foreach ($employees as $employee) {

        if ($employee["id"]==$_POST["searchInput"]) {


            echo "<center>
                <tr>
                <td> $employee[id] </td>
                <td>  $employee->name </td>
                <td>  $employee->email</td>
                <td>  $employee->address </td>
                <td>  $employee->salary </td>
                </tr> 
                </center>";
        }
    }
}

?>

  <html>
    <form method="post">
       <!-- <input type="submit" value="next" name="Submit"> -->
    </form>
    </html>

<?php

/*
    if(isset($_POST["searchInput"])&& $_POST["searchInput"]<count($employees)) {
        if (isset($_POST["next"])) {
            $employee["id"] = $_POST["searchInput"] + 1;


        echo "<center>
                <tr>
                <td> $employee[id] </td>
                <td>  $employee->name </td>
                <td>  $employee->email</td>
                <td>  $employee->address </td>
                <td>  $employee->salary </td>
                </tr> 
                </center>";
    }

}
?>