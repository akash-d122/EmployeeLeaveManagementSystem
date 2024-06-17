<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MITS Login</title>
  <meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" href="assets/css/styles2.css">
  <link rel="stylesheet" href="styles.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <h1>Leave Management System</h1>
  <h4>(Internal Access)</h4>
  <style>
    h1, h4 {
      position: absolute;
      top: 100px;
      left: 50%;
      transform: translateX(-50%);
      text-align: center;
      font-size: 40px;
      z-index: 3;
      color: #FFFF33;
      font-family: Poppins;
    }

    h4 {
      font-size: 18px;
      top: 140px;
    }

    form {
      position: relative;
      z-index: 2;
      margin-top: 0px;
    }

    .btn {
      display: block;
      width: 100%;
      padding: 10px;
      background-color: #5bbad5;
      color: white;
      border: none;
      border-radius: 4px;
      font-size: 16px;
      cursor: pointer;
    }

    .btn:hover {
      background-color: #4aa3c3;
    }

    #error-message {
      color: red;
      text-align: center;
      display: none;
    }

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: url("assets/images/bg.jpg") no-repeat;
      background-size: cover;
      background-position: center;
    }
  </style>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
  <img src="leave_04.jpg" alt="Leave Management System" width="355" height="355">
  <div class="wrapper">
    <form id="login-form" action="login" method="POST">
      <div style="text-align: center; font-family: Poppins; font-size: 38px; margin-bottom: 20px; color: white; text-decoration: underline; font-weight: bold;">Staff Login</div>
      <div id="error-message">Invalid Employee ID or Date of Birth</div>
      <div class="input-box">
        <input id="employee_id" type="text" name="employee_id" placeholder="Employee ID" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input id="dob" type="date" name="dob" placeholder="DD/MM/YYYY" required>
        <i class='bx bxs-calendar-event'></i>
      </div>
      <button type="submit" class="btn" style="font-size: 18px;">Login</button>
    </form>
  </div>

  <script>
    document.getElementById('login-form').addEventListener('submit', function(e) {
      e.preventDefault();
      const employeeId = document.getElementById('employee_id').value;
      const dob = document.getElementById('dob').value;

      fetch('login.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({ employee_id: employeeId, dob: dob })
      })
      .then(response => {
        if (!response.ok) {
          throw new Error(`HTTP error! Status: ${response.status}`);
        }
        const contentType = response.headers.get('content-type');
        if (contentType && contentType.indexOf('application/json') !== -1) {
          return response.json();
        } else {
          return response.text().then(text => {
            throw new Error(`Unexpected response format: ${text}`);
          });
        }
      })
      .then(data => {
        if (data.success) {
          document.getElementById('employee_id').value = '';
          document.getElementById('dob').value = '';
          window.location.href = 'admin/dashboard.php';
        } else {
          document.getElementById('employee_id').value = '';
          document.getElementById('dob').value = '';
          swal("Invalid Employee ID!", "...or Invalid Date of Birth!");
        }
      })
      .catch(error => {
        console.error('Error:', error);
        swal("Error", error.message, "error");
      });
    });
  </script>
</body>
</html>
