<?php

    require_once "src/Game.php";

    class GameTest extends PHPUnit_Framework_TestCase
    {

        //User inputs rock, computer inputs paper; paper wins
        //input-> rock, paper
        //output-> paper wins
        function test_makeGame_compPaperWins()
        {
            //Arrange
            $test_Game = new Game;
            $user = "rock";
            $comp = "paper";

            //Act
            $result = $test_Game->makeGame($user, $comp);

            //Assert
            $this->assertEquals("paper wins", $result);
        }

        //User inputs scissors, computer inputs rock; rock wins
        //input->scissors, rock
        //output-> rock wins
        function test_makeGame_compRockWins()
        {
            //Arrange
            $test_Game = new Game;
            $user = "scissors";
            $comp = "paper";

            //Act
            $result = $test_Game->makeGame($user, $comp);

            //Assert
            $this->assertEquals("rock wins", $result);
        }

//User inputs paper, computer inputs scissors; scissors wins
//input->
//output->

//User inputs rock, computer inputs scissors; rock wins
//input->
//output->

//User inputs scissors, computer inputs paper; scissors wins
//input->
//output->

//User inputs paper, computer inputs rock; paper wins
//input->
//output->

//User inputs matches computer input; tie -> no winner
//input->
//output->

//Computer pulls random number to decide computer choice
//input->
//output->
    }
?>