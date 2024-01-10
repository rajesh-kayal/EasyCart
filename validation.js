$(document).ready(function () {

//name validation
$('#name').keyup(function () {
  var name = $(this).val();
  if (name == "") {
    $('#nameerror').html("**Please enter your name");
  } else if (!isNaN(name)) {
    $('#nameerror').html("**Name should not contain numbers");
  } else {
    $('#nameerror').hide();
    if (name.length > 15) {
      $('#nameerror').html("**Maximum 15 characters allowed.");
      $('#nameerror').show();
    } 
  }
});


  //email validation
var pattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/;
$('#email').keyup(function () {
  var email = $(this).val();
  if (email == "") {
    $('#emailerror').html("**Email id is required..!");
    $('#emailerror').show();
  } else if (!pattern.test(email)) {
    $('#emailerror').html("**Please enter a valid email");
    $('#emailerror').show();
  } else {
    $('#emailerror').hide();
  }
});


  //password validation
  $('#pass').keyup(function () {
    var pass = $(this).val();
    if (pass == '') {
      $('#passerror').html("Password is requered..!");
    } else if (pass.length < 8) {
      $('#passerror').html("**Enter minimum 8 charactor");
    } else if (pass.length > 10) {
      $('#passerror').html("**Enter maxium 10 charactor");
    } else if (!/[a-z]/.test(pass)) {
      $('#passerror').html("**Enter atlest one lowercase");
    } else if (!/[A-Z]/.test(pass)) {
      $('#passerror').html("**Enter atlest one Uppersase");
    } else if (!/[1-9]/.test(pass)) {
      $('#passerror').html("**Enter atlest one Number");
    } else if (!/[$#&*@%]/.test(pass)) {
      $('#passerror').html("**Enter atlest one spacial carector('$#&*@%')");
    } else {
      $('#passerror').hide();
      $('#passsuccess').html('Strong password').css('color', 'green');
      $('#passsuccess').show();
    }
  });
  //Mobile validation
  $('#phn').keyup(function () {
    var phn = $(this).val();
    if (phn == '') {
      $('#phnerror').html('Mobile number is required..!');
    } else if (isNaN(phn)) {
      $('#phnerror').html('Do not use any character in mobile number');
    } else if (phn.length !== 10) {
      $('#phnerror').html('**Please enter 10 digit mobile number');
    } else {
      $('#phnerror').hide();
    }
  });

  //document end
});
