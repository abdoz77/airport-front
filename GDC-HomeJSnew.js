var usernameSignUp=document.querySelector("#usernameSignUp").value;
var email=document.querySelector("#email").value;
var passSignUp=document.querySelector("#passSignUp").value;
var confPass=document.querySelector("#confpass").value;
var messageCheck1=document.querySelector("#messagecheck1");
var messageCheck2=document.querySelector("#messagecheck2");
var submitSignUp=document.querySelector("#submitSignUp");
submitSignUp.addEventListener("click", function(){
	usernameSignUp=document.querySelector("#usernameSignUp").value;
	email=document.querySelector("#email").value;
	passSignUp=document.querySelector("#passSignUp").value;
	confPass=document.querySelector("#confpass").value;
	if(usernameSignUp==="" || email==="" || passSignUp==="" || confPass==="")
	{
		messageCheck1.innerHTML="All Fields Are Required"; 
		if(passSignUp!=="" && confPass!=="" && passSignUp!==confPass)
		{
			messageCheck2.innerHTML="Password And Confirm Password Must Be Same";
		}
	}
	else
	{
		messageCheck1.innerHTML=""; 
		messagecheck2.innerHTML="";
		if(passSignUp!==confPass)
		{
			messageCheck1.innerHTML="Password And Confirm Password Must Be Same";
		}
		else
		{
			messageCheck1.innerHTML=""; 
			messagecheck2.innerHTML="";
			alert("Thank You For Registering!!");
		}
	}
});




var ori=document.querySelector("#ori").value;
var destination=document.querySelector("#dest").value;
var departure=document.querySelector("#depart").value;
var ret=document.querySelector("#return").value;
var flightsButton=document.querySelector("#flightsButton");
flightsButton.addEventListener("click",function(){
	var ori=document.querySelector("#ori").value;
	var destination=document.querySelector("#dest").value;
	var departure=document.querySelector("#depart").value;
	var ret=document.querySelector("#return").value;
	var dl=parseInt(departure.substring(8,10));
	var rl=parseInt(ret.substring(8,10));
	if(ori==="Origin")
	{
		alert("Select Proper Origin");
	}
	else if(destination==="Destination")
	{
		alert("Select Proper Destination");
	}
	else if(departure===""||ret===""||dl>rl||dl<24||rl<24)
	{
		alert("Enter Proper Dates");
	}
});




function showFlights(type) {
  const local = document.getElementById("local-flights");
  const international = document.getElementById("international-flights");
  const buttons = document.querySelectorAll(".toggle-btn");

  buttons.forEach(btn => btn.classList.remove("active"));

  if (type === "local") {
    local.classList.remove("hidden");
    international.classList.add("hidden");
    buttons[0].classList.add("active");
  } else {
    international.classList.remove("hidden");
    local.classList.add("hidden");
    buttons[1].classList.add("active");
  }
}





