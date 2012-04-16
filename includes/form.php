    <div class="contactMessage">
			<?php echo $feedback; ?>  
     </div>
      <div id="showContactForm" class="<?php echo $cssclass; ?>">  <!-- showForm to start -->	
        <form method="post" action=<?php echo $formAction; ?> id="contactForm">
          <input type="text" name="name" id="name" placeholder="Name"/>
          <input type="email" name="email" id="email" placeholder="E-mail address" required/>
          <textarea name="message" id="message"  placeholder="Your message here" required></textarea>
					<input name="nameBotTest" type="text" id="nameBotTest" placeholder="Bot test: if you're a human, don't enter anything here" class="honeypot" />
          <input class="button" type="submit" name="submit" value="Send" id="submitButton" />
          <input type="hidden" name="submitted" value="TRUE" />
        </form>
      </div>
