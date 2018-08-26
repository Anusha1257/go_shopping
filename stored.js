function store()
{
	var a=document.getElementById("pla").value
	var b=document.getElementById("a1").value
	var c=document.getElementById("a2").value
	var d=document.getElementById("mob").value
	var e=document.getElementById("pin").value
	var reu=/\W/
	var rep=/\D/g
	if(rep.test(d))
        {
            alert("only digits for mobile no")
        }
	if(d.length!=10)
        { 
               alert("mobile no should contain 10 digits")
        }
       if(d.length>10)
       {
               alert("only 10 digits")
       }      
        
	
        if(rep.test(e))
        {
            alert("only digits for pincode")
        }
        if(d.length==0)
         {
               alert("pin no should not contain 0 digits")
         }  
	    
        localStorage.setItem("pl",a)
	localStorage.setItem("ad1",b)
	localStorage.setItem("ad2",c)
	localStorage.setItem("m",d)
	localStorage.setItem("pi",e)
	document.getElementbyId("pla").value
        document.getElementById("a1").value
	document.getElementById("a2").value
	document.getElementById("mob").value
	document.getElementById("pin").value
	document.getElementById("loc").innerHTML="successfully stored"
}
