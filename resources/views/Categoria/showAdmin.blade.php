@extends('template.Admin')

@section('content')
    <main class="Shop">
        <section class="BannerShop">
            <h1>Administración</h1>
        </section>
       
        <div class="ShopCont">  
                <section class="AdmColumna">
                    <article class="ShopTipos">
                            <ul><li><a style="width:20vw">E - Editar   X - Eliminar</a></ul></li>
                    </article>
                    <article class="ShopProductos">
                            <ul>
                                <li><a class="" href="../../producto/create" style="width:20vw"> + Producto </a></li>            
                                <li><a href="../../admin" style="width:15vw">Todos</a></li>
                            </ul>                           
                    </article>
                    <article class="ShopTipos"> 
                        @foreach($categorias as $cat)
                        <ul>
                            <li><a href="../categoria/{{$cat['id']}}" style="width:15vw">{{$cat['nombre']}}</a></li>
                            <div class="BotonCX">
                                <button><a class="" href="../../categoria/{{ $cat['id'] }}/edit"> E </a></button>
                                <button><a class="" href="../../categoria/{{ $cat['id'] }}/delete"> X </a></button>
                            </div>
                        </ul>                                             
                        @endforeach
                        <ul>
                            <li><a  href="../../categoria/create" style="width:20vw"> + Categoria </a></li> 
                        </ul>              
                    </article>  
                    <article class="ShopItems">
                    @foreach($tipo as $tip)
                        <ul style="list-style: none">
                            <li><a href="../../admin/tipo/{{$tip['id']}}" style="width:15vw;text-decoration:none">{{$tip['nombre']}}</a></li>    
                            <div class="BotonCX">
                            <button><a class="" href="../../tipo/{{ $tip['id'] }}/edit"> E </a></button>
                            <button><a class="" href="../../tipo/{{ $tip['id'] }}/delete"> X </a></button>
                            <div>
                        </ul>
                    @endforeach
                        <ul>
                            <li><a  href="../../tipo/create" style="width:20vw"> + Tipos </a></li>            
                        </ul>
                    </article>
            </section>
                
            <section class="ProductosN">
            @foreach($categoria->producto as $produc)
            <article class="ProducS">  
                <a href="../../producto/{{$produc['id']}}/edit"><img src="{{ asset($produc['photo']) }}"></a> 
                <div class="ProdDescrip"> 
                    <h3 style=""> {{ $produc['nombre'] . " " .$categoria['nombre'] }} </h3>
                    <h3 style=""> {{ $produc['marca'] }} </h3>
                    <p><span> ${{ $produc['precio'] * (1 - $produc['oferta']/100)}} </span></p>
                    <div>
                    <h4><a class="" href="../../producto/{{ $produc['id'] }}/edit"> Editar </a></h4>
                    <h4><a class="" href="../../producto/{{ $produc['id'] }}/delete"> Eliminar </a></h4>
                    </div>    
                </div>
            </article>
            @endforeach
            </section>
    
    </div> 

    
</section>

@endsection