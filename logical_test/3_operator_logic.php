<?php
function divide($first = null, $second = null) {
    if ($first === null || $second === null || $second === 0) return "Error<br>";
    return $first." ÷ ".$second." = ".($first /= $second)."<br>";
}

echo divide(7, 2);
echo divide(8, 4);
echo divide(7, 0);
echo divide(1, 2);
echo divide(9, 3);
echo divide(3, 3);
?>