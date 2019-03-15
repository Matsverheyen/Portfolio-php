<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <title>Contact | Mats Verheyen</title>
</head>

<body>

  <?php include 'components/nav.php' ?>
  <div class="cotainer">
    <div class="row ml-4">
      <div class="col-md-8 col-md-offset-2 col-md-push-2 mr-sm-4 mr-xs-4">
        <h2>Contact Details</h2>
        <p>Feel free to contact me, leave a feedback or just write anything that you would like to say to me in the
          form down below.</p>
      </div>
      <div class="col-md-3 col-sm-2 ml-sm-3">
        <h3 class="ml-5">Contact Info</h3>
        <ul class="list-groups">
          <li class="list-group-item"><a href=""></a>mats@verheyen.me</li>
        </ul>
      </div>
      <div class="col-md-8 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
        <div class="row">
          <div class="col-md-6">
            <form method="post" action="send_mail.php" enctype="multipart/form-data">
            <div class="form-group">
              <input type="text" class="form-control" name="name" placeholder="Naam" required>
            </div>
          </div>
          <div class="col-md-6">
            <form method="post" action="send_mail.php">
            <div class="form-group">
              <input type="text" class="form-control" name="phone" placeholder="Telefoonnummer" pattern="[0-9]{10}">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input id="email" type="email" class="form-control" name="email" placeholder="email" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" class="form-control" name="subject" placeholder="onderwerp" required>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <textarea name="msg" class="form-control" cols="30" rows="10" required></textarea>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <input type="submit" name="submit" class="btn btn-primary" value="Send Message">
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include 'components/footer.php' ?>
</body>

</html>