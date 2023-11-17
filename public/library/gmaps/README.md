**Important**

If you're developer, I'm moving gmaps.js to NPM, you can give your opinion and check the migration progress in [Issue #404](https://github.com/hpneo/gmaps/issues/404)

---

gmaps.js - A Javascript library that simplifies your life
=========================================================

gmaps.js allows you to use the potential of Google Maps in a simple way. No more extensive documentation or large amount of code.

Visit the examples in [hpneo.github.com/gmaps](http://hpneo.github.com/gmaps/)
Go to the API Documentation [hpneo.github.io/gmaps/documentation.html](http://hpneo.github.io/gmaps/documentation.html)

Quick Start
-----

1. Add a reference to Google Maps API
2. Add gmaps.js in your HTML
3. Enjoy!

```html
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script src="http://maps.google.com/maps/api/js"></script>
  <script src="gmaps.js"></script>
  <style type="text/css">
    #map {
      width: 400px;
      height: 400px;
    }
  </style>
</head>
<body>
  <div id="map"></div>
  <script>
    var map = new GMaps({
      el: '#map',
      lat: -12.043333,
      lng: -77.028333
    });
  </script>
</body>
</html>
```

Use with AMD
-----

With require.js, you need to load Google Maps JavaScript API first. For example, assuming you have a `googlemapsapi.js` file:

```javascript
define(['async!http://maps.google.com/maps/api/js?v=3&sensor=false'], function() {});
```

Next you have to define the dependency for gmaps.js:

```javascript
require.config({
  paths: {
    "googlemapsapi": "googlemapsapi",
  },
  shim: {
    gmaps: {
      deps: ["googlemapsapi"],
      exports: "GMaps"
    }
  }
});
```

Also, you can use the [googlemaps-amd](https://github.com/aerisweather/googlemaps-amd) plugin.

Build
------

If you would like to build gmaps from source run the following at the terminal:

```sh
git clone https://github.com/HPNeo/gmaps.git
cd gmaps
npm install
grunt
```

Changelog
---------

0.4.25
-----------------------
* Change findAbsolutePosition (see #494)

0.4.24
-----------------------
* Fix bug in getRoutes (see #373)

0.4.23
-----------------------
* Fix bug at trying to remove a large amount of markers inside a marker cluster (see #473)
* Check for Google Maps library before creating a GMaps object (see #467)
* Check the Google Maps API at instantiation instead of declaration (see #467)
* Add polyfill for google.maps.Rectangle.prototype.containsLatLng

0.4.22
-----------------------
* Render directions
* Added missing function for registering addListenerOnce

0.4.21
-----------------------
* Better check for `console.error`

0.4.20
-----------------------
* Show an error in the console, instead throwing an error

0.4.19
-----------------------
* Fix bug at hiding markers' context menu when the map is zooming

0.4.18
-----------------------
* Fix bug in `array_map`

0.4.17
-----------------------
* Remove the http so the library (Google Maps call) will also work under SSL without warnings
* Update route drawing methods to allow 'icons' option for drawPolyline
* Remove dependency on 'grunt-cli' having to be installed globally

0.4.16
-----------------------
* Fix removeMarkers

0.4.15
-----------------------
* Add overlay to mouseTarget when click event is set
* addControl/createControl now accepts HTML elements or HTML strings
* Add containsLatLng to google.maps.Circle

0.4.14
-----------------------
* Fix bug in drawPolygon
* Hide context menu before the zoom is changed

0.4.13
-----------------------
* Allow unitSystem setting in travelRoute
* Add functionality to remove controls
* Delegates non custom events to google.map
* Convert featureType and elementType toLowerCase in static maps

0.4.12
-----------------------
* Adds ability to listen for clicks on overlays

0.4.11
-----------------------
* 