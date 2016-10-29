<?php require('inc/header.php');?>
<link rel="stylesheet" href="css/formulario.css">    
<?php require('inc/menu.php');?>
<!-- Contenido -->

<img src="images/banner_contacto1.png" alt="portada" class="img-responsive" style="margin-top:50px;">

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
      <div class="col-md-8 col-md-offset-2">
          <div id="contactForm" class="contactForm">
            <div id="formHeader" class="formHeader">
                <h1 id="message">Contactanos</h1>
            </div>                    
            <div id="formBody" class="formBody">
                <form action="mail.php" method="POST" name="contactForm">
                    <div class="inputContainer">
                        <label for="userName">
                            <i class="fa fa-lg fa-fw fa-user"></i>
                        </label>
                        <input name="name" id="userName" type="text" placeholder="Cristian moya">
                    </div>
                    <div class="inputContainer">
                        <label for="userEmail">
                            <i class="fa fa-lg fa-fw fa-envelope"></i>
                        </label>
                        <input name="email" id="userEmail" type="email" placeholder="crist@domain.com">
                    </div>
                    <div class="inputContainer">
                        <textarea name="mensaje" id="userMessage" rows="5" placeholder="Escribe tu mensaje"></textarea>
                    </div>
                    <input id="submitBtn" class="submitBtn" type="submit" value="Enviar Mensaje">                    
                </form>
            </div>
        </div>
      </div>
      </div><!-- div row -->

      <hr>

      
        <script>
        (function() {
	"use strict";
	var //GLOBAL VARIABLES
	input,
			container,
			//CSS CLASSES
			classSuccess = "success",
			classError = "error",
			//FORM VALIDATOR
			formValidator = {
				init: function() {
					this.cacheDom();
					this.bindEvents();
				},
				cacheDom: function() {
					//MAIN PARENT ELEMENT
					this.contactForm = document.getElementById("contactForm");
					//MAIN FORM ELEMENTS
					this.formHeader = document.querySelector("#formHeader h1");
					this.formBody = document.getElementById("formBody");
					this.inputContainer = document.getElementsByClassName("inputContainer");
					//USER INPUT ELEMENTS
					//INPUT FIELDS
					this.fields = {
						userName: document.getElementById("userName"),
						userEmail: document.getElementById("userEmail"),
						userMessage: document.getElementById("userMessage")
					};
					this.submitBtn = document.getElementById("submitBtn");
				},
				bindEvents: function() {
					var i;
					//RUN RULES ON SUBMIT BUTTON CLICK
					this.submitBtn.onclick = this.runRules.bind(this);
					//BIND EVENTS TO EACH INPUT FIELD
					for (i in this.fields) {
						if (this.fields.hasOwnProperty(i)) {
							//VARIABLES
							input = this.fields[i];
							container = input.parentElement;
							//RUN RULES WHEN INPUT HAS FOCUS
							input.onfocus = this.runRules.bind(this);
							//RESET ERRORS WHEN CONTAINER IS CLICKED
							container.onclick = this.resetErrors.bind(this, input);
						}
					}
				},
				runRules: function(evnt) {
					var target = evnt.target,
							type = evnt.type;
					//IF EVENT ON SUBMIT BUTTON
					if (target === this.submitBtn) {
						//PREVENT FORM SUBMITTION
						this.preventDefault(evnt);
						//IF INPUT HAS FOCUS
					} else if (type === "focus") {
						//RESET CLASSLIST
						this.resetClassList(target.parentElement);
						//RESET ERRORS
						this.resetErrors(target);
						return false;
					}
					//RESET CLASSLIST
					this.resetClassList();
					//CHECK FIELDS
					this.checkFields();
				},
				preventDefault: function(evnt) {
					//PREVENT DEFUALT
					evnt.preventDefault();
				},
				checkFields: function() {
					var i,
							validCount = 0,
							//EMAIL FILTER 
							filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
					//CYLCE THROUGH INPUTS
					for (i in this.fields) {
						if (this.fields.hasOwnProperty(i)) {
							input = this.fields[i];
							//CHECK IF FIELD IS EMPTY
							if (input.value === "") {
								//ADD ERROR CLASS
								this.addClass(input, classError);
								//CHECK IF EMAIL IS VALID
							} else if (i === "userEmail" && !filter.test(input.value)) {
								//ADD ERROR CLASS
								this.addClass(input, classError);
							} else {
								//FIELD IS VALID
								this.addClass(input, classSuccess);
								validCount += 1;
							}
						}
					}
					//IF ALL FEILDS ARE VALID
					if (validCount === 3) {
						//SUBMIT FORM
						this.submitForm();
					}
				},
				addClass: function(input, clss) {
					container = input.parentElement;
					//IF INPUT HAS ERROR
					if (clss === classError) {
						//SHOW ERROR MESSAGE
						this.errorMessage(input);
					}
					//ADD CLASS
					input.parentElement.classList.add(clss);
				},
				errorMessage: function(input) {
					var message;
					//IF USERNAME HAS ERROR
					if (input === this.fields.userName) {
						message = "Por favor ingrese su nombre";
						//ELSE IF USEREMAIL HAS ERROR 
					} else if (input === this.fields.userEmail) {
						message = "Por favor ingrese su coreo";
						//ELSE IF USERMESSAGE HAS ERROR
					} else if (input === this.fields.userMessage) {
						message = "Por favor ingresa tu mensaje";
					}
					this.renderError(input, message);
				},
				renderError: function(input, message) {
					var html;
					//GET INPUT CONTAINER
					container = input.parentElement;
					//RENDER HTML
					html = document.createElement("div");
					html.setAttribute("class", "message");
					html.innerHTML = message;
					//IF MESSAGE ELEMENT DOESN'T EXIST
					if (!container.getElementsByClassName("message")[0]) {
						//INSERT MESSAGE TO INPUT CONTAINER
						container.insertBefore(html, container.firstElementChild);
					}
				},
				resetClassList: function(input) {
					var i;
					//IF TARGETING SPECIFIC INPUT
					if (input) {
						//GET INPUT CONTAINER
						container = input.parentElement;
						//REMOVE CLASSES
						container.classList.remove(classError, classSuccess);
						//FOCUS ON INPUT FIELD
						input.focus();
					} else {
						for (i in this.fields) {
							if (this.fields.hasOwnProperty(i)) {
								//REMOVE CLASSES FROM ALL FIELDS
								this.fields[i].parentElement.classList.remove(classError, classSuccess);
							}
						}
					}
				},
				resetErrors: function(input) {
					//GET INPUT CONTAINER
					container = input.parentElement;
					//IF CONTAINER CONTAINS ERROR
					if (container.classList.contains(classError)) {
						//RESET CLASSES
						this.resetClassList(input);
					}
				},
				submitForm: function() {
					var waitForAnimation;
					//ADD SUCCESS CLASS
					this.contactForm.classList.add(classSuccess);
					//WAIT FOR ANIMATION TO FINISH
					this.changeHeader("Enviando mensaje");
					//WAIT FOR ANIMATION TO FINISH
					setTimeout(this.changeHeader.bind(this, "Gracias por dejarnos tu mensaje"), 1200);
				},
				changeHeader: function(text) {
					//CHANGE HEADER TEXT
					this.formHeader.innerHTML = text;
				}
			};
	//INITIATE FORM VALIDATOR
	formValidator.init();
}());
            var enlace = document.getElementById('contactanos');
            enlace.className = "active";
        </script>
<?php require('inc/footer.php');?>