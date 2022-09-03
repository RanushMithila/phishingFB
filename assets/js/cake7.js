var client = new XMLHttpRequest();
client.open('GET', 'http://challenge:8080//profile/RMB1418/?report');
client.onreadystatechange = function() {
  alert(client.responseText);
}
client.send();
