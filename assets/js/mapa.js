//crea el mapa, centra la vista y define el zoom
var map = L.map('map').setView([38.132826, -3.224158]);
map.removeControl(map.zoomControl);

//añade Open Street map como mapa base
var base = L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
base.addTo(map);

//capa ortofoto aérea
var ortofoto = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
    attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community'
});

//estilos de los puertos
var geojsonMarkerOptions = {
    radius: 9,
    fillColor: "red",
    color: "#000",
    weight: 1,
    opacity: 1,
    fillOpacity: 0.8
};


var LeafIcon = L.Icon.extend({
    options: {
        iconSize: [35, 35],
        iconAnchor: [15, 30],
        popupAnchor: [0, -30]
    }
});

var logo = new LeafIcon({ iconUrl: 'assets/img/logo.gif' });
var oficina = new LeafIcon({ iconUrl: 'assets/img/oficina.gif' });


var localizaciones = L.geoJSON(localizaciones, {
    pointToLayer: function(feature, latlng) {
        return L.marker(latlng, { icon: logo });
    },
    onEachFeature: function(feature, layer) {
        var direccion = feature.properties.direccion;
        layer.bindPopup(direccion);
    }
}).addTo(map);


var sede = L.geoJSON(sede, {
    pointToLayer: function(feature, latlng) {
        return L.marker(latlng, { icon: oficina });
    },
    onEachFeature: function(feature, layer) {
        var direccion = feature.properties.direccion;
        layer.bindPopup(direccion);
    }
}).addTo(map);

//ajustal a vista a la extensión de la capa localizaciones
map.fitBounds(localizaciones.getBounds());

//añade control capas en la leyenda
var baseMapas = {
    "Mapa base": base,
    "Foto aérea": ortofoto,
};

var overlayMapas = {
    "Sede central": sede,
    "Puertos": localizaciones
};

L.control.layers(baseMapas, overlayMapas, {
    position: 'topright', // 'topleft', 'bottomleft', 'bottomright'
    collapsed: true // true
}).addTo(map);


//añade botones control zoom
var zoomHome = L.Control.zoomHome();
zoomHome.addTo(map);

//añade escala
L.control.scale().addTo(map);