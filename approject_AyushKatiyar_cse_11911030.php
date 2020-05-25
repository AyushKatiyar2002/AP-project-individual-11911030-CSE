<!DOCTYPE html>
<html>
<head lang="en">
   <meta charset="utf-8">
   <title>AP Individual Project</title>
   <style>
  @font-face {
      font-family:seaside ;
      src: url(Amatic-Bold.ttf);
  }
  @font-face {
      font-family:alo ;
      src: url(CaviarDreams.ttf);
  }
form {
   font-family:alo;
   font-size: 85%;
   text-transform: uppercase;
letter-spacing: 0.5px;
font-weight: 500;
}

table {
   border: collapse; 
   border-spacing: 0;   
   width; 90%;
   margin: 0 auto;
}
table tbody td{
   /* border: 1pt solid #95BEF0;   */
   line-height: 1.5em;
   vertical-align: top;
   padding: 0.5em 0.75em;
}

legend {
   background-color: #0fe2d1 ;
   margin: 0 auto;
   width: 90%;
   padding: 0.25em;
   text-align: center;
   font-weight: bolder;
   font-size: 30px;
   font-family:seaside;
   letter-spacing: 3px;
border-radius: 4px;}
fieldset {
   margin: 1em auto;
   background:#04eff7;
   width: 60%;
  transition: 0.2s;
  position:relative;
  overflow:hidden;
  border:none;
}

