<?php
function input_checker($input_name, $default_value)
{
    // Mengecek apakah inputnya sudah dimasukan oleh user atau tidak dengan menggunakan Null Coalescing Operator
    // Apabila sudah ada inputnya, maka akan mengembalikan nilai inputnya
    // Apabila belum ada inputnya, maka akan mengembalikan nilai defaultnya
    // Function akan dipanggil di class_medical_report.php
    $input_value = $_POST[$input_name] ?? $default_value;
    return $input_value;
}
?>