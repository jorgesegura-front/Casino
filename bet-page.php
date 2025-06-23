<?php include 'includes/header.php'; ?>

<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <?php include 'includes/sidebar.php'; ?>
            </div>
            <div class="col-sm-9">
                <div class="step_single_slot_content">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="step_tabs bet_box">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="home-tab" data-toggle="tab"
                                            data-target="#home" type="button" role="tab" aria-controls="home"
                                            aria-selected="true">Manual</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="profile-tab" data-toggle="tab"
                                            data-target="#profile" type="button" role="tab" aria-controls="profile"
                                            aria-selected="false">Auto</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel"
                                        aria-labelledby="home-tab">
                                        <div id="manual" class="tab-content active">
                                            <div class="form-group">
                                                <div class="label">
                                                    <span>Bet Amount</span><span>$0.00</span>
                                                </div>
                                                <div class="box_bet">
                                                <div>
                                                    <input type="text" class="input-box" value="0.00000000">
                                                    <img src="./assets/images/b_bet.webp"
                                                        class="btc-icon">
                                                </div>
                                                <div class="multiplier-buttons">
                                                    <button>½</button>
                                                    <button>2x</button>
                                                </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="label">
                                                    <span>Profit on win</span><span>$0.00</span>
                                                </div>
                                                <div style="position: relative;">
                                                    <input type="text" class="input-box" value="0.00000000">
                                                    <img src="./assets/images/b_bet.webp"
                                                        class="btc-icon">
                                                </div>
                                            </div>

                                            <button class="bet-button">BET</button>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel"
                                        aria-labelledby="profile-tab">...</div>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-8">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>