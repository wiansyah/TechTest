<?php
for ($i=0; $i < 50; $i++) {
    $count = $i+1;
    echo $count;
    if (($count%3 == 0) && ($count%5 == 0)) echo "FooBar";
    else if ($count%5 == 0) echo "Bar";
    else if ($count % 3 == 0) echo "Foo";
    echo " || ";
}
?>