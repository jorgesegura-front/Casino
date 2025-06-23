<?php include 'includes/header.php'; ?>

<main>
    <div class="container-fluid">
        <div class="row deposit_row">
            <div class="col-sm-3">
                <?php include 'includes/sidebar.php'; ?>
            </div>
            <div class="col-sm-9">
                <div class="step_sports_wrapper">
                    <h2 class="title-wrapper">Deposit Funds</h2>
                    <div class="step_tabs">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home"
                                    type="button" role="tab" aria-controls="home" aria-selected="true">Crypto</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile"
                                    type="button" role="tab" aria-controls="profile" aria-selected="false">Local
                                    Currency</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="profile_box deposit_box">
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <select class="form-control">
                                                <option selected>BTC</option>
                                                <option value="1">Bitcoin</option>
                                                <option value="2">Bitcoin</option>
                                                <option value="3">Bitcoin</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp">
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none">
                                                    <path
                                                        d="M5.83317 4.99999V2.49999C5.83317 2.03976 6.20627 1.66666 6.6665 1.66666H16.6665C17.1267 1.66666 17.4998 2.03976 17.4998 2.49999V14.1667C17.4998 14.6269 17.1267 15 16.6665 15H14.1665V17.4992C14.1665 17.9599 13.7916 18.3333 13.3275 18.3333H3.33888C2.87549 18.3333 2.5 17.9628 2.5 17.4992L2.50217 5.83405C2.50225 5.37341 2.8772 4.99999 3.34118 4.99999H5.83317ZM7.49983 4.99999H14.1665V13.3333H15.8332V3.33332H7.49983V4.99999Z"
                                                        fill="#92A0B7" />
                                                </svg></span>
                                        </div>
                                        <div style="display: none;" class="form-group QR_Code"></div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="profile_box deposit_box">
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <select class="form-control">
                                                <option selected>BTC</option>
                                                <option value="1">Bitcoin</option>
                                                <option value="2">Bitcoin</option>
                                                <option value="3">Bitcoin</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp">
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none">
                                                    <path
                                                        d="M5.83317 4.99999V2.49999C5.83317 2.03976 6.20627 1.66666 6.6665 1.66666H16.6665C17.1267 1.66666 17.4998 2.03976 17.4998 2.49999V14.1667C17.4998 14.6269 17.1267 15 16.6665 15H14.1665V17.4992C14.1665 17.9599 13.7916 18.3333 13.3275 18.3333H3.33888C2.87549 18.3333 2.5 17.9628 2.5 17.4992L2.50217 5.83405C2.50225 5.37341 2.8772 4.99999 3.34118 4.99999H5.83317ZM7.49983 4.99999H14.1665V13.3333H15.8332V3.33332H7.49983V4.99999Z"
                                                        fill="#92A0B7" />
                                                </svg></span>
                                        </div>
                                        <div style="display: none;" class="form-group QR_Code"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>