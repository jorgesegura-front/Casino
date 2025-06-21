<?php include 'includes/header.php'; ?>

<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <?php include 'includes/sidebar.php'; ?>
            </div>
            <div class="col-sm-9">
                <div class="step_tabs step_bet">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">Deposit
                                History</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile"
                                type="button" role="tab" aria-controls="profile" aria-selected="false">Withdraw
                                history</button>
                        </li>
                    </ul>
                    <h2 class="title-wrapper">Deposit History</h2>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>View</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>06-10-2024 | 06:00PM</td>
                                            <td>
                                                Paid
                                            </td>
                                            <td><a href="#" class="grn">View Details</a></td>
                                            <td>
                                                <div>
                                                    <span class="grn">$541.00</span>
                                                    <img class="img-fluid" src="./assets/images/t_img.webp" alt="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>06-10-2024 | 06:00PM</td>
                                            <td>
                                                Paid
                                            </td>
                                            <td><a href="#" class="grn">View Details</a></td>
                                            <td>
                                                <div>
                                                    <span class="yt">$541.00</span>
                                                    <img class="img-fluid" src="./assets/images/b_img.webp" alt="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>06-10-2024 | 06:00PM</td>
                                            <td>
                                                Paid
                                            </td>
                                            <td><a href="#" class="grn">View Details</a></td>
                                            <td>
                                                <div>
                                                    <span class="blue">$541.00</span>
                                                    <img class="img-fluid" src="./assets/images/rec_img.webp" alt="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>06-10-2024 | 06:00PM</td>
                                            <td>
                                                Paid
                                            </td>
                                            <td><a href="#" class="grn">View Details</a></td>
                                            <td>
                                                <div>
                                                    <span class="grn">$541.00</span>
                                                    <img class="img-fluid" src="./assets/images/t_img.webp" alt="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>06-10-2024 | 06:00PM</td>
                                            <td>
                                                Paid
                                            </td>
                                            <td><a href="#" class="grn">View Details</a></td>
                                            <td>
                                                <div>
                                                    <span class="yt">$541.00</span>
                                                    <img class="img-fluid" src="./assets/images/b_img.webp" alt="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>06-10-2024 | 06:00PM</td>
                                            <td>
                                                Paid
                                            </td>
                                            <td><a href="#" class="grn">View Details</a></td>
                                            <td>
                                                <div>
                                                    <span class="blue">$541.00</span>
                                                    <img class="img-fluid" src="./assets/images/rec_img.webp" alt="">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            ...
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>