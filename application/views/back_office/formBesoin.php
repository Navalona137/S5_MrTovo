      <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">RH</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $membre['prenom']; ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $membre['nom']; ?> <?php echo $membre['prenom']; ?></h6>
              <span>Informaticien</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url('CLogin/exit'); ?>">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="<?php echo base_url('cservice/home'); ?>">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="">
              <i class="bi bi-circle"></i><span>List user</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Annonces</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo base_url('cannonce/new'); ?>/<?php echo $idService; ?>">
              <i class="bi bi-circle"></i><span>New</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('cannonce/list'); ?>/<?php echo $idService; ?>">
              <i class="bi bi-circle"></i><span>List</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          
        </ul>
      </li><!-- End Tables Nav -->
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Besoin des Conditions de Recrutement:</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Annonce</li>
          <li class="breadcrumb-item active">new</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form</h5>

              <!-- Vertical Form -->
              <form class="row g-3" action="<?php echo base_url().'CAnnonce/insertion'?>/<?php echo $idService; ?>" method="post">
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Nombre de personne</label>
                  <input type="number" class="form-control" id="inputNanme4" name="nbrePersonne" placeholder="0">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Diplome minimum</label>
                  <select class="form-control" name="diplome">
                      <?php foreach($diplomes as $d) { ?>
                          <option value=<?php echo $d->id; ?>> <?php echo $d->typediplome; ?> </option>
                      <?php } ?>
                  </select>
                </div>
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Annee d'experience minimum</label>
                  <input type="number" class="form-control" id="inputNanme4" name="nbreExperience" placeholder="0">
                </div>
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Volume horaire journalier</label>
                  <input type="number" class="form-control" id="inputNanme4" name="nbreHeure" placeholder="0">
                </div>
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Description</label>
                  <input type="text" class="form-control" id="inputNanme4" name="description">
                </div>
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Date fin</label>
                  <input type="date" class="form-control" id="inputNanme4" name="dates">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Suivant</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Vertical Form -->
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->