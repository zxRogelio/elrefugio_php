<div class="container register-container">
        <div class="register-form">
            <h2>Registrarse</h2>
            <form>
                <div class="form-group">
                    <label for="register-email">Correo Electrónico</label>
                    <input type="email" class="form-control" id="register-email" placeholder="Introduce tu correo electrónico">
                </div>
                <div class="form-group">
                    <label for="register-password">Contraseña</label>
                    <input type="password" class="form-control" id="register-password" placeholder="Contraseña">
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirmar Contraseña</label>
                    <input type="password" class="form-control" id="confirm-password" placeholder="Confirmar Contraseña">
                </div><br><br>
                <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
            </form>
            <p class="mt-3 text-center">¿Ya tienes una cuenta? <a href="<?php echo APP_URL; ?>login/">Inicia sesión aquí</a></p>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>