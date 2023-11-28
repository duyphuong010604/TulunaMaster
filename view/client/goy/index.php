<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb mb-5">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1>Trang góp ý</h1>
				<nav class="d-flex align-items-center">
					<a href="index.php">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
					<a href="category.php">góp ý</a>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- End Banner Area -->

<!--================Contact Area =================-->
<section class="contact_area section_gap_bottom mt-5">
	<div class="container">
		<h2 class="text-warning text-center fw-bold mb-4">Hãy Góp ý với chúng tôi</h2>
		<div class="row mt-4">
			<div class="col-lg-3">
				<div class="contact_info">
					<div class="info_item">
						<i class="lnr lnr-phone-handset"></i>
						<h6><a href="#">1900885566</a></h6>
						<p>Bạn có thể gọi điện trực tiếp đến hot line để góp ý những vấn đề nào đó</p>
					</div>
					<div class="info_item">
						<i class="lnr lnr-envelope"></i>
						<h6><a href="#">Tuluna pk@ccantho.com</a></h6>
						<p>Bạn có thể gửi email về những ý kiến của bạn</p>
					</div>
				</div>
			</div>
			<div class="col-lg-9">
				<form class="row contact_form" action="<?= $CONTROLLER_URL?>/client/index.php?atc=gopy" method="post" id="contactForm"
					novalidate="novalidate">
					<div class="col-md-6">
						<div class="form-group">
							<p>Họ và tên:</p>
							<input type="text" class="form-control" id="name" name="username" placeholder="Enter your name"
								onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'">
								<?php  if (isset($errors['username']))    
                                    echo "<br><span class='text-star' style='color: red;'>" . $errors['username'] . "</span><br>"; ?>
						</div>
						<div class="form-group">
							<p>Email của bạn:</p>
							<input type="email" class="form-control" id="email" name="email"
								placeholder="Enter email address" onfocus="this.placeholder = ''"
								onblur="this.placeholder = 'Enter email address'">
								<?php  if (isset($errors['email']))    
                                    echo "<br><span class='text-star' style='color: red;'>" . $errors['email'] . "</span><br>"; ?>
						</div>

					</div>
					<div class="col-md-6">
						<div class="form-group">
							<p>Nội dung bạn muốn góp ý:</p>
							<textarea class="form-control" name="username" id="message" rows="1"
								placeholder="Enter Message" onfocus="this.placeholder = ''"
								onblur="this.placeholder = 'Enter Message'"></textarea>
								<?php  if (isset($errors['username']))    
                                    echo "<br><span class='text-star' style='color: red;'>" . $errors['username'] . "</span><br>"; ?>
						</div>
					</div>
					<div class="col-md-12 text-left">
						<button type="submit" value="submit" class="primary-btn" name="gopy">Gửi</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!--================Contact Area =================-->

	
