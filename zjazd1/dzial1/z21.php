<?php
class NumberArray {
    private $numbers = [];

    public function __construct($length) {
        for ($i = 0; $i <= $length; $i++) {
            $this->numbers[] = rand(0, 100);
        }
    }

    public function getNumberAtIndex($index) {
        return $this->numbers[$index];
    }
}

$indexToGet = 4;

$arrayObject = new NumberArray($indexToGet);
echo $arrayObject->getNumberAtIndex($indexToGet);
?>
