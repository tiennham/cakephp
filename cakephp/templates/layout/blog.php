<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Hello, CakePHP!</title>
      <?= $this->Html->css(['normalize.min', 'milligram.min', 'fonts', 'cake', 'custom']) ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
  </head>

  <body>

    <?= $this->element('nav'); ?>


    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4"><?= __('A simple Blog Layout'); ?></h1>
        <p class="lead"><?= __('This is a modified jumbotron that occupies the entire horizontal space of its parent.'); ?></p>
      </div>
    </div>

    <div class="container">
    <div class="row">
        <div class="col-4">
            <h3 style="color: #fff;" class="bg-info text-capitalize p-1"><?= __('Menu'); ?></h3>

            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <?= $this->Html->link(__('Users'), [
                    'controller' => 'Users',
                    'action' => 'index'
                    ]) ?>
                </li>
                <li class="list-group-item">
                    <?= $this->Html->link(__('Categories'), [
                        'controller' => 'Categories',
                        'action' => 'index'
                    ]) ?>
                </li>
                <li class="list-group-item">
                    <?= $this->Html->link(__('Products'), [
                        'controller' => 'Products',
                        'action' => 'index'
                    ]) ?>
                </li>
            </ul>
        </div>

        <div class="col-8">
            <?= $this->fetch('content') ?>`
        </div>
        </div>
    </div>

    <?= $this->element('footer'); ?>

  </body>
</html>
