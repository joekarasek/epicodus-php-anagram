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

        function test_Anagram_compare_words()
        {
            //arrange
            $test_Anagram = new Anagram;
            $input = 'bread';
            $input2 = 'beard';
            $input3 = 'zoo';
            $input4 = 'berd';

            //act
            $result = $test_Anagram->compareWords($input, $input2);
            $result2 = $test_Anagram->compareWords($input3, $input4);

            //assert
            $this->assertEquals(true, $result);
            $this->assertEquals(false, $result2);

        }

        function test_Anagram_softcompare_words()
        {
            //arrange
            $test_Anagram = new Anagram;
            $input = "scratches";
            $input2 = "sas";
            $input3 = "asses";

            //act
            $result = $test_Anagram->softCompareWords($input, $input2);
            $result2 = $test_Anagram->softCompareWords($input, $input3);

            //assert
            $this->assertEquals(true, $result);
            $this->assertEquals(false, $result2);
        }

    }
 ?>
