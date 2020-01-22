// JavaScript source code
//validate Age
function isFutureDate(idate){
    var today = new Date().getFullYear(),
		
        idate = idate.split("/");
		console.log(idate[2]);
		
		console.log(today-idate[2]);
		
		if(today - idate[2] > 15 && (today - idate[2]) < 80)
		{
			return false;
		}
		else{
		return true;}
    
   
	
}
//Validate date
function checkDate()
{
    var idate = document.getElementById("dob"),
        resultDiv = document.getElementById("datewarn"),
        dateReg = /^(((0[1-9]|[12]\d|3[01])\/(0[13578]|1[02])\/((19|[2-9]\d)\d{2}))|((0[1-9]|[12]\d|30)\/(0[13456789]|1[012])\/((19|[2-9]\d)\d{2}))|((0[1-9]|1\d|2[0-8])\/02\/((19|[2-9]\d)\d{2}))|(29\/02\/((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$/g;

    if(dateReg.test(idate.value)){
        if(isFutureDate(idate.value)){
            resultDiv.innerHTML = "Entered age between 15 and 80";
            resultDiv.style.color = "red";
        } else {
            resultDiv.innerHTML = "Age valid";
            resultDiv.style.color = "green";
        }
    } else {
        resultDiv.innerHTML = "Invalid date!";
        resultDiv.style.color = "red";
    }
}

//validate pin
function checkPin()
{
	var state = document.getElementById("ddlstate"),
		pincode=document.getElementById("pin").value,
		resultPin = document.getElementById("pinwarn"),
		firstdigit="",
		digit=String(pincode).charAt(0),
		digit2=Number(digit),
		pinreg=/\d{4}$/;
		
		
	
	console.log((state.selectedIndex))
	console.log((digit2))
	console.log(pinreg.test(pincode))
	
	if( state.selectedIndex==0  && pinreg.test(pincode))
	{
		digit=String(pincode).charAt(0),
		digit2=Number(digit)
		
		if(digit2==3 || digit2==8)
		{
			resultPin.innerHTML = "Valid Code";
			resultPin.style.color = "green";
		}
		else
		{
			resultPin.innerHTML = "Entered pin starting with 3 or 8";
            resultPin.style.color = "red";
		}
	}
	else if(state.selectedIndex==1 && pinreg.test(pincode))
	{
		digit=String(pincode).charAt(0),
		digit2=Number(digit)
		if(digit2==1 || digit2==2)
		{
			resultPin.innerHTML = "Valid Code";
			resultPin.style.color = "green";
		}
		else
		{
			resultPin.innerHTML = "Entered pin starting with 1 or 2";
            resultPin.style.color = "red";
		}
	}
	else if(state.selectedIndex==2 && pinreg.test(pincode))
	{
		digit=String(pincode).charAt(0),
		digit2=Number(digit)
		if(digit2==4 || digit2==9)
		{
			resultPin.innerHTML = "Valid Code";
			resultPin.style.color = "green";
		}
		else
		{
			resultPin.innerHTML = "Entered pin starting with 4 or 9";
            resultPin.style.color = "red";
		}
	}
	else if(state.selectedIndex==3 && pinreg.test(pincode))
	{
		digit=String(pincode).charAt(0),
		digit2=Number(digit)
		if(digit2==0)
		{
			resultPin.innerHTML = "Valid Code";
			resultPin.style.color = "green";
		}
		else
		{
			resultPin.innerHTML = "Entered pin starting with 0";
            resultPin.style.color = "red";
		}
	}
	else if(state.selectedIndex==4 && pinreg.test(pincode))
	{
		digit=String(pincode).charAt(0),
		digit2=Number(digit)
		if(digit2==6)
		{
			resultPin.innerHTML = "Valid Code";
			resultPin.style.color = "green";
		}
		else
		{
			resultPin.innerHTML = "Entered pin starting with 6";
            resultPin.style.color = "red";
		}
	}
	else if(state.selectedIndex==5 && pinreg.test(pincode))
	{
		digit=String(pincode).charAt(0),
		digit2=Number(digit)
		if(digit2==5)
		{
			resultPin.innerHTML = "Valid Code";
			resultPin.style.color = "green";
		}
		else
		{
			resultPin.innerHTML = "Entered pin starting with 5";
            resultPin.style.color = "red";
		}
	}
	else if(state.selectedIndex==6 && pinreg.test(pincode))
	{
		digit=String(pincode).charAt(0),
		digit2=Number(digit)
		if(digit2==7)
		{
			resultPin.innerHTML = "Valid Code";
			resultPin.style.color = "green";
		}
		else
		{
			resultPin.innerHTML = "Entered pin starting 7";
            resultPin.style.color = "red";
		}
	}
	else if(state.selectedIndex==7 && pinreg.test(pincode))
	{
		digit=String(pincode).charAt(0),
		digit2=Number(digit)
		if(digit2==0)
		{
			resultPin.innerHTML = "Valid Code";
			resultPin.style.color = "green";
		}
		else
		{
			resultPin.innerHTML = "Entered pin starting 0";
            resultPin.style.color = "red";
		}
	}
	else 
	{
		resultPin.innerHTML = "Enter valid Code!";
        resultPin.style.color = "red";
	}
	
}//ends check pin


//OthersTextBox
function othersText() 
{
	var resultBox = document.getElementById("textboxwarn")
	console.log((document.getElementById("others").checked))
	
	
	console.log(this.document.getElementById("txtOthers"))
	console.log(this.document.getElementById("txtOthers").getAttribute("required"))
	
	if(document.getElementById("others").checked)
	{
		
		if(document.getElementById("txtOthers").value=="")
		{
			document.getElementById("txtOthers").required=true;
			resultBox.innerHTML = "Enter other skills!";
			resultBox.style.color = "red";
		}
		
		
			
	}//end others text box
	else
		document.getElementById("txtOthers").required=false;;
}
//Carry Client storage variables
function setjobone()
{
localStorage.clear();
window.localStorage.setItem('job1','SSE94');
console.log(localStorage.getItem('job1'));
}
function setjobtwo()
{
localStorage.clear();
window.localStorage.setItem('job2','SSE95');
console.log(localStorage.getItem('job1'));
}

//visitPage
 function visitpage()
 {
        window.location.href='apply.html';
		}
//SetValue to textboxwarn
function settextBox()
{
	console.log(localStorage.getItem('job1'));
	var job1=localStorage.getItem('job1'),
		job2=localStorage.getItem('job2');
	console.log(job1);
	if(job1)
	{
		document.getElementById('jref').value = job1;
		console.log(document.getElementById('jref').value);
	}
	else
	{
		document.getElementById('jref').value = job2;
		console.log(job2);
	}
}

//Validate Form
function formValidation()
{
var fname = document.getElementById("firstname").value,
	lname =document.getElementById("lastname").value,
	address = document.getElementById("address").value,
	suburb = document.getElementById("suburb").value,
	email = document.getElementById("email").value,
	pnumber = document.getElementById("pnumber").value;
	
	
if(fname_validation(fname))
{
if(lname_validation(lname))
{
if(address_validation(saddress))
{
if(suburb_validation(suburb))
{
if(email_validation(email))
{
if(pnumber_validation(pnumber))
{
}
}
}
}
}
}
return false;
}
//validate firstname
function fname_validation(fname)
{
	var result = document.getElementById("fnamewarn")
	var letters = /^[A-z]+$/;
if(lname.value.match(letters))
{
return true;
}
else
{
result.innerHTML = "Enter valid first name";
result.style.color = "red";
return false;
}
}
//validate last name
function lname_validation(lname)
{
	var result = document.getElementById("lnamewarn")
	var letters = /^[A-z]+$/;
if(lname.value.match(letters))
{
return true;
}
else
{
result.innerHTML = "Enter valid last name";
result.style.color = "red";
return false;
}
}
//validateaddress
function address_validation(address)
{
	var result = document.getElementById("adresswarn")
	var letters = /^[A-z]+$/;
if(address.value.match(letters))
{
return true;
}
else
{
result.innerHTML = "Enter valid adress";
result.style.color = "red";
return false;
}
}
//validate suburb
function suburb_validation(suburb)
{
	var result = document.getElementById("suburbwarn")
	var letters = /^[A-z]+$/;
if(suburb.value.match(letters))
{
return true;
}
else
{
result.innerHTML = "Enter valid suburb";
result.style.color = "red";
return false;
}
}
//validate email
function email_validation(email)
{
	var result = document.getElementById("mailwarn")
	var letters = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
if(suburb.value.match(letters))
{
return true;
}
else
{
result.innerHTML = "Enter valid email";
result.style.color = "red";
return false;
}
}
//validate email
function pnumber_validation(pnumber)
{
	var result = document.getElementById("numberwarn")
	var letters = /^\d{10}$/;
if(suburb.value.match(letters))
{
return true;
}
else
{
result.innerHTML = "Enter valid phone number";
result.style.color = "red";
return false;
}
}

//SaveData in SessionStorage
 saveData= function () { 
console.log(document.getElementById("firstname").value);
// sessionStorage.setItem("firstname", 'test');
  var input = document.getElementById("firstname").value,
	  input2= document.getElementById("lastname").value,
	  input3=document.getElementById("dob").value,
	  input4=document.getElementById("address").value,
	  input5=document.getElementById("suburb").value,
	  input6=document.getElementById("ddlstate").value,
	  input7=document.getElementById("pin").value,
	  input8=document.getElementById("email").value,
	  input9=document.getElementById("pnumber").value;
	  //alert(input.value);
  sessionStorage.setItem("firstname", input);
  
  sessionStorage.setItem("lastname", input2);
  sessionStorage.setItem("dob", input3);
  sessionStorage.setItem("saddress", input4);
  sessionStorage.setItem("suburb", input5);
  sessionStorage.setItem("ddlstate", input6);
  sessionStorage.setItem("pcode", input7);
  sessionStorage.setItem("email", input8);
  sessionStorage.setItem("pnumber", input9);

  
} 

//loaddata
function loadData()
{
	var input =  sessionStorage.getItem("firstname"),
	  input2= sessionStorage.getItem("lastname"),
	  input3=sessionStorage.getItem("dob"),
	  input4=sessionStorage.getItem("saddress"),
	  input5=sessionStorage.getItem("suburb"),
	  input6=sessionStorage.getItem("ddlstate"),
	  input7=sessionStorage.getItem("pcode"),
	  input8=sessionStorage.getItem("email"),
	  input9=sessionStorage.getItem("pnumber");
	  
	document.getElementById("firstname").value=input;
	document.getElementById("lastname").value=input2;
	document.getElementById("dob").value=input3;
	document.getElementById("address").value=input4;
	document.getElementById("suburb").value=input5;
	document.getElementById("ddlstate").value=input6;
	document.getElementById("pin").value=input7;
	document.getElementById("email").value=input8;
	document.getElementById("pnumber").value=input9;
	
	
}