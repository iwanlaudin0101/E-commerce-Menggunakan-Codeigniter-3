<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Productall extends MY_Controller
{

    public function index($page = null)
    {
        $data['title']    = 'Product';
        $data['content']    = $this->productall->select(
            [
                'product.id', 'product.title AS product_title',
                'product.description', 'product.image',
                'product.price', 'product.is_available',
                'category.title AS category_title', 'category.slug AS category_slug'
            ]
        )
            ->join('category')
            ->where('product.is_available', 1)
            ->paginate($page)
            ->get();
        $data['total_rows']    = $this->productall->where('product.is_available', 1)->count();
        $data['pagination']    = $this->productall->makePagination(
            base_url('productall'),
            2,
            $data['total_rows']
        );

        $data['page']    = 'pages/productall/index';

        $this->view($data);
    }
}

/* End of file Prodact.php */
