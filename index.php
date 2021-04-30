<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "xml_csv";

// Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM people_info";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table border='1'>
       
            <tr>

            <th>Name</th>

            <th>Phone</th>

            <th>Email</th>

            <th>Date</th>
            
            <th>Country</th>


            </tr>";


            // output data of each row
            while ($row = $result->fetch_assoc()) {

                echo "<tr>";

                echo "<td>" . $row['Name'] . "</td>";

                echo "<td>" . $row['Phone'] . "</td>";

                echo "<td>" . $row['Email'] . "</td>";

                echo "<td>" . $row['Date'] . "</td>";

                echo "<td>" . $row['Country'] . "</td>";
            }
        } else {
            echo "0 results";
        }
        echo"</table>";
        $conn->close();
        ?>

    </body>
</html>
