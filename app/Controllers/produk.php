<?php

namespace App\Controllers;

class produk extends BaseController {
    public function index() {
      echo "
      <ol>
       <li><p>sepatu</p></li>
       <li><p>baju</p></li>
       <li><p>celana</p></li>
      </ol>
       ";
}
}