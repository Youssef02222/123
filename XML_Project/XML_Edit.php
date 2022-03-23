<?php
$employees = simplexml_load_file('data/employee.xml');
if (isset($_POST['submitSave'])) {

    foreach ($employees as $employee) {
        if ($employee['id'] == $_POST['id']) {
            $employee->name = $_POST['name'];
            $employee->email = $_POST['email'];
            $employee->address = $_POST['address'];
            $employee->salary = $_POST['salary'];
            break;
        }
    }
    file_put_contents('data/employee.xml', $employees->asXML());
    header('location: XML_P.php');
}
//save the data while back
foreach ($employees as $employee) {

    if ($employee['id'] == $_GET['id']) {
        $id = $employee['id'];
        $name = $employee->name;
        $email = $employee->email;
        $address = $employee->address;
        $salary = $employee->salary;
        break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <form action="#" method="POST">
        <label>ID Employee:</label><br>
        <input type="number" id="id" name="id" value="<?php echo $id; ?>"><br>
        <label>Name Employee:</label><br>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>"><br>
        <label>Email Employee:</label><br>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>"><br>
        <label>Address Employee:</label><br>
        <input type="text"id="address" name="address" value="<?php echo $address; ?>"><br>
        <label>Salary Employee:</label><br>
        <input type="number"" id="salary" name="salary" value="<?php echo $salary; ?>"><br><br>
        <input  type="submit" name="submitSave" value="Update Employee">
    </form>
</body>
</html>
