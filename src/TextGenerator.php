<?php


namespace TestComposer;


interface TextGenerator
{
    public function textGenerate(int $length = 10): string;
}