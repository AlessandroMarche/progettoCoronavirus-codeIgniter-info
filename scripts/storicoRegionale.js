let json = Array(JSON.parse(localStorage.getItem('regionalData')))
let datas = json[0]

let chartLabels = []
let chartDataTotal = []
let chartDataSymptomatic = []
let chartDataTherapy = []
let chartDataHospital = []
let chartDataHouse = []
let chartDataPositive = []
let chartDataCured = []
let chartDataDied = []
let chartDataSwabs = []

console.log(datas)

for (let id in datas) {
    let dato = datas[id]
    let data = new Date(dato.data)
    chartLabels.push(`${data.getDate()}/${data.getMonth() + 1}`)
    chartDataTotal.push(dato.totale_casi)
    chartDataSymptomatic.push(dato.ricoverati_con_sintomi)
    chartDataTherapy.push(dato.terapia_intensiva)
    chartDataHospital.push(dato.totale_ospedalizzati)
    chartDataHouse.push(dato.isolamento_domiciliare)
    chartDataPositive.push(dato.totale_attualmente_positivi)
    chartDataCured.push(dato.dimessi_guariti)
    chartDataDied.push(dato.deceduti)
    chartDataSwabs.push(dato.tamponi)
}

const ctx = document.getElementById('nationalChart').getContext('2d')
let chart = new Chart(ctx, {
    type: 'line',

    data: {
        labels: chartLabels,
        datasets: [
            {
                label: 'Totale casi',
                backgoundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                fill: false,
                data: chartDataTotal,
            },
            {
                label: 'Sintomatici ricoverati',
                backgoundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 153, 0)',
                fill: false,
                data: chartDataSymptomatic,
            },
            {
                label: 'Terapia intensiva',
                backgoundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(230, 0, 0)',
                fill: false,
                data: chartDataTherapy,
            },
            {
                label: 'Ospedalizzati',
                backgoundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(102, 102, 255)',
                fill: false,
                data: chartDataHospital,
            },
            {
                label: 'Domiciliari',
                backgoundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(102, 102, 153)',
                fill: false,
                data: chartDataHouse,
            },
            {
                label: 'Totale positivi',
                backgoundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 0, 0)',
                fill: false,
                data: chartDataPositive,
            },
            {
                label: 'Guariti',
                backgoundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(0, 204, 0)',
                fill: false,
                data: chartDataCured,
            },
            {
                label: 'Deceduti',
                backgoundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(0, 0, 0)',
                fill: false,
                data: chartDataDied,
            },
            {
                label: 'Tamponi',
                backgoundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(102, 204, 255)',
                fill: false,
                data: chartDataSwabs,
            },
        ],
    },

    options: {
        title: {
            display: true,
            text: "Dati nazionali",
        },
        legend: {
            position: 'right',
        }
    }
})
