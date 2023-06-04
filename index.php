<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/index.css">


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" defer></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid" id="MyNavBar">
      <a class="navbar-brand" href="#">
        <img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        Bootstrap
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Features</a>
            <div class="dropdown-menu" aria-labelledby="dropdownId">
              <a class="dropdown-item" href="#">Action 1</a>
              <a class="dropdown-item" href="#">Action 2</a>
            </div>
          </li>
          <a class="nav-link" href="#">Contect us</a>
        </div>
      </div>
    </div>
  </nav>

  <main>
    <div class="container-fluid">
      <form method="post" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="formFile" class="form-label">Default file input example</label>
          <input class="form-control" type="file" id="formFile" name="fileToUpload">
          <input type="submit" name="btnSubmit" class="btn btn-primary" value="Upload">
        </div>
      </form>
    </div>
  </main>
</body>

</html>

<?php
if (isset($_POST["btnSubmit"])) {
  if ($_FILES['fileToUpload']['error'] === UPLOAD_ERR_OK) {
    // Get the file path
    $target_file = 'uploads/' . $_FILES['fileToUpload']['name'];
    move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file);
    echo '<p>File uploaded successfully!</p>';
  } else {
    echo '<p>File upload failed!</p>';
  }
}
?>