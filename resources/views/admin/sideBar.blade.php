<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg min-h-screen ">

    <div class="{{(request()->is('admin'))? 'bg-blue-600' : ''}} pb-2 hover:bg-blue-700 cursor-pointer" onclick="window.location='{{ route('admin') }}'">
        <x-section-border />
        <a class="pl-5" href="/admin" id="SubBtn">All Products</a>
    </div>

    <div class="{{(request()->is('new-product'))? 'bg-blue-600' : ''}} pb-4 hover:bg-blue-700 cursor-pointer" onclick="window.location='{{ route('new-product') }}'">
        <x-section-border />
        <a class="pl-5" href="/new-product" id="AllVBtn">Add New Product</a>
    </div>

    {{-- <div class="{{(request()->is('upload'))? 'bg-blue-600' : ''}} pb-2 hover:bg-blue-700 cursor-pointer" onclick="window.location='{{ route('about') }}'">
        <x-section-border />
        <a class="pl-5" href="/upload" id="upVBtn">Add New Video</a>
    </div> --}}

</div>