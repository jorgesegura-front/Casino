<?php include 'includes/header.php'; ?>

<main>
    <div class="container-fluid">
        <div class="row deposit_row">
            <div class="col-sm-3">
                <?php include 'includes/sidebar.php'; ?>
            </div>
            <div class="col-sm-9">
                <div class="step_sports_wrapper">
                    <h2 class="title-wrapper">Withdrawl</h2>
                    <div class="profile_box deposit_box">
                        <form>
                            <div class="form-group form_bg_clr">
                                <label for="exampleInputEmail1">Available account Balance</label>
                                <select class="form-control">
                                    <option selected>
                                        BTC
                                    </option>
                                    <option value="1">Bitcoin</option>
                                    <option value="2">Bitcoin</option>
                                    <option value="3">Bitcoin</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="with_flex">
                                <label for="exampleInputEmail12">Amount</label>
                                <p>$0.00</p>
                                </div>
                                 <input type="text" class="form-control" id="exampleInputEmail112"
                                    aria-describedby="textHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail11">Password</label>
                                <input type="email" class="form-control" id="exampleInputEmail11"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail113">Two-Factor</label>
                                <input type="email" class="form-control" id="exampleInputEmail13"
                                    aria-describedby="emailHelp">
                            </div>
                        <button class="btn btn-primary w-full">Withdraw</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>