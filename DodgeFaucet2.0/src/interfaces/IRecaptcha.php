<?php 
  
/** 
 * @name Doge Faucet 2.0
 * @package Interfaces 
 * @subpackage IRecaptcha.php 
  
 * @author John Annis 
 * @version 0.1 
 * @copyright December 23, 2013 
 *  
 */
   
interface IRecaptcha 
{        
    /* Public methods */
    public function RecaptchaID( $value );          // Recaptcha unique ID
    public function FriendlyName( $value );         // Recaptcha friendly name
    public function PrivateKey( $value );           // Private key provided by Google. 
    public function PublicKey( $value );            // Public key provided by Google  
} 
?>