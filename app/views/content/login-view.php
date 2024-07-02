<div class="container login-container">
        <div class="login-form">
            <h2>Iniciar Sesión</h2>
            <form>
                <div class="form-group">
                    <label for="login-email">Correo Electrónico</label>
                    <input type="email" class="form-control" id="login-email" placeholder="Introduce tu correo electrónico">
                    <small id="emailHelp" class="form-text text-muted">Nunca compartiremos tu correo con nadie más.</small>
                </div>
                <div class="form-group">
                    <label for="login-password">Contraseña</label>
                    <input type="password" class="form-control" id="login-password" placeholder="Contraseña">
                </div><br><br>
                <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
            </form>
            <p class="mt-3 text-center">¿No tienes una cuenta? <a href="<?php echo APP_URL; ?>register/">Regístrate aquí</a></p>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
