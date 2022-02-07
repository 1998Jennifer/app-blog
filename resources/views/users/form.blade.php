<h1 style="padding: .5em" class="tittle">Usuarios</h1>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 mx-auto">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            @if($errors->any())
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                -{{$error}}<br>
                                @endforeach
                            </div>
                            @endif

                            <form action="{{route('users.store')}}" method="post">
                                <div class="form-row">
                                    <div class="col-sm-3">
                                        <input type="text" name="name" class="form-control" placeholder="Nombre" value="{{old('name')}}">
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" name="email" class="form-control" placeholder="Email" value="{{old('email')}}">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" name="edad" class="form-control" placeholder="Edad" value="{{old('edad')}}">
                                    </div>
                                    <div class="col-auto">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                    </div>
                                </div>
    
                            </form>
                        </div>
                    </div>