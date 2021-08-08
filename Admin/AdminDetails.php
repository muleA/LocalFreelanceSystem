


 <?php
  require_once "../Database/db.php";


if (isset($_POST['custId'])) {
    $id = $_POST['custId'];

    $sql = "select * from Account where No=".$id;
    $result = mysqli_query($con, $sql);

    $response = "<table border='1' width='100%'>";
    while ($row = mysqli_fetch_array($result)) {
        $no = $row['No'];
        $username = $row['Username'];
        $fullname = $row['FullName'];
        $role = $row['Role'];
        $createdby = $row['Createdby'];
        $response .= "<tr>";
        $response .= "<td>Role: </td><td>".$no."</td>";
        $response .= "</tr>";

        $response .= "<tr>";
        $response .= "<td>No : </td><td>".$username."</td>";
        $response .= "</tr>";

        $response .= "<tr>";
        $response .= "<td>Username : </td><td>".$fullname."</td>";
        $response .= "</tr>";

        $response .= "<tr>";
        $response .= "<td>FullName : </td><td>".$role."</td>";
        $response .= "</tr>";

        $response .= "<tr>";
        $response .= "<td>Role: </td><td>".$createdby."</td>";
        $response .= "</tr>";
    }
    $response .= "</table>";

    echo $response;
    exit;
}
