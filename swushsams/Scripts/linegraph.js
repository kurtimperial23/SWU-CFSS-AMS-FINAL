const ctx2 = document.getElementById('myLineChart').getContext('2d');
const myLineChart = new Chart(ctx2, {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
        datasets: [{
            label: 'Sales',
            data: [65, 59, 80, 81, 56, 55, 40],
            fill: false,
            borderColor: 'rgba(75, 192, 192, 1)',
            tension: 0.1
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




//this is the old js script
/*document.addEventListener('DOMContentLoaded', function() {
  const labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July'];
  const data = {
    labels: labels,
    datasets: [{
      label: 'My First Dataset',
      data: [65, 59, 80, 81, 56, 55, 40],
      fill: false,
      borderColor: 'rgb(75, 192, 192)',
      tension: 0.1
    }]
  };

  const config = {
    type: 'line',
    data: data,
  };

  const myChart = new Chart(
    document.getElementById('myLineChart'),
    config
  );
});
*/
