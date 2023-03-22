<h1 class="app-page-title">Ruta de red</h1>

<div class="row g-4 mb-4">
    <div class="col-6 col-lg-3">
        <div class="app-card app-card-stat shadow-sm h-100">
            <div class="app-card-body p-3 p-lg-4">
                <h4 class="stats-type mb-1">Rutas de red</h4>
                <div class="stats-figure">237</div>
                <div class="stats-meta">Ver</div>
            </div>
            <a class="app-card-link-mask" onclick="loadFileSoporteRedes('consultarRutas','loadPage')"></a>
        </div>
    </div>
    <div class="col-6 col-lg-3">
        <div class="app-card app-card-stat shadow-sm h-100">
            <div class="app-card-body p-3 p-lg-4">
                <h4 class="stats-type mb-1">Segmentos</h4>
                <div class="stats-figure">120</div>
                <div class="stats-meta">Ver</div>
            </div>
            <a class="app-card-link-mask" onclick="loadFileSoporteRedes('consultarSegmentos','loadPage')"></a>
        </div>
    </div>
    <div class="col-6 col-lg-3">
        <div class="app-card app-card-stat shadow-sm h-100">
            <div class="app-card-body p-3 p-lg-4">
                <h4 class="stats-type mb-1">VLANS</h4>
                <div class="stats-figure">26</div>
                <div class="stats-meta">Ver</div>
            </div>
            <a class="app-card-link-mask" onclick="loadFileSoporteRedes('consultarVlans','loadPage')"></a>
        </div>
    </div>
    <div class="col-6 col-lg-3">
        <div class="app-card app-card-stat shadow-sm h-100">
            <div class="app-card-body p-3 p-lg-4">
                <h4 class="stats-type mb-1">Equipos de cómputo</h4>
                <div class="stats-figure">187</div>
                <div class="stats-meta">Ver</div>
            </div>
            <a class="app-card-link-mask" onclick="loadFileInventario('equipoCompu','loadPage')"></a>
        </div>
    </div>
</div>

<hr class="mb-4">
<div class="row g-4 settings-section">
    <div class="col-12 col-md-3">
        <h3 class="section-title">Asignar ruta de red</h3>
        <div class="section-intro">Descripción <a href=""></a></div>
    </div>
    <div class="col-12 col-md-9">
        <div class="app-card app-card-settings shadow-sm p-4">
            <div class="app-card-body">
                <form class="settings-form">
                            <div class="mb-3">
                                    <label for="setting-input-1" class="form-label">Equipo de cómputo<span class="ms-2"
                                            data-container="body" data-bs-toggle="popover" data-trigger="hover" data-placement="top"
                                            data-content="This is a Bootstrap popover example. You can use popover to provide extra info.">

                                    </label>
                                    <input type="text" class="form-control" id="setting-input-1" value="Folio del equipo." required>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-6 mb-3">
                                    <label for="setting-input-2" class="form-label">VLAN</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Seleccionar VLAN</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>    
                                </div>  
                                <div class="col-6 mb-3">
                                    <label for="setting-input-2" class="form-label">Segmento</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Seleccionar segmeneto</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>    
                                </div>  
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-6 mb-3">
                                    <div class="mb-3">
                                        <label for="setting-input-1" class="form-label">Nodo<span class="ms-2"
                                            data-container="body" data-bs-toggle="popover" data-trigger="hover" data-placement="top"
                                            data-content="This is a Bootstrap popover example. You can use popover to provide extra info.">

                                        </label>
                                        <input type="text" class="form-control" id="setting-input-1" value="Ingrese el nodo." required>
                                    </div>  
                                </div>  
                                <div class="col-6 mb-3">
                                    <label for="setting-input-2" class="form-label">Panel de parcheo</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Seleccionar panel</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>    
                                </div>  
                            </div>

                            <div class="mb-3">
                                <label for="setting-input-2" class="form-label">Puerto del panele</label>
                                <input type="text" class="form-control" id="setting-input-2" value="Puerto del panel" required>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-auto">
                                    <a class="btn app-btn-primary" href="#">Asignar ruta</a>
                                </div>
                                <div class="col-auto">
                                    <a class="btn app-btn-secondary" href="#">Cancelar</a>
                                </div>
                            </div>
                </form>
            </div>
        </div>
    </div>
</div>
<hr class="my-4">