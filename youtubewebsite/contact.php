<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;600&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #f8f9fa;
    }
    h2 {
      font-family: 'Josefin Sans', sans-serif;
      font-weight: 600;
      color: #343a40;
    }
    .contact-card {
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      padding: 30px;
    }
    .form-control:focus {
      border-color: #28a745;
      box-shadow: 0 0 5px rgba(40,167,69,0.5);
    }
    .btn-success {
      width: 100%;
      font-weight: 600;
      letter-spacing: 0.5px;
    }
  </style>
</head>
<body>
  <section class="my-5">
    <div class="container">
      <div class="text-center mb-4">
        <h2>Contact Us</h2>
        <p class="text-muted">We’d love to hear from you! Fill out the form below.</p>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="contact-card">
            <form action="userinfo.php" method="post">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="user" autocomplete="off" class="form-control" placeholder="Enter your name" required>
              </div>
              <div class="form-group">
                <label for="email">Email Id</label>
                <input type="email" id="email" name="email" autocomplete="off" class="form-control" placeholder="Enter your email" required>
              </div>
              <div class="form-group">
                <label for="mobile">Mobile No.</label>
                <input type="tel" id="mobile" name="mobile" autocomplete="off" class="form-control" placeholder="Enter your mobile number" required>
              </div>
              <div class="form-group">
                <label for="comment">Comments</label>
                <textarea id="comment" class="form-control" name="comment" placeholder="Your message..." rows="4" required></textarea>
              </div>
              <button type="submit" class="btn btn-success">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
