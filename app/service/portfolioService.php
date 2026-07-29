<?php
namespace App\Service;
use App\Model\portfolio;

class PortfolioService{
    private portfolio $portfolio;

    public function __construct(){
        $this->portfolio = new portfolio();
    }

    public function getData(){
        return $this->portfolio->get_data();
    }
}