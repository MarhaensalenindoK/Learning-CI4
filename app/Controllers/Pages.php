<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | WebProgramingIsaec'
        ];

        return view('pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About me'
        ];
        return view('pages/about', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl.Jalanan',
                    'kota' => 'Bogor'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl.eaaa',
                    'kota' => 'Jerman'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }


    //--------------------------------------------------------------------

}
