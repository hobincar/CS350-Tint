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
  <div class="ui hidden divider"></div>
  <div class="ui grid">
    <div class="two wide column"></div>
  
  
    <div class="ui grid fourteen wide column">
      <div class="three wide column">
        <div class="ui vertical fluid tabular menu">
          <a class="active item" data-tab="first">
            Reservation
          </a>
          <a class="item" data-tab="second">
            My information
          </a>
          <a class="item" data-tab="third">
            My coupon
          </a>
        </div>
      </div>


      <div class="twelve wide stretched column">
        <div class="ui bottom attached active tab segment" data-tab="first">
          <div class="ui divided items">
            <div class="item item1">
              <div class="image">
                <img src="img/Deluxe_1.jpg">
              </div>
              <div class="content">
                <a class="header">Standard Double</a>

                <div class="item1 meta date-range">
                  <i class="checked calendar icon"></i>
                  2017-05-17 ~ 2017-05-23
                </div>
                <div class="item1 meta personnel">
                  <i class="users icon"></i>
                  2
                </div>
                <div class="description">
                  <p>
                    Thanks to stylish design and pleasant atmosphere, our myriad advantages and attractions as a premium business hotel are second to none. Provides practical and customized service through a comfortable stay to business travelers attending academic conferences while embarking on sightseeing excursions.
                  </p>
                </div>
                <div class="actions">
                  <div id="cancel1" class="ui right floated red button cancel-btn">
                    <span>Cancel</span>
                    <i class="right chevron icon"></i>
                  </div>
                  <div class="ui right floated blue button modify-btn">
                    <span>Modify</span>
                    <i class="right chevron icon"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="item item2">
              <div class="image">
                <img src="img/Family_1.jpg">
              </div>
              <div class="content">
                <a class="header">Hollywood Twin Room</a>

                <div class="item1 meta date-range">
                  <i class="checked calendar icon"></i>
                  2017-05-24 ~ 2017-05-26
                </div>
                <div class="item1 meta personnel">
                  <i class="users icon"></i>
                  2
                </div>
                <div class="description">
                  <p>
                    Hollywood Twin Room has two single beds joined together for the wider width of the bed, making the stay particularly convenient for family guests with infant or toddler.
                  </p>
                </div>
                <div class="actions">
                  <div id="cancel2" class="ui right floated red button cancel-btn">
                    <span>Cancel</span>
                    <i class="right chevron icon"></i>
                  </div>
                  <div class="ui right floated blue button modify-btn">
                    <span>Modify</span>
                    <i class="right chevron icon"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="item item3">
              <div class="image">
                <img src="img/Premier_1.jpg">
              </div>
              <div class="content">
                <a class="header">Deluxe Suite Family Twin</a>

                <div class="item1 meta date-range">
                  <i class="checked calendar icon"></i>
                  2017-05-17 ~ 2017-05-23
                </div>
                <div class="item1 meta personnel">
                  <i class="users icon"></i>
                  2
                </div>
                <div class="description">
                  <p>
                    Suite rooms at the top floors command a panoramic view for a truly memorable stay. With an unobstructed view of Gapcheon, Expo Bridge, a Daejeon landmark, enhances romance and leisure in your trip to Daejeon. With customer convenience as top priority, our interior is designed to create a harmony that soothes and satisfies guests for business and pleasure travelers.
                  </p>
                </div>
                <div class="actions">
                  <div id="cancel3" class="ui right floated red button cancel-btn">
                    <span>Cancel</span>
                    <i class="right chevron icon"></i>
                  </div>
                  <div class="ui right floated blue button modify-btn">
                    <span>Modify</span>
                    <i class="right chevron icon"></i>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="ui bottom attached tab segment" data-tab="second">
        <form class="ui large form">
          <div class="ui stacked segment">
            <div id="email_field" class="field">
              <div class="ui left icon input">
                <h5 id="info-email">
                  <i class="mail icon"></i>
                  Email: helloworld@kaist.ac.kr
                </h5>
              </div>
              <div class="ui email error hide"></div>
            </div>
            <div id="name_field" class="field">
              <div class="ui left icon input">
                <h5 id="info-name" class="row">
                  <i class="user icon"></i>
                  Name: John Cena
                </h5>
              </div>
            </div>
            <div id="phone_number_field" class="field">
              <div class="ui left icon input">
                <h5 id="info-phone-number">
                  <i class="mobile icon"></i>
                  Phone Number: 010-1234-5678
                </h5>
              </div>
              <div class="ui phone_number error hide"></div>
            </div>
            <div id="modify-info-btn" class="ui fluid large blue submit button">Modify</div>
          </div>
          <div class="ui error message"></div>
        </form>
      </div>
        
      <div class="ui bottom attached tab segment" data-tab="third">
        <p>
          <img class="ui segment" width="30%" height="15%" src="img/coupon.png"/>
          <h4>15% Discount Coupon</h4>
        </p>
      </div>
    </div>
    <div class="two wide column"></div>
  </div>

  
  <!-- Modify User Info Modal -->
  <div class="ui modify-info modal">
    <i class="close icon"></i>
    <div class="header">
      Modify User Information
    </div>
    <div class="content">
      <form class="ui large modify-info form">
        <div class="ui stacked segment">
          <div id="email_field" class="field">
            <div class="ui left icon input">
              <i class="mail icon"></i>
              <input id="email" class="ui" type="text" name="email" placeholder="E-mail address" value="helloworld@kaist.ac.kr">
            </div>
            <div class="ui email error hide"></div>
          </div>
          <div id="old_password_field" class="field">
            <div class="ui left icon input">
              <i class="lock icon"></i>
              <input id="old_password" type="password" name="old_password" placeholder="Old Password">
            </div>
            <div class="ui old_password error hide"></div>
          </div>
          <div id="password1_field" class="field">
            <div class="ui left icon input">
              <i class="lock icon"></i>
              <input id="password1" type="password" name="password1" placeholder="New Password(Only if you want to change it)">
            </div>
            <div class="ui password1 error hide"></div>
          </div>
          <div id="password2_field" class="field">
            <div class="ui left icon input">
              <i class="lock icon"></i>
              <input id="password2" type="password" name="password2" placeholder="New Password again">
            </div>
            <div class="ui password2 error hide"></div>
          </div>
          <div id="name_field" class="field">
            <div class="ui left icon input">
              <i class="user icon"></i>
              <input id="name" class="ui" type="text" name="name" placeholder="Name" value="John Cena">
            </div>
          </div>
          <div id="phone_number_field" class="field">
            <div class="ui left icon input">
              <i class="mobile icon"></i>
              <input id="phone_number" class="ui" type="text" name="phone-number" placeholder="Phone number     e.g. 010-1010-1010" value="010-1234-5678">
            </div>
            <div class="ui phone_number error hide"></div>
          </div>
          <input id="submit_btn" type="submit" value="Confirm" class="ui fluid large teal submit button"/>
        </div>
        <div class="ui error message"></div>
      </form>
    </div>
  </div>

  
  
  <!-- Modify Modal -->
  <div class="ui modify modal">
    <div class="header">Modify Your Reservation</div>  
    <div class="content">
      <div class="ui form segment">
        <div class="two fields">
          <div class="field">
            <label>When will you check in?</label>
            <div class="ui labeled input">
              <div class="ui green label">
                <i class="calendar icon"></i>
                Check In
              </div>
              <input type="date" placeholder="mysite.com" value="2017-05-13">
            </div>
          </div>
          <div class="field">
            <label>When will you check out?</label>
            <div class="ui labeled input">
              <div class="ui green label">
                <i class="calendar icon"></i>
                Check Out
              </div>
              <input type="date" placeholder="mysite.com" value="2017-05-17">
            </div>
          </div>
        </div>
        <div class="four fields">
          <div class="three wide field">
            <label>How many Rooms? (-3)</label>
            <!-- <input placeholder="Up to 5" type="number"> -->
            <div class="ui floating dropdown labeled search icon fluid button">
              <i class="cubes icon"></i>
              <span class="text"> 2 Rooms </span>
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
              <span class="text"> 2 Adults </span>
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
              <span class="text"> Not used </span>
              <div class="menu">
                <div class="item">20% Discount Coupon</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ui form segment">
        <div class="two fields">
          <div class="eight wide field">
            <label>Will you have a Breakfast? (each $16.50)</label>
            <div class="ui labeled fluid input">
              <div class="ui label">
                <i class="food icon"></i>
                Breakfast
              </div>
              <input type="number" placeholder="" value=4>
            </div>
          </div>
          <div class="eight wide field">
            <label>Will you need a Baby Bed? (each $10.00)</label>
            <div class="ui floating dropdown labeled search icon fluid button">
              <i class="cubes icon"></i>
              <span class="text"> 0 </span>
              <div class="menu">
                <div class="item">0</div>
                <div class="item">1</div>
                <div class="item">2</div>
                <div class="item">3</div>
              </div>
            </div>
          </div>
        </div>
        <div class="field">
          <label>Additional Text</label>
          <textarea rows="2" placeholder="If you want, we will help you."></textarea>
        </div>
      </div>
      <div class="ui segment">
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
          </div>
        </div>
      </div>
      <div class="actions">
        <div class="ui button yellow save-change-btn" tabindex="0">Save &amp; Pay</div>
        <div class="ui button red modal-close-btn" tabindex="1">Cancel</div>
      </div>
    </div>
  </div>
  
  
  
