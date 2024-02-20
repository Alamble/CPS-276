<?php

class Exploder {
   private $names = [];

    function addName($fullName) {
        $nameParts = explode(' ', $fullName);
            if (count($nameParts) >= 2) {
                $lastName = array_pop($nameParts);
                $firstName = implode(' ', $nameParts);
                $this -> names[] = ucfirst($lastName) . ', ' . ucfirst($firstName);
                sort($this->names);
            }
        }

        public function ClearNames() {
            $this -> names = [];
        }

        public function GetFormattedNames() {
            return implode("\n", $this -> names);
        }
    }

?>