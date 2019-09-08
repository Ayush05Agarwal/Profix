 



firebase.auth().onAuthStateChanged(function(user) {
    if (user) {
             // User is signed in
        var emailVerified = user.emailVerified;
        if (!emailVerified) {

            alert("verify your email id");
            firebase.auth().signOut();

        } else {

            document.getElementById("homePage").style.display = "block";
            document.getElementById("loginForm").style.display = "none";
            document.getElementById("gap").style.display = "none";




            var user = firebase.auth().currentUser;

            if (user != null) {

                var email_id = user.email;
                document.getElementById("user_para").innerHTML = "Welcome User : " + email_id;

            }
        }

  } else {
    // No user is signed in.
    
    document.getElementById("homePage").style.display = "none";
    document.getElementById("loginForm").style.display = "block";



  }
});












function login(){

  var userEmail = document.getElementById("email_field").value;
  var userPass = document.getElementById("password_field").value;

  firebase.auth().signInWithEmailAndPassword(userEmail, userPass).catch(function(error) {
    // Handle Errors here.
    var errorCode = error.code;
    var errorMessage = error.message;

    window.alert("Error : " + errorMessage);

    // ...
  });

}






function logout(){
  firebase.auth().signOut();
}










function tosignup() {
    window.location = "signup.html";

}


function toPasswordReset(){
  window.location= "reset_password.html";

}



/* SIDE NAVIGATION BLOCK */
function openNav(){document.getElementById("mySidenav").style.width = "300px";}
function closeNav(){document.getElementById("mySidenav").style.width = "0";}
/* -------------------------*/

/* CART */
function opencart(){document.getElementById("mycart").style.width = "100vw";}
function closecart(){document.getElementById("mycart").style.width = "0";}
/* -------------------------*/

/* logo and background aniamtions */
$(document).ready(function(){
  $(window).scroll(function() {
    if ($(document).scrollTop() > 100) {
      $("#yt").removeClass("logocover1");
      $("#yt").addClass("logocover2");  
      $("#tt").removeClass("logo1");
      $("#tt").addClass("logo2");
    } else {
      $("#yt").removeClass("logocover2");
      $("#yt").addClass("logocover1");
      $("#tt").removeClass("logo2");
      $("#tt").addClass("logo1");
    }
  });
});
/* -------------------------*/


/* BOOKLIST HIDING */
var $menu1 = $('#s1b1l');
$('#s1b1').click(function () {
  $menu1.toggle();});
$(document).mouseup(function (e) {
   if (!$menu1.is(e.target) // if the target of the click isn't the container...
   && $menu1.has(e.target).length === 0) // ... nor a descendant of the container
   {$menu1.hide();}});

var $menu2 = $('#s1b2l');
$('#s1b2').click(function () {
  $menu2.toggle();});
$(document).mouseup(function (e) {
   if (!$menu2.is(e.target) // if the target of the click isn't the container...
   && $menu2.has(e.target).length === 0) // ... nor a descendant of the container
   {$menu2.hide();}});

var $menu3 = $('#s1b3l');
$('#s1b3').click(function () {
  $menu3.toggle();});
$(document).mouseup(function (e) {
   if (!$menu3.is(e.target) // if the target of the click isn't the container...
   && $menu3.has(e.target).length === 0) // ... nor a descendant of the container
   {$menu3.hide();}});

var $menu4 = $('#s1b4l');
$('#s1b4').click(function () {
  $menu4.toggle();});
$(document).mouseup(function (e) {
   if (!$menu4.is(e.target) // if the target of the click isn't the container...
   && $menu4.has(e.target).length === 0) // ... nor a descendant of the container
   {$menu4.hide();}});

var $menu5 = $('#s1b5l');
$('#s1b5').click(function () {
  $menu5.toggle();});
$(document).mouseup(function (e) {
   if (!$menu5.is(e.target) // if the target of the click isn't the container...
   && $menu5.has(e.target).length === 0) // ... nor a descendant of the container
   {$menu5.hide();}});

var $menu6 = $('#s1b6l');
$('#s1b6').click(function () {
  $menu6.toggle();});
$(document).mouseup(function (e) {
   if (!$menu6.is(e.target) // if the target of the click isn't the container...
   && $menu6.has(e.target).length === 0) // ... nor a descendant of the container
   {$menu6.hide();}});

var $menu7 = $('#s2b1l');
$('#s2b1').click(function () {
  $menu7.toggle();});
$(document).mouseup(function (e) {
   if (!$menu7.is(e.target) // if the target of the click isn't the container...
   && $menu7.has(e.target).length === 0) // ... nor a descendant of the container
   {$menu7.hide();}});

var $menu8 = $('#s2b2l');
$('#s2b2').click(function () {
  $menu8.toggle();});
$(document).mouseup(function (e) {
   if (!$menu8.is(e.target) // if the target of the click isn't the container...
   && $menu8.has(e.target).length === 0) // ... nor a descendant of the container
   {$menu8.hide();}});

var $menu9 = $('#s2b3l');
$('#s2b3').click(function () {
  $menu9.toggle();});
$(document).mouseup(function (e) {
   if (!$menu9.is(e.target) // if the target of the click isn't the container...
   && $menu9.has(e.target).length === 0) // ... nor a descendant of the container
   {$menu9.hide();}});

var $menu10 = $('#s2b4l');
$('#s2b4').click(function () {
  $menu10.toggle();});
$(document).mouseup(function (e) {
   if (!$menu10.is(e.target) // if the target of the click isn't the container...
   && $menu10.has(e.target).length === 0) // ... nor a descendant of the container
   {$menu10.hide();}});

var $menu11 = $('#s2b5l');
$('#s2b5').click(function () {
  $menu11.toggle();});
$(document).mouseup(function (e) {
   if (!$menu11.is(e.target) // if the target of the click isn't the container...
   && $menu11.has(e.target).length === 0) // ... nor a descendant of the container
   {$menu11.hide();}});

var $menu12 = $('#s2b6l');
$('#s2b6').click(function () {
  $menu12.toggle();});
$(document).mouseup(function (e) {
   if (!$menu12.is(e.target) // if the target of the click isn't the container...
   && $menu12.has(e.target).length === 0) // ... nor a descendant of the container
   {$menu12.hide();}});
/* -------------------------*/

/* SMOOTH BOOKMARK SCROLLING */
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 500, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
/* -------------------------*/