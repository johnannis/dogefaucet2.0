<?php 
/** 
 * @name Doge Faucet 2.0 
 * @package DogeFaucet 
 * @subpackage CustomException.php 
  
 * @author John Annis 
 * @version 0.1 
 * @copyright December 23, 2013 
 *  
 * @uses IException.php 
 */
       
/// Includes 
include_once('..' .PATH_SEPARATOR. 'Interfaces' .PATH_SEPARATOR. 'IException.php'); 
    
abstract class CustomException extends Exception implements IException 
{ 
    protected $message = 'Unknown exception';     // Exception message 
    private   $string;                            // Unknown 
    protected $code    = 0;                       // User-defined exception code 
    protected $file;                              // Source filename of exception 
    protected $line;                              // Source line of exception 
    private   $trace;                             // Unknown 
  
    public function __construct($message = null, $code = 0) 
    { 
        if (!$message) { 
            throw new $this('Unknown '. get_class($this)); 
        } 
        parent::__construct($message, $code); 
    } 
      
    public function __toString() 
    { 
        return get_class($this) . " '{$this->message}' in {$this->file}({$this->line})\n"
                                . "{$this->getTraceAsString()}"; 
    } 
} 
  
?>