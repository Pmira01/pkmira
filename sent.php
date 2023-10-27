<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Usia</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Mengambil data dari database atau sumber lainnya
            $data = array(
                array(1, 'John', 25),
                array(2, 'Jane', 30),
                array(3, 'Smith', 28),
            );

            foreach ($data as $row) {
                echo "<tr>";
                echo "<td>" . $row[0] . "</td>";
                echo "<td>" . $row[1] . "</td>";
                echo "<td>" . $row[2] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
