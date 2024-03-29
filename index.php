<?php
require_once("./lib/User.php");
if (!isset($_SESSION["uid"])){
	require_once("template/user_header.html");
} else if (($_SESSION["uid"][3]) == 0){
	require_once("template/customer_header.html");
} else {
	require_once("template/admin_header.html");
}
?>
    
    <div class="ui vertical stripe center text" style="background-image: url('./img/background.jpg');
    height: 600px;
    background-position: center top;
    background-size: 100% auto;" >
    <h1 class="ui center aligned grid inverted header" style="font-size: 50px; font-family: 'PT Serif', serif;">
      Team TINT
      <br>
      HOTEL RESERVATION SYSTEM
    </h1>
  </div>


  <div class="ui vertical segment">

    <div class="ui middle aligned stackable equal height grid container">
      <div class="fourteen wide column">
        <form class="wide ui reservation form segment column">
          <div class="two fields">
            <div class="field">
              <label>When will you check in?</label>
              <div class="ui labeled input">
                <div class="ui green label">
                  <i class="calendar icon"></i>
                  Check In
                </div>
                <input type="date" placeholder="mysite.com">
              </div>
            </div>
            <div class="field">
              <label>When will you check out?</label>
              <div class="ui labeled input">
                <div class="ui green label">
                  <i class="calendar icon"></i>
                  Check Out
                </div>
                <input type="date" placeholder="mysite.com">
              </div>
            </div>
          </div>
          <div class="four fields">
            <div class="three wide field">
              <label>How many Rooms? (-3)</label>
              <!-- <input placeholder="Up to 5" type="number"> -->
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
          
        <input value="Reserve" class="ui right blue fluid button"/>
        </form>
      </div>
    </div>

  </div>






  <div class="ui vertical stripe segment" id='information'>
    <div class="ui middle aligned stackable grid container">
      <div class="row">
        <h1 class="ui header" id="RoomInformation">"Room Information"</h1>
      </div>
      <div class="row">
        <div class="eight wide column">
          <h3 class="ui header">Deluxe room</h3>
          <p>Your dream escape awaits at Singapore’s most iconic luxury hotel. The Deluxe Room welcomes you with plush, gold-and-earth toned furnishings and abundant natural light from floor-to-ceiling windows.</p>
        </div>
        <div class="six wide right floated column">
          <img src="./img/Deluxe_1.jpg" class="ui large bordered rounded image">
        </div>
      </div>
      <div class="row">
        <div class="eight wide column">
          <h3 class="ui header">Premier room</h3>
          <p>Relax in the contemporary comforts of your Premier Room, a bright and airy haven to uplift your body and spirit. Luxuriate in the deep-soaking bathtub, and relax with an array of convenient amenities including movies on demand and 24-hour room service.</p>
        </div>
        <div class="six wide right floated column">
          <img src="./img/Premier_1.jpg" class="ui large bordered rounded image">
        </div>
      </div>
      <div class="row">
        <div class="eight wide column">
          <h3 class="ui header">Family room</h3>
          <p>Carefully designed with families in mind, this sanctuary is the perfect combination of convenience and comfort, offering all your living needs in one space. Located on the 2nd and 3rd floors, the Family Room has a furnished balcony spacious enough for the whole family to enjoy open-air dining amidst lush garden views. Unwind on the plush sofa for movie night with the kids, then indulge in a relaxing bathtub soak before retreating under the covers to recharge — there’s plenty to explore in and around Marina Bay Sands.</p>
        </div>
        <div class="six wide right floated column">
          <img src="./img/Family_1.jpg" class="ui large bordered rounded image">
        </div>
      </div>
      <div class="row">
        <div class="center aligned column">
          <a class="ui huge button">Reservation</a>
        </div>
      </div>
    </div>
  </div>

  <div class="ui vertical stripe segment">
    <div class="ui middle aligned stackable grid container">
      <div class="row">
        <h1 class="ui header" id="Facilities">"Facilities"</h1>
      </div>
      <div class="row">
        <div class="wide column">
          <h3 class="ui header">Gymnasium</h3>
          <p>This modern gym, designed with consideration to harmony of lights, provides ultimate relaxation in the middle of the city. It is equipped with the latest 3D Kinesis Station and ergonomic workout equipments from Technogym of Italy. Some 90 equipment will offer effective workouts. The gym is divided into Cardio Zone, Weight Zone, Free Weight Zone, and Stretch Zone for diverse purposes.</p>
        </div>
      </div>
      <div class="row">
        <div class="five wide floated column">
          <img src="./img/gym.jpg" class="ui large bordered rounded image">
        </div>       
        <div class="five wide floated column">
          <img src="./img/gym2.jpg" class="ui large bordered rounded image">
        </div>

      </div>
      <div class="row">
        <div class="wide column">
          <h3 class="ui header">Swimming Pool</h3>
          <p>Indoor swimming pool with the dimension of 8m*14m has the state-of-art facilities including automatic windows on the roof to allow guests to enjoy fresh air and sunshine from outside when desired. Clean water, waterfalls massage, oxygen room, and ultraviolet ray room add more pleasure to swimming.</p>
        </div>
      </div>
      <div class="row">
        <div class="wide right floated column">
          <img src="./img/swim.jpg" class="ui large bordered rounded image">
        </div>
      </div>
      <div class="row">
        <div class="wide column">
          <h3 class="ui header">Golf Range</h3>
          <p></p>
        </div>
      </div>
      <div class="row">
        <div class="five wide floated column">
          <img src="./img/golf.jpg" class="ui large bordered rounded image">
        </div>
        <div class="five wide floated column">
          <img src="./img/screen_golf.jpg" class="ui large bordered rounded image">
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  $(document)
    .ready( () => {
      $('.ui.dropdown').dropdown();
    
      
    $('.ui.reservation.form')
      .form({
        fields: {
          start_date: {
            identifier: 'start_date',
            rules: [
              {
                type: 'empty',
                prompt: 'Please select start date'
              }
            ]
          },
          end_date: {
            identifier: 'end_date',
            rules: [
              {
                type : 'empty',
                prompt: 'Please select start date'
              }
            ]
          },
        },
        onSuccess: (event) => {
          event.preventDefault();
          location.href = 'reservation_step2.php';
        }
      });
  })
</script>



</body></html>
