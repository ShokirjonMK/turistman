<?php

use yii\web\Session;
$model = \common\models\UserAddress::find()->orderBy(['id' => SORT_DESC])->one();
session_start();
$data = $_SESSION['data']
?>



<div class="possport-info-section">
	<div class="container" style="height: 100vh;">
		<div class="passport-info">
			<h4>
				Ma'lumotlaringizni tekshiring!
			</h4>
			<div>
				<p>F.I.O: </p><span><?= $data->name . ' ' . $data->sur_name . ' ' . $data->patronymic_name ?></span>
			</div>
			<div>
				<p>Pasport seria va raqam:</p> <span><?= $data->series . ' ' . $data->number ?> </span>
			</div>
			<div>
				<p>JSHIR:</p> <span><?= $data->pinfl ?></span>
			</div>
            <div>
				<p>Pasport berilgan joy:</p> <span><?= $data->given_place ?></span>
			</div>

            <div>
				<p>Pasport berilgan orgin:</p> <span><?= $data->given_org ?></span>
			</div>

            <div>
				<p>Pasport amal qilish mudati:</p> <span><?= $data->given_date . ' / ' . $data->expiration_date ?></span>
			</div>

			<div>
				<p>Tug'ilgan sana:</p><span><?= $data->birth_date ?></span>
			</div>
            <div>
				<p>Tumani:</p> <span><?= $data->birth_place ?></span>
			</div>

            <div>
                <p>Mazil:</p> <span><?= $data->address ?></span>
            </div>
			<div style="margin-top: 30px;">
				<form class="checkbox-wrapper-1">
					 <input name="status" value="9" id="example-1" class="substituted" type="checkbox" aria-hidden="true" required/>
					 <label for="example-1">“Yuborish” tugmasini bosish orqali siz shaxsiy ma'lumotlardan foydalanish va Ommaviy oferta talablarini qabul qilasiz.</label>
				     <div class="right" style="display: flex; justify-content: right; text-align: right"> <button type="submit" class="button">Yuborish</button>
                     </div>
				</form>
			</div>
		</div>
	</div>
</div>
