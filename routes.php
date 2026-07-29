<?php

use App\Core\Router;
use App\Http\Controller\portfolio;

Router::get('',[portfolio::class, 'index']);