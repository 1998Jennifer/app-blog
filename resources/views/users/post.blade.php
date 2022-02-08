<h1>HOLA WE YA SIRVE</h1>
<div>
    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        <input type="text" name="titulo" id="">
        <button type="submit" value="enviar">Enviar</button>
    </form>
</div>