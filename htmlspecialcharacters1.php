<?php

trait SanitizeHTMLSpecialCharacters {
    public function sanitizeHTMLSpecialCharacters(string $input): string {
        return htmlspecialchars($input);
    }
}