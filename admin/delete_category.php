<?php

if (isset($_GET['delete_category'])) {

    $delete_id = $_GET['delete_category'];

    $delete_cat = "delete from categories where category_id='$delete_id'";

    $run_delete = mysqli_query($con, $delete_cat);

    if ($run_delete) {

        echo "<script> alert('One Category Has Been Deleted') </script>";

        echo "<script>window.open('index.php?view_category','_self')</script>";
    }
}
