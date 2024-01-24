<?php
    date_default_timezone_set("Asia/Bangkok");
    echo date("ym");

    // File to store the last sequence number
    $filename = '6digitgenerate.txt';

    // Read the last sequence number from the file
    $lastSequenceNumber = file_get_contents($filename);

    // Increment the sequence number
    $sequenceNumber = $lastSequenceNumber + 1;

    // Save the new sequence number back to the file
    file_put_contents($filename, $sequenceNumber);

    // Format the sequence number to 6 digits
    $sequenceNumberPadded = str_pad($sequenceNumber, 6, '0', STR_PAD_LEFT);

    echo $sequenceNumberPadded;

    $generateorder = date("ym").$sequenceNumberPadded;
?>