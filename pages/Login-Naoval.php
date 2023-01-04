<section class="login">
    <form action="config/login.php" method="post" class="login__form auth-form">
        <h1 class="login__title auth-title">Connect Your Wallet</h1>
        <div class="mb-4">
            <label for="wallet" class="form-label">Wallet Address</label>
            <input type="text" name="wallet" class="form-control bg-light" id="wallet" value="<?= isset($_COOKIE['remember']) ? $_COOKIE['wallet'] : '' ?>" placeholder="Masukkan wallet" required>
        </div>
        <div class="mb-4">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control bg-light" id="password" value="<?= isset($_COOKIE['remember']) ? $_COOKIE['password'] : '' ?>" placeholder="Masukkan kata sandi" required>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="remembered" id="rememberMe" name="remember" <?php echo isset($_COOKIE['remember']) ? 'checked' : '' ?>>
            <label class="form-check-label" for="rememberMe">Remember me</label>
        </div>
        <input type="submit" class="regis__btn auth-btn bg-dark" name="login" value="Connect">
        <input type="submit" class="regis__btn auth-btn bg-dark" name="admin" value="Connect as Admin">
        <!-- <button type="submit" class="login__btn auth-btn">Login</button> -->
        <p class="auth-redirect">Register your wallet here! <a href="index.php?page=register">Register</a></p>
    </form>
</section>