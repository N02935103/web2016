var xhr = new XMLHttpRequest();

xhr.onreadystatechange = function() {
  if (xhr.readyState === 4) {
    var file = JSON.parse(xhr.responseText);
    var statusHTML = '<tr>';

    for (var i = 0; i < file.length; i += 1) {
      statusHTML += '<td>';
      statusHTML += file[i].FirstName;
      statusHTML += '</td>';
      statusHTML += '<td>';
      statusHTML += file[i].LastName;
      statusHTML += '</td>';
      statusHTML += '<td>';
      statusHTML += '<a href="#">advise</a>';
      statusHTML += '</td>';
      statusHTML += '</tr>';

     

    }
    document.getElementById('studentList').innerHTML = statusHTML;
  }
};
xhr.open('GET', 'data/file.php');
xhr.send();