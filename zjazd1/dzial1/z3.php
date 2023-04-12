<?php

class Exercise3
{
    const ILLEGAL_WORDS = ['kurde', 'ferdek', 'bad_word'];
    public static function hide_bad_words_from_sentence(string $sentence): string
    {
        $words_from_sentence = explode(" ", $sentence);

        foreach ($words_from_sentence as $k => $w) {
            if (self::is_illegal_word($w)) {
                $words_from_sentence[$k] = self::hide_word($w);
            }
        }
        return implode(" ", $words_from_sentence);
    }

    private function is_illegal_word(string $word): bool
    {
        $foundedBadWord = array_filter(self::ILLEGAL_WORDS, function ($illegal_word) use ($word) {
            return str_contains($word, $illegal_word);
        });
        return count($foundedBadWord);
    }

    private static function hide_word(string $word): string
    {
        $wordLength = strlen($word);

        return str_repeat("*", $wordLength);
    }
}

echo Exercise3::hide_bad_words_from_sentence("kurde ale lorem ipsum panie ferdek nie mow pan bad_word");