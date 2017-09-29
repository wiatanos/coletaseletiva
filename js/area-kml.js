var geoXml = null;
var geoXmlDoc = null;
var map = null;
var myLatLng = null;
var myGeoXml3Zoom = true;
var sidebarHtml = "";
var infowindow = null;
var filename = "TrashDays40.xml";
  function MapTypeId2UrlValue(maptype) {
    var urlValue = 'm';
    switch(maptype){
      case google.maps.MapTypeId.HYBRID:    urlValue='h';
                        break;
      case google.maps.MapTypeId.SATELLITE: urlValue='k';
                        break;
      case google.maps.MapTypeId.TERRAIN:   urlValue='t';
                        break;
      default:
      case google.maps.MapTypeId.ROADMAP:   urlValue='m';
                        break;
    }
    return urlValue;
  }

      // ========== This function will create the "link to this page"
      function makeLink() {
//        var a="http://www.geocodezip.com/v3_MW_example_linktothis.html"
        var url = window.location.pathname;
        var a = url.substring(url.lastIndexOf('/')+1)
           + "?lat=" + map.getCenter().lat().toFixed(6)
           + "&lng=" + map.getCenter().lng().toFixed(6)
           + "&zoom=" + map.getZoom()
           + "&type=" + MapTypeId2UrlValue(map.getMapTypeId());
        if (filename != "TrashDays40.xml") a += "&filename="+filename;
        document.getElementById("link").innerHTML = '<a href="' +a+ '">Link to this page<\/a>';
      }
    function initialize() {
      myLatLng = new google.maps.LatLng(37.422104808,-122.0838851);
      // these set the initial center, zoom and maptype for the map 
      // if it is not specified in the query string
      var lat = 37.422104808;
      var lng = -122.0838851;
      var zoom = 18;
      var maptype = google.maps.MapTypeId.ROADMAP;

      // If there are any parameters at eh end of the URL, they will be in  location.search
      // looking something like  "?marker=3"
 
      // skip the first character, we are not interested in the "?"
      var query = location.search.substring(1);
 
      // split the rest at each "&" character to give a list of  "argname=value"  pairs
      var pairs = query.split("&");
      for (var i=0; i<pairs.length; i++) {
        // break each pair at the first "=" to obtain the argname and value
  var pos = pairs[i].indexOf("=");
  var argname = pairs[i].substring(0,pos).toLowerCase();
  var value = pairs[i].substring(pos+1).toLowerCase();
 
        // process each possible argname  -  use unescape() if theres any chance of spaces
        if (argname == "id") {id = unescape(value);}
        if (argname == "filename") {filename = unescape(value);}
        if (argname == "marker") {index = parseFloat(value);}
        if (argname == "lat") {lat = parseFloat(value);}
        if (argname == "lng") {lng = parseFloat(value);}
        if (argname == "zoom") {
    zoom = parseInt(value);
    myGeoXml3Zoom = false;
  }
        if (argname == "type") {
// from the v3 documentation 8/24/2010
// HYBRID This map type displays a transparent layer of major streets on satellite images. 
// ROADMAP This map type displays a normal street map. 
// SATELLITE This map type displays satellite images. 
// TERRAIN This map type displays maps with physical features such as terrain and vegetation. 
          if (value == "m") {maptype = google.maps.MapTypeId.ROADMAP;}
          if (value == "k") {maptype = google.maps.MapTypeId.SATELLITE;}
          if (value == "h") {maptype = google.maps.MapTypeId.HYBRID;}
          if (value == "t") {maptype = google.maps.MapTypeId.TERRAIN;}

        }
      }
      if (!isNaN(lat) && !isNaN(lng)) {
        myLatLng = new google.maps.LatLng(lat, lng);
      }
                var myOptions = {
                    zoom: zoom,
                    center: myLatLng,
                    // zoom: 5,
                    // center: myLatlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                map = new google.maps.Map(document.getElementById("map_canvas"),
                      myOptions);
                infowindow = new google.maps.InfoWindow({});

   geoXml = new geoXML3.parser({
                    map: map,
                    infoWindow: infowindow,
                    singleInfoWindow: true,
        zoom: myGeoXml3Zoom,
                    afterParse: useTheData
                });
                geoXml.parse(["http://www.geocodezip.com/geoxml3_test//OrlandoNeighborhoods_boundaries_kml.xml",
                              "http://www.geocodezip.com/geoxml3_test//OrlandoNeighborhoods_Points_kml.xml"]);
    google.maps.event.addListener(map, "bounds_changed", makeSidebar);
    google.maps.event.addListener(map, "center_changed", makeSidebar);
    google.maps.event.addListener(map, "zoom_changed", makeSidebar);
      // Make the link the first time when the page opens
      makeLink();

      // Make the link again whenever the map changes
      google.maps.event.addListener(map, 'maptypeid_changed', makeLink);
      google.maps.event.addListener(map, 'center_changed', makeLink);
      google.maps.event.addListener(map, 'bounds_changed', makeLink);
      google.maps.event.addListener(map, 'zoom_changed', makeLink);
            };

