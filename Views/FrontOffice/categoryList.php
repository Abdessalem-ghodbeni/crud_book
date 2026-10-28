<?php

?>
<!DOCTYPE html>
<html lang="en">


<head>
    <title>Liste des categorie</title>

    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="Webestica.com" />
    <meta
        name="description"
        content="Booking - Multipurpose Online Booking Theme" />
    <?php
    require_once __DIR__ . '/../../Views/base_style.php';
    ?>


</head>

<body>
    <!-- Header END -->

    <!-- **************** MAIN CONTENT START **************** -->
    <main>
        <!-- =======================
Menu item START -->
        <section class="pt-4">
            <div class="container">
                <div class="card rounded-3 border p-3 pb-2">
                    <!-- Avatar and info START -->
                    <div class="d-sm-flex align-items-center">
                        <div class="avatar avatar-xl mb-2 mb-sm-0">
                            <img
                                class="avatar-img rounded-circle"
                                src="/Views/assets/images/avatar/01.jpg"
                                alt="" />
                        </div>
                        <h4 class="mb-2 mb-sm-0 ms-sm-3">
                            <span class="fw-light">Hi</span> Jacqueline Miller
                        </h4>
                        <a
                            href="add-listing.html"
                            class="btn btn-sm btn-primary-soft mb-0 ms-auto flex-shrink-0"><i class="bi bi-plus-lg fa-fw me-2"></i>Add New Listing</a>
                    </div>
                    <!-- Avatar and info START -->

                    <!-- Responsive navbar toggler -->
                    <button
                        class="btn btn-primary w-100 d-block d-xl-none mt-2"
                        type="button"
                        data-bs-toggle="offcanvas"
                        data-bs-target="#dashboardMenu"
                        aria-controls="dashboardMenu">
                        <i class="bi bi-list"></i> Dashboard Menu
                    </button>

                    <!-- Nav links START -->
                    <div
                        class="offcanvas-xl offcanvas-end mt-xl-3"
                        tabindex="-1"
                        id="dashboardMenu">
                        <div class="offcanvas-header border-bottom p-3">
                            <h5 class="offcanvas-title">Menu</h5>
                            <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="offcanvas"
                                data-bs-target="#dashboardMenu"
                                aria-label="Close"></button>
                        </div>
                        <!-- Offcanvas body -->
                        <div class="offcanvas-body p-3 p-xl-0">
                            <!-- Nav item -->
                            <div class="navbar navbar-expand-xl">
                                <ul class="navbar-nav navbar-offcanvas-menu">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="agent-dashboard.html"><i class="bi bi-house-door fa-fw me-1"></i>Dashboard</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="agent-listings.html"><i class="bi bi-journals fa-fw me-1"></i>Listings</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="agent-bookings.html"><i class="bi bi-bookmark-heart fa-fw me-1"></i>Bookings</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="agent-activities.html"><i class="bi bi-bell fa-fw me-1"></i>Activities</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="agent-earnings.html"><i class="bi bi-graph-up-arrow fa-fw me-1"></i>Earnings</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="agent-reviews.html"><i class="bi bi-star fa-fw me-1"></i>Reviews</a>
                                    </li>

                                    <li>
                                        <a class="nav-link" href="agent-settings.html"><i class="bi bi-gear fa-fw me-1"></i>Settings</a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a
                                            class="nav-link dropdown-toggle"
                                            href="#"
                                            id="dropdoanMenu"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="bi bi-list-ul fa-fw me-1"></i>Dropdown
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdoanMenu">
                                            <!-- Dropdown menu -->
                                            <li><a class="dropdown-item" href="#">Item 1</a></li>
                                            <li><a class="dropdown-item" href="#">Item 2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Nav links END -->
                </div>
            </div>
        </section>
        <!-- =======================
Menu item END -->

        <!-- =======================
Content START -->
        <section class="pt-0">
            <div class="container vstack gap-4">
                <!-- Title START -->
                <div class="row">
                    <div class="col-12">
                        <h1 class="fs-4 mb-0">
                            <i class="bi bi-house-door fa-fw me-1"></i>Ajouter categories
                        </h1>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div
                                        class="card-header d-flex justify-content-between align-items-center">
                                        <h4 class="mb-0">Liste des catégories</h4>
                                        <a href="add-categorie.php" class="btn btn-primary btn-sm">
                                            <i class="fas fa-plus"></i> Ajouter
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Titre</th>
                                                        <th>Description</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <td>
                                                            1
                                                        </td>
                                                        <td>
                                                            Programmation
                                                        </td>
                                                        <td>
                                                            cours Technologie Web
                                                        </td>
                                                        <td>
                                                            <a

                                                                class="btn btn-info btn-sm"
                                                                title="Voir">
                                                                <i class="fas fa-eye"></i>
                                                            </a>
                                                            <a

                                                                class="btn btn-warning btn-sm"
                                                                title="Modifier">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                            <a

                                                                class="btn btn-danger btn-sm"
                                                                title="Supprimer">
                                                                <i class="fas fa-trash"></i>
                                                            </a>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <div class="back-top"></div>
    <?php
    require_once __DIR__ . '/../../Views/base_scirpt.php';
    ?>

</body>

</html>