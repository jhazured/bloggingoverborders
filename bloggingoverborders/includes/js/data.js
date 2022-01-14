function updateCityTable(table) {
   var htmlText ="";

    if (table == null) {
        htmlText += "<p>No data matching the criteria is found in the database.</p>";
    }
    else {
       
    
        // Draw each row of the table
        for (var i in table) {
           row = table[i];
           htmlText += "<tr>";
           htmlText +=  row['featureID']     	 + "</td>";
           htmlText +=  row['featureTitle']      + "</td>";
           htmlText +=  row['authorName']   	 + "</td>";
           htmlText +=  row['publishDate']       + "</td>";
           htmlText +=  row['blockQuote']        + "</td>";
	   htmlText +=  row['featureText']       + "</td>";
           htmlText += "</tr>";
        }
  
        // Close the table and update the details
        htmlText += "</table>";
        
    }
    
    document.getElementById("feature").innerHTML=htmlText;
    
}



//Initiate an AJAX request to load all feature articles
function feature_article() {
    requestURL = "php/feature_article.php"
    ajaxRequest("GET", requestURL, updateCityTable)
}


// Initiate an AJAX request for a particular featureID
function feature(featureID) {
    requestURL = "php/feature.php?featureID=" + featureID
    ajaxRequest("GET", requestURL, updateCityTable)
}

// This makes the AJAX request and specifies the callback for handling the response
// There is no need to modify this function in your own code.
// method        : must be "GET" or "POST"
// requestURL    : the server side script handling the reuqest
// convertToHTML : the function formating the response from the server
function ajaxRequest(method, requestURL, convertToHTML) {

    var xmlhttp;
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    }
    else {
        // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    
    //Specify callback
    xmlhttp.onreadystatechange=function() {
        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
            
            // convert JSON text to Java Script Object
            var result = JSON.parse(xmlhttp.responseText);
            
            // Update data
            convertToHTML(result)
        }
    }
    
    // Send the request to the Apache server.
    xmlhttp.open(method, requestURL, true);
    xmlhttp.send();
}

