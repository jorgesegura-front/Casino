<?php include 'includes/header.php'; ?>

<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <?php include 'includes/sidebar.php'; ?>
            </div>
            <div class="col-sm-9">
                <h2 class="title-wrapper">Profile</h2>
                <div class="step_tabs step_profile_tabs step_bet">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">Account</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile"
                                type="button" role="tab" aria-controls="profile" aria-selected="false">Security</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-toggle="tab" data-target="#contact"
                                type="button" role="tab" aria-controls="contact"
                                aria-selected="false">Preferences</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-hero-tab" data-toggle="tab" data-target="#contact-hero"
                                type="button" role="tab" aria-controls="contact-hero" aria-selected="false">Two-Factor
                                authentication</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="step_single_slot_content">
                                <h2 class="title-wrapper">Personal info</h2>
                                <div class="profile_box">
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Username</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Enter your username">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Change Username</button>
                                    </form>
                                </div>
                            </div>
                            <div class="step_single_slot_content">
                                <h2 class="title-wrapper">Email</h2>
                                <div class="profile_box">
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Enter your email">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Change Email</button>
                                    </form>
                                </div>
                            </div>
                            <div class="step_single_slot_content">
                                <h2 class="title-wrapper">Phone Number</h2>
                                <div class="profile_box">
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Phone Number</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Enter your number">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Change Phone</button>
                                    </form>
                                </div>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>