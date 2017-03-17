<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>The Gaming Place</title>

    <!-- Custom styles for this template -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">


  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Gaming Place</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="register.html">Create Account</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input name="username" type="text" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
              <input name="password" type="password" class="form-control" placeholder="Enter Password">
            </div>
              <button name="submit" type="submit" class="btn btn-default">Login</button>
          </form>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="cart-block">
            <form action="cart/update" method="post">
              <table cellpadding="6" cellspacing="1" style="width:100%" border="0">
                <tr>
                  <th>QTY</th>
                  <th>Item Description</th>
                  <th style="text-align:right">Item Price</th>
                </tr>
                <tr>
                  <td></td>
                  <td class="right"><strong>Total</strong></td>
                  <td class="right" style="text-align:right">$</td>
                </tr>
              </table><br />
              <p><button class="btn btn-default" type="submit">Update Cart</button>
              <a class="btn btn-default" href="cart">Go To Cart</a></p>
            </form>
          </div>

        <div class="panel panel-default panel-list">
          <div class="panel-heading panel-heading-dark">
            <h3 class="panel-title">
              Categories
            </h3>
          </div>

          <ul class="list-group">
            <li class="list-group-item"><a href="#">Gaming Consoles</a></li>
            <li class="list-group-item"><a href="#">Xbox One Games</a></li>
            <li class="list-group-item"><a href="#">Playstation 4 games</a></li>
            <li class="list-group-item"><a href="#">Xbox 360 Games</a></li>
            <li class="list-group-item"><a href="#">Nintendo Wii Games</a></li>
            <li class="list-group-item"><a href="#">Playstation 3 games</a></li>
            <li class="list-group-item"><a href="#">Other Console Games</a></li>
          </ul>
        </div>
          <div class="panel panel-default panel-list">
            <div class="panel-heading panel-heading-dark">
              <h3 class="panel-title">
                Most Populars
              </h3>
            </div>

            <ul class="list-group">
              <li class="list-group-item"><a href="#">Gaming Consoles</a></li>
              <li class="list-group-item"><a href="#">Xbox One Games</a></li>
              <li class="list-group-item"><a href="#">Playstation 4 games</a></li>
              <li class="list-group-item"><a href="#">Xbox 360 Games</a></li>
              <li class="list-group-item"><a href="#">Nintendo Wii Games</a></li>
              <li class="list-group-item"><a href="#">Playstation 3 games</a></li>
              <li class="list-group-item"><a href="#">Other Console Games</a></li>
            </ul>
          </div>
        </div>

        <!-- Games -->

        <div class="col-md-8">
          <div class="panel panel-default">
            <div class="panel-heading panel-heading-green">
              <h3 class="panel-title">
                Latest Realeses
              </h3>
            </div>

              <div class="panel-body">
