/*
Custom Javascript for main content (default post type) slide in animation using scroll reveal library
*/

window.sr = ScrollReveal();

sr.reveal('.slide-left',{
    duration: 3000,
    origin: 'left',
    distance: '300px'
})

sr.reveal('.slide-right',{
    duration: 2000,
    origin: 'right',
    distance: '300px'
});


/*
Custom Javascript for footer map, using MapBox API and CDN
*/

mapboxgl.accessToken = 'pk.eyJ1IjoicGljdHVyZW1hbjIxMiIsImEiOiJja3R2Mm96eHQwM3lsMnBxaDJmeWNpNnRhIn0.hBcFIhS1iugi_N8s_fmq7g';
var map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/streets-v11',
center: [-121.489770, 38.578270],
zoom: 12,

});

map.scrollZoom.disable();



const marker1 = new mapboxgl.Marker()
.setLngLat([-121.489770, 38.578270])
.addTo(map);