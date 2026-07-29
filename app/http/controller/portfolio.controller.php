<?php
namespace App\Http\Controller;

use App\Core\View;
use App\Service\PortfolioService;

class portfolio{
    private PortfolioService $portfolioService;

    public function __construct(){
        $this->portfolioService = new PortfolioService();
    }

    public function index(){
        $projects = $this->portfolioService->getData();
        View::views('index', ['projects' => $projects], 'public');
    }
}