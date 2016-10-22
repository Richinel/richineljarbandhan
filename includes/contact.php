	
<div class="contact">
	<div class="contact_wrapper">
		<i class="fa fa-envelope-o envelope" aria-hidden="true"></i>

		<row around>
			<column cols="6">
				<div class="f_block">

					<h2>Contact Form</h2>

					<p>
						Do you have any questions or do you just want to know more about me? Then please fill in the form to the right and I will contact you as soon as possible!
					</p>

				</div>
			</column>

			<column cols="6">
				<div class="f_blocks">
					<form action="mail_function.php" method="post">
						<row around>
							<column cols="6">
								<input type="text" name="nameperson" placeholder="Your name" required="Please fill in your name">
							</column>
							<column cols="6">
								<input type="text" name="namemail" placeholder="Your e-mailadress" required>
							</column>
						</row>

						<row around>
							<column cols="12">
								<input type="text" name="subject" placeholder="Subject" required="Please fill in the subject">
							</column>
						</row>

						<row around>
							<column cols="12">
								<textarea name="message" placeholder="Your message" required="Can't send a form without a message!"></textarea>
							</column>
						</row>

						<row around>
							<column cols="6">
								<button type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Send</button>
							</column>
							<column cols="6">
								<button type="reset"><i class="fa fa-eraser" aria-hidden="true"></i> Reset</button>
							</column>
						</row>
					</form>		
				</div>
			</column>
		</row>
	</div>
</div>