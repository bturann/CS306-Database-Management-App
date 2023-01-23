<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome to KickOFF</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
    .navbar {
      background:linear-gradient(135deg, #49a09d, #5f2c82);
    }
    .navbar-nav a{
      color: white !important;
      font-weight: 400;
      font-size: 20px;
    }
    .navbar-header a{
      color: white !important;
      font-weight: 500;
      font-size: 45px;
    }
    .dropdown-menu a{
      color: #5f2c82 !important;
    }
  </style>
</head>
<body>



<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" color="white" href="#">KickOff</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="isActive"><a href="index.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Season & League<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="teamList.php">Team List</a></li>
          <li><a href="managing.php">Coaches</a></li>
          <li><a href="including.php">League Infos</a></li>
          <li><a href="refereePage.php">Referee Page</a></li>
          <li><a href="Matches.php">Matches</a></li>

        </ul>
      </li>
      <li><a href="client_chat.php">Support Page</a></li>
      <li class="adminNav"><a href="AdminPanelPage.php">Admin Panel</a></li>
    </ul>
  </div>
</nav>

</body>
</html>

