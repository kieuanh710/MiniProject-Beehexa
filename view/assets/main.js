function showChart() {
  //get id selected
  const type1 = document.querySelectorAll(
    'input[name^="type-1--"]:checked'
  ).length;

  // SETUP
  const data = {
    labels: ["Courage", "Respect", "a", "Focus", "Commitment"],
    datasets: [
      {
        label: "Scrum values",
        data: [type1, 1, 4, 3, 2],
        backgroundColor: [
          "rgba(255, 26, 104, 0.2)",
          "rgba(54, 162, 235, 0.2)",
          "rgba(255, 206, 86, 0.2)",
          "rgba(75, 192, 192, 0.2)",
          "rgba(153, 102, 255, 0.2)",
          "rgba(255, 159, 64, 0.2)",
          "rgba(0, 0, 0, 0.2)",
        ],
        borderColor: [
          "rgba(255, 26, 104, 1)",
          "rgba(54, 162, 235, 1)",
          "rgba(255, 206, 86, 1)",
          "rgba(75, 192, 192, 1)",
          "rgba(153, 102, 255, 1)",
          "rgba(255, 159, 64, 1)",
          "rgba(0, 0, 0, 1)",
        ],
        borderWidth: 1,
      },
    ],
  };

  // CONFIG
  const config = {
    type: "radar",
    data,
    options: {
      scales: {
        r: {
          beginAtZero: true,
          min: 0,
          max: 5,
          ticks: {
            stepSize: 1,
            callback: (value, tick, values) => {
              console.log(value);
              return "";
            },
          },
        },
      },
    },
  };
  // render init block
  const myChart = new Chart(document.getElementById("myChart"), config);

  // Instantly assign Chart.js version
  const chartVersion = document.getElementById("chartVersion");
  chartVersion.innerText = Chart.version;
}
