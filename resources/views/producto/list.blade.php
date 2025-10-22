<div>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
    {{ count($productos) }}

        @if ( count($productos) > 0)
        <ul>
            @foreach ($productos as $producto )
                <li>
                    <span> {{ $producto->nombre }}</span> <b>{{  $producto->precio}}</b>
                </li>
                       
            @endforeach
        </ul>
    @else
      <p>No hay productos</p>    

    @endif  
</div>
