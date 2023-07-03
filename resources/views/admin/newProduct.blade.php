<x-admin-layout>

    @if(session('status'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session('status') }}
            <button type="button" class="close" data-dismiss="alert">x</button>
        </div>
    @endif

    <div>
        <form method="POST" action="{{ route('upload-product') }}" enctype="multipart/form-data">
            @csrf

            <div class="mt-4">
                <x-label for="name" value="{{ __('Product Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" required autocomplete="name"/>
            </div>

            <div class="mt-4">
                <x-label for="quantity" value="{{ __('Product Quantity') }}" />
                <x-input id="quantity" class="block mt-1 w-full" type="text" name="quantity" required autocomplete="quantity"/>
            </div>
            
            <div class="mt-4">
                <x-label for="by" value="{{ __('Product By') }}" />
                <x-input id="by" class="block mt-1 w-full" type="text" name="by" required autocomplete="by"/>
            </div>
            
            <div class="mt-4">
                <x-label for="description" value="{{ __('Product Description') }}" />
                <x-input id="description" class="block mt-1 w-full" type="text" maxlength="177" name="description" required autocomplete="description"/>
            </div>
            
            <div class="mt-4">
                <x-label for="price" value="{{ __('Product Price') }}" />
                <x-input id="price" class="block mt-1 w-full" type="text" name="price" required autocomplete="price"/>
            </div>
            
            <div class="mt-4">
                <x-label for="image" value="{{ __('Product Image') }}" />
                <x-input id="image" class="block mt-1 w-full" type="file" name="image" required autocomplete="image"/>
            </div>
                
            <div class="flex items-center justify-center mt-4">
                <x-button class="ml-4">
                    {{ __('Submit') }}
                </x-button>
            </div>

        </form>

    </div>

</x-admin-layout>