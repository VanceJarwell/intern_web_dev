@extends('layouts.master')


  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->

      <!-- Icon -->
      <div class="fadeIn first">
        <br>
        <h1> Welcome! </h1>
      </div>

      <!-- Login Form -->
      <form>
        <input type="text" id="login" class="fadeIn second" name="login" placeholder="ID">
        <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
        {{-- <input type="submit" class="fadeIn fourth" value="Log In"> --}}
      </form>
      <div class="header-center"> 
        <h3><a href="/home">Log in</a></h3>
      </div>

      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="#">Forgot Password?</a>
      </div>

    </div>
  </div>
