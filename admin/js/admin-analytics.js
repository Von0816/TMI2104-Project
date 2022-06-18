function generateGraph(dataArray){
    console.log(dataArray)
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'Annual Sales',
                data: dataArray,
                borderColor: [
                    'rgba(20, 195, 142, 1)'
                ],
                backgroundColor: 'rgba(20, 195, 142, .5)',
                borderWidth: 3,
                tension: .2,
                fill: true
            }]
        },
        options: {
        responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    grid : {
                        display: false
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            }
        }
    });

}