<!DOCTYPE html>
<html>
<head>
  <title>Check username availability using PHP and jQuery - PHP Dev Zone</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" >
</head>
<body class="container-fluid mt-3">
    <h4>Check username availability - <a href="https://www.php-dev-zone.com" target="_blank">PHP Dev Zone</a></h4>
    <div class="row mt-3">
        <div class="col-md-3">
            <input type="text" name="username" id="username" class="form-control mb-2" autocomplete="off" placeholder="Enter Username" />
            <div id="username_availability_response"></div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#username").keyup(function() {
                var username = $(this).val().trim();
                if (username != '') {
                    $.ajax({
                        url: 'username_availability_checker.php',
                        type: 'post',
                        data: { username: username },
                        success: function(response) {
                            $('#username_availability_response').html(response);
                        }
                    });
                } else {
                    $("#username_availability_response").html("");
                }
            });
        });
    </script>
</body>
</html>