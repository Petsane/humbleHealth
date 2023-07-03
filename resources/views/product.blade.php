<header>
    <link rel="stylesheet" href="/css/productStyle.css">
</header>
<x-app-layout>
    <div class="navImg">

        <div class="welcome">
            <h1 class="heading">Welcome</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> 
                Doloremque libero facilis possimus sunt eius reiciendis<br> 
                molestias dicta eveniet beatae optio. Unde libero ad ducimus<br> 
                sed molestias inventore vel ipsum nam.
            </p>
        </div>

    </div>
    <div class="content-container">

        <h1 align="center" class="heading">Featured Products</h1>

        <div class="prod-cont" style="display: grid; grid-template-columns: auto auto auto">

            @foreach ( $products as $product)

              <?php $name =$product['image'];?>

              <div class="wrapper">
                <div class="product-img">
                  <img src="/product-images/{{ $name }}" height="300" width="316">
                </div>
                <div class="product-info">
                  <div class="product-text">
                    <h1>{{ $product['name'] }}</h1>
                    <h2>by {{ $product['by'] }}</h2>
                    <p>
                      {{ $product['description'] }}
                    </p>
                  </div>
                  <div class="product-price-btn" style="display: grid; grid-template-columns: 40% 60%">
                    <div><p><span>R{{ $product['price'] }}</span></p></div>
                    <div><button type="button">buy now</button></div>
                  </div>
                </div>
              </div>

            @endforeach
            
        </div>
        
    </div>

</x-app-layout>