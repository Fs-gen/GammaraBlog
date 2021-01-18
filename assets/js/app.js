$(document).ready(function() {
    $('#myTable').DataTable();
});

var d = new Date();
setInterval(function() {

    var date = new Date();
    var weekday = new Array(7);
    weekday[0] = "Minggu";
    weekday[1] = "Senin";
    weekday[2] = "Selasa";
    weekday[3] = "Rabu";
    weekday[4] = "Kamis";
    weekday[5] = "Jum'at";
    weekday[6] = "Sabtu";
    const monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni",
        "Juli", "Agustus", "September", "Oktober", "November", "Desember"
    ];
    var n = weekday[date.getDay()];

    $('#clock-wrapper').html(
        n + ", " + date.getDate() + " " + monthNames[date.getMonth()] + " " + date.getFullYear() + " | " + date.getHours() + ":" + date.getMinutes() + ":" + date.getSeconds()
    );
}, 500);


$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 3000,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            // nav: true
        },
        600: {
            items: 2,
            // nav: false
        },
        1000: {
            items: 2,
            // nav: true,
            // loop: false
        }
    }
})


var pRujuk = document.getElementById('peristiwaRujuk');
var pNikah = document.getElementById('peristiwaNikah');
var myChart = new Chart(pRujuk, {
    type: 'line',
    responsive: true,
    data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
            label: 'Peristiwa Rujuk Tahun ' + d.getFullYear(),
            data: [12, 19, 3, 5, 2, 3, 5, 2, 3, 5, 2, 3],
            lineTension: 0.3,
            backgroundColor: "rgba(78, 115, 223, 0.05)",
            borderColor: "rgba(78, 115, 223, 1)",
            pointRadius: 3,
            pointBackgroundColor: "rgba(78, 115, 223, 1)",
            pointBorderColor: "rgba(78, 115, 223, 1)",
            pointHoverRadius: 3,
            pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
            pointHoverBorderColor: "rgba(78, 115, 223, 1)",
            pointHitRadius: 10,
            pointBorderWidth: 2,
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
var myChart = new Chart(pNikah, {
    type: 'line',
    responsive: true,
    data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
            label: 'Peristiwa Nikah Tahun ' + d.getFullYear(),
            data: [12, 19, 3, 5, 2, 3, 5, 2, 3, 5, 2, 3],
            lineTension: 0.3,
            backgroundColor: "rgba(78, 115, 223, 0.05)",
            borderColor: "rgba(78, 115, 223, 1)",
            pointRadius: 3,
            pointBackgroundColor: "rgba(78, 115, 223, 1)",
            pointBorderColor: "rgba(78, 115, 223, 1)",
            pointHoverRadius: 3,
            pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
            pointHoverBorderColor: "rgba(78, 115, 223, 1)",
            pointHitRadius: 10,
            pointBorderWidth: 2,
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

function sendWA() {
    let val = $('#formWA').val();
    let name = $('#nama').val();
    let number = '6282393465139';
    let resName = name.replace(/\s/g, '+');
    // console.log(resName)
    location.href = `https://api.whatsapp.com/send?phone=${number}&text=Assalamualaikum+Wr.+Wb.+%0D%0APerkenalkan+nama+saya+${resName}.+Saya+ingin ${val}`;
}