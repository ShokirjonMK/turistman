<?php

?>

<div class="user-page">
	<div class="user-page-left-side">
		<!-- user ma'lumotlari -->
		<div class="my-info">
			<img class="user-image"
				 src="https://static.vecteezy.com/system/resources/previews/000/439/863/original/vector-users-icon.jpg"
				 alt="">
			<div class="user-passport-infos">
				<p>
					Tulqin Muxtorov Uktam o'g'li
				</p>
				<hr>

			</div>
		</div>


		<!-- Tashrif buyurgan joylari -->
		<div class="visited-places">
			<div>Tashrif buyurgan joylarim</div>
			<div class="name">
				<p>Parij</p>
				<span>23.04.2023</span>
			</div>
			<div class="name">
				<p>Parij</p>
				<span>23.04.2023</span>
			</div>
			<div class="name">
				<p>Parij</p>
				<span>23.04.2023</span>
			</div>
			<div class="name">
				<p>Parij</p>
				<span>23.04.2023</span>
			</div>
			<div class="name">
				<p>Parij</p>
				<span>23.04.2023</span>
			</div>
			<div class="name">
				<p>Parij</p>
				<span>23.04.2023</span>
			</div>
		</div>

	</div>
	<!-- Koment yuborish joyi -->
	<div class="user-comment-form">
		<div>
			Tashrif buyurgan joylar haqida tafsilotlar qoldirish
		</div>
		<form action="#" method="post" enctype="multipart/form-data">
			<label for="title">Joy nomi:</label>
			<input type="text" id="title" name="title" required>

			<label for="date">Borgan sanasi:</label>
			<input type="date" id="date" name="date" required>

			<label for="image">Sayohatdan rasmlar:</label>
			<div class="upload-wrapper">
				<input type="file" id="image" name="image" accept="image/*" required>
				<i class="fas fa-cloud-upload-alt "></i>
			</div>

			<label for="description">Description:</label>
			<textarea id="description" name="description" rows="5" required></textarea>

			<button type="submit" value="Submit"> Saqlash</button>
		</form>

	</div>

</div>