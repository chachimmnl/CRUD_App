<?php
    //fetching data
    $query = "SELECT * FROM tblsubjects LEFT JOIN tblsyllabus ON tblsyllabus.subject_id = tblsubjects.Subject_ID";
    $result = mysqli_query($dbc, $query); //using mysqli_query
?>