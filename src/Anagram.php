<?php
    class Anagram
    {
        // takes a string and explodes it into an array
        function explodeWord($word)
        {
            return str_split($word);
        }

        // explodes two strings and compares characters.
        function compareWords($word, $word2)
        {
            $explode_one = $this->explodeWord($word);
            $explode_two = $this->explodeWord($word2);
            sort($explode_one);//returns true if successfully sorted
            sort($explode_two);//returns true if successfully sorted

            if ($explode_one == $explode_two) {
                return true;
            }
            return false;
        }

        // soft compare words
        function softCompareWords($master, $test)
        {
            $master_exploded = $this->explodeWord($master);
            $test_exploded = $this->explodeWord($test);

            $match_goal = count($test_exploded);
            $matches = 0;
            foreach ($test_exploded as $test_character) {
                foreach ($master_exploded as $key => $master_character) {
                    if ($test_character == $master_character) {
                        $matches++;
                        unset($master_exploded[$key]);
                        break;
                    }
                }
            }
            return $matches == $match_goal;
        }
    }
 ?>
