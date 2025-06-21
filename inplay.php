<?php include 'includes/header.php'; ?>

<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <?php include 'includes/sidebar.php'; ?>
            </div>
            <div class="col-sm-9">
                <h2 class="title-wrapper">Panama Youth v Saudi Arabia Youth</h2>
                <div class="step_tabs step_profile_tabs step_bet step_inplay">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">All</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile"
                                type="button" role="tab" aria-controls="profile" aria-selected="false">Asian
                                Lines</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-toggle="tab" data-target="#contact"
                                type="button" role="tab" aria-controls="contact"
                                aria-selected="false">Corners/Cards</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-hero-tab" data-toggle="tab" data-target="#contact-hero"
                                type="button" role="tab" aria-controls="contact-hero"
                                aria-selected="false">Goals</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-Half-tab" data-toggle="tab" data-target="#contact-Half"
                                type="button" role="tab" aria-controls="contact-Half"
                                aria-selected="false">Half</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-Free4all-tab" data-toggle="tab"
                                data-target="#contact-Free4all" type="button" role="tab"
                                aria-controls="contact-Free4all" aria-selected="false">Free4all</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-Linesup-tab" data-toggle="tab"
                                data-target="#contact-Linesup" type="button" role="tab" aria-controls="contact-Linesup"
                                aria-selected="false">Linesup</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-Flash-tab" data-toggle="tab"
                                data-target="#contact-Flash" type="button" role="tab" aria-controls="contact-Flash"
                                aria-selected="false">Flash Bets</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-Bet-tab" data-toggle="tab" data-target="#contact-Bet"
                                type="button" role="tab" aria-controls="contact-Bet" aria-selected="false">Bet
                                Builder</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="step_single_slot_content">
                                ...
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            ...
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            ...
                        </div>
                        <div class="tab-pane fade" id="contact-hero" role="tabpanel" aria-labelledby="contact-hero-tab">
                            ...
                        </div>
                        <div class="tab-pane fade" id="contact-Half" role="tabpanel" aria-labelledby="contact-Half-tab">
                            ...
                        </div>
                        <div class="tab-pane fade" id="contact-Free4all" role="tabpanel" aria-labelledby="contact-Free4all-tab">
                            ...
                        </div>
                        <div class="tab-pane fade" id="contact-Linesup" role="tabpanel" aria-labelledby="contact-Linesup-tab">
                            ...
                        </div>
                        <div class="tab-pane fade" id="contact-Flash" role="tabpanel" aria-labelledby="contact-Flash-tab">
                            ...
                        </div>
                        <div class="tab-pane fade" id="contact-Bet" role="tabpanel" aria-labelledby="contact-Bet-tab">
                            ...
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>