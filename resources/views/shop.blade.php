@extends('template.basic')

@section('content')
    <main class="Shop">
        <section class="BannerShop">
            <h1>Productos</h1>
        </section>
       
        <div class="ShopCont">
            <div class="TablaProductos">
            
            <section class="ListTipos">
                <article class="ShopTipos">
                        <ul>
                            <li><a href="/producto">Todos</a></li>
                        </ul> 
                </article>    

                @foreach($categoria as $categ)
                    <article class="ShopTipos">    
                        <ul>
                            <li><a href="/categoria/{{$categ['id']}}">{{$categ['nombre']}}</a></li>
                        </ul>                                             
                    </article>
                @endforeach  
            </section>  
                        
            <section class="SeleccionProducto"> 
                <article class="SeleccionText">
                    <i class="far fa-clock fa-2x"></i>
                    <a href="/producto/filtro/ofertas">Last Minutes</a>
                </article>
                
                <article class="SeleccionText">
                <i class="far fa-grin-stars fa-2x"></i>
                        <a href="/producto/filtro/news">New Accesories</a>
                </article>
                
                <article class="SeleccionText">
                <i class="far fa-star fa-2x"></i>
                    <span><a href="/producto/filtro/sellers">Best Sellers</a></span>
                </article>                
            </section>

            <section class="TiposAccesorios">
                <h3>Tipos</h3>
                    @foreach($tipo as $tip)
                        <article class="TiposText">
                            <li style="list-style: none"><a href="/tipo/{{$tip['id']}}">{{$tip['nombre']}}</a></li>                             
                        </article>
                    @endforeach
            </section>                     
            </div>

            <section class="ProductosN ProductosSh">
                @foreach($ofertas as $ofer)
                    <article class="ProducS ProducS2">
                        <a href="producto/{{$ofer['id']}}"><img src="{{ asset($ofer['photo']) }}"></a> 
                        <div class="ProdDescrip"> 
                            <h3> {{ $ofer['marca'] }} </h3>
                            <p><span class="oldPrice">${{ $ofer['precio'] }}</span>  ${{ $ofer['precio'] * (1 - $ofer['oferta']/100) }}</p>    
                            <a href="carro/add/{{$ofer['id']}}">Comprar </a> 
                        </div>
                    </article>
                @endforeach                            
            </section>
        </div>

    </main>
    
    <footer>
        <h3>copyright</h3>

        <!-- Redes -->
        <ul>
            <li>Facebook</li>
            <li>Twitter</li>
            <li>Instagram</li>
            <li>Gmail</li>
        </ul>
    </footer>
</div>
@endsection