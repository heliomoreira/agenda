@extends('layouts.app')
@section('content')
    <div class="flex-grow-1 container-p-y container-fluid">
        <div class="card">
            <h5 class="card-header">Novo Cliente</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <form action="/customers/store" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Contacto</label>
                                <input type="text" class="form-control" id="phone" name="phone" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
