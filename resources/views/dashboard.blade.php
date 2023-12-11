@extends('layouts.admin')

@section('avant-contenu')
    @include('voitures.ajouter')
@endsection


@section('contenu')
    <div class="app-content p6 pb2 smp1">
        <div class="container p0">
            <!-- Page Top Start -->
            <div class="row mb6 align-items-center">
                <div class="col-md-6 mobile-bottom-fix">
                    <h1 class="page-title mb2">Tableau de bord</h1>

                </div>
                <div class="col-md-6 text-start text-md-end">
                    <!-- Filter Dropdown Start-->
                    <div class="dropdown d-inline me4">
                        <button class="btn bg-white d-inline-flex align-items-center dropdown-toggle"
                            data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
                            <i data-feather="filter" stroke-width="1.5" height="16" class="me2 text-body"></i>
                            <span class="text-body">Filtre</span>
                        </button>
                        <div class="dropdown-menu width-300 p0">
                            <div class="border-bottom-dashed">
                                <h6 class="mb0 p4 px-4">Filtre Options</h6>
                            </div>
                            <div class="p5 px-4">
                                <div class="row mb5">
                                    <div class="col-12 mb4">
                                        <label for="form-element-1" class="form-label">STATUT:</label>
                                        <select id="form-element-1" class="form-select js-choice">
                                            <option value="">Option Selectionner</option>
                                            <option value="1">PUBLIEE</option>
                                            <option value="2">INACTIVE</option>
                                            <option value="3">PROGRAMMEE</option>
                                        </select>
                                    </div>
                                    <div class="col-12 mb4">
                                        <label for="form-element-2" class="form-label">ANNEE:</label>
                                        <input type="text" class="form-control" id="form-element-2" placeholder="2023">
                                    </div>
                                    <div class="col-12">
                                        <label for="form-element-3" class="form-label d-block">L'utilisation du
                                            statut:</label>
                                        <div class="checkbox checkbox-primary me4">
                                            <input type="checkbox" name="check1" id="check1" checked="">
                                            <label for="check1">En cours d'utilisation</label>
                                        </div>
                                        <div class="checkbox checkbox-primary me4">
                                            <input type="checkbox" name="check2" id="check2">
                                            <label for="check2">Dans le garage</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <button class="btn btn-sm d-block w-100 btn-secondary btn-soft"
                                            role="button">Réinitialisation</button>
                                    </div>
                                    <div class="col-6">
                                        <button class="btn btn-sm d-block w-100 btn-primary"
                                            role="button">Appliquer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Filter Dropdown End-->

                </div>
            </div>
            <!-- Page Top End -->

            <!-- Mini Widgets Start -->
            <div class="row mb2">
                <!-- Widget 1 Start -->
                <div class="col-xxl-4 mb5">
                    <div class="bg-primary rounded-3 pt2 pb5 text-center">
                        <h6 class="text-white mb0">Voiture totale</h6>
                    </div>
                    <div class="card shadow-card p5 text-center mtn4">
                        <h1 class="mb1">{{ count($voitures->where('statut_id', 2)) }}</h1>
                        <span>Vehicules disponibles a la location</span>
                    </div>
                </div>
                <!-- Widget 1 End -->

                <!-- Widget 2 Start -->
                <div class="col-xxl-4 mb5">
                    <div class="bg-info rounded-3 pt2 pb5 text-center">
                        <h6 class="text-white mb0">Reservation</h6>
                    </div>
                    <div class="card shadow-card p5 text-center mtn4">
                        <h1 class="mb1">{{ count($voitures->where('statut_id', 3)) }}</h1>
                        <span>Nouvelles reservations entrantes</span>
                    </div>
                </div>
                <!-- Widget 2 End -->

                <!-- Widget 3 Start -->
                <div class="col-xxl-4 mb5">
                    <div class="bg-success rounded-3 pt2 pb5 text-center">
                        <h6 class="text-white mb0">Vehicule Defectueux</h6>
                    </div>
                    <div class="card shadow-card p5 text-center mtn4">
                        <h1 class="mb1">{{ count($voitures->where('statut_id', 1)) }}</h1>
                        <span>Vehicules en maintenance</span>
                    </div>
                </div>
                <!-- Widget 3 End -->
            </div>
            <!-- Mini Widgets End -->



            </td>


            </tr>


            </tbody>
            </table>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center align-items-center">
                <li class="page-item">
                    <a class="page-link">
                        <i class="arrow" data-feather="chevron-left" width="14"></i>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">6</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">
                        <i class="arrow" data-feather="chevron-right" width="14"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
@endsection
