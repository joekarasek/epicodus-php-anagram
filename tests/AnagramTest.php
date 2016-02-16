<?php
    require_once __DIR__ . '/../src/Anagram.php';

    class AnagramTest extends PHPUnit_Framework_TestCase
    {

        function test_Anagram_explode()
        {
            // arrange
            $test_Anagram = new Anagram;
            $input = 'hello';

            // act
            $result = $test_Anagram->explodeWord($input);

            // assert
            $this->assertEquals(array('h','e','l','l','o'), $result);
        }
    }
 ?>
