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
                    <form class="form" action="/form/login/check" method="POST" name="formReg">
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
						<input type="submit" class="btn-sbm" name="auth" value = "Войти" />
					</div>
				</form>
				<div class="text">Если Вы еще не зарегистрированы, то <a href="/form/registration">зарегистрируйтесь</a>, чтобы оставить отзыв.</div>
