<!DOCTYPE html>
<link rel="stylesheet" href="loginstyles.css">
<div class="form shadow-sm p-3 mb-5 bg-white rounded">
  <img src="imgs/dslilogo.png" class="logo">
  <form id="survey-form">
    <fieldset>
      <input required id="name" type="text" placeholder="Username">
      <input required id="email" type="password" placeholder="Password">
    </fieldset>
    <div class="checkbox-row">
      <label class="checkbox-label">
        <input type="checkbox">
        <span class="checkmark"></span>
        <span class="remember-text">Remember me</span>
      </label>
      <a class="forgot" href="#">Forgot password?</a>
    </div>
    <button id="submit" type="submit">Login</button>
  </form>
</div>