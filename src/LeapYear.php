<?php

namespace Mgarc\Testuntaire;

class LeapYear
{
  // Récupere l'argument dans mon fichier LeapYearTest.
  // Pour déterminer si l'année donnée est bissextile.
  public static function getLeapYear($years)
  {
     if(($years % 4 == 0 && $years % 100 != 0) || $years % 400 == 0)
     {
         return "true";
     }
     else { 
         return "false";
     } 
  }
}