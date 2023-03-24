<h1 class="app-page-title">Prestamos</h1>
<hr class="mb-4">

<div class="row g-4 settings-section">
    <div class="col-12 col-md-6">
        <div class="app-card app-card-settings shadow-sm p-4">
            <div class="app-card-body">
                <form class="settings-form">
                    <div class="mb-3">
                        <label for="setting-input-1" class="form-label">Solicita<span class="ms-2"
                            data-container="body" data-bs-toggle="popover" data-trigger="hover" data-placement="top"
                            data-content="This is a Bootstrap popover example. You can use popover to provide extra info.">
                        </label>
                        <input class="form-control form-control-sm" type="text" placeholder="Ingresa el num de trabajador o su nombre." aria-label=".form-control-sm example">
                    </div>
                </form>
            </div>
        </div>
        <br>
        <div class="app-card app-card-settings shadow-sm p-4">
            <div class="app-card-body">
                <div class="tab-content" id="orders-table-tab-content">
                    <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                        <div class="app-card app-card-orders-table shadow-sm mb-5">
                            
                                <div class="table-responsive">
                                    <table class="table app-table-hover mb-0 text-left">
                                        <thead>
                                            <tr>
                                                <th class="cell">id</th>
                                                <th class="cell">Nombre</th>
                                                <th class="cell">A Paterno</th>
                                                <th class="cell">Materno</th>
                                                <th class="cell">Ubicación</th>                                       
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="cell">#15346</td>
                                                <td class="cell"><span class="truncate">Jesus</span></td>
                                                <td class="cell">Santaella</td>
                                                <td class="cell">...</td>
                                                <td class="cell"><span class="badge bg-success">Edificio L</span></td>
                                            </tr>
                                            <tr>
                                                <td class="cell">#15345</td>
                                                <td class="cell"><span class="truncate">Marco </span></td>
                                                <td class="cell">Antonio</td>
                                                <td class="cell">...</td>
                                                <td class="cell"><span class="badge bg-warning">Edificio J</span></td>                                                
                                            </tr>
                                            <tr>
                                                <td class="cell">#15344</td>
                                                <td class="cell"><span class="truncate">Bibiana</span></td>
                                                <td class="cell">Teresa Holland</td>
                                                <td class="cell">...</td>
                                                <td class="cell"><span class="badge bg-success">Edificio H</span></td>                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            
                        </div>
                    </div>
                </div>              
            </div>
        </div>
        <br>
    </div>

    <div class="col-12 col-md-6">
        <div class="app-card app-card-settings shadow-sm p-4">
            <div class="app-card-body">
                <form class="settings-form">
                    <div class="mb-3">
                        <label for="setting-input-1" class="form-label">Equipo<span class="ms-2"
                            data-container="body" data-bs-toggle="popover" data-trigger="hover" data-placement="top"
                            data-content="This is a Bootstrap popover example. You can use popover to provide extra info.">
                        </label>
                        <input class="form-control form-control-sm" type="text" placeholder="Ingrese el folio del equipo." aria-label=".form-control-sm example">
                    </div>
                </form>
            </div>
        </div>
        <br>

        <div class="app-card app-card-settings shadow-sm p-4">
            <div class="app-card-body">
            <div class="tab-content" id="orders-table-tab-content">
                    <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                        <div class="app-card app-card-orders-table shadow-sm mb-5">
                            <div class="app-card-body">
                                <div class="table-responsive">
                                    <table class="table app-table-hover mb-0 text-left">
                                        <thead>
                                            <tr>
                                                <th class="cell">id</th>
                                                <th class="cell">código</th>
                                                <th class="cell">Nombre</th>
                                                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="cell">#15346</td>
                                                <td class="cell"><span class="truncate">Jesus</span></td>
                                                <td class="cell">Santaella</td>
                                             </tr>
                                            <tr>
                                                <td class="cell">#15345</td>
                                                <td class="cell"><span class="truncate">Marco </span></td>
                                                <td class="cell">Antonio</td>
                                            </tr>
                                            <tr>
                                                <td class="cell">#15344</td>
                                                <td class="cell"><span class="truncate">Bibiana</span></td>
                                                <td class="cell">Teresa Holland</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
        <br>
    </div>
