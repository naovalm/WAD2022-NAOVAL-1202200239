<section class="regis">
    <form action="config/register.php" method="post" class="regis__form auth-form">
        <h1 class="regis__title auth-title">Register Your Wallet</h1>
        <div class="mb-4">
            <label for="wallet" class="form-label">Wallet Address</label>
            <input type="text" name="wallet" class="form-control bg-light" id="wallet" value="" placeholder="wallet Address" required>
        </div>
        <div class="mb-4">
            <label for="nama" class="form-label">Username</label>
            <input type="text" name="nama" class="form-control bg-light" id="nama" value="" placeholder="Username" required>
        </div>
        <div class="mb-4">
            <label for="no_hp" class="form-label">Email</label>
            <input type="text" name="no_hp" class="form-control bg-light" id="no_hp" value="" placeholder="Email" required>
        </div>
        <div class="mb-4">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control bg-light" id="password" value="" placeholder="Password" required>
        </div>
        <div class="mb-4">
            <label for="confirm_password" class="form-label">Confirm Password</label>
            <input type="password" name="confirm_password" class="form-control bg-light" id="confirm_password" value="" placeholder="Confirm Password" required>
        </div>
        <input type="submit" class="regis__btn auth-btn bg-dark" name="regis" value="Done">
        <!-- <button type="submit" class="regis__btn auth-btn">Daftar</button> -->
        <p class="auth-redirect">You have an account? <a href="index.php?page=login">Login</a></p>
    </form>
</section>