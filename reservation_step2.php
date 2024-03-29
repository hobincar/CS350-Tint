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
          <div class="active step">
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

        <div class="ui fluid green card">
          <div class="content">
            <div class="header">Your Information</div>
            <div class="meta"></div>
            <div class="description">
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
              </div>
            </div>
          </div>
        </div>

        <div class="ui divider"></div>

        <div class="ui divided items">
          <div class="item">
            <div class="image">
              <img class="ui rounded image" src="img/Deluxe_1.jpg">
            </div>
            <div class="content">
              <a class="header">Deluxe Room</a>
              <div class="meta">
                <span class="price">
                  <i class="dollar icon"></i>
                  350.00 per night
                </span>
              </div>
              <div class="description">
                <p>Your dream escape awaits at Singapore’s most iconic luxury hotel. The Deluxe Room welcomes you with plush, gold-and-earth toned furnishings and abundant natural light from floor-to-ceiling windows.</p>
                <div class="ui list">
                  <div class="item">
                    <i class="info icon"></i>
                    <div class="content">
                      39 square metres
                    </div>
                  </div>
                  <div class="item">
                    <i class="info icon"></i>
                    <div class="content">
                      Spacious bathroom with glass-enclosed shower
                    </div>
                  </div>
                </div>
              </div>
              <div class="extra">
                <div class="ui label"><i class="gift icon"></i> Promotion</div>
                <div class="ui label"><i class="certificate icon"></i> Recommended</div>
                <div class="ui right floated primary toggle inactive button">
                  <i class="left checked calendar icon"></i>
                  Reserve this room
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="image">
              <img class="ui rounded image" src="img/Premier_1.jpg">
            </div>
            <div class="content">
              <a class="header">Premier Room</a>
              <div class="meta">
                <span class="price">
                  <i class="dollar icon"></i>
                  450.00 per night
                </span>
              </div>
              <div class="description">
                <p>Relax in the contemporary comforts of your Premier Room, a bright and airy haven to uplift your body and spirit. Luxuriate in the deep-soaking bathtub, and relax with an array of convenient amenities including movies on demand and 24-hour room service.</p>
                <div class="ui list">
                  <div class="item">
                    <i class="info icon"></i>
                    <div class="content">
                      47 square metres
                    </div>
                  </div>
                  <div class="item">
                    <i class="info icon"></i>
                    <div class="content">
                      Spacious bathroom with glass-enclosed shower and deep-soaking bathtub
                    </div>
                  </div>
                </div>
              </div>
              <div class="extra">
                <div class="ui right floated primary toggle inactive button">
                  <i class="left checked calendar icon"></i>
                  Reserve this room
                </div>
                <div class="ui label"><i class="gift icon"></i> Promotion</div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="image">
              <img class="ui rounded image" src="img/Family_1.jpg">
            </div>
            <div class="content">
              <a class="header">Family Room</a>
              <div class="meta">
                <span class="price">
                  <i class="dollar icon"></i>
                  520.00 per night
                </span>
              </div>
              <div class="description">
                <p>Carefully designed with families in mind, this sanctuary is the perfect combination of convenience and comfort, offering all your living needs in one space. Located on the 2nd and 3rd floors, the Family Room has a furnished balcony spacious enough for the whole family to enjoy open-air dining amidst lush garden views. Unwind on the plush sofa for movie night with the kids, then indulge in a relaxing bathtub soak before retreating under the covers to recharge — there’s plenty to explore in and around Marina Bay Sands.</p>
                <div class="ui list">
                  <div class="item">
                    <i class="info icon"></i>
                    <div class="content">
                      86 square metres
                    </div>
                  </div>
                  <div class="item">
                    <i class="info icon"></i>
                    <div class="content">
                      Spacious furnished balcony with garden views
                    </div>
                  </div>
                </div>
              </div>
              <div class="extra">
                <div class="ui right floated primary toggle inactive button">
                  <i class="left checked calendar icon"></i>
                  Reserve this room
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="ui divider"></div>

      <button class="ui left floated labeled red icon negative button" onclick="window.location.href='reservation_step1.php'">
        <i class="left arrow icon"></i>
        Previous
      </button>
      <button id="next_btn" class="ui right floated right labeled icon positive button">
        <i class="right arrow icon"></i>
        Next
      </button>
    </div>

    </div>

  </div>
<script src="js/reservation.js"></script>
</body>

</html>
