<?php
ob_start();
?>

<section id="admin">

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-md-5">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                <span class="ml-2">Membres</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?view=question&opAdmin=qlist">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                                <span class="ml-2">Modifier le test</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Overview</li>
                    </ol>
                </nav>
                <h1 class="h2">Dashboard</h1>
                <p>Voici un tableau de bord pour les utilisateurs de l'administration</p>

                <div class="card">
                    <h5 class="card-header">Les élèves des french school</h5>
                    <div class="card-body">
                        <?php foreach ( $members as $member) : ?>
                        <h5 class="card-title">Nom de membre : <?= $member->prenom ?> <?= $member->nom ?></h5>
                        <p class="card-text text-success">Email : <?= $member->email ?></p>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="row my-4">
                <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="card">
                        <h5 class="card-header">Customers</h5>
                        <div class="card-body">
                            <h5 class="card-title">345k</h5>
                            <p class="card-text">Feb 1 - Apr 1, United States</p>
                            <p class="card-text text-success">18.2% increase since last month</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                    <div class="card">
                        <h5 class="card-header">Revenue</h5>
                        <div class="card-body">
                            <h5 class="card-title">$2.4k</h5>
                            <p class="card-text">Feb 1 - Apr 1, United States</p>
                            <p class="card-text text-success">4.6% increase since last month</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                    <div class="card">
                        <h5 class="card-header">Purchases</h5>
                        <div class="card-body">
                            <h5 class="card-title">43</h5>
                            <p class="card-text">Feb 1 - Apr 1, United States</p>
                            <p class="card-text text-danger">2.6% decrease since last month</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                    <div class="card">
                        <h5 class="card-header">Traffic</h5>
                        <div class="card-body">
                            <h5 class="card-title">64k</h5>
                            <p class="card-text">Feb 1 - Apr 1, United States</p>
                            <p class="card-text text-success">2.5% increase since last month</p>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-lg-0">
                    <div class="card">
                        <h5 class="card-header">Latest transactions</h5>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th scope="col">Order</th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Customer</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Date</th>
                                        <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <th scope="row">17371705</th>
                                        <td>Volt Premium Bootstrap 5 Dashboard</td>
                                        <td>johndoe@gmail.com</td>
                                        <td>€61.11</td>
                                        <td>Aug 31 2020</td>
                                        <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                                        </tr>
                                    </tbody>
                                    </table>
                            </div>
                                <a href="#" class="btn btn-block btn-light">View all</a>
                        </div>
                    </div>
                </div>
                    <div class="col-12 col-xl-4">
                        <div class="card">
                            <h5 class="card-header">Traffic last 6 months</h5>
                            <div class="card-body">
                                <div id="traffic-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>


<?php
$content = ob_get_clean();
require('template.view.php');