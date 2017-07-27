<!--
	This is the footer for a resume webiste created for CSS 405 Advanced Internet,
	USM Summer 2017
	Created by Courtney Kirkham
	Creation Date: 25 July 2017
	Changed to .php: 27 July 2017
-->
				<div id="formSection">
					<h2>Contact Me</h2>
					<form action="processForm.php" method="post">
						Name<br>
						<input type="text" name="name" class="inputField name" required><br>
						E-mail Address<br>
						<input type="email" name="email" class="inputField email" required><br>
						Message<br>
						<input type="textarea" name="message" class="textAreaInput" required><br>
						<!--Submit Button-->
						<input type="submit" id="contactSubmitButton" class="submitButton">
					</form>
				</div>
			</div>
		</div>
		<div class="footer">
			<p>University of Southern Mississippi | CSS 405 | Summer 2017 | <a id="footerEmail" href="mailto:therealckirkham@gmail.com">therealckirkham@gmail.com</a></p>
		</div>
	</div>
</body>
<!-- Notes for future improvements:
	Check Dates for MGCCC Honors presentations
	Link to social media profiles, GitHub, blog-->
</html>