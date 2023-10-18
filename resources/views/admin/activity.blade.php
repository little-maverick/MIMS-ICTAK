
<!DOCTYPE html>
<html lang="en">

<head>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script> 
    
 
 @include('admin.css')

</head>
<body>

  <!-- partial:partials/_navbar.html -->

@include('admin.navbar')

@include('admin.sidebar')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Bar chart</h4>
              <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
              <script>
                var xValues = ["Monday", "Tuesday", "wednesday", "Thursday", "Friday", "Saturday"];
                var yValues = [62, 15, 9, 31, 19, 3 ];
                var barColors = ["#ff8a30", "#72b137","	#d4e4ff","#ffaaba","#ffa3ac", "#6c2224"];
                
                new Chart("myChart", {
                  type: "bar",
                  data: {
                    labels: xValues,
                    datasets: [{
                      backgroundColor: barColors,
                      data: yValues
                    }]
                  },
                  options: {
                    legend: {display: false},
                    title: {
                      display: true,
                      text: "Membership Registration for the Month of April"
                    }
                  }
                });
                </script>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Line chart</h4>
              <canvas id="membership" style="width:100%;max-width:700px"></canvas>
              <script>
                const xyValues = [
                  {x:50, y:7},
                  {x:60, y:8},
                  {x:70, y:8},
                  {x:80, y:9},
                  {x:90, y:9},
                  {x:100, y:9},
                  {x:110, y:10},
                  {x:120, y:11},
                  {x:130, y:14},
                  {x:140, y:14},
                  {x:150, y:15}
                ];
                
                new Chart("membership", {
                  type: "scatter",
                  data: {
                    datasets: [{
                      pointRadius: 4,
                      pointBackgroundColor: "rgb(0,0,255)",
                      data: xyValues
                    }]
                  },
                  options: {
                    legend: {display: false},
                    scales: {
                      xAxes: [{ticks: {min: 40, max:160}}],
                      yAxes: [{ticks: {min: 6, max:16}}],
                    }
                  }
                });
                </script>
            </div>
          </div>
        </div>
      </div> 
    </div>



 @include('admin.script')


</body>

</html>



