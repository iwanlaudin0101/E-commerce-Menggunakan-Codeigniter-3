<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title']    = 'Home';
        $data['content']    = $this->home->select(
            [
                'product.id', 'product.image',
                'product.is_available',
                'category.title AS category_title', 'category.slug AS category_slug'
            ]
        )
            ->join('category')
            ->where('product.is_available', 1)
            ->orderBy('product.id', 'desc')
            ->get();
        $data['page'] = 'pages/home/index';
        $this->view($data);
    }
}

/* End of file Home.php */
