<?php
$path = $_POST["path"];
$directory = $_POST["directory"];


$operation = isset($_POST["operation"]) ? $_POST["operation"] : "read";

if ($operation == "create") {
    $path = rtrim($path, "/");
    if (!file_exists($path . "/" . $directory)) {
        if (mkdir($path . "/" . $directory)) {
            echo "Directory created successfully!";
        } else {
            echo "Error creating directory.";
        }
    } else {
        echo "Directory already exists.";
    }
} elseif ($operation == "delete") {
    $path = rtrim($path, "/");
    if (file_exists($path . "/" . $directory)) {
        if (is_dir($path . "/" . $directory) && count(scandir($path . "/" . $directory)) == 2) {
            if (rmdir($path . "/" . $directory)) {
                echo "Directory deleted successfully!";
            } else {
                echo "Error deleting directory.";
            }
        } else {
            echo "Directory is not empty.";
        }
    } else {
        echo "Directory does not exist.";
    }
} else {
    $path = rtrim($path, "/");
    if (file_exists($path . "/" . $directory)) {
        $items = scandir($path . "/" . $directory);
        $items = array_diff($items, array(".", ".."));
        if (count($items) > 0) {
            echo "<ul>";
            foreach ($items as $item) {
                echo "<li>" . $item . "</li>";
            }
            echo "</ul>";
        } else {
            echo "Directory is empty.";
        }
    } else {
        echo "Directory does not exist.";
    }
}
?>
