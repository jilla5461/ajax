$(document).ready(function() {
  $('#loginForm').submit(function(event) {
      event.preventDefault();

      var formData = {
          username: $("#username").val(),
          password: $("#password").val(),
      };

      $.ajax({
          type: 'POST',
          url: 'login1.php',
          data: formData,
          dataType: 'json',
          success: function(response) {
              $('#message').html(response.message);
              if(response.status === "success") {
                  window.location.href = 'dashboard.php';
              }
              
          },
          // error: function(xhr, status, error) {
          //     console.error(xhr.responseText);
          // }
      });
  });
});

// Registration Form Submission
$("#register-form").submit(function (event) {
  event.preventDefault();
  var formData = {
    'new-username': $("#new-username").val(),
    'new-password': $("#new-password").val()
  };
  $.ajax({
    type: "POST",
    url: "add.php",
    data: formData,
    success: function (response) {
      $("#message").html(response);
      // Redirect to index.php after successful registration
      if (response.trim() === "User registered successfully!") {
        window.location = "index.html";
      }
    }
  });
});

