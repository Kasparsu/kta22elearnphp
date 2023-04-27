<?php

namespace App\Controllers;

class PublicController {
    public function index() {
        $name = 'Kaspar';
        view('index', compact('name'));
    }

    public function about(){
        view('about');
    }
}