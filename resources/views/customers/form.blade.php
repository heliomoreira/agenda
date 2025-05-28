@extends('layouts.app')
@section('content')
    <div class="flex-grow-1 container-p-y container-fluid">
        <div class="card">
            <h5 class="card-header">Novo Cliente</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        @if(!$customer->id)
                            {{ html()->modelForm($customer, 'POST', route('customers.store'))->open() }}
                        @else
                            {{ html()->modelForm($customer, 'PUT', route('customers.update', $customer->id))->open() }}
                        @endif
                        {{ html()->token() }}
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome</label>
                            {{html()->text('name')->class('form-control')->id('name')->required()}}
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            {{html()->email('email')->class('form-control')->id('email')->required()}}
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Contacto</label>
                            {{html()->text('phone')->class('form-control')->id('phone')->required()}}
                        </div>
                        {{html()->submit('Guardar')->class('btn btn-primary')->id('submit')}}
                        {{html()->closeModelForm()}}
                    </div>
                </div>
            </div>
        </div>
@endsection
