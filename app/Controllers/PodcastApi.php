<?php

namespace App\Controllers;

// use App\Controllers\BaseController;
use CodeIgniter\RESTful\ResourceController;

class PodcastApi extends ResourceController
{
    protected $modelName = "App\Models\PodcastModel";
    protected $format = "json";

    public function index()
    {
        return $this->respond($this->model->urutData());
    }



}