<?php

namespace calculator;

/**
 * Description of calculator
 *
 * @author Valentina Ospina Ramirez <ospinaramirez55@gmail.com>
 */
class calculato {
    /**
     *Number one for the operation
     * 
     * @var float
     */
  private $number1;
  /**
   *Numbre two for the operation
   * 
   * @var float
   */
  private $number2;
  /**
   * return the number 1
   * 
   * @return float
   */
  
  public function getNumber1(): float {
      return $this->number1;
  }
  /**
   * return the number 2
   * 
   * @return float
   */

  public function getNumber2(): float {
      return $this->number2;
  }
  /**
   * set the number 1
   * 
   * @param float $number1
   */

  public function setNumber1(float $number1) {
      $this->number1 = $number1;
  }
  /**
   * set the number 2
   * 
   * @param float $number2
   */

  public function setNumber2(float $number2) {
      $this->number2 = $number2;
  }
  
  public function sum(): float
  {
      return $this->number1 + $this->number2;
  }
  
  public function rest(): float
  {
      return $this->number1 - $this->number2;
  }
  
  public function multi(): float
  {
      return $this->number1 * $this->number2;
  }
  
  public function div(): float
  {
      return $this->number1 / $this->number2;
  }
  
  public function logat(): float 
  {
      return log ($this->number1 , $this->number2);
  }
  
  public function Squared(): float 
  {
      return $this->number1 * $this->number1;
  }
  
  public function pow(): float 
  {
      return pow($this->number1, $this->number2);
  }
  
  public function sqrt(): float 
  {
      return sqrt($this->number1);
  }
  
  public function root(): float 
  {
      return pow($this->number1,(1/$this->number2));
  }
  
}
