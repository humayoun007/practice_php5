<?php

$sampleString = "Hello";

$sampleString .= " Friend";

echo $sampleString."<br/>";

echo "Length of string: " .strlen($sampleString)."<br/>";

echo " String to Lower case example :".strtolower($sampleString)."<br/>";
echo " String to Upper case example :".strtoupper($sampleString)."<br/>";

echo "Position of friend in hello friend text is :".strpos($sampleString,'Friend')."<br/>";

echo "A specific part of string by using substr :".substr($sampleString,strpos($sampleString,'Friend'),strlen('Friend'))."<br/>";
