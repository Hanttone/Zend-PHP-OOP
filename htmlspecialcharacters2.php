<?php

trait SanitizeHTMLSpecialCharacters2 {
    public function sanitizeHTMLSpecialCharacters(string $input): string {
        return strip_tags($input);
    }
}