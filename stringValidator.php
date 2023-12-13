<?php

class StringValidator extends InputValidator {
    use SanitizeHTMLSpecialCharacters, SanitizeHTMLSpecialCharacters2 {
        SanitizeHTMLSpecialCharacters::sanitizeHTMLSpecialCharacters as insteadof SanitizeHTMLSpecialCharacters2,
        SanitizeHTMLSpecialCharacters2::sanitizeHTMLSpecialCharacters as protected sanitizeHTMLSpecialCharacters2;
    }

    public function stringValidator(string $input):string {
        
        $input = $this->sanitizeHTMLSpecialCharacters($input);
        $input = $this->sanitizeHTMLSpecialCharacters2($input);

        return $input;
    }

}