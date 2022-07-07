<?php 
$text = "Lorem ipsum dolor, sit amet consectetur adipisicing elit.
         Possimus magnam incidunt eos ut maxime quo sit,
         veritatis libero expedita quidem doloremque soluta modi non nesciunt, 
         consequuntur temporibus, voluptatem vitae. Aliquid?
        ";

$search = $_GET["search"];

echo $text;
echo "<br>";
echo "Lunghezza testo " . strlen($text);
echo "<br>";

if($search === null) {
    return;
} else if(stripos($text, $search) !== false) {
    $text = str_ireplace($search, "***", $text);
}

echo $text;
echo "<br>";
echo "Lunghezza testo " . strlen($text);
?>
