<!DOCTYPE html>
<html>
<head>
    <title>Property Listing Map</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Set the size of the div element that contains the map */
        #map {
            height: 100%;
        }
        /* Optional: Make the html and body elements take up 100% of the height of the viewport */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body class="h-screen flex items-center justify-center bg-gray-100">
<div id="map" class="w-full h-full"></div>
<script>
    // Initialize and add the map
    function initMap() {
        // The location of the property
        const propertyLocation = { lat: -25.344, lng: 131.036 }; // Replace with your property's latitude and longitude
        // The map, centered at the property
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 4,
            center: propertyLocation,
        });
        // The marker, positioned at the property
        const marker = new google.maps.Marker({
            position: propertyLocation,
            map: map,
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_7K12QacGfuWLfNaeUtnmbHvVjY5C4u4&callback=initMap" async defer></script>
</body>
</html>

