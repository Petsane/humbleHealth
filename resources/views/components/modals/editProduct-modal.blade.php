<div id="editModal{{ $product->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="CenterTitle" aria-hidden="true">
    <div style="max-width: 50%" class="modal-dialog modal-dialog-centered" role="document">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" style="font-weight: bold">Edit {{ $product->name }}</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table>
                    <thead>
                        <tr>
                            <th colspan="2">{{ $product->name }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <form method="POST" action="{{ route('updateProduct') }}">
                                    @csrf

                                    <div>
                                        <input name="id" value="{{ $product->id }}" type="hidden">
                                    </div>

                                    <div class="mt-4">
                                        <x-label for="name" value="{{ __('Product Name') }}" />
                                        <x-input placeholder="{{ $product->name }}" id="name" class="block mt-1 w-full" type="text" name="name" required autocomplete="name"/>
                                    </div>
                        
                                    <div class="mt-4">
                                        <x-label for="quantity" value="{{ __('Product Quantity') }}" />
                                        <x-input placeholder="{{ $product->quantity }}" id="quantity" class="block mt-1 w-full" type="text" name="quantity" required autocomplete="quantity"/>
                                    </div>
                                    
                                    <div class="mt-4">
                                        <x-label for="by" value="{{ __('Product By') }}" />
                                        <x-input placeholder="{{ $product->by }}" id="by" class="block mt-1 w-full" type="text" name="by" required autocomplete="by"/>
                                    </div>
                                    
                                    <div class="mt-4">
                                        <x-label for="description" value="{{ __('Product Description') }}" />
                                        <x-input placeholder="{{ $product->description }}" id="description" class="block mt-1 w-full" type="text" maxlength="177" name="description" required autocomplete="description"/>
                                    </div>
                                    
                                    <div class="mt-4">
                                        <x-label for="price" value="{{ __('Product Price') }}" />
                                        <x-input placeholder="{{ $product->price }}" id="price" class="block mt-1 w-full" type="text" name="price" required autocomplete="price"/>
                                    </div>
                                    
                                    <div class="mt-4">
                                        <x-label for="image" value="{{ __('Product Image') }}" />
                                        <x-input placeholder="{{ $product->image }}" id="image" class="block mt-1 w-full" type="file" name="image" required autocomplete="image"/>
                                    </div>

                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>