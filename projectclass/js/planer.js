var xhr = new XMLHttpRequest();

xhr.onreadystatechange = function() {
  if (xhr.readyState === 4) {
    var file = JSON.parse(xhr.responseText);
    var statusHTML = ' ';
for (var i = 0; i < file.length; i += 1) {
	  
      if (file[i]['CPS210-CompSci-I'] === 'A' || file[i]['CPS210-CompSci-I'] === 'A-'||file[i]['CPS210-CompSci-I'] === 'B+' || file[i]['CPS210-CompSci-I'] === 'B'||file[i]['CPS210-CompSci-I'] === "C+" || file[i]['CPS210-CompSci-I'] === 'C'|| file[i]['CPS210-CompSci-I'] === "C-") {
        statusHTML +=  '<div class="pass timeline-image">';
        statusHTML +=  '<h4>CPS210-CompSci-I </h4>';
		statusHTML +='</div>';
		
		 // if (file[i].CPS210-CompSci-I == "C-") {
        // statusHTML +=  '<div class="pass timeline-image">';
        // statusHTML +=  '<h4>CPS210-CompSci-I </h4>';
		// statusHTML +='</div>'
        									

      } else {
         statusHTML +=  '<div class="fail timeline-image">';
         statusHTML +=  '<h4>CPS210-CompSci-I </h4>';
		 statusHTML +=  '</div>';
      }
     



    }
    document.getElementById('studentList').innerHTML = statusHTML;
  }
};
xhr.open('GET', 'data/classes.php');
xhr.send();
