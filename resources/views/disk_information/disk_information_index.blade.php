@extends('layouts/contentNavbarLayout')

@section('title', 'Dashboard - Analytics')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>
@endsection

@section('content')

<style>
  .btn-toggle {
     margin: 0 4rem;
     padding: 0;
     position: relative;
     border: none;
     height: 1.5rem;
     width: 3rem;
     border-radius: 1.5rem;
     color: #6b7381;
     background: #f25532;
  }
   .btn-toggle:focus, .btn-toggle:focus.active, .btn-toggle.focus, .btn-toggle.focus.active {
     outline: none;
  }
   .btn-toggle:before, .btn-toggle:after {
     line-height: 1.5rem;
     width: 4rem;
     text-align: center;
     font-weight: 600;
     font-size: 0.75rem;
     text-transform: uppercase;
     letter-spacing: 2px;
     position: absolute;
     bottom: 0;
     transition: opacity 0.25s;
  }
   .btn-toggle:before {
     content: "Off";
     left: -4rem;
  }
   .btn-toggle:after {
     content: "On";
     right: -4rem;
     opacity: 0.5;
  }
   .btn-toggle > .handle {
     position: absolute;
     top: 0.1875rem;
     left: 0.1875rem;
     width: 1.125rem;
     height: 1.125rem;
     border-radius: 1.125rem;
     background: #fff;
     transition: left 0.25s;
  }
   .btn-toggle.active {
     transition: background-color 0.25s;
  }
   .btn-toggle.active > .handle {
     left: 1.6875rem;
     transition: left 0.25s;
  }
   .btn-toggle.active:before {
     opacity: 0.5;
  }
   .btn-toggle.active:after {
     opacity: 1;
  }
   .btn-toggle.btn-sm:before, .btn-toggle.btn-sm:after {
     line-height: -0.5rem;
     color: #fff;
     letter-spacing: 0.75px;
     left: 0.4125rem;
     width: 2.325rem;
  }
   .btn-toggle.btn-sm:before {
     text-align: right;
  }
   .btn-toggle.btn-sm:after {
     text-align: left;
     opacity: 0;
  }
   .btn-toggle.btn-sm.active:before {
     opacity: 0;
  }
   .btn-toggle.btn-sm.active:after {
     opacity: 1;
  }
   .btn-toggle.btn-xs:before, .btn-toggle.btn-xs:after {
     display: none;
  }
   .btn-toggle:before, .btn-toggle:after {
     color: #6b7381;
  }
   .btn-toggle.active {
     background-color: #6bc85a;
  }
   .btn-toggle.btn-lg {
     margin: 0 5rem;
     padding: 0;
     position: relative;
     border: none;
     height: 2.5rem;
     width: 5rem;
     border-radius: 2.5rem;
  }
   .btn-toggle.btn-lg:focus, .btn-toggle.btn-lg:focus.active, .btn-toggle.btn-lg.focus, .btn-toggle.btn-lg.focus.active {
     outline: none;
  }
   .btn-toggle.btn-lg:before, .btn-toggle.btn-lg:after {
     line-height: 2.5rem;
     width: 5rem;
     text-align: center;
     font-weight: 600;
     font-size: 1rem;
     text-transform: uppercase;
     letter-spacing: 2px;
     position: absolute;
     bottom: 0;
     transition: opacity 0.25s;
  }
   .btn-toggle.btn-lg:before {
     content: "Off";
     left: -5rem;
  }
   .btn-toggle.btn-lg:after {
     content: "On";
     right: -5rem;
     opacity: 0.5;
  }
   .btn-toggle.btn-lg > .handle {
     position: absolute;
     top: 0.3125rem;
     left: 0.3125rem;
     width: 1.875rem;
     height: 1.875rem;
     border-radius: 1.875rem;
     background: #fff;
     transition: left 0.25s;
  }
   .btn-toggle.btn-lg.active {
     transition: background-color 0.25s;
  }
   .btn-toggle.btn-lg.active > .handle {
     left: 2.8125rem;
     transition: left 0.25s;
  }
   .btn-toggle.btn-lg.active:before {
     opacity: 0.5;
  }
   .btn-toggle.btn-lg.active:after {
     opacity: 1;
  }
   .btn-toggle.btn-lg.btn-sm:before, .btn-toggle.btn-lg.btn-sm:after {
     line-height: 0.5rem;
     color: #fff;
     letter-spacing: 0.75px;
     left: 0.6875rem;
     width: 3.875rem;
  }
   .btn-toggle.btn-lg.btn-sm:before {
     text-align: right;
  }
   .btn-toggle.btn-lg.btn-sm:after {
     text-align: left;
     opacity: 0;
  }
   .btn-toggle.btn-lg.btn-sm.active:before {
     opacity: 0;
  }
   .btn-toggle.btn-lg.btn-sm.active:after {
     opacity: 1;
  }
   .btn-toggle.btn-lg.btn-xs:before, .btn-toggle.btn-lg.btn-xs:after {
     display: none;
  }
   .btn-toggle.btn-sm {
     margin: 0 0.5rem;
     padding: 0;
     position: relative;
     border: none;
     height: 1.5rem;
     width: 3rem;
     border-radius: 1.5rem;
  }
   .btn-toggle.btn-sm:focus, .btn-toggle.btn-sm:focus.active, .btn-toggle.btn-sm.focus, .btn-toggle.btn-sm.focus.active {
     outline: none;
  }
   .btn-toggle.btn-sm:before, .btn-toggle.btn-sm:after {
     line-height: 1.5rem;
     width: 0.5rem;
     text-align: center;
     font-weight: 600;
     font-size: 0.55rem;
     text-transform: uppercase;
     letter-spacing: 2px;
     position: absolute;
     bottom: 0;
     transition: opacity 0.25s;
  }
   .btn-toggle.btn-sm:before {
     content: "Off";
     left: -0.5rem;
  }
   .btn-toggle.btn-sm:after {
     content: "On";
     right: -0.5rem;
     opacity: 0.5;
  }
   .btn-toggle.btn-sm > .handle {
     position: absolute;
     top: 0.1875rem;
     left: 0.1875rem;
     width: 1.125rem;
     height: 1.125rem;
     border-radius: 1.125rem;
     background: #fff;
     transition: left 0.25s;
  }
   .btn-toggle.btn-sm.active {
     transition: background-color 0.25s;
  }
   .btn-toggle.btn-sm.active > .handle {
     left: 1.6875rem;
     transition: left 0.25s;
  }
   .btn-toggle.btn-sm.active:before {
     opacity: 0.5;
  }
   .btn-toggle.btn-sm.active:after {
     opacity: 1;
  }
   .btn-toggle.btn-sm.btn-sm:before, .btn-toggle.btn-sm.btn-sm:after {
     line-height: -0.5rem;
     color: #fff;
     letter-spacing: 0.75px;
     left: 0.4125rem;
     width: 2.325rem;
  }
   .btn-toggle.btn-sm.btn-sm:before {
     text-align: right;
  }
   .btn-toggle.btn-sm.btn-sm:after {
     text-align: left;
     opacity: 0;
  }
   .btn-toggle.btn-sm.btn-sm.active:before {
     opacity: 0;
  }
   .btn-toggle.btn-sm.btn-sm.active:after {
     opacity: 1;
  }
   .btn-toggle.btn-sm.btn-xs:before, .btn-toggle.btn-sm.btn-xs:after {
     display: none;
  }
   .btn-toggle.btn-xs {
     margin: 0 0;
     padding: 0;
     position: relative;
     border: none;
     height: 1rem;
     width: 2rem;
     border-radius: 1rem;
  }
   .btn-toggle.btn-xs:focus, .btn-toggle.btn-xs:focus.active, .btn-toggle.btn-xs.focus, .btn-toggle.btn-xs.focus.active {
     outline: none;
  }
   .btn-toggle.btn-xs:before, .btn-toggle.btn-xs:after {
     line-height: 1rem;
     width: 0;
     text-align: center;
     font-weight: 600;
     font-size: 0.75rem;
     text-transform: uppercase;
     letter-spacing: 2px;
     position: absolute;
     bottom: 0;
     transition: opacity 0.25s;
  }
   .btn-toggle.btn-xs:before {
     content: "Off";
     left: 0;
  }
   .btn-toggle.btn-xs:after {
     content: "On";
     right: 0;
     opacity: 0.5;
  }
   .btn-toggle.btn-xs > .handle {
     position: absolute;
     top: 0.125rem;
     left: 0.125rem;
     width: 0.75rem;
     height: 0.75rem;
     border-radius: 0.75rem;
     background: #fff;
     transition: left 0.25s;
  }
   .btn-toggle.btn-xs.active {
     transition: background-color 0.25s;
  }
   .btn-toggle.btn-xs.active > .handle {
     left: 1.125rem;
     transition: left 0.25s;
  }
   .btn-toggle.btn-xs.active:before {
     opacity: 0.5;
  }
   .btn-toggle.btn-xs.active:after {
     opacity: 1;
  }
   .btn-toggle.btn-xs.btn-sm:before, .btn-toggle.btn-xs.btn-sm:after {
     line-height: -1rem;
     color: #fff;
     letter-spacing: 0.75px;
     left: 0.275rem;
     width: 1.55rem;
  }
   .btn-toggle.btn-xs.btn-sm:before {
     text-align: right;
  }
   .btn-toggle.btn-xs.btn-sm:after {
     text-align: left;
     opacity: 0;
  }
   .btn-toggle.btn-xs.btn-sm.active:before {
     opacity: 0;
  }
   .btn-toggle.btn-xs.btn-sm.active:after {
     opacity: 1;
  }
   .btn-toggle.btn-xs.btn-xs:before, .btn-toggle.btn-xs.btn-xs:after {
     display: none;
  }
   .btn-toggle.btn-secondary {
     color: #6b7381;
     background: #f25532;
  }
   .btn-toggle.btn-secondary:before, .btn-toggle.btn-secondary:after {
     color: #6b7381;
  }
   .btn-toggle.btn-secondary.active {
     background-color: #ff8300;
  }





  .progress {
    display: flex;
    height: 1.2rem; 
    overflow: hidden;
    font-size: 1rem;
    background-color: rgba(67, 89, 113, 0.1);
    border-radius: 10rem;
}

