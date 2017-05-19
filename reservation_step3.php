<?php
require_once("./lib/User.php");
if (!isset($_SESSION['uid'])){
        header('Location: http://www.starlit.kr/login.html');
}
$user=new User();
$user->sign_in_session();
if ($user->is_admin()){
        require_once("./template/admin_header.html");
} else {
        require_once("./template/customer_header.html");
}
?>

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
          <div class="completed step">
            <div class="content">
              <div class="title">Enter Information</div>
              <div class="description"></div>
            </div>
          </div>
          <div class="completed step">
            <div class="content">
              <div class="title">Choose Rooms</div>
              <div class="description"></div>
            </div>
          </div>
          <div class="active step">
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

        <div class="ui fluid green card">
          <div class="content">
            <div class="header"> Your Room</div>
            <div class="meta"></div>
            <div class="description">
              <div class="ui grid">
                <div class="ten wide column">
                  <div class="ui list">
                    <div class="item">
                      <div class="content">
                        <div class="ui fluid label">
                          <i class="calendar icon"></i> 2017/5/28 ~ 2017/6/1
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="content">
                        <div class="ui fluid label">
                          <i class="hotel icon"></i> Family room
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="content">
                        <div class="ui fluid label">
                          <i class="users icon"></i> 2 Adults, 3 Children
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="content">
                        <div class="ui big blue fluid label">
                          <i class="dollar icon"></i> 2300.00
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="six wide column">
                <div class="ui medium rounded image">
                  <img src="img/Family_1.jpg">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="ui divider"></div>

        <div class="ui form segment">
          <div class="two fields">
            <div class="eight wide field">
              <label>Will you have a Breakfast? (each $16.50)</label>
              <div class="ui labeled fluid input">
                <div class="ui label">
                  <i class="food icon"></i>
                  Breakfast
                </div>
                <input type="number" placeholder="">
              </div>
            </div>
            <div class="eight wide field">
              <label>Will you need a Baby Bed? (each $10.00)</label>
              <div class="ui floating dropdown labeled search icon fluid button">
                <i class="cubes icon"></i>
                <span class="text"> Baby Bed (up to 3) </span>
                <div class="menu">
                  <div class="item">1</div>
                  <div class="item">2</div>
                  <div class="item">3</div>
                </div>
              </div>
            </div>
          </div>
          <div class="field">
            <label>Additional Text</label>
            <textarea rows="2"> If you want, we will help you. </textarea>
          </div>
        </div>


        <div class="ui divider"></div>

        <button class="ui left floated labeled red icon button" onclick = "location.href = 'reservation_step2.php'">
          <i class="left arrow icon"></i>
          Previous
        </button>
        <button class="ui right floated right labeled blue icon button" onclick = "location.href = 'reservation_step4.php'">
          <i class="right arrow icon"></i>
          Next
        </button>
      </div>

      <!-- Grid Margin -->
      <div class="two wide column">
      </div>

    </div>

  </div>
<script src="js/reservation.js"></script>
</body>

</html>
