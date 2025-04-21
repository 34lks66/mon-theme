<!-- <div id="map" style="height: 500px;"></div> -->
<!-- <div id="map" style="height: 1100px; width: 75%; margin: 0 auto;"></div> -->

<?php require_once('header.php'); ?>
<div id="map" class="map-container"></div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // var map = L.map('map').setView([43.70, 0.46], 9);
        var map = L.map('map', {
             dragging: false,
             scrollWheelZoom: false,
             doubleClickZoom: false,
             boxZoom: false,
             keyboard: false,
             trackResize: false,
             touchZoom: false
        }).setView([43.70, 0.46], 9);
        // }).setView([43.60, 0.53], 10); // centré sur le Gers
        // var map = L.map('map', {
        //      center: [43.55, 0.6],
        //      zoom: 100,
        //      maxBounds: [
        //          [43.2, -0.4],
        //          [44.0, 1.1]
        //      ],
        //      minZoom: 9,
        //      maxZoom: 13
        //  });

        // fond de carte
        L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> & Carto',
            subdomains: 'abcd',
            maxZoom: 19
        }).addTo(map);

        // contours du Gers
        fetch('https://raw.githubusercontent.com/gregoiredavid/france-geojson/master/departements/32-gers/departement-32-gers.geojson')
            .then(response => response.json())
            .then(data => {
                var gersBoundary = L.geoJSON(data, {
                    style: {
                        color: '#e30613',
                        weight: 2,
                        fillOpacity: 0
                    }
                }).addTo(map);

                // map.fitBounds(gersBoundary.getBounds(), {
                //     padding: [100,150],
                //     maxZoom: 10
                // });

                map.fitBounds(gersBoundary.getBounds());

                var outer = turf.polygon([[
                    [-10, 60],
                    [40, 60],
                    [40, 30],
                    [-10, 30],
                    [-10, 60]
                ]]);

                var mask = turf.difference(outer, data);

                L.geoJSON(mask, {
                    style: {
                        fillColor: 'rgba(0,0,0,0.4)',
                        color: 'none',
                        fillOpacity: 0.8
                    }
                }).addTo(map);
            });
            
        var popupStyle = {
            minWidth: 350, 
            maxWidth: 400, 
            className: 'custom-popup'
        }

        function ajusterTailleMap(){
            var mapContainer = document.querySelector('.map-container');
            //var mapContainer = document.getElementById('map');
            if(window.innerWidth <= 768){
                map.setZoom(9);
                map.dragging.enable();
                map.scrollWheelZoom.enable();

                mapContainer.style.height = '700px';
                mapContainer.style.width = '100%';
                mapContainer.style.margin = '0 auto';

                popupStyle.maxWidth = '90%';
                popupStyle.minWidth = '90%';
            } else {
                map.setZoom(10);
                mapContainer.style.height = '900px';
                mapContainer.style.width = '90%';
                mapContainer.style.margin = '0 auto'

                popupStyle.maxWidth = '400px';
                popupStyle.minWidth = '350px';
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

        var busIcon = L.icon({
            iconUrl: '<?php echo get_template_directory_uri(); ?>/assets/images/bus_icon.png',
            iconSize: [40, 40],
            iconAnchor: [16, 32],
            popupAnchor: [0, -32]
        });

        villes.forEach(ville => {
            //var marker = L.marker([ville.lat, ville.lon]).addTo(map).bindPopup('<b>' + ville.nom + '</b><br>Chargement des informations...'); 
            // var marker = L.marker([ville.lat, ville.lon], {icon: busIcon}).addTo(map).bindPopup('<div class="popup-loading">Chargement des informations...</div>', popupStyle);
            var marker = L.marker([ville.lat, ville.lon], {icon: busIcon}).addTo(map);

            var customPopup = L.popup({
                offset: L.point(0, -50),
                className: 'custom-map-popup',
                autoPan: false,
                closeOnClick: false, 
                autoClose: false
            });

            marker.on('click', function (e) {
                map.closePopup();
                customPopup.setContent('<p>Chargement...</p>');
                customPopup.setLatLng(marker.getLatLng()).openOn(map);

                // document.getElementById('popupOverlay').style.display = 'flex';
                // document.getElementById('popupContent').innerHTML = '<p>Chargement...</p>';
                fetch('<?php echo admin_url("admin-ajax.php");?>?action=get_ville_info&ville_nom=' + encodeURIComponent(ville.nom))
                    .then(response => response.text())
                    .then(data => {
                        customPopup.setContent(data);
                        // document.getElementById('popupContent').innerHTML = data;
                    });
            });

            //  marker.on('click', function () {
            //      fetch('<?php echo admin_url("admin-ajax.php"); ?>?action=get_ville_info&ville_nom=' + encodeURIComponent(ville.nom))
            //          .then(response => response.text())
            //          .then(data => {
            //             // marker.bindPopup(data).openPopup();
            //             marker.setPopupContent(data) ;
            //             marker.openPopup();
            //          });
            //  });

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

    // document.getElementById('closePopupBtn').onclick = function () {
    // document.getElementById('popupOverlay').style.display = 'none';
    // };

    // window.onclick = function(event) {
    // if (event.target.id === 'popupOverlay') {
    //     document.getElementById('popupOverlay').style.display = 'none';
    // }
    // };
</script>

<style>
    @import url("https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Montserrat:wght@700&display=swap");

    :root {
        /* Fonts */
        --font-title: "Montserrat", sans-serif;
        --font-text: "Lato", sans-serif;
    }

    .custom-map-popup {
        min-width: 250px;
        max-width: 300px;
        padding: 0;
        border-radius: 8px;
        box-shadow: 0 3px 14px rgba(0,0,0,0.4);
    }

    .custom-map-popup .leaflet-popup-content-wrapper {
        padding: 0;
        border-radius: 8px;
    }

    .custom-map-popup .leaflet-popup-content {
        margin: 0; 
    }

    .popup-container {
        display: flex;
        flex-direction: column;
    }

    .popup-image-container {
        width: 100%;
        height: 150px;
        overflow: hidden;
    }

    .popup-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .popup-content {
        padding: 15px;
    }

    .popup-title {
        font-family: var(--font-title);
        color: #e30613;
        font-size: 18px;
        margin: 0 0 10px 0;
        padding-bottom: 10px;
        border-bottom: 2px solid #e30613;
    }

    .popup-subtitle {
        font-family: var(--font-title);
        color: #333;
        font-size: 16px;
        margin: 10px 0 5px 0;
    }

    .popup-text {
        font-family: var(--font-text);
        color: #333;
        font-size: 14px;
        line-height: 1.4;
    }
    
    /* .popup-overlay {
        position: fixed;
        top: 0; left: 0;
        width: 100%; height: 100%;
        background: rgba(0, 0, 0, 0.5);
        display: none;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

    .popup {
        background: white;
        width: 350px;
        max-width: 90%;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        position: relative;
        text-align: center;
        padding-bottom: 10px;
    }

    .popup img {
        width: 100%;
        height: auto;
        display: block;
    }

    .popup .close-btn {
        position: absolute;
        top: 10px;
        right: 15px;
        font-size: 18px;
        cursor: pointer;
    }

    .popup h3 {
        font-size: 18px;
        margin: 15px 10px 10px;
    }

    .popup p {
        padding: 0 15px;
    } */
    
    @media (max-width: 768px){
        .popup {
            width: 90%;
        }
        
        .map-container {
            height: 500px !important;
            width: 95% !important;
            margin: 0 auto !important
        }

        .custom-map-popup {
            max-width: 250px;
        }
    }
</style>