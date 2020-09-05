
<?php

    require_once ('db_config.php');

    // $sql = "SELECT id, name, phone, email FROM userdata ORDER BY id";
    $sql = "SELECT * FROM userdata ORDER BY id ASC";

    $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Message</th>
                <th>Update</th>
                <th>Remove</th>
            </tr>";
            // output data of each row
            // while($row = $result->fetch_assoc()) {
            while($row = mysqli_fetch_array($result))
            {
                // print_r($row);
            echo "<tr>
                    <td>". $row["id"]. "</td>
                    <td>" . $row["name"]. "</td>
                    <td>" . $row["phone"]. "</td>
                    <td>" . $row["email"]. "</td>
                    <td>" . $row["message"]. "</td>
                    <td><a href="."index.php?id=".$row["id"]."> edit</a> </td>
                    <td><a href="."delete.php?id=".$row["id"]."> delete</a> </td>
                </tr>" ;
            }
            echo "</table>";
            } else {
            echo "0 results";
        }

?>

<html>
<head></head>
    <style>
        table, th, td {
        border: 1px solid black;
        }
        th, td {
        padding: 15px;
        text-align: left;
        }
        tr:hover {background-color: #f5f5f5;}
        th {
        background-color: #000000;
        color: white;
        }

    </style>
</html>


