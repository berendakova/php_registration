
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<form class="form-horizontal" action='' method="POST">
  <fieldset>
    <div id="legend">
      <legend class="">Register</legend>
    </div>
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username">Username</label>
      <div class="controls">
        <input type="text" id="username" name="user_name" placeholder="Ivan" class="input-xlarge">
        <p class="help-block">Username can contain any letters or numbers, without spaces</p>
      </div>
    </div>

    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">E-mail</label>
      <div class="controls">
        <input type="text" id="email" name="user_email" placeholder="ex@gmail.com" class="input-xlarge">
        <p class="help-block">Please provide your E-mail</p>
      </div>
    </div>

    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="password" id="password" name="user_password" placeholder="" class="input-xlarge">
        <p class="help-block">Password should be at least 4 characters</p>
      </div>
    </div>

    <div class="control-group">
      <!-- Password -->
      <label class="control-label"  for="password_confirm">Password (Confirm)</label>
      <div class="controls">
        <input type="password" id="password_confirm" name="user_password_replay" placeholder="" class="input-xlarge">
        <p class="help-block">Please confirm password</p>
      </div>
    </div>

      <div class="control-group">
          <!-- Age -->
          <label class="control-label">Age</label>
          <div class="controls">
              <input type="text" id="password_confirm" name="user_age" placeholder="" class="input-xlarge">
              <p class="help-block">Please enter your age</p>
          </div>
      </div>

      <div class="control-group">
          <!-- Country -->
          <label class="control-lable">Country</label>
          <div class="controls">
              <select id="phone" name="country">
                  <option value="Russia">Russia</option>
                  <option value="Germany">Germany</option>
                  <option value="USA">USA</option>
                  <option value="Kazakhstan">Kazakhstan</option>
              </select>
              <p class="help-block">Please enter your country</p>
          </div>
      </div>

      <div class="control-group">
          <!-- Bio -->
          <label class="control-label">Bio</label>
          <div class="controls">
              <textarea name="user_bio" placeholder="i am Ivan" class="input-xlarge"></textarea>
              <p class="help-block">Please enter info about you</p>
          </div>
      </div>


    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success">Register</button>
      </div>
    </div>
  </fieldset>
</form>