<?php
require __DIR__.'/vendor/autoload.php';

$te = new \TestComposer\GenerateRandomText();
echo $te->textGenerate();