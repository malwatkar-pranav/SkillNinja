<?php
// Array with names and their respective links
$terms = array(
    "HTML" => "../Courses/html.php",
    "JavaScript" => "../Courses/javascript.php",
    "CSS" => "../Courses/css.php",
    "C++" => "../Courses/cpp.php",
    "C" => "../Courses/c.php",
    "PHP" => "../Courses/php.php",
    "Python" => "../Courses/python.php",
    "Java" => "../Courses/java.php"
);

// get the q parameter from URL
$q = $_REQUEST["q"];
$hint = "";
// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
    foreach ($terms as $name => $link) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = "<a href='$link'>$name</a>";
            } else {
                $hint .= ", <a href='$link'>$name</a>";
            }
        }
    }
}
// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>
