<!-- Ajout de Marque -->
<div class="modal fade" id="addMarqueModal" tabindex="-1" aria-labelledby="addMarqueModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form enctype="multipart/form-data" method="post" action="{{ route('admin.marques.enregistrer') }}"
                id="add" class="" novalidate="">
                @csrf
                <div class="modal-header px-4">
                    <h5 class="modal-title fs-5">Ajouter une marque</h5>
                    <button type="button" class="outline-none border-0 p0 bg-transparent" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i data-feather="x" stroke-width="1.5" class="text-body"></i>
                    </button>
                </div>
                <div class="modal-body p6 px-3">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-5">
                                <label for="add-car-form-2" class="form-label">
                                    <span>Marque</span>
                                    <span class="text-danger">*</span>
                                    <i data-feather="info" stroke-width="2" height="12" class="text-body"
                                        data-bs-toggle="tooltip" data-bs-placement="right"
                                        data-bs-custom-class="qd-tooltip"
                                        data-bs-title="Choose a car brand from the list."></i>
                                </label>
                                <br/>
                                <input type="text" name="nom" class="form-input required:border-red-500 rounded-md @error('title') is-invalid @enderror">
                                @error('title')
                                    <div class="invalid-feedback">Veuillez entrer une marque.</div>
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Ajout de marque Fin -->
