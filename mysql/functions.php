<?php

include "db.php";

    function showAllData()
    {
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            die('Query Failed' . mysqli_error());
        }

        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            echo " <option value='$id'>$id</option>";
        }
    }

?>