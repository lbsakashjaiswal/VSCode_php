function Show_Data() {
   var name = document.getElementById("fullname").value;
   var address = document.getElementById("address").value;
   var req = new XMLHttpRequest();
   req.open("POST","/index/akash_MySQL/10_oct_20/getdata.php",true);
   req.setRequestHeader('Content-type','application/x-www-form-urlencoded');
   req.onreadystatechange=function(){
      if(req.readyState == 4 && req.status == 200){
         document.getElementById('response').innerHTML = req.responseText;
      }
   }
   req.send("fullname="+name+"&address="+address);
}