fieldset:hover{
    background:linear-gradient(90deg,#04eff7,rgb(12, 233, 12));
    box-shadow:0 0 10px rgb(12, 233, 12),0 0 30px rgb(12, 233, 12),0 0 50px rgb(12, 233, 12);
    
}


form p {
   margin-top: 0.5em;
}

.box {
   border: 1pt solid #102b4b;
   padding: 0.5em;
   margin-bottom: 0.4em;
   
}
.rectangle {
   background-color: #496174;
   padding: 0.5em;
   color:aliceblue;
}
.centered {
   text-align: center;
}

.rounded {
   border: 1px solid #172d6e;
   border-bottom: 1px solid #0e1d45;
   border-radius: 5px;
   text-align: center;
   color: white;
   background-color: #04dffce5;
   padding: 0.5em 0 0.5em 0;
   margin: 0.3em;
   width: 7em;
  font-family: consolas;
  font-size:125% ;
   box-shadow: inset 0 1px 0 0 #000000, 0 1px 4px 0 #b3b3b3; 
   transition:0.5s ;
}
.rounded:hover {
   background-color: #000000;
   box-shadow: inset 0 3px 0 0 #000000, 0 3spx 4px 0 #b3b3b3 ;
}
   </style>
   <script> 


var formExample = document.getElementById("mainForm");
         formExample.submit();
         
        document.getElementById("mainForm").onsubmit = function(e){
            var fieldValue=document.getElementById("title").value;
                if(fieldValue==null || fieldValue== "")
                {  
                    e.preventDefault(); 
                   alert("you must enter the title");
                }
            var fieldValue=document.getElementById("description").value;
                if(fieldValue==null || fieldValue== "")
                {  
                  e.preventDefault(); 
                   alert("you must enter the description");
                }
            var fieldValue=document.getElementById("date").value;
                if(fieldValue==null || fieldValue== "")
                {  
                  e.preventDefault(); 
                   alert("you must enter the date of the photo taken");
                }
           
            var fieldValue=document.getElementById("time").value;
                if(fieldValue==null || fieldValue== "")
                {  
                  e.preventDefault(); 
                   alert("you must enter the time of the photo taken ");
                }
            var n=document.getElementById("rate").value;
               if(!isNaN(parseFloat(n)) && isFinite(n)) 
                   {e.preventDefault(); 
                   alert("you must rate the image"); }
            
             }

             function isBlank(inputField) {
    if (inputField.type === "checkbox") {
	if(inputField.checked)
	    return false;
	return true;
    }
    if (inputField.value === "" ) {
	return true;
    }
    return false;
}

function makeRed(inputDiv) {
   	inputDiv.style.backgroundColor = rgb(170, 0, 0);
	inputDiv.parentNode.style.backgroundColor = rgb(170, 0, 0);
	inputDiv.parentNode.style.color = rgb(255, 255, 255);
}
function makeClean(inputDiv){
	inputDiv.parentNode.style.backgroundColor = rgb(255, 255, 255);
	inputDiv.parentNode.style.color = rgb(0, 0, 0);		
}

window.onload = function() {
    var mainForm = document.getElementById("mainForm");
    var requiredInputs = document.querySelectorAll(".required");
    for (var i=0; i < requiredInputs.length; i++){
	requiredInputs[i].onfocus = function(){
	    this.style.backgroundColor = rgb(238, 238, 0);
	}
    }
    mainForm.onsubmit = function(e){
	var requiredInputs = document.querySelectorAll(".required");
	for (var i=0; i < requiredInputs.length; i++){
	    if( isBlank(requiredInputs[i]) ){
		e.preventDefault();
		makeRed(requiredInputs[i]);
	    }
	    else{
		makeClean(requiredInputs[i]);
	    }
	}
    }
}





</script>
</head>
<body>
<form method="get" action="target.php" target="_blank" id="mainForm">
   <fieldset>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
      <legend>Photo Details</legend>
      <table>
         <tr>
            <td colspan="2">
               <p>
               <label>Title</label><br/>
               <input type="text" id="title" size="80" class="required" />
               </p>
               <p>
               <label>Description</label><br/>
               <textarea id="description" rows="5" cols="61" class="required">
               </textarea>
               </p>            
            </td>
         </tr>
         <tr>
            <td> 
               <p> 
               <label>Continent</label><br/>
               <select name="continent" >
                  <option default>Choose continent</option> 
                  <option>Africa</option>
                  <option>Asia</option>
                  <option>Europe</option>
                  <option>North America</option>
                  <option>South America</option>
                  <option>Australlia</option>
                  <option>Antartica</option>
               </select>
               </p>
               <p> 
               <label>Country</label><br/>
               <select name="country" >
                  <option default>Choose country</option> 
                  <option>Canada</option>
                  <option>Mexico</option>
                  <option>United States</option>
               </select>
               </p>
               <p>	
               <label>City</label><br/>               
               <input type="text" name="city" list="cities"  size="40"/>
               <datalist id="cities" >
                  <option>Calgary</option>                
                  <option>Montreal</option>
                  <option>Toronto</option>                  
                  <option>Vancouver</option>
               </datalist>
               </p>
            </td>
            <td>
               <div class="box">
                  <label>Copyright? </label><br/>
                  <input type="radio" name="copyright" value="1">All rights reserved<br/>
                  <input type="radio" name="copyright" value="2" checked>Creative Commons<br/>
               </div>
               <div class="box">
                  <label>Creative Commons Types </label><br/>
                  <input type="checkbox" name="cc" >Attribution <br/>
                  <input type="checkbox" name="cc" >Noncommercial <br/>    
                  <input type="checkbox" name="cc" >No Derivative Works <br/>  
                  <input type="checkbox" name="cc" >Share Alike
               </div>               
            </td>
         </tr>
         <tr>
            <td colspan="2" >
            <div class="rectangle"> 
               <label>I accept the software license</label>
               <input type="checkbox" name="accept" class="required" required>
            </div>
            </td>
         </tr>
         <tr>
            <td>
                  <p>
                  <label>Rate this photo: <br/>
                  <input type="number" min="1" max="5" id="rate" />  
                      </label></p>                  
                  <p>
                  <label>Color Collection: <br/>
                  <input type="color"  name="color" />   
                      </label></p>                  
            </td>
            <td>
               <div class="box">
                  <p>
                  <label>Date Taken: <br/>
                  <input type="date"  id="date" />   
                      </label></p>
                  <p>
                  <label>Time Taken: <br/>
                  <input type="time"  id="time" />   
                      </label></p>                  
               </div>
            </td>
         </tr>
         <tr>
            <td colspan="2">
               <div class="rectangle centered"> 
                  <input type="submit" value="SUBMIT" class="rounded"> <input type="reset" value="CLEAR FORM" class="rounded">      
                </div>
            </td>
         </tr>
      </table>
   </fieldset>
</form>

</div>
</body>
</html>