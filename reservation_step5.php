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
          Reservation Complete
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
          <div class="completed step">
            <div class="content">
              <div class="title">Select Options</div>
              <div class="description"></div>
            </div>
          </div>
          <div class="completed step">
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
                <div class="eight wide column">
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
                        <div class="ui fluid label">
                          <i class="cube icon"></i> 1 Baby Bed
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="content">
                        <div class="ui fluid label">
                          <i class="food icon"></i> 15 Breakfast
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
                <div class="eight wide column">
                  <div class="ui fluid rounded image">
                    <img src="img/Family_1.jpg">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="ui divider"></div>

        <button class="ui container labeled green icon button" onclick="location.href = 'mypage.php'">
          <i class="check icon"></i>
          Confirm
        </button>

      </div>

      <!-- Grid Margin -->
      <div class="two wide column">
      </div>

    </div>

  </div>
  
  <!-- Coupon Modal -->
  <div class="ui small coupon modal">
    <i class="close icon"></i>
    <div class="header">
      Your 5th reservation! Here's a discount coupon for you!
    </div>
    <div class="ui segment content center aligned">
      <img class="ui segment" width="50%" height="25%" src="img/coupon.png"/>
      <h4>15% Discount Coupon</h4>
    </div>
  </div>
  
<script src="js/reservation.js"></script>
<script>
  $(document)
    .ready(() => {
      $(".ui.coupon.modal").modal('show');
  })
</script>
</body>

</html>
