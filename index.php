<?php require __DIR__.'/list-content.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AnteikuDevs</title>
  <link rel="stylesheet" href="<?= url('assets/css/app.min.css') ?>">
  <style>

    :root {
      --bs-primary: #021A31;
    }

    body {
      user-select: none;
      background-color: var(--bs-primary);
    }
    
    .bg-default {
      background-color: var(--bs-primary);
    }

    .color-default {
      color: var(--bs-primary);
    }

    .bg-lighten {
      background-color: #e7e7e7;
    }

    .list-group::-webkit-scrollbar-track
    {
      border-radius: 10px;
    }

    .list-group::-webkit-scrollbar
    {
      width: 8px;
    }

    .list-group::-webkit-scrollbar-thumb
    {
      border-radius: 8px;
      background-color: #ddd;
    }

    .btn:focus,
    .btn:active:focus {
      box-shadow: none;
      outline: 0;
    }

  </style>
</head>
<body oncontextmenu="return false">
    
    <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh">
      <div class="row justify-content-center mx-auto my-5">
        <div class="col-md-6">
          <!-- <a href="<?= $prevPage; ?>" class="btn btn-sm btn-light mb-3 d-none d-md-inline-block">
            Kembali
          </a> -->
          <div class="h-100 w-100 d-flex align-items-center rounded-2 overflow-hidden border border-light mb-3 mb-md-0">
            <img src="<?= url('intro.gif') ?>" alt="" width="100%">
          </div>
        </div>
        <div class="col-md-5">
          <a href="<?= $prevPage; ?>" class="btn btn-md btn-light mb-3 fw-semibold">
            Back
          </a>
          <div class="card border-0 rounded-3 mb-3 overflow-hidden">
            <div class="card-header text-center">
              <h4 class="mb-0 text-dark fw-bold text-capitalize">List <?= preg_replace("/[_-]/",' ',explode('.',HOST)[0]) ?></h4>
            </div>
          </div>
          <div class="card border-0 rounded-3">
            <div class="card-body">
              <div class="rounded-3 overflow-hidden bg-light">
                <?= $content; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

</body>
</html>