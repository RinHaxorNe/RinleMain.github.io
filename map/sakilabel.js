// Markers Array
var zentrelaMarkers = [];

// Define the overlay, derived from google.maps.OverlayView
function Label(opt_options, pad) {
  // Initialization
  this.setValues(opt_options);
  this.pad = pad;

  // Label specific
  var span = this.span_ = document.createElement('span');
  var div = this.div_ = document.createElement('div');
  div.appendChild(span);
  div.className = 'saki-label-div';
};

Label.prototype = new google.maps.OverlayView;

// Implement onAdd
Label.prototype.onAdd = function() {
  zentrelaMarkers.push(this);
  var pane = this.getPanes().floatPane;
  pane.appendChild(this.div_);

  // Ensures the label is redrawn if the text or position is changed.
  var me = this;
  this.listeners_ = [
    google.maps.event.addListener(this, 'position_changed',
      function() {
        me.draw();
      }),
    google.maps.event.addListener(this, 'text_changed',
      function() {
        me.draw();
      }),
    google.maps.event.addListener(this, 'zindex_changed',
      function() {
        me.draw();
      }),
    google.maps.event.addListener(this, 'click',
      function() {})
  ];
};

Label.prototype.delete = function() {
  var div = $(this.div_);
  zentrelaMarkers.splice(zentrelaMarkers.indexOf(this), 1);
};

// Implement onRemove
Label.prototype.onRemove = function() {
  var div = $(this.div_);
  if(div) div.remove();
  // Label is removed from the map, stop updating its position/text.
  for (var i = 0, I = this.listeners_.length; i < I; ++i) {
    google.maps.event.removeListener(this.listeners_[i]);
  }
};

// Implement draw
Label.prototype.draw = function() {
  var projection = this.getProjection();
  var position = projection.fromLatLngToDivPixel(this.get('position'));

  var div = this.div_;
  div.style.left = position.x + 'px';
  div.style.top = (position.y + (this.pad ? this.pad : 0)) + 'px';
  div.style.display = 'block';
  // var fontSize = parseInt(this.get('fontSize')) + 3;
  // div.style.fontSize = fontSize + 'px';
  // div.style.color = this.get('color');

  this.span_.innerHTML = this.get('townText').toString() + '<div class="saki-level">' + this.get('levelRange').toString() + '</div>';
  this.span_.className = 'saki-label-' + this.get('markerType').toString();
  if(this.get('boss')) {
    this.span_.innerHTML = this.span_.innerHTML + '<div class="saki-boss">BOSS: ' + this.get('boss').toString() + '</div>';
  }
};
