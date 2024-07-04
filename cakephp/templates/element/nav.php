<nav class="navbar navbar-expand-lg navbar-light ">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mx-auto">

      <li class="nav-item">
        <a class="nav-link" href="<?= $this->Url->build(['controller' => 'blogs', 'action' => 'home']); ?>"><?= __('Home') ?></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= $this->Url->build(['controller' => 'blogs', 'action' => 'about']); ?>"><?= __('About') ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= $this->Url->build(['controller' => 'blogs', 'action' => 'contact']); ?>"><?= __('Contact') ?></a>
      </li>
    </ul>
  </div>

    <div class="btn-group">
      <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="flag-icon flag-icon-hk flag-icon-squared"></span>
        <span class="flag-icon flag-icon-us flag-icon-squared"></span>
        <span class="flag-icon flag-icon-vn flag-icon-squared"></span>
      </button>
        <?php $passed_params = implode(',', $this->request->getParam('pass'));?>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="<?php echo $this->Url->build(['lang' => 'zh', $passed_params]) ?>">中国人</a>
        <a class="dropdown-item" href="<?php echo $this->Url->build(['lang' => 'en', $passed_params]) ?>">English</a>
        <a class="dropdown-item" href="<?php echo $this->Url->build(['lang' => 'vi', $passed_params]) ?>">Tiếng Việt</a>
      </div>
    </div>
</nav>
