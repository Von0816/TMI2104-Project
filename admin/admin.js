// anime({
//     target: '.cards-item',
//     translateX: 250
// })

function btnClickListener(value){
    if(value === "analytics"){
        window.location.href = "/admin/admin-analytics.html";
    }
    if(value === "users"){
        window.location.href = "/admin/admin-users.html";
    }
    if(value === "cars"){
        window.location.href = "/admin/admin-cars.html";
    }
    if(value === "bookings"){
        window.location.href = "/admin/admin-bookings.html";
    }
    
}

window.onload = () =>{
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'Annual Sales',
                data: [12, 19, 3, 5, 2, 3],
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