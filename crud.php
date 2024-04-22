//crud.php
<?php
include 'koneksi.php';

// Operasi Create
function createData($table, $data) {
    global $conn;
    $fields = implode(", ", array_keys($data));
    $values = "'" . implode("', '", $data) . "'";
    $sql = "INSERT INTO $table ($fields) VALUES ($values)";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

// Operasi Read
function readData($table) {
    global $conn;
    $sql = "SELECT * FROM $table";
    $result = $conn->query($sql);
    $data = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    return $data;
}

// Operasi Update
function updateData($table, $data, $id) {
    global $conn;
    $set = "";
    foreach ($data as $key => $value) {
        $set .= "$key='$value', ";
    }
    $set = rtrim($set, ", ");
    $sql = "UPDATE $table SET $set WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

// Operasi Delete
function deleteData($table, $id) {
    global $conn;
    $sql = "DELETE FROM $table WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}
?>
