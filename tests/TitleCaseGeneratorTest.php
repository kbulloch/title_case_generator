<?php

    require_once "src/TitleCaseGenerator.php";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function testMakeTitleCaseOneWord()
        {
            //Arrange
            $test_title_case_generator = new TitleCaseGenerator;
            $input = "beowulf";

            //Act
            $result = $test_title_case_generator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Beowulf", $result);
        }

        function test_make_title_case_multiple_words()
        {
            //Arrange
            $test_title_case_generator = new TitleCaseGenerator;
            $input = "the dark lord";

            //Act
            $result = $test_title_case_generator->makeTitleCase($input);

            //Assert
            $this->assertEquals("The Dark Lord", $result);
        }

    }

?>
