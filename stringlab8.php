<?php
$badwords = ["school", "homework", "vegetables"];
$text = "I really like vegetables . Yes its true and school is fantastic as well hey school whatever";

foreach($badwords as $word) {
    $replaceWith = str_repeat("*", strlen($word));
    $text = str_replace($word, $replaceWith, $text);
}

echo $text;


 