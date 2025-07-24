document.addEventListener('DOMContentLoaded', function() {

    var map = L.map('actionsMap').setView([19.435344336224222, -99.11822497161407], 13);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map); 

    const overviewButton = L.control({position: "topright"});

    overviewButton.onAdd = function(map) {
        // Contenedor dentro del mapa
        const contenedor = L.DomUtil.create("div", "custom-button"); 
        contenedor.innerHTML = `
            <div class="row row-cols-1 bg-white p-2 actions-content-map">
                <p class="text-center h5 verde-primary">Acciones </p>
                <div class="col my-2">
                    <div class="card border-0 rounded shadow p-2">
                        <div class="row">
                            <div class="col-4 d-grid align-items-center justify-content-center">
                                <img class="img-fluid" src="imgs/trees-field-against-sky.jpg" width="100">
                            </div> 

                            <div class="col-8">
                                <div class="card-body">
                                    <p class="h5 verde-primary"> Titulo caso </p>

                                    <button class="btn btn-success text-white"> Ver acción </button>
                                </div>
                            </div> 
                            
                        </div>
                    </div>
                </div>    

                <div class="col my-2">
                    <div class="card border-0 rounded shadow p-2">
                        <div class="row">
                            <div class="col-4 d-grid align-items-center justify-content-center">
                                <img class="img-fluid" src="imgs/trees-field-against-sky.jpg" width="100">
                            </div> 

                            <div class="col-8">
                                <div class="card-body">
                                    <p class="h5 verde-primary"> Titulo caso </p>

                                    <button class="btn btn-success text-white"> Ver acción </button>
                                </div>
                            </div> 
                            
                        </div>
                    </div>
                </div>


                <div class="col my-2">    
                    <div class="card border-0 rounded shadow p-2">
                        <div class="row">
                            <div class="col-4 d-grid align-items-center justify-content-center">
                                <img class="img-fluid" src="imgs/trees-field-against-sky.jpg" width="100">
                            </div> 

                            <div class="col-8">
                                <div class="card-body">
                                    <p class="h5 verde-primary"> Titulo caso </p>

                                    <button class="btn btn-success text-white"> Ver acción </button>
                                </div>
                            </div> 
                            
                        </div>
                    </div>                    
                </div> 

            </div>
        `; 

        return contenedor; 
    }; 

    // Agregar el bóton al mapa
    overviewButton.addTo(map); 

})