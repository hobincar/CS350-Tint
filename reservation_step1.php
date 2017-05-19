<?php
require_once("./lib/User.php");
if !isset($_SESSION['uid']){
	header('Location: http://www.starlit.kr/login.html');
}
?>
<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="semantic-ui/semantic.min.css">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="semantic-ui/semantic.min.js"></script>
<html>
<head>
  <!-- Site Properties -->
  <title>Reservation</title>
</head>
<body>

<!-- Page Contents -->
<div class="pusher">
  <div class="ui inverted vertical masthead center aligned segment top" >
    <div class="ui container">
      <div class="ui large secondary inverted pointing menu">
        <a class="toc item">
          <i class="sidebar icon"></i>
        </a>
        <a class="item">Home</a>
        <a class="active item" href="reservation_step1.php">Reservation</a>
        <a class="item" href="#information">Information</a>
        <div class="right item">
          <a class="ui inverted button" href="mypage.html">My Page</a>
          <a class="ui inverted button" href="logout.php">Log Out</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Body Start -->
  <div class="ui grid">

    <!-- Grid Margin -->
    <div class="two wide column">
    </div>

    <!-- Input Forms -->
    <div class="twelve wide column">

      <div class="ui divider"></div>
      <h1 class="ui header">
        Reservation
      </h1>
      <div class="ui container center aligned ordered steps">
        <div class="active step">
          <div class="content">
            <div class="title">Enter Information</div>
            <div class="description"></div>
          </div>
        </div>
        <div class="disable step">
          <div class="content">
            <div class="title">Choose Rooms</div>
            <div class="description"></div>
          </div>
        </div>
        <div class="disable step">
          <div class="content">
            <div class="title">Select Options</div>
            <div class="description"></div>
          </div>
        </div>
        <div class="disable step">
          <div class="content">
            <div class="title">Billing</div>
            <div class="description"></div>
          </div>
        </div>
      </div>
      <div class="ui fitted divider"></div>

      <div class="ui step1 form segment">
        <div class="two fields">
          <div class="field">
            <label>When will you check in?</label>
            <div class="ui labeled input">
              <div class="ui green label">
                <i class="calendar icon"></i>
                Check In
              </div>
              <input type="date" name="start_date">
            </div>
          </div>
          <div class="field">
            <label>When will you check out?</label>
            <div class="ui labeled input">
              <div class="ui green label">
                <i class="calendar icon"></i>
                Check Out
              </div>
              <input type="date" name="end_date">
            </div>
          </div>
        </div>
        <div class="four fields">
          <div class="three wide field">
            <label>How many Rooms? (-3)</label>
            <div class="ui floating dropdown labeled search icon fluid button">
              <i class="cubes icon"></i>
              <span class="text"> 1 Room </span>
              <div class="menu">
                <div class="item">1 Room</div>
                <div class="item">2 Rooms</div>
                <div class="item">3 Rooms</div>
              </div>
            </div>
          </div>
          <div class="four wide field">
            <label>How many Adults? (18+)</label>
            <div class="ui floating dropdown labeled search icon fluid button">
              <i class="users icon"></i>
              <span class="text"> 1 Adult </span>
              <div class="menu">
                <div class="item">1 Adult</div>
                <div class="item">2 Adults</div>
                <div class="item">3 Adults</div>
                <div class="item">4 Adults</div>
                <div class="item">5 Adults</div>
                <div class="item">6 Adults</div>
              </div>
            </div>
          </div>
          <div class="four wide field">
            <label>How many Children?  (-17)</label>
            <div class="ui floating dropdown labeled search icon fluid button">
              <i class="child icon"></i>
              <span class="text"> 0 Children </span>
              <div class="menu">
                <div class="item">0 Children</div>
                <div class="item">1 Child</div>
                <div class="item">2 Children</div>
                <div class="item">3 Children</div>
                <div class="item">4 Children</div>
                <div class="item">5 Children</div>
                <div class="item">6 Children</div>
                <div class="item">7 Children</div>
                <div class="item">8 Children</div>
                <div class="item">9 Children</div>
              </div>
            </div>
          </div>
          <div class="five wide field">
            <label>Will you use a coupon? (optional)</label>
            <div class="ui floating dropdown labeled search icon fluid button">
              <i class="money icon"></i>
              <span class="text"> Nothing </span>
              <div class="menu">
                <div class="item">Nothing</div>
                <div class="item">20% Discount Coupon</div>
              </div>
            </div>
          </div>
        </div>
        <div class="ui right floated right labeled blue icon submit button" style="margin-top:30px">
          <i class="right arrow icon"></i>
          Next
        </div>
    </div>
      </div>

      <div class="ui divider"></div>

      <!-- <button class="ui left floated labeled icon button">
        <i class="left arrow icon"></i>
        Previous
      </button> -->
      

    <!-- Grid Margin -->
    <div class="two wide column">
    </div>

  </div>

</div>

<script src="js/reservation.js"></script>
</body>

</html>
