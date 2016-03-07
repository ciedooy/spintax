<?php namespace Aprillins\Spintax\Usage;

require __DIR__.'/../vendor/autoload.php';

use Aprillins\Spintax\Spintax;

$spintax = new Spintax();
$string = '{Hello|Howdy|Hola} to you, {Mr.|Mrs.|Ms.} {Smith|Williams|Davis}!';
echo '<p>Regular spinning example</p>';
echo '<p>'.$spintax->process($string).'</p>';
echo '<br/><br/>';

echo '<p>Nested spinning example</p>';
echo '<p>'.$spintax->process('{Hello|Howdy|Hola} to you, {Mr.|Mrs.|Ms.} {{Jason|Malina|Sara}|Williams$.'</p>';

