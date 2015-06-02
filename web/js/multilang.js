(function(search) {


  xmlDoc=loadXMLDoc("../text/text.xml");

  x=xmlDoc.getElementsByTagName(search)[0].getAttributeNode("lang");
  var aux = x.length;
  for (var i = 0; i < array.length; i++) {
    array[i]=x.nodeValue;
  }
}());
