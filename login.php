<?php include 'includes/header.php'; ?>
<style>
    .navbar-custom {
        display: none;
    }

    #forgot_password .container-fluid {
        width: 90%;
        margin: auto;
    }
</style>
<section id="forgot_password" class="login_bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 forgot_password_left">
                <h2 class="ft-title">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                        <path
                            d="M10.5 0.916672C15.79 0.916672 20.0833 5.21 20.0833 10.5C20.0833 15.79 15.79 20.0833 10.5 20.0833C5.20996 20.0833 0.916626 15.79 0.916626 10.5C0.916626 5.21 5.20996 0.916672 10.5 0.916672ZM10.5 18.1667C14.7358 18.1667 18.1666 14.7358 18.1666 10.5C18.1666 6.26417 14.7358 2.83334 10.5 2.83334C6.26413 2.83334 2.83329 6.26417 2.83329 10.5C2.83329 14.7358 6.26413 18.1667 10.5 18.1667ZM10.5 9.54167H14.3333V11.4583H10.5V14.3333L6.66663 10.5L10.5 6.66667V9.54167Z"
                            fill="white"></path>
                    </svg>
                    Back to Homepage
                </h2>
                <h2 class="footer_title">Login to your account
                    on Fatetests</h2>
                <p class="txt">Sign in to your account and explore a world of possibilities.Your journey begins here.
                </p>
            </div>
            <div class="col-sm-6">
                <div class="forgot_password-right">
                    <h2 class="title">Enter details</h2>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <span class="inpt-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44"
                                    fill="none">
                                    <g clip-path="url(#clip0_1_3685)">
                                        <rect width="44" height="44" rx="12" fill="#090E18"></rect>
                                        <path
                                            d="M14 32C14 27.5817 17.5817 24 22 24C26.4183 24 30 27.5817 30 32H28C28 28.6863 25.3137 26 22 26C18.6863 26 16 28.6863 16 32H14ZM22 23C18.685 23 16 20.315 16 17C16 13.685 18.685 11 22 11C25.315 11 28 13.685 28 17C28 20.315 25.315 23 22 23ZM22 21C24.21 21 26 19.21 26 17C26 14.79 24.21 13 22 13C19.79 13 18 14.79 18 17C18 19.21 19.79 21 22 21Z"
                                            fill="url(#paint0_linear_1_3685)"></path>
                                    </g>
                                    <defs>
                                        <linearGradient id="paint0_linear_1_3685" x1="22" y1="11" x2="22" y2="32"
                                            gradientUnits="userSpaceOnUse">
                                            <stop stop-color="white"></stop>
                                            <stop offset="1" stop-color="white" stop-opacity="0.12"></stop>
                                        </linearGradient>
                                        <clipPath id="clip0_1_3685">
                                            <rect width="44" height="44" fill="white"></rect>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter your username">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <span class="inpt-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44"
                                    fill="none">
                                    <g clip-path="url(#clip0_1_3687)">
                                        <rect width="44" height="44" rx="12" fill="#090E18"></rect>
                                        <path
                                            d="M28 18H30C30.5523 18 31 18.4477 31 19V31C31 31.5523 30.5523 32 30 32H14C13.4477 32 13 31.5523 13 31V19C13 18.4477 13.4477 18 14 18H16V17C16 13.6863 18.6863 11 22 11C25.3137 11 28 13.6863 28 17V18ZM15 20V30H29V20H15ZM21 24H23V26H21V24ZM17 24H19V26H17V24ZM25 24H27V26H25V24ZM26 18V17C26 14.7909 24.2091 13 22 13C19.7909 13 18 14.7909 18 17V18H26Z"
                                            fill="url(#paint0_linear_1_3687)"></path>
                                    </g>
                                    <defs>
                                        <linearGradient id="paint0_linear_1_3687" x1="22" y1="11" x2="22" y2="32"
                                            gradientUnits="userSpaceOnUse">
                                            <stop stop-color="white"></stop>
                                            <stop offset="1" stop-color="white" stop-opacity="0.12"></stop>
                                        </linearGradient>
                                        <clipPath id="clip0_1_3687">
                                            <rect width="44" height="44" fill="white"></rect>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Enter your password">
                        </div>
                        <div class="form-inline">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Remember me</label>
                            </div>
                            <div class="form-group">
                                <a href="#" class="forgot-password">Forgot password?</a>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Login to your account <svg
                                xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23"
                                fill="none">
                                <path
                                    d="M11.5002 1.91669C6.21016 1.91669 1.91683 6.21002 1.91683 11.5C1.91683 16.79 6.21016 21.0834 11.5002 21.0834C16.7902 21.0834 21.0835 16.79 21.0835 11.5C21.0835 6.21002 16.7902 1.91669 11.5002 1.91669ZM11.5002 19.1667C7.26433 19.1667 3.8335 15.7359 3.8335 11.5C3.8335 7.26419 7.26433 3.83335 11.5002 3.83335C15.736 3.83335 19.1668 7.26419 19.1668 11.5C19.1668 15.7359 15.736 19.1667 11.5002 19.1667ZM11.5002 10.5417H7.66683V12.4584H11.5002V15.3334L15.3335 11.5L11.5002 7.66669V10.5417Z"
                                    fill="#090E18"></path>
                            </svg>
                        </button>
                        <div class="have-acc">Do not have an account? <a class="grn" href="/signup">Register Here</a>
                        </div>
                        <h6>Follow us</h6>
                        <ul class="footer_social">
                            <li>
                                <a href="#">
                                    <img src="./assets/images/footer_social_facebook.webp" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="./assets/images/footer_social_instagram.webp" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="./assets/images/footer_social_twitter.webp" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="./assets/images/footer_social_youtube.webp" alt="">
                                </a>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>