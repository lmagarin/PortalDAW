/**
 * Created by rafael on 14/12/2015.
 */
window.addEventListener("load", function(){
    var name = document.getElementById("name");
    var surname = document.getElementById("surname");
    var gender = document.getElementsByClassName("gender"); // getElementsByName() is deprecated in HTML5
    var genderMale = document.getElementById("male");
    var genderFemale = document.getElementById("female");
    var idiom = document.getElementsByClassName("idiom"); // getElementsByName() is deprecated in HTML5
    var idiomCastellano = document.getElementById("castellano");
    var idiomFrench = document.getElementById("french");
    var weight = document.getElementById("weight");
    var mail = document.getElementById("email");
    var dni = document.getElementById("dni");
    var birthdate = document.getElementById("birthdate");
    var phone = document.getElementById("phone");
    var bankAccount = document.getElementById("account");
    var url = document.getElementById("url");
    var submit = document.getElementById("submit");

    var emptyFieldMessage = "Debe cumplimentar el campo";
    var formatFieldMessage = "El dato introducido no respeta el formato obligatorio";
    var finalErrorMessage = "Campo incompleto o con formato inválido"
    var nameError = document.getElementById("errorName");
    var surnameError = document.getElementById("errorSurname");
    var genderError = document.getElementById("errorGender");
    var idiomError = document.getElementById("errorIdiom");
    var weightError = document.getElementById("errorWeight");
    var mailError = document.getElementById("errorMail");
    var dniError = document.getElementById("errorDni");
    var birthdateError = document.getElementById("errorBirthdate");
    var phoneError = document.getElementById("errorPhone");
    var accountError = document.getElementById("errorAccount");
    var urlError = document.getElementById("errorUrl");

    function isEmptyField(string){
        if(string === "")
            return true;
        return false;
    }

    function validateName(string){
        var RegExName = /^([a-z ñáéíóú]{1,60})$/i;
        if(!RegExName.test(string))
            return false;
        return true;
    }

    function validateSurname(string){
        var RegExSurname = /^([a-z ñáéíóú -']+)$/i;
        if(!RegExSurname.test(string))
            return false;
        return true;
    }

    function validateGender(){
        var c = false;
        for(var i=0; i<gender.length; i++){
            if(gender[i].checked) {
                c = true;
            }
        }
        return c;
    }

    function validateIdiom(){
        var c = false;
        for(var i=0; i<idiom.length; i++){
            if(idiom[i].checked) {
                c = true;
            }
        }
        return c;
    }

    function validateWeight(string){
        var RegExWeight = /^[0-9]{1,3}$/;
        if(!RegExWeight.test(string))
            return false;
        return true;
    }

    function validateMail(string){
        var RegExMail = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i;
        if(!RegExMail.test(string))
            return false;
        return true;
    }

    function validateDNI(string){
        var RegExDNI = /^[0-9]{8}[A-Z]$/i;
        if(!RegExDNI.test(string))
            return false;
        return true;
    }

    function validateDate(string){
        var RegExDate = /^[0-9]{2}-[0-9]{2}-[0-9]{4}$/i;
        var arrayDate = string.split("-");
        var day = parseInt(arrayDate[0]);
        var month = parseInt(arrayDate[1]-1);
        var year = parseInt(arrayDate[2]);
        var date = new Date(year, month, day);
        if (!RegExDate.test(string))
            return false;
        else if((date.getMonth()!= month)||(date.getFullYear()!= year)||(date.getDate()!= day))
            return false;
        else
            return true;
    }

    function validatePhonenumber(string){
        var RegExPhone = /^[0-9]{9}$/i;
        if(!RegExPhone.test(string))
            return false;
        return true;
    }

    function validateBankAccount(string){
        var RegExBankAccount = /^[0-9]{4}[-][0-9]{4}[-][0-9]{2}[-][0-9]{10}$/i;
        if(!RegExBankAccount.test(string))
            return false;
        return true;
    }

    function validateUrl(string){
        var RegExUrl = /^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \?=.-]*)*\/?$/i;
        if(!RegExUrl.test(string))
            return false;
        return true;
    }

    function completeValidation(){
        if(isEmptyField(name.value) || !validateName(name.value))
            nameError.innerHTML = finalErrorMessage;
            name.focus();
        if(isEmptyField(surname.value) || !validateSurname(surname.value))
            surnameError.innerHTML = finalErrorMessage;
            surname.focus();
        if(!validateGender(gender.value))
            genderError.innerHTML = finalErrorMessage;
            genderMale.focus();
        if(!validateIdiom(idiom.value))
            idiomError.innerHTML = finalErrorMessage;
            idiomCastellano.focus();
        if(isEmptyField(weight.value) || !validateWeight(weight.value))
            weightError.innerHTML = finalErrorMessage;
            weight.focus();
        if(isEmptyField(mail.value) || !validateMail(mail.value))
            mailError.innerHTML = finalErrorMessage;
            mail.focus();
        if(isEmptyField(dni.value) || !validateDNI(dni.value))
            dniError.innerHTML = finalErrorMessage;
            dni.focus();
        if(isEmptyField(birthdate.value) || !validateDate(birthdate.value))
            birthdateError.innerHTML = finalErrorMessage;
            birthdate.focus();
        if(isEmptyField(phone.value) || !validatePhonenumber(phone.value))
            phoneError.innerHTML = finalErrorMessage;
            phone.focus();
        if(isEmptyField(bankAccount.value) || !validateBankAccount(bankAccount.value))
            accountError.innerHTML = finalErrorMessage;
            bankAccount.focus();
        if(isEmptyField(url.value) || !validateUrl(url.value))
            urlError.innerHTML = finalErrorMessage;
            url.focus();
    }

    name.addEventListener("blur", function(){
        var valueName = name.value;
        if(isEmptyField(valueName)){
            nameError.innerHTML = emptyFieldMessage;
            name.focus();
        }
        else if(!validateName(valueName)){
            nameError.innerHTML = formatFieldMessage;
            name.focus();
        }
        else
            nameError.innerHTML = "";
    });

    surname.addEventListener("blur", function(){
        var valueSurname = surname.value;
        if(isEmptyField(valueSurname)){
            surnameError.innerHTML = emptyFieldMessage;
            surname.focus();
        }
        else if(!validateName(valueSurname)){
            surnameError.innerHTML = formatFieldMessage;
            surname.focus();
        }
        else
            surnameError.innerHTML = "";
    });

    /*genderMale.addEventListener("blur", function(){
        if(!validateGender()) {
            genderError.innerHTML = emptyFieldMessage;
            genderMale.focus();
        }
        else
            genderError.innerHTML = "";
    });

    genderFemale.addEventListener("blur", function(){
         if(!validateGender()) {
            genderError.innerHTML = emptyFieldMessage;
            genderFemale.focus();
         }
         else
            genderError.innerHTML = "";
    });*/

    idiomFrench.addEventListener("blur", function(){
        if(!validateIdiom()) {
            idiomError.innerHTML = "Debe pulsar, al menos, en su lengua materna";
            idiomCastellano.focus();
        }
        else
            idiomError.innerHTML = "";
    });

    weight.addEventListener("blur", function(){
        var valueWeight = weight.value;
        if(isEmptyField(valueWeight)){
            weightError.innerHTML = emptyFieldMessage;
            weight.focus();
        }
        else if(!validateWeight(valueWeight)){
            weightError.innerHTML = formatFieldMessage;
            weight.focus();
        }
        else
            weightError.innerHTML = "";
    });

    mail.addEventListener("blur", function(){
        var valueMail = mail.value;
        if(isEmptyField(valueMail)){
            mailError.innerHTML = emptyFieldMessage;
            mail.focus();
        }
        else if(!validateMail(valueMail)){
            mailError.innerHTML = formatFieldMessage;
            mail.focus();
        }
        else
            mailError.innerHTML = "";
    });

    dni.addEventListener("blur", function(){
        var valueDni = dni.value;
        if(isEmptyField(valueDni)){
            dniError.innerHTML = emptyFieldMessage;
            dni.focus();
        }
        else if(!validateDNI(valueDni)){
            dniError.innerHTML = formatFieldMessage;
            dni.focus();
        }
        else
            dniError.innerHTML = "";
    });

    birthdate.addEventListener("blur", function(){
        var valueBirthdate = birthdate.value;
        if(isEmptyField(valueBirthdate)){
            birthdateError.innerHTML = emptyFieldMessage;
            birthdate.focus();
        }
        else if(!validateDate(valueBirthdate)){
            birthdateError.innerHTML = formatFieldMessage;
            birthdate.focus();
        }
        else
            birthdateError.innerHTML = "";
    });

    phone.addEventListener("blur", function(){
        var valuePhone = phone.value;
        if(isEmptyField(valuePhone)){
            phoneError.innerHTML = emptyFieldMessage;
            phone.focus();
        }
        else if(!validatePhonenumber(valuePhone)){
            phoneError.innerHTML = formatFieldMessage;
            phone.focus();
        }
        else
            phoneError.innerHTML = "";
    });

    bankAccount.addEventListener("blur", function(){
        var valueAccount = bankAccount.value;
        if(isEmptyField(valueAccount)){
            accountError.innerHTML = emptyFieldMessage;
            bankAccount.focus();
        }
        else if(!validateBankAccount(valueAccount)){
            accountError.innerHTML = formatFieldMessage;
            bankAccount.focus();
        }
        else
            accountError.innerHTML = "";
    });

    url.addEventListener("blur", function(){
        var valueUrl = url.value;
        if(isEmptyField(valueUrl)){
            urlError.innerHTML = emptyFieldMessage;
            url.focus();
        }
        else if(!validateUrl(valueUrl)){
            urlError.innerHTML = formatFieldMessage;
            url.focus();
        }
        else
            urlError.innerHTML = "";
    });

    submit.addEventListener("click", completeValidation);
});


