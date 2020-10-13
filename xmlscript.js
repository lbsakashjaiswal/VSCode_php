// XML file read 
function loadDoc() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            myFunction(this);   
        }
    };
    xhttp.open("GET", "language_list.xml", true);
    xhttp.send();
}

// To print XML file
function myFunction(xml) {
    var i;
    var xmlDoc = xml.responseXML;
    var table = "<tr><th>Language</th><th>Year</th></tr>";
    var x = xmlDoc.getElementsByTagName("Lan");
    for (i = 0; i < x.length; i++) {
        table += "<tr><td>" +
        x[i].getElementsByTagName("LANGUAGE")[0].childNodes[0].nodeValue +
        "</td><td>" +
        x[i].getElementsByTagName("YEAR")[0].childNodes[0].nodeValue +
        "</td></tr>";
    }
    document.getElementById("demo").innerHTML = table;
}      
      