#driveContainer .card-body .drive-info{
  padding-top: 10px;
}

#driveContainer .card-body p{
  font-size: 14px;
  line-height: 100%;
  padding: 0px;
  margin: 0px;
  margin-bottom: 3px;
}

.disk-info .card {
      border: none;
      border-radius: 10px;
      box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      text-align: center;
    }
   .disk-info .disk-name {
      font-size: 1.2rem;
      font-weight: bold;
      margin-bottom: 10px;
    }
    .disk-info .temperature {
      font-size: 2rem;
      /* color: #ff6b6b; */
      color: #363636;
    }
   
    </style>

{{-- <div class="disk-info container mt-2 mb-5">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="card">
        <div class="disk-name">Disk 1</div>
        <div class="temperature">42°C</div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="disk-name">Disk 2</div>
        <div class="temperature">38°C</div>
      </div>
    </div>
    <!-- Add more cards as needed -->
  </div>
</div> --}}

<div class="disk-info container mt-2 mb-5">
    <!-- Heading -->
    <div class="row">
      <div class="col text-center">
        <h2>Storage Devices</h2>
      </div>
    </div>
  <div class="row justify-content-center" id="diskContainer">
    <!-- Cards will be appended here -->
  </div>
</div>

  <div class="row row-cols-md-2 g-4 mb-4" id="driveContainer">
    <!-- Drive cards will be added here using jQuery -->
  </div>


