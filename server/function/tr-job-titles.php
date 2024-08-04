<?php 


include(dirname(__FILE__) . '/../config/index.php');



function getTrJobTitles() {
    global $conn;

    $get = "SELECT * FROM tr_location";
    $result = mysqli_query($conn, $get);

    // Check if query was successful
    if (!$result) {
        die('Query Failed: ' . mysqli_error($conn));
    }

    // Fetch all results as associative array
    $tr_job_titles = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    // Get the number of rows
    $num_rows = mysqli_num_rows($result);

    return [
        'data' => $tr_job_titles,
        'length' => $num_rows
    ];
}

function addTrJobTitle($data) {
    global $conn;


    $id = uniqid('', true);
    $title = htmlspecialchars($data);

    $post = "INSERT INTO tr_job_titles VALUES($id, $title)";

    mysqli_query($conn, $post);

    return mysqli_affected_rows($conn);

}

function deleteTrJobTitle($id){

    global $conn;

    $delete = "DELETE FROM tr_job_titles WHERE id = $id";

    mysqli_query($conn, $delete);

    return mysqli_affected_rows($conn);
}


?>