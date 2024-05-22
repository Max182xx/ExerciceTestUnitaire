<?php

// Import de la classe PHPUnit TestCase.
use PHPUnit\Framework\TestCase;
use Mgarc\Testuntaire\LeapYear;

// Déclaration de ma classe
class LeapYearTest extends TestCase
{
  protected LeapYear $leapYear;

  // Déclaration de la fonction setUp méthode spéciale utilisée par PHPUnit. 
  // Appelée avant chaque test pour initialiser.
  protected function setUp(): void
  {
    $this->leapYear = new LeapYear();
  }
  // Test fonction année bissextile.
  // Convention de nommage le nom des méthodes doivent commencer par test.
  // Sinon PHPUnit ne reconnaîtra pas les méthodes.
  public function testLeapYear()
  {
  // Utilisation de assertEquals fonction de PHPUnit vérifie si les valeurs sont égales.
    $this->assertEquals("true", $this->leapYear->getLeapYear(2024));
  }
    // Test fonction année non bissextile
  public function testNoLeapYear()
  {
    $this->assertEquals("false", $this->leapYear->getLeapYear(2010));
  }

  
}