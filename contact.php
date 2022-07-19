 <!-- Header-->
 <header class="bg-dark py-5" id="main-header">
    <div class="container h-100 d-flex align-items-end justify-content-center w-100">
        <div class="text-center text-white w-100">
            <h1 class="display-4 fw-bolder"><?php echo $_settings->info('name') ?></h1>
            <p class="lead fw-normal text-white-50 mb-0">Contact us</p>
            <div class="col-auto mt-2">
                <button class="btn btn-primary btn-lg rounded-0" id="send_request" type="button">Send Service Request</button>
            </div>
        </div>
    </div>
</header>
<div class="container1">
  <div style="text-align:center">
    <h2>Send Message</h2>
    <p>leave us a message:</p>
  </div>
  <div class="row1">
    <div class="column1">
      <img src="/w3images/map.jpg" style="width:100%">
    </div>
    <div class="column1">
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="lname">Email</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">

        <label for="country">District</label>
        <select id="country" name="country">
          <option value="australia">Tinsukia</option>
          <option value="canada">Dibrugarh</option>
          <option value="usa">Sivasagar</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>

<script>
    $(function(){
      $('#send_request').click(function(){
            uni_modal("Fill the Service Request Form","send_request.php",'large')
        })

    })
    </script>
