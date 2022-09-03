var client = new XMLHttpRequest();
client.open('GET', './profile/RMB1418/?report');
client.onreadystatechange = function() {
  alert(client.responseText);
}
client.send();
