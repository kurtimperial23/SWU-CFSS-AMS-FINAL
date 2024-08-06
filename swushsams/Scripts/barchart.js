const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3, 7],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(100, 99, 132, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(100, 99, 132, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});


//this is the old js
/*const ctx = document.getElementById("myChart");

new Chart(ctx, {
  type: "bar",
  data: {
    labels: [
      "January",
      "February",
      "March",
      "April",
      "May",
      "June",
      "July",
      "August",
      "September",
      "October",
      "November",
      "December",
    ],
    datasets: [
      {
        label: "Sample Data",
        data: [100, 109, 103, 105, 102, 103, 112, 119, 133, 155, 122, 133],
        borderWidth: 1,
      },
    ],
  },
  options: {
    plugins: {
      title: {
        display: true,
        text: "Sample Chart for .....",
        font: {
          size: 16,
        },
      },
    },
    scales: {
      y: {
        beginAtZero: true,
      },
    },
  },
});
*/


