<?php
 $text = "so the quick brown fox jumps over the lazy dog.";

 $replace = "the";
 $replaceWith = "that";
 $text = preg_replace('/' . $replace . '/', $replaceWith, $text, 1);

 echo $text;