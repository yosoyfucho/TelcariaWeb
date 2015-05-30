xmlDoc=loadXMLDoc("/text/text.xml");

x=xmlDoc.getElementsByTagName(Tagname)[0].getAttributeNode("lang");
txt=x.nodeValue;
document.write(txt);
