<?php
class Config {

  private static  $MedwatchDbConfig = array('dbname' => 'maude_medwatch', 'dbuser' => 'kurt', 'passwd' => 'kk0457');
  private static  $active_background_color = '#4acce2';
  public static function getBackgroundColor() { return self::$active_background_color; }
  public static function getDbConfig() { return self::$MedwatchDbConfig; }
}
?>
