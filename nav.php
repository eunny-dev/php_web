<?php
 $uri = $_SERVER['REQUEST_URI'];
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Cruds</a>
    <ul class="navbar-nav">
      <li class="nav-item <?=strpos($uri, 'index.php') ? 'active':''?>"><a class="nav-link" href="index.php">Home</a></li>
      <li class="nav-item <?=strpos($uri, 'fetch.php') ? 'active':''?>"><a class="nav-link" href="fetch.php" >Display</a></li>
    </ul>
  </div>
</nav>