<?php

class listWeb extends db {

function getList() {
    $db = new db();
    $conn = $db->connect();

    $stmt = $conn->prepare("SELECT * FROM webpsw"); 
    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo "<h2>Svetianių sąrašas:</h2>;"
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Website</th><th>Password</th></tr>";
    foreach ($results as $row) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['vartotojo_id']) . "</td>";
        echo "<td>" . htmlspecialchars($row['psl_vardas']) . "</td>";
        echo "<td>" . htmlspecialchars($row['pswrd']) . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    return $results;
}
}


?>