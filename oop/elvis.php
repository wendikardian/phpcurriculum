<?php
    var_dump(true ?: "false.");
    var_dump("true." ?: "false.");
    var_dump(false ?: 1);
    var_dump(0 ?: "false.");
    var_dump("" ?: 0);


    // null coalescing operation

    // echo isset("hello") ? "hello" : "false";
    echo "hello" ?? "false";
?>