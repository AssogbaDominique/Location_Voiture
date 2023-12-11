@extends('layouts.admin')

@section('avant-contenu')
    @include('marques.ajouter')
@endsection

@section('contenu')
        <div class="app-content p6 pb2 smp1">
        <div class="container p0">
            <!-- Page Top Start -->
            <div class="row mb6 align-items-center">
                <div class="col-md-6 mobile-bottom-fix">
                    <h1 class="page-title mb2">Liste des voitures</h1>

                </div>
                <div class="col-md-6 text-start text-md-end">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addMarqueModal">
                        Ajouter une marque
                    </button>
                </div>
            </div>
            <div class="row mb5">
                <div class="col-12">
                    <div class="card shadow-card p6 pt3">
                        <div class="table-responsive text-nowrap">
                            <table class="table qd-table mb6 align-middle">
                                <thead>
                                    <tr>
                                        <th scope="col">MARQUE</th>
                                        <th scope="col" class="text-end">ACTIONS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($marques as $marque)
                                        <tr>
                                            <td>
                                                <div class="d-inline-flex flex-row align-items-center">
                                                    <p>{{ $marque->nom }}</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown text-end">
                                                    <button type="button"
                                                        class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75"
                                                        data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <span class="text-heading">Actions</span>
                                                        <i data-feather="chevron-down" stroke-width="2" height="16"
                                                            class="text-heading"></i>
                                                    </button>
                                                    <ul class="dropdown-menu text-start">
                                                        <li><a class="dropdown-item" href="{{-- route('admin.marques.modifier',$voiture) --}}">Modifier</a></li>
                                                        <li>
                                                            <form action="{{-- route('admin.marques.destroy',$voiture) --}}"
                                                                method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="button" onclick="if(confirm('Etes-vous sur de vouloir supprimer cette voiture?')){this.closest('form').submit()}"
                                                                    class="dropdown-item d-flex align-items-center justify-content-between"
                                                                    href="#">
                                                                    Supprimer <i data-feather="info" stroke-width="2"
                                                                        height="12" class="text-body me1"
                                                                        data-bs-toggle="tooltip" data-bs-placement="left"
                                                                        data-bs-custom-class="qd-tooltip"
                                                                        data-bs-title="If you delete it, this action cannot be undone."></i>
                                                                </button>
                                                            </form>

                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content End -->
        </div>
    </div>
@endsection