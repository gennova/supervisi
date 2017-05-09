<html>
    <head>
        <title>Coba DataTable</title>
        <!-- DataTables CSS -->
        <link rel="stylesheet" type="text/css" href="jquery.dataTables.css">
        <!-- jQuery -->
        <script type="text/javascript" charset="utf8" src="jquery-1.11.1.min.js"></script>
        <!-- DataTables -->
        <script type="text/javascript" charset="utf8" src="jquery.dataTables.js"></script>
    </head>
    <body>
        <?php 
            $con=mysqli_connect("localhost","root","","information_schema");

            // Check connection
            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

            $result = mysqli_query($con,"SELECT * FROM USER_PRIVILEGES");
        ?>
        <table id="table_id" class="display">
            <thead>
                <tr>
                    <th>GRANTEE</th>
                    <th>TABLE_CATALOG</th>
                    <th>PRIVILEGE_TYPE</th>
                    <th>IS_GRANTABLE</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['GRANTEE'] . "</td>";
                        echo "<td>" . $row['TABLE_CATALOG'] . "</td>";
                        echo "<td>" . $row['PRIVILEGE_TYPE'] . "</td>";
                        echo "<td>" . $row['IS_GRANTABLE'] . "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
        <script type="text/javascript">
            $(document).ready( function () {
                $('#table_id').DataTable();
            });
        </script>
        <?php
            mysqli_close($con);
        ?>
    </body>
</html>