@endsection

@section('customScript')
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<script>
var socket = new WebSocket("ws://127.0.0.1:8090/");
agentConnector();

setInterval(() => {


const cmd2 = { cmd: 'hdd-temp'};

// Send a message to the server once connected
socket.send(JSON.stringify(cmd2));

}, 2000);

setInterval(()=>{
  const cmd = { cmd: 'drive-info'};

// Send a message to the server once connected
socket.send(JSON.stringify(cmd));
}, 30000);

function agentConnector() {
  const driveContainer = document.getElementById("driveContainer");
  // Create a WebSocket connection


  // Connection opened
  socket.addEventListener("open", (event) => {
    console.log("WebSocket connection opened:", event);

    const cmd = { cmd: 'drive-info'};

    // Send a message to the server once connected
    socket.send(JSON.stringify(cmd));

    const cmd2 = { cmd: 'hdd-temp'};

// Send a message to the server once connected
socket.send(JSON.stringify(cmd2));


  });

  // Listen for messages from the server
  socket.addEventListener("message", (event) => {
    console.log("Message from server:", event.data);
    const response = JSON.parse(event.data);

    if(response.cmd == "hdd-temp-response"){

      const hardwareInfo = JSON.parse(response.totalCount);

      const diskContainer = document.getElementById('diskContainer');
      diskContainer.innerHTML = "";
// Loop through the JSON data and create the cards
hardwareInfo.forEach((item, index) => {
  // Create the necessary elements
  const col = document.createElement('div');
  col.className = 'col-md-4';

  const card = document.createElement('div');
  card.className = 'card';

  const diskName = document.createElement('div');
  diskName.className = 'disk-name';
  // diskName.textContent = 'Disk ' + (index + 1);
  diskName.textContent = `${item.hwType}: ${item.hwName}`;

  const temperature = document.createElement('div');
  temperature.className = 'temperature';
  temperature.textContent = item.sensorValue + '°C';
  temperature.title = "Temperature";

  // Append the created elements to their respective containers
  card.appendChild(diskName);
  card.appendChild(temperature);
  col.appendChild(card);
  diskContainer.appendChild(col);

});

    }


    if(response.cmd == "drive-info-response"){

      const driveData = response.driveData;
    console.log(driveData);

    driveContainer.innerHTML = "";
    driveData.forEach(drive => {
      const totalSizeGB = convertToGB(drive.TotalSize);
  const usedSpaceGB = convertToGB(drive.UsedSpace);
  const freeSpaceGB = convertToGB(drive.AvailableFreeSpace);

  const usedSpacePercentage = (usedSpaceGB / totalSizeGB) * 100;
  const freeSpacePercentage = (freeSpaceGB / totalSizeGB) * 100;


  console.log(drive);
  console.log(usedSpaceGB);
  console.log(freeSpaceGB);

  let progressClass = "bg-success";

if (usedSpacePercentage >= 90) {
  progressClass = "bg-danger";
} else if (usedSpacePercentage >= 70) {
  progressClass = "bg-warning";
}


      const cardHTML = `<div class="card">
 

 <div class="card-body">
 
   <h5 class="card-title">${drive.Name}</h5>
    <div class="row mb-1">
<div class="col-sm-5 drive-info">
<p class="card-text">Volume Label: ${drive.VolumeLabel}</p>
   <p class="card-text">Drive Type: ${drive.DriveType}</p>
   <p class="card-text">Drive Format: ${drive.DriveFormat}</p>
   <p class="card-text">Total Space: ${drive.TotalSize}</p>
   <p class="card-text">Used Space: ${drive.UsedSpace}</p>
   <p class="card-text">Free Space: ${drive.AvailableFreeSpace}</p>
</div>

<div class="col-sm-7">
<div id="chart-${drive.Name.replace(/\\|:/g, '-')}"></div>
</div>
</div>
  
   <div class="progress">
     <div class="progress-bar ${progressClass}" role="progressbar" style="width: ${Number(usedSpacePercentage.toFixed(2))}%;" aria-valuenow="${Number(usedSpacePercentage.toFixed(2))}" aria-valuemin="0" aria-valuemax="100">
       ${Number(usedSpacePercentage.toFixed(2))}%
     </div>
   </div>
 </div>
</div>`;


const cardDiv = document.createElement('div');
      cardDiv.classList.add('col-md-6', 'mb-3');
      cardDiv.innerHTML = cardHTML;
driveContainer.appendChild(cardDiv);



 // Create ApexCharts for each card
 const chartOptions = {
        chart: {
          type: 'pie',
        },
        series: [Number(usedSpacePercentage.toFixed(2)), Number(freeSpacePercentage.toFixed(2))],
        labels: ['Used Space','Free Space'],
        tooltip: {
    theme: 'dark', // Use the 'dark' theme for the tooltip
    style: {
      fontSize: '14px',
      background: '#2ECC71', // Set the tooltip background color
      color: '#000000', // Set the tooltip font color
    },
  },
      };

      const chartId = `chart-${drive.Name.replace(/\\|:/g, '-')}`;
      const chart = new ApexCharts(document.getElementById(chartId), chartOptions);
      chart.render();
      
    });
    }



  });

  // Handle any errors that occur.
  socket.addEventListener("error", (error) => {
    console.error("WebSocket Error:", error);
  });

  // Listen for the WebSocket connection to close.
  socket.addEventListener("close", (event) => {
    if (event.wasClean) {
      console.log(`Closed cleanly, code=${event.code}, reason=${event.reason}`);
    } else {
      console.warn("Connection died");
    }
  });

  // Close the WebSocket connection when done.
  // socket.close();
}

// Helper function to convert sizes to GB
function convertToGB(sizeWithUnit) {
  const size = parseFloat(sizeWithUnit);
  const unit = sizeWithUnit.split(' ')[1];
  switch (unit) {
    case 'KB':
      return size / (1024 * 1024);
    case 'MB':
      return size / 1024;
    case 'GB':
      return size;
    default:
      return 0;
  }
}
</script>
@endsection