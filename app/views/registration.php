            <?php
            if (isset($_SESSION['err_msg'])) {
            ?>
                <div class="row">
                    <p class="text-danger">
                        <?= $_SESSION['err_msg']; ?>
                    </p>
                </div>
            <?php
                unset($_SESSION['err_msg']);
            }

            if (isset($_SESSION['scss_msg'])) {
            ?>
                <div class="row">
                    <p class="text-success">
                        <?= $_SESSION['scss_msg']; ?>
                    </p>
                </div>
            <?php
                unset($_SESSION['scss_msg']);
            }
            ?>
                <form class="form" action="/form/registration/store" method="POST" name="formReg">
					<div class="row">
						<div class="col-right">
							<label class="label">Логин<span class="text-warning">*</span></label>
						</div>
						<div class="col-left">
							<input type="text" class="input input-text" name="login" required />
						</div>
					</div>

					<div class="row">
						<div class="col-right">
							<label class="label">Пароль<span class="text-warning">*</span></label>
						</div>
						<div class="col-left">
							<input type="password" class="input input-text" name="password" required />
						</div>
					</div>

					<div class="row">
						<div class="col-right">
							<label class="label">Подтвердите пароль<span class="text-warning">*</span></label>
						</div>
						<div class="col-left">
							<input type="password" class="input input-text" name="confirmPassword" required/>
						</div>
					</div>

                    <div class="row">
                        <div class="col-right">
                            <label class="label">Подтверждение изображения<span class="text-warning">*</span></label>
                        </div>
                        <div class="col-left">
                            <img class="img-captcha" id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image"/>
                            <a href="#"
                               onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false"><img
                                    class="img-refresh" src="securimage/images/refresh.png" alt="Обновить"/></a>
                            <input class="input input-captcha" type="text" name="captcha_code" maxlength="6"/>
                        </div>
                    </div>

                    <div class="row">
                        <input type="submit" class="btn-sbm" name="registration" value = "Зарегистрироваться" />
                    </div>
				</form>