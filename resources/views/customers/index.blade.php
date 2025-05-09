@extends('layouts.app')
@section('content')
    <div class="flex-grow-1 container-p-y container-fluid">
        <div class="row mb-2">
            <div class="col text-end">
                <div class="card-3">
                    <a href="/customers/form" class="btn btn-primary" style="color:white;">Novo Cliente</a>
                </div>
            </div>
        </div>
        <div class="card">
            <h5 class="card-header">Clientes</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Contacto</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @foreach($customers as $customer)
                    <tr>
                        <td>
                            <i class="icon-base ti tabler-user icon-md me-4"></i>
                            <span class="fw-medium"><a href="/customers/edit/{{$customer->id}}">{{$customer->name}}</a></span>
                        </td>
                        <td><a href="/customers/edit/{{$customer->id}}">{{$customer->email}}</a></td>
                        <td><a href="/customers/edit/{{$customer->id}}">{{$customer->phone}}</a></td>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
