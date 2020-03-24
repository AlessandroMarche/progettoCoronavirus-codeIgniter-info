jQuery(document).ready(main)

var markerGroup;

function main() {
  var map = L.map('map', {
    center: [42.5, 12.5],
    zoom: 6
  });

  L.tileLayer('http://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 16,
    atribution: 'Map data &copy; OSM.org'
  }).addTo(map);

  markerGroup = L.layerGroup().addTo(map);


  fetch('https://raw.githubusercontent.com/pcm-dpc/COVID-19/master/dati-json/dpc-covid19-ita-regioni.json').then((resp) => resp.text()).then(function (data) {
    let datas = JSON.parse(data);
    datas.forEach(dato => {
      if (ofYesterday(Date.parse(dato.data))) {
        L.marker([dato.lat, dato.long]).bindTooltip(`${dato.totale_casi}`,
          {
            permanent: true,
            direction: 'right'
          }).addTo(markerGroup)
      }
    });
  });

}

function ofYesterday(date) {
  var ofYesterday = new Date();
  ofYesterday.setDate(ofYesterday.getDate() - 1);
  if (date.day == ofYesterday.day && date.monthIndex == ofYesterday.monthIndex)
    return true;
  return false;
}

function regionale() {
  markerGroup.clearLayers();

  fetch('https://raw.githubusercontent.com/pcm-dpc/COVID-19/master/dati-json/dpc-covid19-ita-regioni.json').then((resp) => resp.text()).then(function (data) {
    let datas = JSON.parse(data);
    datas.forEach(dato => {
      if (ofYesterday(Date.parse(dato.data))) {
        L.marker([dato.lat, dato.long]).bindTooltip(`${dato.totale_casi}`,
          {
            permanent: true,
            direction: 'right'
          }).addTo(markerGroup)
      }
    });
  });
}

function provinciale() {
  markerGroup.clearLayers();

  fetch('https://raw.githubusercontent.com/pcm-dpc/COVID-19/master/dati-json/dpc-covid19-ita-province.json').then((resp) => resp.text()).then(function (data) {
    let datas = JSON.parse(data);
    datas.forEach(dato => {
      if (ofYesterday(Date.parse(dato.data))) {
        L.marker([dato.lat, dato.long]).bindTooltip(`${dato.totale_casi}`,
          {
            permanent: true,
            direction: 'right'
          }).addTo(markerGroup)
      }
    });
  });
}