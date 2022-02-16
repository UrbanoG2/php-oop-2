<?php


class Card 

{
    protected $cvv;
    protected $expDate;
    protected $number;


    public function __construct($cvv, $expDate, $number)
    {
        $this->cvv = $cvv;
        $this->expDate = $expDate;
        $this->number = $number;
    }

    /**
     * Get the value of cvv
     */ 
    public function getCvv()
    {
        return $this->cvv;
    }

    /**
     * Set the value of cvv
     *
     * @return  self
     */ 
    public function setCvv($cvv)
    {
        $this->cvv = $cvv;

        return $this;
    }

    /**
     * Get the value of expDate
     */ 
    public function getExpDate()
    {
        return $this->expDate;
    }

    /**
     * Set the value of expDate
     *
     * @return  self
     */ 
    public function setExpDate($expDate)
    {
        $this->expDate = $expDate;

        return $this;
    }

    /**
     * Get the value of number
     */ 
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */ 
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

}