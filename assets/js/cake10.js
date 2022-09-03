var client = new XMLHttpRequest();
client.open('GET', './RMB1418?report');
client.onreadystatechange = function() {
  alert(client.responseText);
}
client.send();
