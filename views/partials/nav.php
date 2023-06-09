<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
    </a>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="/">
        Home
      </a>

      <a class="navbar-item" href="/about">
        About
      </a>
      <a class="navbar-item" href="/admin/posts">
        Admin
      </a>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <?php if(auth()): ?>
          <?=auth()->email?>
        <?php else: ?>
          <div class="buttons">
            <a class="button is-primary" href="/register">
              <strong>Sign up</strong>
            </a>
            <a class="button is-light"  href="/login">
              Log in
            </a>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</nav>