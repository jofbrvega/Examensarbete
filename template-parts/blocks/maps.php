<?php
$maps_heading = get_field('maps_heading');
$maps_lat = get_field('maps_lat');
$maps_lon = get_field('maps_lon');
?>

<section class="w-full">
    <?php if ($maps_heading) : ?>
        <h1 class="p-4 text-center"> <?= $maps_heading; ?></h1>
    <?php endif; ?>
    <div class="h-[700px] w-fill rounded-md" id="map"></div>
</section>

<?php if ($maps_lat && $maps_lon) : ?>
    <script>
        let map = L.map('map').setView([<?= $maps_lat; ?>, <?= $maps_lon; ?>], 14);
        let osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        var StamenTonerLite = L.tileLayer('https://stamen-tiles-{s}.a.ssl.fastly.net/toner-lite/{z}/{x}/{y}{r}.{ext}', {
            attribution: 'Map tiles by <a href="http://stamen.com">Stamen Design</a>, <a href="http://creativecommons.org/licenses/by/3.0">CC BY 3.0</a> &mdash; Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
            subdomains: 'abcd',
            minZoom: 0,
            maxZoom: 20,
            ext: 'png'
        });

        //Leaflet layer control
        var baseMaps = {
            'Toner': StamenTonerLite
        }
        L.control.layers(baseMaps).addTo(map);

        var marker = L.marker([<?= $maps_lat ?>, <?= $maps_lon; ?>]).addTo(map);
    </script>
<?php endif; ?>