function validation(){
    var email = document.getElementById("emailText").value;
    var message = document.getElementById("emailMessage");
    var pattern = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var colombia = /@([\w-])+\.co$/gmi;
    var checkbox = document.getElementById("checkbox");
   
    if(email.match(pattern)){
      document.getElementById("emailSubmit").disabled= false;
      document.getElementById("emailSubmit").style.cursor="pointer";
      message.innerHTML="";
    }else{
      document.getElementById("emailSubmit").disabled= true;
      document.getElementById("emailSubmit").style.cursor="default";
      message.innerHTML="Please provide a valid e-mail address.";
      message.style.color="#ff0000";
    }
  
    if(!checkbox.checked){
      document.getElementById("emailSubmit").disabled= true;
      document.getElementById("emailSubmit").style.cursor="default";
      message.innerHTML="You must accept the terms and conditions";
      message.style.color="#ff0000";
    }
  
    if(email==""){
      document.getElementById("emailSubmit").disabled= true;
      document.getElementById("emailSubmit").style.cursor="default";
      message.innerHTML="Email address is required!";
      message.style.color="#ff0000";
    }
  
    if (email.match(colombia)){
    document.getElementById("emailSubmit").disabled= true;
    document.getElementById("emailSubmit").style.cursor="default";
    message.innerHTML ="We are not accepting subscriptions from Colombia emails";
    message.style.color = "#ff0000";
    }
    
  }