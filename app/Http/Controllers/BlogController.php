<?php

namespace App\Http\Controllers;

class BlogController extends Controller
{
    public function index()
    {
        $articles = [
            [
                'title' => 'Artigo 1',
                'desc' => 'ASHDUAIHAUHDIHAS DHAUDH ASIDAISDHIASHDHASIDAIUSHD IUASH DA HID HASIH DIUASDASIDH IAUS HDIU AHSDHAISD HUIASHDIA HSID HASI DHIASHDIUAS HDI HASIDHIA USHDIUASHIDHASDHIUASHDIAS',
                'slug' => 'artigo-1',
            ],
            [
                'title' => 'Artigo 2',
                'desc' => 'ASHDUAIHAUHDIHAS DHAUDH ASIDAISDHIASHDHASIDAIUSHD IUASH DA HID HASIH DIUASDASIDH IAUS HDIU AHSDHAISD HUIASHDIA HSID HASI DHIASHDIUAS HDI HASIDHIA USHDIUASHIDHASDHIUASHDIAS',
                'slug' => 'artigo-2',
            ],
            [
                'title' => 'Artigo 3',
                'desc' => 'ASHDUAIHAUHDIHAS DHAUDH ASIDAISDHIASHDHASIDAIUSHD IUASH DA HID HASIH DIUASDASIDH IAUS HDIU AHSDHAISD HUIASHDIA HSID HASI DHIASHDIUAS HDI HASIDHIA USHDIUASHIDHASDHIUASHDIAS',
                'slug' => 'artigo-3',
            ],
        ];

        return inertia('Blog/Index', [
            'articles' => $articles
        ]);
    }
}
