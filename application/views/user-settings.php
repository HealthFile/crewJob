<div>
	<div class="tabs-nav">
		<nav class="shell">
		  <ul>
				<li class="active"><a href="#tab1" class="btn-main">Лични данни</a></li>
				<li><a href="#tab2" class="btn-main">Категории</a></li>
				<li><a href="#tab3" class="btn-main">Линкове</a></li>
				<li><a href="#tab4" class="btn-main">Файлове</a></li>
				<li><a href="#tab5" class="btn-main">Смяна на парола</a></li>
			</ul>
		</nav>
	</div>

	<div class="tabs-content">
		<div class="shell">
			<div id="tab1" class="tab tab1 active">
				<div class="shell">
					<h2 class="tab-heading">Лични данни</h2>

					<div class="tab-form-holder">
						<form>
							<input type="text" placeholder="Име " class="input-main input-spacing">

							<div class="input-spacing">
								<span class="gender">Пол: </span>
								<label>
							     	<input type="radio" name="radio" value="2"> <span></span>Мъж
							    </label>
							    <label>
							     	<input type="radio" name="radio" value="2"> <span></span>Жена
							    </label>
							    <label>
							     	<input type="radio" name="radio" value="2"> <span></span>Фирма
							    </label>
						    </div>

						    <input type="date" class="input-spacing input-main">

						   <textarea class="input-main textarea-main input-spacing" placeholder="Описание " ></textarea> 

							<div class="file input-spacing">
								<input type="file" name="file" id="id_media" />
								<span class="value">Upload File</span>
								<span class="btn-value"></span>
							</div>

							<input type="submit" class="btn-main form-btn-main input-spacing">
						</form>
					</div>
				</div>

				<img src="assets/img/KUB-003.png" class="box-element-5">
				<img src="assets/img/KUB-003.png" class="box-element-3">
				<img src="assets/img/KUB-004.png" class="box-element-4">
			</div>

			<div id="tab2" class="tab tab2">
				<div class="shell">
					<h2 class="tab-heading">Категории</h2>

					<div class="categories-boxes">
						<div class="categories-row clearfix">
							<a href="#" class="categories-box">
								<img src="assets/img/001-g.png">
								<h4>Замеделие</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut.</p>
							</a>

							<a href="#" class="categories-box">
								<img src="assets/img/001-g.png">
								<h4>Замеделие</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut.</p>
							</a>

							<a href="#" class="categories-box">
								<img src="assets/img/001-g.png">
								<h4>Замеделие</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut.</p>
							</a>

							<a href="#" class="categories-box">
								<img src="assets/img/001-g.png">
								<h4>Замеделие</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut.</p>
							</a>
						</div>

						<div class="categories-row clearfix">
							<a href="#" class="categories-box">
								<img src="assets/img/001-g.png">
								<h4>Замеделие</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut.</p>
							</a>

							<a href="#" class="categories-box">
								<img src="assets/img/001-g.png">
								<h4>Замеделие</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut.</p>
							</a>

							<a href="#" class="categories-box">
								<img src="assets/img/001-g.png">
								<h4>Замеделие</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut.</p>
							</a>

							<a href="#" class="categories-box">
								<img src="assets/img/001-g.png">
								<h4>Замеделие</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut.</p>
							</a>
						</div>

						<a href="#" class="btn-main form-btn-main input-spacing">Запази</a>
					</div>
				</div>

				<img src="assets/img/KVADRATI-02.png" class="box-element-1">
			</div>

			<div id="tab3" class="tab tab3">
				<div class="shell">
					<h2 class="tab-heading">Линкове</h2>
					<form class="form-add">
						 <textarea class="input-main textarea-main textarea-link input-spacing" placeholder="Описание " ></textarea> 
						 <input type="text" class="input-main input-spacing" placeholder="Линк"> 
						 <input type="submit" class="btn-main form-btn-main input-spacing" value="КАЧИ">
					</form>

					<div class="form-edit">
						<h4 class="sub-heading">Preview links</h4>

						<form>
							<div class="input-holder input-spacing">
								<input type="text" id="link" class="input-main input-link" value="Project 1">
								<input type="submit" value="Изтрии" class="btn-main form-btn-main delete-btn">
							</div>

							<div class="input-holder input-spacing">
								<input type="text" id="link" class="input-main input-link" value="Project 1">
								<input type="submit" value="Изтрии" class="btn-main form-btn-main delete-btn">
							</div>

							<div class="input-holder input-spacing">
								<input type="text" id="link" class="input-main input-link" value="Project 1">
								<input type="submit" value="Изтрии" class="btn-main form-btn-main delete-btn">
							</div>
						</form>
					</div>
				</div>

				<img src="assets/img/KVADRATI-01.png" class="box-element-1">
			</div>

			<div id="tab4" class="tab tab4">
				<h2 class="tab-heading">Файлове</h2>

				<div class="file-cnt-holder">
					<h4 class="sub-heading">Качи файлове: </h4>
					<div class="file input-spacing">
						<input type="file" name="file" id="id_media" />
						<span class="value">Upload File</span>
						<span class="btn-value"></span>
					</div>
					<input type="submit" class="btn-main form-btn-main file-btn" value="ДОБАВИ">
				</div>

				<div class="uploaded-files-cnt">
					<h4 class="sub-heading">Качени файлове: </h4>
					<div class="uploaded-files-boxes">
						<div class="uploaded-file-box">
							<a href="#" class="file-box"></a>
							<h4>Word doc...</h4>
						</div>

						<div class="uploaded-file-box">
							<a href="#" class="file-box"></a>
							<h4>Word doc...</h4>
						</div>

						<div class="uploaded-file-box">
							<a href="#" class="file-box"></a>
							<h4>Word doc...</h4>
						</div>

						<div class="uploaded-file-box">
							<a href="#" class="file-box"></a>
							<h4>Word doc...</h4>
						</div>
					</div>
				</div>
			</div>

			<div id="tab5" class="tab tab5">
				<h2 class="tab-heading">Промени парола:</h2>

				<form>
					<input type="password" class="input-main input-spacing" placeholder="Old password">
					<input type="password" class="input-main input-spacing" placeholder="New password">
					<input type="password" class="input-main input-spacing" placeholder="Repeat new password">
					<input type="submit" class="btn-main form-btn-main input-spacing" value="ПРОМЕНИ">
				</form>
			</div>
		</div>
	</div>


</div>