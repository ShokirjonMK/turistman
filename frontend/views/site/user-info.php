<?php
$userAdd = \common\models\UserAddress::find()->where(['user_id' => getUserId()])->one();
?>
<div class="my-info">
	<img class="user-image" src="https://static.vecteezy.com/system/resources/previews/000/439/863/original/vector-users-icon.jpg" alt="">
	<div class="user-passport-infos">
		<p style="font-size: 1rem">
            <a href="<?= \yii\helpers\Url::to(['profil']) ?>"><?= $userAdd->name . ' ' . $userAdd->family ?></a>
		</p>
		<hr>

	</div>
</div>