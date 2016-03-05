var xhr = new XMLHttpRequest();

xhr.onreadystatechange = function() {
  if (xhr.readyState === 4) {
    var file = JSON.parse(xhr.responseText);
    var statusHTML = '';
for (var i = 0; i < file.length; i += 1) {
  statusHTML  += '<tr>';
      statusHTML += '<td>';
      statusHTML += file[i].FirstName;
      statusHTML += '</td>';
      statusHTML += '<td>';
      statusHTML += file[i].LastName;
      statusHTML += '</td>';
      statusHTML += '<td>';
 	  statusHTML +='<form name="classesDisplay"role="form"  action="planer.php" method="post">';
      statusHTML +='<input type="hidden" name="firstname" value="'+file[i].FirstName+'">';
      statusHTML +='<input type="hidden" name="lastname" value="'+file[i].LastName+'">';
      statusHTML +='<input type="hidden" name="calc1" value="'+file[i]['MAT251-Calc-I'] +'">';
      statusHTML +='<input type="hidden" name="calc2" value="'+file[i]['MAT251-Calc-II'] +'">';
      statusHTML +='<input type="hidden" name="disc" value="'+file[i]['MAT320-DiscreteMath'] +'">';
      statusHTML +='<input type="hidden" name="cs1" value="'+file[i]['CPS210-CompSci-I'] +'">';
      statusHTML +='<input type="hidden" name="cs2" value="'+file[i]['CPS310-CompSci-II'] +'">';
      statusHTML +='<input type="hidden" name="cs3" value="'+file[i]['CPS315-CompSci-III'] +'">';
      statusHTML +='<input type="hidden" name="asmbl" value="'+file[i]['CPS330-Assembly.Arch.'] +'">';
     
      statusHTML +='<input type="hidden" name="oop" value="'+file[i]['CPS352-OOP'] +'">';
      statusHTML +='<input type="hidden" name="seng" value="'+file[i]['CPS353-SoftEng'] +'">';
      statusHTML +='<input type="hidden" name="algr" value="'+file[i]['CPS415-Disc.Cont.Algorithms'] +'">';
      statusHTML +='<input type="hidden" name="ops" value="'+file[i]['CPS340-Op.Sys'] +'">';
      
      statusHTML +='<input type="hidden" name="lngproc" value="'+file[i]['CPS425-Lang.Processing'] +'">';
      statusHTML +='<input type="hidden" name="elect" value="'+file[i]['CPS493-Elect-1'] +'">';
      statusHTML +='<input type="hidden" name="proj" value="'+file[i]['CPS493-Projects'] +'">';
      
      statusHTML +='<input type="hidden" name="egc" value="'+file[i]['EGC230-Dig.Logic'] +'">';
      statusHTML +='<input type="hidden" name="egclab" value="'+file[i]['EGC208-Dig.Logic.Lab'] +'">';
      statusHTML +='<input type="hidden" name="sci1" value="'+file[i]['SCIENCE-I'] +'">';
      statusHTML +='<input type="hidden" name="sci2" value="'+file[i]['SCIENCE-II'] +'">';

      
      


	 
	 
	 
	 
	  statusHTML +='<button type="submit" class="btn btn-sm btn-success myButton">';
	  statusHTML += '<span class="glyphicon glyphicon-eye-open"></span>';
	  statusHTML +=' progress</button>'; 															     	
	  statusHTML +='</form>';      
	  statusHTML += '</td>';
      


      
     

    }
    document.getElementById('studentList').innerHTML = statusHTML;
  }
};
xhr.open('GET', 'data/file.php');
xhr.send();
