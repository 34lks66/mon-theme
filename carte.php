<!-- <div id="map" style="height: 500px;"></div> -->
<!-- <div id="map" style="height: 1100px; width: 75%; margin: 0 auto;"></div> -->
<div id="map" class="map-container"></div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var map = L.map('map', {
            dragging: false,
            scrollWheelZoom: false,
            doubleClickZoom: false,
            boxZoom: false,
            keyboard: false
        }).setView([43.60, 0.53], 10); // centré sur le Gers
        // var map = L.map('map', {
        //     center: [43.55, 0.6],
        //     zoom: 9.6,
        //     maxBounds: [
        //         [43.2, -0.4],
        //         [44.0, 1.1]
        //     ],
        //     minZoom: 9,
        //     maxZoom: 13
        // });

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        var popupStyle = {
            minWidth: 350, 
            maxWidth: 400, 
            className: 'custom-popup'
        }

        function ajusterTailleMap(){
            var mapContainer = document.querySelector('.map-container');
            if(window.innerWidth <= 768){
                map.setZoom(9);
                map.dragging.enable();
                map.scrollWheelZoom.enable();
                mapContainer.style.height = '500px';
                mapContainer.style.width = '95%';
                mapContainer.style.margin = '0 auto';

                popupStyle.maxWidth = '90%';
                popupStyle.minWidth = '90%';
            } else {
                mapContainer.style.height = '1100px';
                mapContainer.style.width = '75%';
                mapContainer.style.margin = '0 auto'

                popupStyle.maxWidth = '350px';
                popupStyle.minWidth = '400px';
            }
            map.invalidateSize();
        }

        ajusterTailleMap();
        window.addEventListener('resize', ajusterTailleMap);

        var villes = [
            { nom: "La Romieu", lat: 43.981, lon: 0.497, id: 1},
            { nom: "Simorre", lat: 43.451, lon: 0.735, id: 2},
            { nom: "Castelnau-d'Auzan", lat: 43.949, lon: 0.086, id: 3},
            { nom: "Estang", lat: 43.8675, lon: -0.1075, id: 4},
            { nom: "Le Houga", lat: 43.774, lon: -0.179, id: 5},
            { nom: "Valence-sur-Baïse", lat: 43.882, lon: 0.380, id: 6},
            { nom: "Pujaudran", lat: 43.591, lon: 1.15, id: 7},
            { nom: "Castéra-Verduzan", lat: 43.806, lon: 0.428, id: 8},
            { nom: "Montesquiou", lat: 43.578, lon: 0.329, id: 9},
            { nom: "Miradoux", lat: 43.998, lon: 0.756, id: 10}
        ];

        villes.forEach(ville => {
            //var marker = L.marker([ville.lat, ville.lon]).addTo(map).bindPopup('<b>' + ville.nom + '</b><br>Chargement des informations...'); 
            var marker = L.marker([ville.lat, ville.lon]).addTo(map).bindPopup('<div class="popup-loading">Chargement des informations...</div>', popupStyle); 

             marker.on('click', function () {
                 fetch('<?php echo admin_url("admin-ajax.php"); ?>?action=get_ville_info&ville_nom=' + encodeURIComponent(ville.nom))
                     .then(response => response.text())
                     .then(data => {
                        // marker.bindPopup(data).openPopup();
                        marker.setPopupContent('<div class="popup-content">' + data + '</div>') ;
                        marker.openPopup();
                     });
             });

            // marker.on('click', function() {
            //     fetch('<?php echo admin_url("admin-ajax.php");?>?action=get_ville_info&ville_id= ' + ville.id)
            //         .then(response => {
            //                 if(!response.ok){
            //                     throw new Error('Erreur réseau');
            //                 }
            //                 return response.text();
            //         })
            //         .then(data => {
            //             marker.setPopupContent(data);
            //             marker.openPopup();
            //         })
            //         .catch(error => {
            //             console.error('Erreur lors de la récupération des informations :', error);
            //             marker.setPopupContent('<b>' + ville.nom + '</b><br>Erreur lors du chargement des informations');
            //             marker.openPopup();
            //         });
            // });

        });
    });
</script>

<style>

    .popup-inner {
        max-width: 300px;
    }

    .popup-content {
        padding: 15px;
        font-size: 0.9rem;
        white-space: nowrap;
        min-width: 320px;
    }

    .map-container {
        transition: all 0.3s ease;
        position: relative;
        z-index: 1;
    }

    .custom-popup .leaflet-popup-content-wrapper {
        border-radius: 8px;
        box-shadow: 0 3px 14px rgba(0,0,0,0.4);
        padding: 0;
        min-width: 350px; 
    }

    .custom-popup .leaflet-popup-content {
        margin: 0;
        width: 100% !important;
    }

    .popup-content b {
        color: #e30613;
        font-size: 1.2em;
        display: block;
        margin-bottom: 10px;
        border-bottom: 2px solid #0077b6; 
        padding-bottom: 5px;
    }

    .popup-content p {
        margin: 8px 0;
        line-height: 1.4;
    }

    .popup-loading {
        padding: 15px;
        text-align: center;
        color: #666;
    }

    .leaflet-popup-tip {
        background: white;
        box-shadow: none;
    }

    .popup-inner h3 {
        color: #e30613;
        font-size: 1.3rem;
        margin: 0 0 10px 0;
        padding-bottom: 8px;
        border-bottom: 2px solid #0077b6;
    }

    .planning-section {
        background-color: #f8f9fa;
        padding: 10px;
        border-radius: 5px;
        margin: 10px 0;
        overflow: visible;
    }

    .planning-section h4 {
        color: #0077b6;
        font-size: 1rem;
        margin: 0 0 8px 0;
        font-weight: 600;
    }

    .planning-section p {
        margin: 0;
        white-space: pre-line;
        font-size: 0.9rem;
        color: #333; 
    }

    .planning-section br {
        display: block;
        content: "";
        margin: 5px 0; 
    }

    .popup-gallery {
        max-height: 80px;
        overflow: hidden;
    }

    .popup-gallery img {
        width: 100%;
        height: 80px;
        object-fit: cover;
        border-radius: 4px;
        border: 1px solid #ddd;
        transition: transform 0.3s ease;
    }

    .popup-gallery img:hover {
        transform: scale(1.05);
        box-shadow: 0 2px 8px rgba(0,0,0,0.2);
    }

    .no-image {
        font-style: italic;
        color: #666;
        font-size: 0.8rem;
        text-align: center;
        margin: 10px 0;
    }

    .popup-error {
        padding: 15px;
        color: #e30613;
        text-align: center;
        font-weight: 500;
    }
 
    @media (max-width: 768px){
        .map-container {
            height: 500px !important;
            width: 95% !important;
            margin: 0 auto !important
        }

        .custom-popup .leaflet-popup-content-wrapper {
            min-width: 200px;
            max-width: 90vh;
        }

        .popup-content {
            min-width: 260px;
            white-space: normal;
        }

        .menu.active {
            position: fixed;
            z-index: 1000;
            width: 100%;
        }    
    
        .menu.active ~ .map-container {
            display: none; 
        }

    }
</style>