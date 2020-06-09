<?php

/*
The user interface contains two types of user input controls: TextInput, which accepts all texts and
NumericInput, which accepts only digits.

Implement the class TextInput that contains:
- Public function add($text) - adds the given text to the current value.
- Public function getVlaue() - returns the current value (string).

Implement the class NumericInput that:
- Inherits from TextInput.
- Overrides the add method so that each non-numeric text is ignored.
*/

class TextInput
{
    public $current_value;
    
    function __construct() {
        $this->current_value = '';
    }
    
    public function add($text) {
        $this->current_value .= $text;    
    }
    
    public function getValue() {
        return $this->current_value;
    }

}

class NumericInput extends TextInput
{
    public function add($text) {
        if (is_numeric($text)) {
            $this->current_value .= $text;    
        }
            
    }
}

$input = new NumericInput();
$input->add('1');
$input->add('a');
$input->add('0');
echo $input->getValue();

?>
