<?php 
  
/** 
 * @name Dodge Faucet 2.0 
 * @package DogeFaucet 
 * @subpackage StaticResources.php 
  
 * @author John Annis 
 * @version 0.1 
 * @copyright December 23, 2013 
 *  
 */
  
final class StaticResources 
{ 
    /* Static Variables */
    private static $instance; 
    private static $databaseVersion = 1; 
      
    /* Constant Variables */
    const UNDEFINED             = "Undefined"; 
    const UNDEFINED_DATE        = "01/01/2013"; 
    const UNDEFINED_TIME        = "12:00:00"; 
    const NO_DESCRIPTION        = "No Description entered."; 
    
    const MINIMUM_PAYOUT        = .0000001;
    const MAXIMUM_PAYOUT        = 5.0;
    const JACKPOT_MULTIPLIER    = 10;
    const MINIMUM_POOL_PAYOUT   = 8000;
    const LOCKOUT_TIME          = 43200;
    const ENABLE_JACKPOTS       = true;
      
    /* Payouts Database Table Creation SQL */
    const CREATE_PAYOUT_TABLE_SQL = "" ; 
      
    /* XXX Database Table Creation SQL */    
    const CREATE_XXX_SQL = ""; 

      
      
    private function __construct() {} 
      
    public static function GetInstance() 
    { 
        if(!self::$instance) 
          self::$instance = new StaticResources(); 
        return self::$instance; 
    } 
} 
?>