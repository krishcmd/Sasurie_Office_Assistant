function validate(){
			var category = document.forms["RegForm"]["cat"].value;			 
			var department = document.forms["RegForm"]["dept"].value;  
			var qlyreg = document.forms["RegForm"]["qlyreg"].value;
			var qlyschool = document.forms["RegForm"]["qlyschool"].value;  
			var xreg = document.forms["RegForm"]["xreg"].value; 
			var xschool = document.forms["RegForm"]["xschool"].value;
			var xtotmarks = document.forms["RegForm"]["xtotmarks"].value; 
			var medium = document.forms["RegForm"]["medium"].value; 
			var sname = document.forms["RegForm"]["sname"].value;
			var fname = document.forms["RegForm"]["fname"].value;
			var occupation = document.forms["RegForm"]["occup"].value;  
			var annualinc = document.forms["RegForm"]["aninc"].value; 
			var address1 = document.forms["RegForm"]["address1"].value;
			var address2 = document.forms["RegForm"]["address2"].value;  
			var address3 = document.forms["RegForm"]["address3"].value;
			var city =document.forms["RegForm"]["city"].value;
			var state = document.forms["RegForm"]["state"].value;
			var email = document.forms["RegForm"]["email"].value; 
			var phone = document.forms["RegForm"]["pnum"].value;
			var sex = document.forms["RegForm"]["sex"].value;
			var dob = document.forms["RegForm"]["dob"].value;  
			var age = document.forms["RegForm"]["age"].value; 
			var community = document.forms["RegForm"]["community"].value;
			var religion = document.forms["RegForm"]["religion"].value;  
			var caste = document.forms["RegForm"]["caste"].value; 
			var bloodgroup = document.forms["RegForm"]["bloodgroup"].value;
			var etype = document.forms["RegForm"]["entrytype"].value; 
			var accomodation = document.forms["RegForm"]["accom"].value; 
			var myop = document.forms["RegForm"]["myop"].value;
			var attemptnum = document.forms["RegForm"]["attemptnum"].value;
			var improvementnum = document.forms["RegForm"]["improvementnum"].value;  
			var maths = document.forms["RegForm"]["maths"].value;
			var mathsper = document.forms["RegForm"]["mathsper"].value;
			var physics = document.forms["RegForm"]["physics"].value;  
			var chemistry = document.forms["RegForm"]["chem"].value; 
			var p+c = document.forms["RegForm"]["totmarks"].value;
			var p+cperc = document.forms["RegForm"]["totmarksperc"].value; 
			var totalmarks = document.forms["RegForm"]["tot"].value; 
			var entrance = document.forms["RegForm"]["entmarks"].value;
			var country = document.forms["RegForm"]["country"].value;
			var alltotal = document.forms["RegForm"]["alltot"].value;  
			var rollno = document.forms["RegForm"]["rollno"].value; 
			var univreg = document.forms["RegForm"]["univregno"].value;
			var doadm = document.forms["RegForm"]["doadm"].value;  
			var comments = document.forms["RegForm"]["comments"].value; 
			var admstatus = document.forms["RegForm"]["admstatus"].value;
			var dateol = document.forms["RegForm"]["dateol"].value; 
			var scholstatus = document.forms["RegForm"]["schoalstatus"].value; 
			var scholdet = document.forms["RegForm"]["scholdet"].value;
			var medfitdet = document.forms["RegForm"]["medfitdet"].value;
			var batch = document.forms["RegForm"]["batch"].value;  
			if(sname=="" || sname==null)								 
	{ 
		window.alert("Please enter student name."); 
		return false; 
	} 

	if(univreg=="" || univreg==null)
	{
		window.alert("Please enter student register number");
		return false;
	}
	if(category=="" || category==null)
	{
		window.alert("Please enter the category");
		return false;
	}
	if(city=="" || city==null)
	{
		window.alert("Please enter your city");
		return false;
	}
	if(department=="" || department==null)
	{
		window.alert("Please enter the department");
		return false;
	}
	if(state=="" || state==null)
	{
		window.alert("Please enter your state");
		return false;
	}
	if(qlyreg=="" || qlyreg==null)
	{
		window.alert("Please enter the Qly Regno");
		return false;
	}
	if(email=="" || email==null)								 
	{ 
		window.alert("Please enter a valid e-mail address.");  
		return false; 
	} else {
        var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(email) == false) {
            alert("Please enter a valid email address");
            return false;
        } 
    }

	if(phone=="" || phone==null)
	{
		window.alert("Please enter valid mobile number");
		return false;
	}else 
	{	
		if(phone.match(/[0-9]/)&&(phone.length>10 || phone.length<10))  
		{      
		alert("Please enter a valid mobile number");
		return false;
		}
	}
	if(medium=="" || medium==null)				 
	{ 
		alert("Please enter the medium."); 
		return false; 
	} 
	if(address1=="" || address2=="" || address3=="")				 
	{ 
		alert("Please enter a address."); 
		return false; 
	} 
	if(country=="" || country==null)				 
	{ 
		alert("Please enter your course."); 
		return false; 
	} 
	if(sex=="" || sex==null)				 
	{ 
		alert("Please enter your course."); 
		return false; 
	} 
	if(bloodgroup=="" || bloodgroup==null)				 
	{ 
		alert("Please enter the bloodgroup."); 
		return false; 
	} 
	if(math=="" || maths==null)				 
	{ 
		alert("Please enter the maths marks."); 
		return false; 
	} 
	if(physics=="" || physics==null)				 
	{ 
		alert("Please enter the physics marks."); 
		return false; 
	} 
	if(chemistry="" || chemistry==null)				 
	{ 
		alert("Please enter the chemistry marks"); 
		return false; 
	}
	 
}