</div>

<hr class="mb-4">
<div class="col-12 col-md-12">
    <div class="app-card app-card-settings shadow-sm p-4">
        <div class="app-card-body">
            <form class="settings-form">
                <div class="row justify-content-between">
                    <div class="col-6 mb-3">
                        <label for="setting-input-2" class="form-label">Tipo de movimiento</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Prestamo</option>
                            <option value="1">Asignación</option>
                        </select>    
                    </div> 
                    <div class="col-6 mb-3">
                        <label for="setting-input-2" class="form-label">Ubicación</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Edificio L</option>
                            <option value="1">Edificio H</option>
                        </select>    
                    </div>  
                    </div>
                <div class="row justify-content-between">
                    <div class="col-6 mb-3">
                        <label for="setting-input-1" class="form-label">Fecha actual<span class="ms-2"
                            data-container="body" data-bs-toggle="popover" data-trigger="hover" data-placement="top"
                            data-content="This is a Bootstrap popover example. You can use popover to provide extra info.">
                        </label>
                        <input type="date" class="form-control" id="setting-input-1" value="" required>
                    </div>
                    <div class="col-6 mb-3">
                        <label for="setting-input-1" class="form-label">Fecha de devolución<span class="ms-2"
                            data-container="body" data-bs-toggle="popover" data-trigger="hover" data-placement="top"
                            data-content="This is a Bootstrap popover example. You can use popover to provide extra info.">
                        </label>
                        <input type="date" class="form-control" id="setting-input-1" value="" required>
                    </div>  
                </div><br>
                <div class="row justify-content-between">
                    <div class="col-6 mb-3">
                        <a class="btn app-btn-primary" href="#">Guardar datos</a>
                    </div>
                    <div class="col-6 mb-3">
                        <a class="btn app-btn-secondary" href="#">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<hr class="mb-4">
<div class="col-12 col-md-12">
    <div class="app-card app-card-settings shadow-sm p-4">
        <div class="app-card-body">
            <form class="settings-form">
                <div class="row justify-content-between">
                    <div class="col-6 mb-3">
                        <h5 class="section-title">Datos de encargado y solicitante</h5><br>
                        <div class="mb-2"><strong>Nombre de encargado:</strong> Marco Antonio </div>
                        <div class="mb-2"><strong>Nombre del solicitante:</strong> Jesús Santaella</div>
                        <div class="mb-2"><strong>Tipo de Movimiento: </strong><span class="badge bg-success"> Prestamo </span></div>
                    </div>
                    <div class="col-6 mb-3">
                        <h5 class="section-title">Datos del Movimiento</h5><br>
                        <div class="mb-2"><strong>Artículo:</strong> <span class="badge bg-success">Equipo de cómputo</span></div>
                        <div class="mb-2"><strong>Folio del artículo:</strong>URSE2023119</div>
                        <div class="mb-2"><strong>Ubicación:</strong>Recursos Humanos</div>	
                        <div class="mb-2"><strong>Fecha Actual:</strong>2030-09-24</div>
                        <div class="mb-2"><strong>Fecha de devolución:</strong>2030-09-24 </div>
                    </div>  
                    </div>
                <div class="row justify-content-between">
                    <div class="col-6 mb-3"></div>
                        <div class="col-6 mb-3">
                            <div class="row justify-content-between">
                            <div class="col-auto">
                                <a class="btn app-btn-primary" href="#">Confirmar Movimiento</a>
                            </div>
                            <div class="col-auto">
                                <a class="btn app-btn-secondary" href="#">Cancelar</a>
                            </div>
                        </div>
                    </div>  
                </div>                        
            </form>
        </div>
    </div>
</div>


