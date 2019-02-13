<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"><?=ucfirst($directory).' Dashboard';?></a>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="logout.php">Sign out</a>
        </li>
    </ul>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <?php
                include $directory . '/navigation.php';
                ?>
            </div>
        </nav>
        <!-- content section for dashboard -->
        <main role="main" class="col-md-10 ml-sm-auto col-lg-10 pt-3 px-4">
            <?php include $directory . '/pages/' . $page . '.php'; ?>
            <?php //include 'includes/debug.php'; ?>
        </main>
    </div>
</div>