function kmlPgClick(pm,doc) {
  alert(geoXmlDoc[doc]);
   if (geoXmlDoc[doc].placemarks[pm].polygon.getMap()) {
      google.maps.event.trigger(geoXmlDoc[doc].placemarks[pm].polygon,"click");
   } else {
      geoXmlDoc[doc].placemarks[pm].polygon.setMap(map);
      google.maps.event.trigger(geoXmlDoc[doc].placemarks[pm].polygon,"click");
   }
}
function kmlPlClick(pm,doc) {
   if (geoXmlDoc[doc].placemarks[pm].polyline.getMap()) {
      google.maps.event.trigger(geoXmlDoc[doc].placemarks[pm].polyline,"click");
   } else {
      geoXmlDoc[doc].placemarks[pm].polyline.setMap(map);
      google.maps.event.trigger(geoXmlDoc[doc].placemarks[pm].polyline,"click");
   }
}
function kmlClick(pm,docNum) {
   if (geoXmlDoc[docNum].placemarks[pm].marker.getMap()) {
      google.maps.event.trigger(geoXmlDoc[docNum].placemarks[pm].marker,"click");
   } else {
      geoXmlDoc[docNum].placemarks[pm].marker.setMap(map);
      google.maps.event.trigger(geoXmlDoc[docNum].placemarks[pm].marker,"click");
   }
}
function kmlShowPlacemark(pm,doc) {
  if (geoXmlDoc[doc].placemarks[pm].polygon) {
    map.fitBounds(geoXmlDoc[doc].placemarks[pm].polygon.bounds);
  } else if (geoXmlDoc[doc].placemarks[pm].polyline) {
    map.fitBounds(geoXmlDoc[doc].placemarks[pm].polyline.bounds);
  } else if (geoXmlDoc[doc].placemarks[pm].marker) {
    map.setCenter(geoXmlDoc[doc].placemarks[pm].marker.getPosition());
  } 
  for (var j=0; j< geoXmlDoc.length;j++) {
   for (var i=0;i<geoXmlDoc[j].placemarks.length;i++) {
     var placemark = geoXmlDoc[j].placemarks[i];
     if (i == pm) {
       if (placemark.polygon) placemark.polygon.setMap(map);
       if (placemark.polyline) placemark.polyline.setMap(map);
       if (placemark.marker) placemark.marker.setMap(map);
     } else {
       if (placemark.polygon) placemark.polygon.setMap(null);
       if (placemark.polyline) placemark.polyline.setMap(null);
       if (placemark.marker) placemark.marker.setMap(null);
     }
   }
 }
}

function kmlColor (kmlIn) {
  var kmlColor = {};
  if (kmlIn) {
   aa = kmlIn.substr(0,2);
   bb = kmlIn.substr(2,2);
   gg = kmlIn.substr(4,2);
   rr = kmlIn.substr(6,2);
   kmlColor.color = "#" + rr + gg + bb;
   kmlColor.opacity = parseInt(aa,16)/256;
  } else {
   // defaults
   kmlColor.color = randomColor();
   kmlColor.opacity = 0.45;
  }
  return kmlColor;
}

function randomColor(){ 
  var color="#";
  var colorNum = Math.random()*8388607.0;  // 8388607 = Math.pow(2,23)-1
  var colorStr = colorNum.toString(16);
  color += colorStr.substring(0,colorStr.indexOf('.'));
  return color;
};

var highlightOptions = {fillColor: "#FFFF00", strokeColor: "#000000", fillOpacity: 0.9, strokeWidth: 10};
var highlightLineOptions = {strokeColor: "#FFFF00", strokeWidth: 10};
function kmlHighlightPoly(pm) {
 for (var j=0; j<geoXmlDoc.length;j++) {
   for (var i=0;i<geoXmlDoc[j].placemarks.length;i++) {
     var placemark = geoXmlDoc[j].placemarks[i];
     if (i == pm) {
       if (placemark.polygon) placemark.polygon.setOptions(highlightOptions);
       if (placemark.polyline) placemark.polyline.setOptions(highlightLineOptions);
     } else {
       if (placemark.polygon) placemark.polygon.setOptions(placemark.polygon.normalStyle);
       if (placemark.polyline) placemark.polyline.setOptions(placemark.polyline.normalStyle);
     }
   }
 }
}
function kmlUnHighlightPoly(pm) {
 for (var j=0; j<geoXmlDoc.length; j++) {
   for (var i=0;i<geoXmlDoc[j].placemarks.length;i++) {
     if (i == pm) {
       var placemark = geoXmlDoc[j].placemarks[i];
       if (placemark.polygon) placemark.polygon.setOptions(placemark.polygon.normalStyle);
       if (placemark.polyline) placemark.polyline.setOptions(placemark.polyline.normalStyle);
     }
   }
 }
}


function showAll() {
   var bounds = null;
   for (var i=0; i<geoXmlDoc.length; i++) {
     if (i ==0) {
      bounds = geoXmlDoc[i].internals.bounds;
     } else {
      bounds.union(geoXmlDoc[i].internals.bounds);
    }
   }
   map.fitBounds(bounds);
 for (var j=0;j<geoXmlDoc.length;j++) {
   for (var i=0;i<geoXmlDoc[j].placemarks.length;i++) {
     var placemark = geoXmlDoc[j].placemarks[i];
     if (placemark.polygon) placemark.polygon.setMap(map);
     if (placemark.polyline) placemark.polyline.setMap(map);
     if (placemark.marker) placemark.marker.setMap(map);
   }
   }
}

function highlightPoly(poly, polynum) {
  //    poly.setOptions({fillColor: "#0000FF", strokeColor: "#0000FF", fillOpacity: 0.3}) ;
  google.maps.event.addListener(poly,"mouseover",function() {
    var rowElem = document.getElementById('row'+polynum);
    if (rowElem) rowElem.style.backgroundColor = "#FFFA5E";
    if (poly instanceof google.maps.Polygon) {
      poly.setOptions(highlightOptions);
    } else if (poly instanceof google.maps.Polyline) {
      poly.setOptions(highlightLineOptions);
    }
  });
}