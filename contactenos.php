<?php require('inc/header.php');?>
<?php require('inc/menu.php');?>
<!-- Contenido -->
<img src="images/banner_contacto1.png" alt="portada" class="img-responsive" style="margin-top:50px;">

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
      <style>
     @import url(https://fonts.googleapis.com/css?family=Lato:400,700,900|Montserrat:400,700,900|Open+Sans:400,700,900|Raleway:400,700,900);
/*-----------------------------------//
//  MIXINS
//-----------------------------------*/
/*-----------------------------------//
//  D.R.Y. CLASSES
//-----------------------------------*/
/*Text Aligns*/
.textLeft {
  text-align: left;
}
.textRight {
  text-align: right;
}
.textCenter {
  text-align: center;
}

/*-----------------------------------//
//  GENERAL
//-----------------------------------*/
body {
  font: 14px/1.5em "Open Sans";
  background: #F0F1FA;
}

a {
  text-decoration: none;
  color: #E54B4B;
}

p em {
  background: #f2f2f2;
  color: #87878f;
  padding: 0 2px;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: "Montserrat";
}

hr {
  margin: 1.5em 0;
}

.hide {
  display: none;
}

/*-----------------------------------//
//  TEMPLATE STYLES
//-----------------------------------*/
/* Buttons and Inputs */
textarea,
button,
a.btn,
select,
input[type="text"],
input[type="submit"],
input[type="button"],
input[type="submit"],
input[type="reset"],
input[type="file"]::-webkit-file-upload-button {
  font-family: inherit !important;
  font-size: 13px;
  border: 1px solid #B0B0BA;
  box-sizing: border-box;
  padding: 5px;
}

a.btn,
button,
input[type="submit"],
input[type="button"],
input[type="submit"],
input[type="reset"],
input[type="file"]::-webkit-file-upload-button {
  background: transparent;
  display: inline-block;
  padding: 6px 10px;
  color: inherit;
  font-weight: bold !important;
  font-family: Montserrat;
  text-decoration: none;
  text-transform: uppercase;
}

/* Row */
.row {
  margin-bottom: 1.5%;
  overflow: hidden;
}
.row:last-child {
  margin: 0;
}

@media screen and (min-width: 480px) {
  .hlf,
  .trd,
  .fth {
    float: left;
    margin-right: 1.5%;
  }
  .hlf:last-child,
  .trd:last-child,
  .fth:last-child {
    margin: 0;
    float: right;
  }

  .hlf {
    width: 49.25%;
  }

  .trd {
    width: 32.3%;
  }

  .fth {
    width: 23.8%;
  }
}
/* Box */
.box {
  width: 100%;
  background: #fff;
  box-sizing: border-box;
  padding: 3%;
  margin: 0 auto;
  margin-bottom: 1.6%;
  box-shadow: 0 3px 6px -4px rgba(0, 0, 0, 0.5);
  overflow: hidden;
}
@media screen and (min-width: 480px) {
  .box {
    padding: 2%;
    margin-bottom: 2%;
    max-width: 500px;
  }
}
@media screen and (min-width: 765px) {
  .box {
    padding: 1.5%;
    margin-bottom: 1.5%;
  }
}
@media screen and (min-width: 1024px) {
  .box {
    padding: 1.25%;
    margin-bottom: 1.25%;
  }
}
@media screen and (min-width: 1180px) {
  .box {
    padding: 1%;
    margin-bottom: 1%;
  }
}

/*-----------------------------------//
//  PEN STYLES
//-----------------------------------*/
/*PEN STYLES*/
.contactForm {
  border-radius: 4px;
  box-sizing: border-box;
  margin: auto;
  max-width: 1000px;
  overflow: hidden;
  /*SUCESS STYLES*/
}
.contactForm .formHeader {
  background: #337ab7;
  border-bottom: 4px solid #337ab7;
  color: #fff;
  text-align: center;
  overflow: hidden;
  /*TRANSITION*/
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
.contactForm .formHeader h1 {
  line-height: 1em;
}
.contactForm .formBody {
  background: #fff;
  height: 371px;
  padding: 20px 12px;
  overflow: hidden;
  /*TRANSITION*/
  -webkit-transition: all 0.2s ease;
  transition: all 0.2s ease;
}
.contactForm .inputContainer {
  border: 1px solid #ccc;
  border-radius: 3px;
  position: relative;
  margin-bottom: 5px;
  overflow: hidden;
  background: transparent;
}
.contactForm .inputContainer .message {
  color: #FF5C5C;
  background: #ffb8b8;
  position: absolute;
  top: 0;
  bottom: 0;
  width: 0;
  margin: 0;
  line-height: 2.5em;
  text-align: center;
  overflow: hidden;
  /*TRANSITION*/
  -webkit-transition: all 0.1s ease;
  transition: all 0.1s ease;
}
.contactForm .inputContainer label,
.contactForm .inputContainer input,
.contactForm .inputContainer textarea {
  box-sizing: border-box;
  padding: 10px;
  font-size: 14px;
  line-height: 1em;
  border: none;
  font: inherit;
}
.contactForm .inputContainer label {
  display: inline-block;
  font-size: .7em;
  background: #e0e0e0;
  color: rgba(0, 0, 0, 0.3);
  line-height: 1.75em;
  border-right: 1px solid #ccc;
  /*POSITION*/
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
}
.contactForm .inputContainer textarea,
.contactForm .inputContainer input {
  width: 100%;
  max-width: 100%;
}
.contactForm .inputContainer textarea {
  margin-bottom: -5px;
}
.contactForm .inputContainer input {
  padding-left: 50px;
}
.contactForm .submitBtn {
  background: #337ab7;
  color: #fff;
  border: none;
  border-radius: 3px;
  font: inherit;
  padding: 10px 18px;
  margin-top: 10px;
  float: right;
  width: auto;
  /*TRANSITION*/
  -webkit-transition: background 0.5s ease;
  transition: background 0.5s ease;
}
.contactForm .submitBtn:hover {
  background: #333ab7;
}
.contactForm.success {
  overflow: hidden;
}
.contactForm.success .formHeader {
  background: #0A8754;
  border-color: #087146;
  font-size: .75em;
}
.contactForm.success .formBody {
  height: 0;
  padding-top: 0;
  padding-bottom: 0;
}
.contactForm.success .formBody form {
  /*TRANSITION*/
  -webkit-transition: opacity 0.5s ease;
  transition: opacity 0.5s ease;
  opacity: 0;
}
.contactForm .inputContainer.success {
  border-color: #76d176;
}
.contactForm .inputContainer.success:after {
  font: 1.25em/2em FontAwesome;
  color: #82E682;
  position: absolute;
  top: 0;
  right: 10px;
  content: "\f00c";
}
.contactForm .inputContainer.success label {
  background: #82E682;
  border-color: #76d176;
}
.contactForm .inputContainer.success input,
.contactForm .inputContainer.success textarea {
  color: #0A8754;
}
.contactForm .inputContainer.error {
  border-color: #e85454;
}
.contactForm .inputContainer.error .message {
  width: 100%;
}
.contactForm .inputContainer.error:after {
  font: 1.25em/2em FontAwesome;
  color: #FF5C5C;
  position: absolute;
  top: 0;
  right: 10px;
  content: "\f00d";
}
.contactForm .inputContainer.error label {
  background: #FF5C5C;
  border-color: #e85454;
}
.contactForm .inputContainer.error input,
.contactForm .inputContainer.error textarea {
  color: #FF5C5C;
}

    
      </style>
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
//	formValidator.init();
}());
            var enlace = document.getElementById('contactanos');
            enlace.className = "active";
        </script>
<?php require('inc/footer.php');?>