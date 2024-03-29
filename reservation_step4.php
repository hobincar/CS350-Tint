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
          <div class="completed step">
            <div class="content">
              <div class="title">Select Options</div>
              <div class="description"></div>
            </div>
          </div>
          <div class="active step">
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

        <div class="ui divider"></div>

      <form class="ui step4 form segment">
        <h4 class="ui dividing header">Billing Information</h4>
        <div class="field required">
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
          <div class="seven wide field required">
            <label>Card Number</label>
            <input type="number" name="card[number]" maxlength="16" placeholder="Card #">
          </div>
          <div class="three wide field required">
            <label>CVC</label>
            <input type="number" name="card[cvc]" maxlength="3" placeholder="CVC">
          </div>
          <div class="six wide field required">
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
              <div class="field required">
                <input type="number" name="card[expire-year]" maxlength="4" placeholder="Year">
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
        <div class="ui positive submit fluid button" id="payment_button" tabindex="0">
          Pay for $2557.50
        </div>
        <div class="ui error message"></div>
      </form>

      <div class="ui divider"></div>

        <div class="ui divider"></div>

        <button class="ui left floated labeled red icon button" onclick = "location.href = 'reservation_step3.php'">
          <i class="left arrow icon"></i>
          Previous
        </button>
      </div>

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
        <div class="actions">
          <div class="ui negative deny button">
            Cancel
          </div>
        </div>
      </div>

      <!-- Grid Margin -->
      <div class="two wide column">
      </div>

    </div>

  </div>
<script src="js/reservation.js"></script>
</body>

</html>