<!-- Pay Modal -->
<div class="ui pay modal">
  <div class="header">Check &amp; Pay Your Reservation</div>
  <div class="content">
    <div class="ui fluid green card">
      <div class="content">
        <div class="header">Your Room</div>
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
                      <i class="dollar icon"></i> 2557.50
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
    <form class="ui pay form container">
    <h4 class="ui dividing header red">Additional Charge: $153.74</h4>
    <div class="field">
      <label>Name</label>
      <div class="two fields">
        <div class="field">
          <input type="text" name="shipping[first-name]" placeholder="First Name">
        </div>
        <div class="field">
          <input type="text" name="shipping[last-name]" placeholder="Last Name">
        </div>
      </div>
      <div class="field">
        <label>Billing Address</label>
        <div class="fields">
          <div class="twelve wide field">
            <input type="text" name="shipping[address]" placeholder="Street Address">
          </div>
          <div class="four wide field">
            <input type="text" name="shipping[address-2]" placeholder="Apt #">
          </div>
        </div>
      </div>
      <h4 class="ui dividing header">Billing Information</h4>
      <div class="field">
        <label>Card Type</label>
        <div class="ui selection dropdown">
          <input type="hidden" name="card[type]">
          <div class="default text">Type</div>
          <i class="dropdown icon"></i>
          <div class="menu">
            <div class="item" data-value="visa">
              <i class="visa icon"></i>
              Visa
            </div>
            <div class="item" data-value="amex">
              <i class="amex icon"></i>
              American Express
            </div>
            <div class="item" data-value="discover">
              <i class="discover icon"></i>
              Discover
            </div>
          </div>
        </div>
      </div>
      <div class="fields">
        <div class="seven wide field">
          <label>Card Number</label>
          <input type="text" name="card[number]" maxlength="16" placeholder="Card #">
        </div>
        <div class="three wide field">
          <label>CVC</label>
          <input type="text" name="card[cvc]" maxlength="3" placeholder="CVC">
        </div>
        <div class="six wide field">
          <label>Expiration</label>
          <div class="two fields">
            <div class="field">
              <select class="ui fluid search dropdown" name="card[expire-month]">
                <option value="">Month</option>
                <option value="1">January</option>
                <option value="2">February</option>
                <option value="3">March</option>
                <option value="4">April</option>
                <option value="5">May</option>
                <option value="6">June</option>
                <option value="7">July</option>
                <option value="8">August</option>
                <option value="9">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
              </select>
            </div>
            <div class="field">
              <input type="text" name="card[expire-year]" maxlength="4" placeholder="Year">
            </div>
          </div>
        </div>
      </div>
    </div>
     <h4 class="ui dividing header">Receipt</h4>
     <div id="receipt_field" class="field">
      <label>Send Receipt To:</label>
      <div class="ui fluid multiple search selection dropdown">
        <input type="hidden" name="receipt">
        <i class="dropdown icon"></i>
        <div class="default text">Contacts</div>
        <div class="menu">
          <div class="item" data-value="Cell Phone" data-text="Cell Phone">
            Cell Phone
          </div>
          <div class="item" data-value="E-mail" data-text="E-mail">
            E-mail

          </div>
        </div>
      </div>
      <div class="ui segment">
        <div class="field">
          <div class="ui toggle checkbox">
            <input type="checkbox" name="gift" tabindex="0" class="hidden">
            <label>I will receive reservation reminders the day before check-in</label>
          </div>
        </div>
      </div>

    </div>
    <input type="submit" value="Pay for $2557.50" class="ui positive fluid button" id="payment_button" tabindex="0"/>
    <div class="ui error message"></div>
    <div class="ui hidden divider"></div>
    <div class="ui button blue back-to-modify-btn" tabindex="0">Back to Modify</div>
    <div class="ui button red modal-close-btn" tabindex="1">Cancel</div>
  </form>
