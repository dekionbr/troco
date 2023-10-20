<?php
// require 'vendor/autoload.php';

namespace Tests;

use ChangeMoney;
use PHPUnit\Framework\TestCase;



class ChangeMoneyTest extends TestCase{

    //** TDD retorna uma nota de 100 */
    public function testGetQtdMoneyNotesRetornArray() : void{
        
        // Arrange
        $changeMoney = new ChangeMoney();
        
        //Act
        $notes = $changeMoney->getQtdMoneyNotes(0);

        //Assert
        $expected = [
            "100" => 0,
            "50" => 0,
            "20" => 0,
            "10" => 0,
            "5" => 0,
            "2" => 0,
            "1" => 0,
            "0.5" => 0,
            "0.25" => 0,
            "0.1" => 0,
            "0.05" => 0,
            "0.01" => 0,
        ];

        $this->assertEquals($expected, $notes);

    }

    public function testGetQtdMoneyNotesRetornANoteOf100() : void{
        
        // Arrange
        $changeMoney = new ChangeMoney();
        
        //Act
        $notes = $changeMoney->getQtdMoneyNotes(100.0);

        //Assert
        $expected = [
            "100" => 1,
            "50" => 0,
            "20" => 0,
            "10" => 0,
            "5" => 0,
            "2" => 0,
            "1" => 0,
            "0.5" => 0,
            "0.25" => 0,
            "0.1" => 0,
            "0.05" => 0,
            "0.01" => 0,
        ];

        $this->assertEquals($expected, $notes);

    }

    public function testGetQtdMoneyNotesRetorn10NoteOf100() : void{
        
        // Arrange
        $changeMoney = new ChangeMoney();
        
        //Act
        $notes = $changeMoney->getQtdMoneyNotes(1000.0);

        //Assert
        $expected = [
            "100" => 10,
            "50" => 0,
            "20" => 0,
            "10" => 0,
            "5" => 0,
            "2" => 0,
            "1" => 0,
            "0.5" => 0,
            "0.25" => 0,
            "0.1" => 0,
            "0.05" => 0,
            "0.01" => 0,
        ];

        $this->assertEquals($expected, $notes);

    }


    public function testGetQtdMoneyNotesRetornANoteOf100AndFiftyCents() : void{
        
        // Arrange
        $changeMoney = new ChangeMoney();
        
        //Act
        $notes = $changeMoney->getQtdMoneyNotes(100.5);

        //Assert
        $expected = [
            "100" => 1,
            "50" => 0,
            "20" => 0,
            "10" => 0,
            "5" => 0,
            "2" => 0,
            "1" => 0,
            "0.5" => 1,
            "0.25" => 0,
            "0.1" => 0,
            "0.05" => 0,
            "0.01" => 0,
        ];

        $this->assertEquals($expected, $notes);

    }

    public function testGetQtdMoneyNotesRetornANoteOf100AndFiftyOneCents() : void{
        
        // Arrange
        $changeMoney = new ChangeMoney();
        
        //Act
        $notes = $changeMoney->getQtdMoneyNotes(100.51);

        //Assert
        $expected = [
            "100" => 1,
            "50" => 0,
            "20" => 0,
            "10" => 0,
            "5" => 0,
            "2" => 0,
            "1" => 0,
            "0.5" => 1,
            "0.25" => 0,
            "0.1" => 0,
            "0.05" => 0,
            "0.01" => 1,
        ];

        $this->assertEquals($expected, $notes);

    }


    public function testGetQtdMoneyNotesRetornANoteOf100AndFiftyThreeCents() : void{
        
        // Arrange
        $changeMoney = new ChangeMoney();
        
        //Act
        $notes = $changeMoney->getQtdMoneyNotes(100.53);

        //Assert
        $expected = [
            "100" => 1,
            "50" => 0,
            "20" => 0,
            "10" => 0,
            "5" => 0,
            "2" => 0,
            "1" => 0,
            "0.5" => 1,
            "0.25" => 0,
            "0.1" => 0,
            "0.05" => 0,
            "0.01" => 3,
        ];

        $this->assertEquals($expected, $notes);

    }

    public function testGetQtdMoneyNotesRetornTenNoteOf100AndFiftyThreeCents() : void{
        
        // Arrange
        $changeMoney = new ChangeMoney();
        
        //Act
        $notes = $changeMoney->getQtdMoneyNotes(1000.53);

        //Assert
        $expected = [
            "100" => 10,
            "50" => 0,
            "20" => 0,
            "10" => 0,
            "5" => 0,
            "2" => 0,
            "1" => 0,
            "0.5" => 1,
            "0.25" => 0,
            "0.1" => 0,
            "0.05" => 0,
            "0.01" => 3,
        ];

        $this->assertEquals($expected, $notes);

    }
}


