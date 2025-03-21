// Asegurarse de que el mapa se cargue después de que el DOM esté listo
document.addEventListener('DOMContentLoaded', function () {
    // Inicializar el mapa con un centro y nivel de zoom
    const map = L.map('map').setView([19.4, -99.12], 11);

    // Agregar la capa de OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 18,
        attribution: '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Definir un ícono personalizado para los marcadores
    const customIcon = L.icon({
        iconUrl: 'https://cdn-icons-png.flaticon.com/512/25/25694.png',
        iconSize: [35, 35],  // Tamaño del ícono
        iconAnchor: [17, 35], // Punto de anclaje del ícono
        popupAnchor: [0, -30] // Posición del popup
    });

    // Lista de ubicaciones con coordenadas, nombre, dirección, imagen y enlace de Google Maps
    const locations = [
        {
            coords: [19.5045, -99.1487],
            name: "Centro Cultural Jaime Torres Bodet",
            address: "Av. Wilfrido Massieu s/n, Nueva Industrial Vallejo, CDMX",
            image: "https://www.mexicoescultura.com/galerias/espacios/principal/torres_bodet_ipn.jpg",
            mapsLink: "https://www.google.com/maps/dir/?api=1&destination=19.5045,-99.1487"
        },
        {
            coords: [19.4376, -99.1632],
            name: "Centro de Apoyo Polifuncional (CAP) Unidad Santo Tomás",
            address: "Av. Plan de Agua Prieta esq. Av. de los Maestros, CDMX",
            image: "https://upload.wikimedia.org/wikipedia/commons/thumb/4/4e/Casco_santo_tomas_ipn_2013_mex_df.jpg/420px-Casco_santo_tomas_ipn_2013_mex_df.jpg",
            mapsLink: "https://www.google.com/maps/dir/?api=1&destination=19.4376,-99.1632"
        },
        {
            coords: [19.3926, -99.0903],
            name: "UPIICSA",
            address: "Av. Té 950, Granjas México, Iztacalco, CDMX",
            image: "https://sseis.upiicsa.ipn.mx/induccion/images/upiicsa-2.jpg",
            mapsLink: "https://www.google.com/maps/dir/?api=1&destination=19.3926,-99.0903"
        }
    ];

    // Crear marcadores para cada ubicación y asociar un popup con ellos
    locations.forEach(loc => {
        const popupHTML = `
            <div class="popup-content">
                <img src="${loc.image}" alt="${loc.name}" style="width: 100%; height: auto;">
                <h3>${loc.name}</h3>
                <p>${loc.address}</p>
                <a href="${loc.mapsLink}" target="_blank">Cómo llegar</a>
            </div>
        `;
        L.marker(loc.coords, { icon: customIcon })
            .addTo(map)
            .bindPopup(popupHTML); // Asociar el popup al marcador
    });
});
