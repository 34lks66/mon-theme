<?php require_once('header.php'); ?>
<div id="map" class="map-container"></div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    var map = L.map('map', {
        dragging: false,
        scrollWheelZoom: false,
        doubleClickZoom: false,
        boxZoom: false,
        keyboard: false,
        trackResize: false,
        touchZoom: false
    }).setView([43.70, 0.46], 9);

    L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> & Carto',
        subdomains: 'abcd',
        maxZoom: 19
    }).addTo(map);

    fetch('https://raw.githubusercontent.com/gregoiredavid/france-geojson/master/departements/32-gers/departement-32-gers.geojson')
        .then(response => response.json())
        .then(data => {
            var gersBoundary = L.geoJSON(data, {
                style: { color: '#e30613', weight: 2, fillOpacity: 0 }
            }).addTo(map);
            map.fitBounds(gersBoundary.getBounds());

            var outer = turf.polygon([[
                [-10, 60], [40, 60], [40, 30], [-10, 30], [-10, 60]
            ]]);
            var mask = turf.difference(outer, data);
            L.geoJSON(mask, {
                style: { fillColor: 'rgba(0,0,0,0.4)', color: 'none', fillOpacity: 0.8 }
            }).addTo(map);
        });

    var popupStyle = {
        minWidth: 350,
        maxWidth: 400,
        className: 'custom-popup'
    };

    function ajusterTailleMap(){
        var mapContainer = document.querySelector('.map-container');
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
            mapContainer.style.margin = '0 auto';
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
        var marker = L.marker([ville.lat, ville.lon], {icon: busIcon}).addTo(map);

        var customPopup = L.popup({
            className: 'custom-map-popup',
            autoPan: false,
            closeOnClick: false,
            autoClose: false
        });

        marker.on('click', function (e) {
            map.closePopup();
            // customPopup.setContent('<p>Chargement...</p>');

            // Calcul de la position du marqueur en pixels
            var markerScreenPos = map.latLngToContainerPoint(marker.getLatLng());
            var mapSize = map.getSize();

            // Détermination des ajustements d'offset
            var offsetY = -50; // Offset par défaut (vers le haut)
            var offsetX = 0; // Offset horizontal par défaut

            // Ajustement vertical
            if (markerScreenPos.y < (mapSize.y * 0.4)) {
                offsetY = 170; // S'ouvre vers le bas si près du haut
                //offsetY = 300; 
            }

            // Ajustement horizontal
            if (markerScreenPos.x < (mapSize.x * 0.2)) {
                offsetX = 50; // S'ouvre à droite si près du bord gauche
            } else if (markerScreenPos.x > (mapSize.x * 0.8)) {
                offsetX = -50; // S'ouvre à gauche si près du bord droit
            }

            customPopup.options.offset = L.point(offsetX, offsetY);

            customPopup.setLatLng(marker.getLatLng()).openOn(map);

            fetch('<?php echo admin_url("admin-ajax.php");?>?action=get_ville_info&ville_nom=' + encodeURIComponent(ville.nom))
                .then(response => response.text())
                .then(data => {
                    customPopup.setContent(data);
                });
        });
    });
});
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

/* Styles spécifiques pour les popups "inversés" */
.leaflet-popup-content-wrapper {
    border-radius: 8px; /* Conserver l'arrondi */
}
.leaflet-popup-tip-container {
    width: 44px;
    height: 20px;
    position: absolute;
    left: 50%;
    margin-left: -22px;
    overflow: hidden;
    pointer-events: none;
}
.leaflet-popup-tip {
    width: 17px;
    height: 17px;
    padding: 1px;
    margin: -10px auto 0;
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
}

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