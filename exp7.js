function setInit(formI, notRadio = true){
	if(notRadio) var elements = document.forms[formI].elements;
	else var elements = document.getElementsByClassName("answers");

	for(var i = 0; i < elements.length; i++){
		elements[i].style.border = "initial";
		nextEl = elements[i].nextElementSibling;
		if(nextEl.style.color == "red")
			nextEl.remove();
	}
}

function insertAfter(referenceNode, newNode) {
    referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
}

function displayError(formI, inputI, msg="Please fill out this field.", formEle = true, ele = 'i'){
	if(formEle) var ele = document.forms[formI][inputI];

	var msgBox = document.createElement('div');
	msg = document.createTextNode(msg);
	msgBox.appendChild(msg);
	msgBox.style.color = "red";
	if(ele.nextElementSibling.style.color != "red"){
		insertAfter(ele, msgBox);
		ele.focus();
		ele.style.border = "thin solid red";
	}
	return false;
}

function validateForm(formIndex){
	var elements = document.forms[formIndex].elements;

	for(var i = 0; i < elements.length - 1; i++){

		if (elements[i].value === "")
			return displayError(formIndex, i);

		var type = elements[i].getAttribute("name");

		if(type == "name"){
			var pattern = /^[a-z ]+$/i;

			if(!pattern.test(elements[i].value))
				return displayError(formIndex, i, "Please enter a valid name. Only alphabets are allowed.");
		}

		if(type == "email"){
			var pattern = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

			if(!pattern.test(elements[i].value))
				return displayError(formIndex, i, "Please enter a valid email.");
		}

		if(type == "psw"){
			if(elements[i].value.length < 6)
				return displayError(formIndex, i, "Password should be at least 6 characters long.");
		}

		if(type == "repsw"){
			if(elements[i].value != elements[i].previousElementSibling.value)
				return displayError(formIndex, i, "Passwords do not match.");
		}

		if(type == "mob"){
			var pattern = /^[789][0-9]{9}$/;

			if(!pattern.test(elements[i].value))
				return displayError(formIndex, i, "Please enter a valid phone number.");
		}

		if(type == "roll"){
			if(isNaN(elements[i].value))
				return displayError(formIndex, i, "Please enter a valid roll number.");
		}

		if (elements[i].type == "radio" || elements[i].type == "checkbox"){
			var check = false;
			var options = document.getElementsByName(elements[i].getAttribute("name"));

			for (var j = 0; j < options.length; j++)
				if(options[j].checked)
					check = true;

			if(!check){
				parent = elements[i].parentNode;
				return displayError(0, 0, "Please select an option.", false, parent);
			}

			i += options.length - 1;
		}
	}
}