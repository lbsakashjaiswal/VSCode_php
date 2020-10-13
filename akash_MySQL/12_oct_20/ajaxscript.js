// Ajax function for select city
function myfun(data) {
   var req = new XMLHttpRequest();
   req.open("GET","http://192.168.64.2/index/akash_MySQL/12_oct_20/response.php?sendData="+data,true);
   req.send();
         
   req.onreadystatechange=function(){
      if(req.readyState == 4 && req.status == 200){
         document.getElementById('city').innerHTML = req.responseText;
      }
   }
}

//Ajax function for sending data to database
function Show_Data() {
   var name = document.getElementById("fullname").value;
   var mnumber = document.getElementById("mnumber").value;
   var address = document.getElementById("address").value;
   var state = document.getElementById("state").value;
   var city = document.getElementById("city").value;

   var req = new XMLHttpRequest();
   req.open("POST","/index/akash_MySQL/12_oct_20/getdata.php",true);
   req.setRequestHeader('Content-type','application/x-www-form-urlencoded');
   req.onreadystatechange=function(){
      if(req.readyState == 4 && req.status == 200){
         document.getElementById('response').innerHTML = req.responseText;
      }
   }
   req.send("fullname="+name+"&mnumber="+mnumber+"&address="+address+"&state="+state+"&city="+city);
}
