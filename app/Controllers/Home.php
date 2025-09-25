<?php

namespace App\Controllers;
use Config\productCategory;
use Config\productDetails;

class Home extends BaseController
{

    public function home(): string
    {
        $res = [
            'meta_title' => 'Hydraulic Press Machine in Coimbatore | Hydraulic Press Manufacturers',
            'meta_description' => 'SRM Hydraulics, premier Hydraulic Press Machine & Cylinder Manufacturers in Coimbatore and Tamil Nadu, offering custom hydraulic solutions & reliable service.'
        ];
        return view('Index', $res);
    }

    public function products()
    {
        $category = $this->request->uri->getSegment(2);
        $config = new ProductCategory();

        if (!isset($config->categories[$category])) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data = [
            'name' => $config->categories[$category]['title'],
            'category' => $config->categories[$category],
            'meta_title' => $config->categories[$category]['meta_title'],
            'meta_description' => $config->categories[$category]['meta_description'],
        ];

        return view('productCategory', $data);
    }

    public function productsDetails()
    {
        $details = $this->request->uri->getSegment(2);
        $config = new ProductDetails();

        if (!isset($config->details[$details])) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data = [
            'name' => $config->details[$details]['title'],
            'submenu' => $config->details[$details]['name'],
            'details' => $config->details[$details],
            'meta_title' => $config->details[$details]['meta_title'],
            'meta_description' => $config->details[$details]['meta_description'],
        ];

        return view('productDetails', $data);
    }

    public function productsMain()
    {

        $res = [
            'meta_title' => 'Hydraulic Wood Splitter in Coimbatore | Hydraulic Goods Lift Supplier',
            'meta_description' => 'Premium Hydraulic Wood Splitters, Goods Lifts & Industrial Hydraulic Cylinders from SRM Hydraulics in Coimbatore & Tamil Nadu, offering reliable solutions.',
            'name' => 'Products',
        ];

        return view('Products', $res);
    }


    public function contact(): string
    {
        $res = [
            'meta_title' => 'Industrial Press machine in coimbatore | Hydraulic Powerpack supplier',
            'meta_description' => 'Get in touch with SRM Hydraulics, Coimbatore & Tamil Nadu – Industrial Press Machine & Hydraulic Powerpack Supplier and Top Hydraulic Press Suppliers.',
            'name' => 'Contact',
        ];
        return view('Contact', $res);
    }

    public function about(): string
    {
        $res = [
            'meta_title' => 'Hydraulic amc service in Tamil Nadu | Hydraulic press machine service',
            'meta_description' => 'Leading Hydraulic AMC Service in Tamil Nadu, SRM Hydraulics offers professional Hydraulic Press Machine,Hydraulic Powerpack Services in Coimbatore with trusted solutions.',
            'name' => 'About',
        ];

        return view('About', $res);
    }

    public function gallery(): string
    {
        $res = [
            'meta_title' => 'SRM Hydraulics Gallery - Hydraulic Systems | Repairs | Equipments',
            'meta_description' => 'Explore SRM Hydraulics Gallery in Coimbatore & Tamil Nadu – Showcasing Hydraulic Systems, Repairs, Equipment & Top Hydraulic Press Exporters projects.',
            'name' => 'Gallery',
        ];

        return view('Gallery', $res);
    }

}
