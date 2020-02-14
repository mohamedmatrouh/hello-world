var x = document.getElementById("studet");
var y = document.getElementById("profe");
var z = document.getElementById("btn");

function prof(){
    x.style.left = "1000px"; //this will move the btn
    y.style.left = "0px";//this will move the profidbtn
    z.style.left = "80px";
  }
  function student(){
    x.style.left = "0px";
    y.style.left = "1000px";
    z.style.left = "0px";
  }

  /*function studentLogin(){
    var cne = document.getElementById('CNE').value;
    if (cne[0] == cne[0].toUpperCase()) {
      if(!isNaN(num)){
        
      }  
     }
    alert(cne);
    //if(document.getElementById("CNE"))
  }*/