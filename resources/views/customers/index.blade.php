@extends('layouts.app')
@section('content')
    <div class="flex-grow-1 container-p-y container-fluid">
        <!-- Basic Bootstrap Table -->
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
                    <tr>
                        <td>
                            <i class="icon-base ti tabler-brand-angular icon-md text-danger me-4"></i>
                            <span class="fw-medium">Angular Project</span>
                        </td>
                        <td>Albert Cook</td>
                        <td>
                            <ul class="list-unstyled m-0 avatar-group d-flex align-items-center">
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" aria-label="Lilian Fuller" data-bs-original-title="Lilian Fuller">
                                    <img src="{{asset('theme/assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle">
                                </li>
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" aria-label="Sophia Wilkerson" data-bs-original-title="Sophia Wilkerson">
                                    <img src="{{asset('theme/assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle">
                                </li>
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" aria-label="Christina Parker" data-bs-original-title="Christina Parker">
                                    <img src="{{asset('theme/assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle">
                                </li>
                            </ul>
                        </td>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                    </tr>
                    <tr>
                        <td><i class="icon-base ti tabler-brand-react-native icon-md text-info me-4"></i> <span class="fw-medium">React Project</span></td>
                        <td>Barry Hunter</td>
                        <td>
                            <ul class="list-unstyled m-0 avatar-group d-flex align-items-center">
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" aria-label="Lilian Fuller" data-bs-original-title="Lilian Fuller">
                                    <img src="{{asset('theme/assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle">
                                </li>
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" aria-label="Sophia Wilkerson" data-bs-original-title="Sophia Wilkerson">
                                    <img src="{{asset('theme/assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle">
                                </li>
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" aria-label="Christina Parker" data-bs-original-title="Christina Parker">
                                    <img src="{{asset('theme/assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle">
                                </li>
                            </ul>
                        </td>
                        <td><span class="badge bg-label-success me-1">Completed</span></td>
                    </tr>
                    <tr>
                        <td>
                            <i class="icon-base ti tabler-brand-vue icon-md text-success me-4"></i>
                            <span class="fw-medium">VueJs Project</span>
                        </td>
                        <td>Trevor Baker</td>
                        <td>
                            <ul class="list-unstyled m-0 avatar-group d-flex align-items-center">
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" aria-label="Lilian Fuller" data-bs-original-title="Lilian Fuller">
                                    <img src="{{asset('theme/assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle">
                                </li>
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" aria-label="Sophia Wilkerson" data-bs-original-title="Sophia Wilkerson">
                                    <img src="{{asset('theme/assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle">
                                </li>
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" aria-label="Christina Parker" data-bs-original-title="Christina Parker">
                                    <img src="{{asset('theme/assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle">
                                </li>
                            </ul>
                        </td>
                        <td><span class="badge bg-label-info me-1">Scheduled</span></td>
                    </tr>
                    <tr>
                        <td>
                            <i class="icon-base ti tabler-brand-bootstrap icon-md text-primary me-4"></i>
                            <span class="fw-medium">Bootstrap Project</span>
                        </td>
                        <td>Jerry Milton</td>
                        <td>
                            <ul class="list-unstyled m-0 avatar-group d-flex align-items-center">
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" aria-label="Lilian Fuller" data-bs-original-title="Lilian Fuller">
                                    <img src="{{asset('theme/assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle">
                                </li>
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" aria-label="Sophia Wilkerson" data-bs-original-title="Sophia Wilkerson">
                                    <img src="{{asset('theme/assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle">
                                </li>
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" aria-label="Christina Parker" data-bs-original-title="Christina Parker">
                                    <img src="{{asset('theme/assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle">
                                </li>
                            </ul>
                        </td>
                        <td><span class="badge bg-label-warning me-1">Pending</span></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
