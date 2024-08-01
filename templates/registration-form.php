<section class="bbpress-forum-registration">
    <div class="bbpress-forum-main-section">
        <div class="bbpress-forum-header-section">
            <h1>bbpress-forum</h1>

        </div>
        <div class="bbpress-forum-form-section">
            <h3 class="bbpress-forum-heading">Registration Form </h3>
            <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
                <input type="hidden" name="action" value="bbpress-forum_register">
                <?php wp_nonce_field('bbpress-forum_register', 'bbpress-forum_register_nonce'); ?>

                <!-- <label for="username">Username</label><br> -->
                <input type="text" name="username" id="form-detail" placeholder="Username" required><br>

                <!-- <label for="email">Email</label><br> -->
                <input type="email" name="email" id="form-detail" placeholder="Email" required><br>

                <!-- <label for="password">Password</label><br> -->
                <input type="password" name="password" id="form-detail" placeholder="Password" required><br>
                <div class="registration-btn">
                    <input type="submit" value="Register" id="bbpress-forum-registration-btn">

                </div>

            </form>
        </div>
    </div>

</section>