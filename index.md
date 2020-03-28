<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>
<style>
.card-title{
  font-size:24px;
}
.card-text{
  font-size:18px;
}
#numberCount{
  font-size:26px;
}
</style>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="download.png" alt="Card image cap">
          <div class="card-body">
            <h3 class="card-title">Philippines</h3>
            <p class="card-text text-secondary">Total Cases: <span id="numberCount"></span></p>
            <p class="card-text text-primary">Today Case: <span id="todayCaseCount"></span></p>
            <p class="card-text text-danger">Deaths: <span id="deathsCount"></span></p>
            <p class="card-text text-success">Recovered: <span id="recoveredCount"></span></p>
            <p class="card-text text-warning">Critical: <span id="criticalCount"></span></p>
            <p class="card-text">Date Today : <span id="dateToday"></span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
  <script>
    $(document).ready(function(){
      $.get( "https://coronavirus-19-api.herokuapp.com/countries/Philippines", function( data ) {
        $( "#numberCount" ).html( data.cases); 
        $("#todayCaseCount").html(data.todayCases);
        $("#deathsCount").html(data.deaths)
        $("#recoveredCount").html(data.recovered)
        $("#criticalCount").html(data.critical);
      }); 

      var today = new Date();
      var dd = String(today.getDate()).padStart(2, '0');
      var mm = String(today.getMonth() + 1).padStart(2, '0'); 
      var yyyy = today.getFullYear();

      today = mm + '/' + dd + '/' + yyyy;
      $("#dateToday").html(today);     

    }); 
  </script>
</body>

</html>