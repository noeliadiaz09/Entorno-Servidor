<table border="1">
    <tr>
        <th>Titulo</th>
        <th>Contenido</th>
        <th>Fecha publicación</th>
        <th>Categoría</th>
        <th>Visitas</th>
    </tr>
    @foreach ( $articuloList as $articulo )
    <tr>
        <td>{{ $articulo->title }}</td>
        <td>{{ $articulo->content }}</td>
        <td>{{ $articulo->publish_date }}</td>
        <td>{{ $articulo->category }}</td>
        <td>{{ $articulo->views }}</td>
    </tr>
    @endforeach
</table>