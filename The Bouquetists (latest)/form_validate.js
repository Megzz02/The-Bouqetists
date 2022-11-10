function shipment_form_validation(){

    // setting up variables for shipment details
    var name = document.forms["Shipment"]["fullName"].value;
    var contactNum = document.forms["Shipment"]["contactNum"].value;
    var address = document.forms["Shipment"]["address"].value;
    var state = document.forms["Shipment"]["state"].value;
    var zipcode = document.forms["Shipment"]["zipcode"].value;
    var city = document.forms["Shipment"]["city"].value;


    // input validation for shipment details
    if(!/^[a-zA-Z\s]+$/.test(name) || name == null || name == ""){
        alert("Please enter a valid name.");
        document.getElementById('fullName').style.borderColor = "red";
        return false;
    }
    else{
        document.getElementById('fullName').style.borderColor = "#2E8B57";
    }

    if (contactNum != Number(contactNum) || contactNum == null || contactNum == "" ||  contactNum.length < 12 ){
        alert("Please enter a valid phone number with no dash(-).");
        document.getElementById('contactNum').style.borderColor = "red";
        return false;
    }
    else{
        document.getElementById('contactNum').style.borderColor = "#2E8B57";
    }

    if (address == Number(address) || address == null || address == ""){
        alert("Please enter a valid address.");
        document.getElementById('address').style.borderColor = "red";
        return false;
    }
    else{
        document.getElementById('address').style.borderColor = "#2E8B57";
    }
    
    if (state == null || state == ""){
        alert("Please choose a state.");
        document.getElementById('state').style.borderColor = "red";
        return false;
    }
    else{
        document.getElementById('state').style.borderColor = "#2E8B57";
    }

    if (zipcode != Number(zipcode) || zipcode == null || zipcode == ""){
        alert("Please enter a valid zipcode.");
        document.getElementById('zipcode').style.borderColor = "red";
        return false;
    }
    else{
        document.getElementById('zipcode').style.borderColor = "#2E8B57";
    }

    if (!/^[a-zA-Z\s]+$/.test(city) || city == null || city == ""){
        alert("Please enter a valid city name.");
        document.getElementById('city').style.borderColor = "red";
        return false;
    }
    else{
        document.getElementById('city').style.borderColor = "#2E8B57";
    }

    // creating confirmation window 
    if (window.confirm('Please make sure all your data is correct. Then, click OK to proceed.')) window.location = 'payment.html' ; 
    else return false;

}

function payment_form_validation(){ 

    // setting up variables for billing details
    var fname = document.forms["Payment"]["fname"].value;
    var lname = document.forms["Payment"]["lname"].value;
    var email = document.forms["Payment"]["email"].value;
    var phone = document.forms["Payment"]["phone"].value;


    // input validation for billing details 
    if(!/^[a-zA-Z\s]+$/.test(fname) || fname == null || fname == ""){
        alert("Please enter a valid first name.");
        document.getElementById('fname').style.borderColor = "red";
        return false;
    }
    else{
        document.getElementById('fname').style.borderColor = "#2E8B57";
    }

    if(!/^[a-zA-Z\s]+$/.test(lname) || lname == null || lname == ""){
        alert("Please enter a valid last name.");
        document.getElementById('lname').style.borderColor = "red";
        return false;
    }
    else{
        document.getElementById('lname').style.borderColor = "#2E8B57";
    }

    if (email == null || email == ""){
        alert("Please enter a valid email address.");
        document.getElementById('email').style.borderColor = "red";
        return false;
    }
    else{
        document.getElementById('email').style.borderColor = "#2E8B57";
    }

    if (phone != Number(phone) || phone == null || phone == ""){
        alert("Please enter a valid phone number.");
        document.getElementById('phone').style.borderColor = "red";
        return false;
    }
    else{
        document.getElementById('phone').style.borderColor = "#2E8B57";
    }

    // setting up variables for payment details
    var cardnum = document.forms["Payment"]["cardnum"].value;
    var expmonth = document.forms["Payment"]["expmonth"].value;
    var expyear = document.forms["Payment"]["expyear"].value;
    var cvv = document.forms["Payment"]["cvv"].value;

    // input validation for payment details
    if (cardnum != Number(cardnum) || cardnum == null || cardnum == ""){
        alert("Please enter a valid card number.");
        document.getElementById('cardnum').style.borderColor = "red";
        return false;
    }
    else{
        document.getElementById('cardnum').style.borderColor = "#2E8B57";
    }

    if (expmonth != Number(expmonth) || expmonth > 12 || expmonth < 1 || expmonth == null || expmonth == ""){
        alert("Please enter a valid month.");
        document.getElementById('expmonth').style.borderColor = "red";
        return false;
    }
    else{
        document.getElementById('expmonth').style.borderColor = "#2E8B57";
    }

    if (expyear != Number(expyear) || expyear == null || expyear == ""){
        alert("Please enter a valid year.");
        document.getElementById('expyear').style.borderColor = "red";
        return false;
    }
    else{
        document.getElementById('expyear').style.borderColor = "#2E8B57";
    }

    if (cvv != Number(cvv) || cvv == null || cvv == ""){
        alert("Please enter a valid cvv.");
        document.getElementById('cvv').style.borderColor = "red";
        return false;
    }
    else{
        document.getElementById('cvv').style.borderColor = "#2E8B57";
    }

    // creating confirmation window
    if(window.confirm('Please make sure all your data is correct. Then, click OK to proceed.')) window.location.href = 'purchase_succesful.php';
    else return false;

}



function contact_form_validation(){

    var username = document.forms["Contact"]["user_name"].value;
    var usermail = document.forms["Contact"]["user_email"].value; 
    var usermsg = document.forms["Contact"]["user_msg"].value; 

    if (!/^[a-zA-Z\s]+$/.test(username)|| username == null || username == "" ){
        alert("Please enter a valid name.");
        document.getElementById('user_name').style.borderColor = "red";
        return false;
    }
    else{
        document.getElementById('user_name').style.borderColor = "#2E8B57";
    }

    if (usermail == null || usermail == "" ){
        alert("Please enter a valid email address.");
        document.getElementById('user_email').style.borderColor = "red";
        return false;
    }
    else{
        document.getElementById('user_email').style.borderColor = "#2E8B57";
    }

    if (usermsg == null || usermsg == "" ){
        alert("Please enter your message.");
        document.getElementById('user_msg').style.borderColor = "red";
        return false;
    }
    else {
        document.getElementById('user_msg').style.borderColor = "#2E8B57";
    }
    
    window.alert("Your message have been succesfully sent");

}
