// var center = overviewerConfig["map"]["center"];
// overviewerConfig["map"]["center"] = [-812, 64, 1422];
// center = [-812, 64, 1422];
// console.log("Updated center to Selith.");
// console.log(overviewerConfig["map"]["center"]);

overviewer.util.ready(function () {
	console.log(overviewerConfig["map"]["center"]);

	//markerType is from css, saki-label-____
	var arr = [
		[-1245, -350, 'Carynville Town', '[Lv. 1]', 'town'],
		[-1000, 395, 'Sandoria Town', '[Lv. 25]', 'town'],
		[-715, -382, 'Reguin', '[Lv. 15]', 'region'],
		[-499, 94, 'Sabruez Temple', '[Lv. 25-27]', 'mobs', 'Sabruez King [30]'],
		[110, 425, 'Slime', '[Lv. 45-47]', 'mobs'],
		[1460, 500, 'Dragon Ruins', '[Lv. 80-90]', 'mobs'],
		[1230, -307, 'Solinia Castle', '[Lv. 70]', 'town'],
		[1040, 134, 'Ganderof Town', '[Lv. 75]', 'town'],
		[-1460, 504, 'Aquarium', '[Lv. 30-35]', 'mobs'],
		[210, -440, 'Kino', '[Lv. 42-45]', 'mobs'],
		[680, 470, 'Goblin', '[Lv. 53-55]', 'mobs'],
		[-700, 450, 'Miner', '[Lv. 25-28]', 'mobs'],
		[-953, -174, 'Spider I', '[Lv. 15]', 'mobs'],
		[585, 231, 'Wizard', '[Lv. 60-64]', 'mobs'],
		[-852, -68, 'Kobold', '[Lv. 37]', 'mobs'],
		[-671, -26, 'Wolf', '[Lv. 20]', 'mobs'],
		[-1241, 36, 'Skeleton Tomb', '[Lv. 12]', 'mobs'],
		[957, -300, 'Bear', '[Lv. 50-53]', 'mobs'],
		[-616, 389, 'Roamer', '[Lv. 25-27]', 'mobs'],
		[-381, -315, 'Ma Ngục', '[Lv. 35-37]', 'mobs'],
		[600, -276, 'Fansy Harbour', '[Lv. 50]', 'town'],
		[-154, -193, 'Dark Castle', '[Lv. 43-47]', 'mobs', 'Dark King [50]'],
		[-465, -360, 'Camp', '[Lv. 35]', 'region'],
		[-754, 204, 'Urih Village', '[Lv. 25]', 'region'],
		[789, 272, 'Mage Tower', '[Lv. 60]', 'region'],
		[961, 568, 'Small Harbour', '[Lv. 55]', 'region'],
		[163, -278, 'Mosse Village', '[Lv. 40-45]', 'region'],
		[736, 24, 'Noah Village', '[Lv. 60]', 'region'],
		[1339, 142, 'Cilona Village', '[Lv. 75]', 'region'],
		[433, 400, 'Yelri Village', '[Lv. 50]', 'region'],
	];

	for (k = 0; k < arr.length; k++) {
		var data = arr[k];
	    var latLng = overviewer.util.fromWorldToLatLng(data[0], 64, data[1], overviewer.mapView.options.currentTileSet);
	    var label = new Label({
	        map: overviewer.map,
	        position: latLng
	    });
	    label.set('townText', data[2]);
	    label.set('levelRange', data[3])
	    label.set('markerType', data[4]);
	    if(data.length == 6)
		    label.set('boss', data[5]);
	}
});