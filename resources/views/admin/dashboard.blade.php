<x-admin-layout>
    
    @if(session('status'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session('status') }}
            <button type="button" class="close" data-dismiss="alert">x</button>
        </div>
    @endif

    @foreach ( $products as $product)

        <?php $name =$product['image'];?>

        <div class="grid grid-cols-3 p-5">

            <div>
                <img src="{{ url("/product-images/$name") }}" height="200px" width="200px" alt="product"> 
            </div>

            <div>
                <div style="color: blueviolet">Product Name</div>
                <div>{{ $product['name'] }}</div>
                <div style="color: blueviolet">Product Description</div>
                <div>{{ $product['description'] }}</div>
                <div style="color: blueviolet">Product Quantity</div>
                <div>{{ $product['quantity'] }}</div>
            </div>

            <div align='center' class=" pt-16">

                <x-button data-toggle="modal" data-target="#editModal{{ $product->id }}" class="mb-2">Edit</x-button>

                <form method="POST" action="{{ route('delete') }}">
                    @csrf
                    <x-input type="hidden" name="id" value="{{ $product['id'] }}"/>
                    <x-input type="hidden" name="videoName" value="{{ $product['image'] }}"/>
                    <x-button>Delete</x-button>
                </form>
                <div>
                    <x-modals.editProduct-modal :product="$product" />
                </div>
            </div>

        </div>

        <x-section-border/>

    @endforeach
</x-admin-layout>