<!--<h1>Главная</h1>-->

<?php foreach ($messages as $message) { ?>
    <div class="msg">
        <div class="msg-head">
            <span class="text-msgname"><?= $message['name'] ?></span>
            <? $date = new DateTime($message['date_send']) ?>
            <span class="text-datesend"><?= $date->format('d.m.Y') ?></span>
        </div>
        <div class="text"><?= $message['message'] ?></div>
    </div>

<?php } ?>
<div class="pagination row">
    <?php echo $pagination->get(); ?>
</div>

<?php if (isset($_SESSION['err_msg'])) { ?>
    <div class="row">
        <p class="text-danger">
            <?= $_SESSION['err_msg']; ?>
        </p>
    </div>
    <?php unset($_SESSION['err_msg']);
} ?>

<?php if (isset($_SESSION['scss_msg'])) { ?>
    <div class="row">
        <p class="text-success">
            <?= $_SESSION['scss_msg']; ?>
        </p>
    </div>
<?php unset($_SESSION['scss_msg']); } ?>

<?php if (isset($_SESSION['user_id']) && $_SESSION['user_id']) { ?>
    <form class="form" method="POST" action="/form/main/store">
        <div class="row">
            <div class="col-right">
                <label class="label">Имя<span class="text-warning">*</span></label>
            </div>
            <div class="col-left">
                <input type="text" class="input input-text" name="name" required/>
            </div>
        </div>

        <div class="row">
            <div class="col-right">
                <label class="label">Email</label>
            </div>
            <div class="col-left">
                <input type="email" class="input input-text" name="email"/>
            </div>
        </div>

        <div class="row">
            <div class="col-right">
                <label class="label">Содержание<span class="text-warning">*</span></label>
            </div>
            <div class="col-left">
                <textarea name="message" class="input input-area" required></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-right">
                <label class="label">Подтверждение изображения<span class="text-warning">*</span></label>
            </div>
            <div class="col-left">
                <img class="img-captcha" id="captcha" src="/form/securimage/securimage_show.php" alt="CAPTCHA Image"/>
                <a href="#" onclick="document.getElementById('captcha').src = '/form/securimage/securimage_show.php?' + Math.random(); return false">
                    <img class="img-refresh" src="/form/securimage/images/refresh.png" alt="Обновить"/>
                </a>
                <input class="input input-captcha" type="text" name="captcha_code" maxlength="6"/>
            </div>
        </div>

        <input type="hidden" name="date" value="<? echo date('c'); ?>"/>

        <div class="row">
            <input type="submit" class="btn-sbm" name="send_message" value="Оставить отзыв"/>
        </div>
    </form>
<?php } ?>
