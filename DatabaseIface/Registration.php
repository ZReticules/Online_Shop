<?php
    if (isset($_POST["SaveB"])){
        try {
            $conn = new PDO("mysql:host=localhost;dbname=OnlineShop;charset=utf8", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO Users VALUES (0, :U_Name, :U_Password, :U_Age, :U_City)";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(":U_Name", $_POST["U_Name"]);
            $stmt->bindValue(":U_Password", $_POST["U_Password"]);
            $stmt->bindValue(":U_Age", $_POST["U_Age"]);
            $stmt->bindValue(":U_City", $_POST["U_City"]);
            $affectedRowsNumber = $stmt->execute();
            $conn = null;
        }
        catch (Exception $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
?>