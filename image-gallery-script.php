<?php
require_once('koneksi.php');
$db = $koneksi; // Enter your Connection variable;
$tableName = 'galeri'; // Enter your table Name;
$fetchImage = fetch_image($tableName);
// fetching padination data
function fetch_image($tableName)
{
    global $db;
    $tableName = trim($tableName);
    if (!empty($tableName)) {
        $query = "SELECT * FROM " . $tableName . " ORDER BY id_foto DESC";

        $result = $db->query($query);
        if ($result->num_rows > 0) {
            $row = $result->fetch_all(MYSQLI_ASSOC);
            return $row;
        } else {
            echo "No Image is stored in the database";
        }
    } else {
        echo "you must declare table name to fetch Image";
    }
}
?>