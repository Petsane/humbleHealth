<?php

namespace App\View\Components\Modal;

use Illuminate\View\Component;

class EditProduct extends Component
{
    public $product;
    
    public function __construct($product)
    {
        $this->product = $product;
    }

    public function render()
    {
        return view('components.modal.editProduct-modal');
    }
}
