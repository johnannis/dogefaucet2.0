<?php 
  
/** 
 * @name Doge Faucet 2.0
 * @package Interfaces 
 * @subpackage IFaucet.php 
  
 * @author John Annis 
 * @version 0.1 
 * @copyright December 23, 2013 
 *  
 */
   
interface IFaucet 
{        
    /* Public methods */
    public function FaucetID( $value );             // Faucet unique ID 
    public function TimeStamp( $value );            // TimeStamp  
    public function Name( $value );                 // Faucet Name  
    public function SeedValue( $value );            // Faucet Seed Value 
    public function MinimumPayout( $value );        // Minimum Faucet Payout 
    public function MaximumPayout( $value );        // Maximum Faucet Payout 
    public function JackpotMultiplier( $value );    // Faucet Jackpot multiplier
    public function EnableJackpot( $value );        // Enable Faucet Jackpots 
    public function MinimumPoolValue( $value );     // Minimum Pool Value 
    public function LockoutTime( $value );          // How long a person must wait to recieve another payout. 
} 
?>