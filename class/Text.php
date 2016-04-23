<?php
class Text{

  private static $suffixe = ' €';
  const SUFFIXE = ' €';



  public static function publicWithZero($chiffre) {
    return self::withZero($chiffre);
  }

  /**
   * @param int
   * return int
   * Si le chiffre est inferieur Ã  10 on lui ajoute 0 (01/02/03 etc)
   */
  private static function withZero($chiffre) {
    if($chiffre < 9) {
      return '0' . $chiffre . self::SUFFIXE;
    }else return $chiffre . self::SUFFIXE;
  }
}
