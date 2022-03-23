<?php
if (isset($_GET['action'])) {
    $employees = simplexml_load_file('data/employee.xml');
    $id = $_GET['id'];
    $index = 0;
    $counter = 0;
    foreach ($employees as $employee) {
        if ($employee['id'] == $id) {
            $index = $counter;
            break;
        }
        $counter++;
    }
    unset($employees->employee[$index]);
    file_put_contents('data/employee.xml', $employees->asXML());
    header("location:XML_P.php");
}