</div>
</div>

  
  
  <!-- Confirm Modal -->
  <div class="ui confirm modal">
    <div class="header">Confirm Your Reservation</div>
    <div class="content">
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

      <div class="ui container labeled green icon button modal-close-btn">
        <i class="check icon"></i>
        Confirm
      </div>
    </div>
  </div>
  
  
<!-- Refund Modal -->
<div class="ui refund modal">
  <div class="header">Check Your Refund</div>
  <div class="content">
    <h4 class="ui dividing header red">Commission: $153.74</h4>
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

    <div class="ui container labeled green icon button modal-close-btn">
      <i class="check icon"></i>
      Confirm
    </div>
  </div>
</div>

  
  <!-- Progress Modal -->
  <div class="ui small modal">
    <i class="close icon"></i>
    <div class="header">
      Payment is in progress automatically.
    </div>
    <div class="content">
      <div class="description">
        <p>If this window persists, please try again.</p>
        <p>Thank you for using our hotel.</p>
        <div class="ui indicating progress">
          <div class="bar"></div>
        </div>
      </div>
    </div>
  </div>

  

  
  
  <!-- Cancel Modal -->
  <div class="ui cancel modal">
    <div class="header">Cancel Your Reservation</div>
    <div class="content">
      <h3>The below reservation will be canceled.</h3>
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
                        <i class="dollar icon"></i> 2557.50
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
    </div>
    <div class="ui hidden divider"></div>
    <div class="actions">
      <div class="ui button red remove-btn" tabindex="0">Remove</div>
      <div class="ui button black modal-close-btn" tabindex="1">Cancel</div>
    </div>
  </div>
  
  <link rel="stylesheet" type="text/css" href="css/template.css">
  <link rel="stylesheet" type="text/css" href="css/mypage.css">
  <script src="js/template.js"></script>
  <script src="js/mypage.js"></script>
</body>

</html>
