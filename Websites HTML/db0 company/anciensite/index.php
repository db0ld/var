<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <title>
db0 company
  </title>


  <meta http-equiv="content-language" content="fr">

  <meta name="Keywords" content="db0 company">

  <meta name="Description" content="db0 company">

  <meta content="ALL" name="robots">

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta content="Microsoft Visual Studio.NET 7.0" name="GENERATOR">

  <meta content="Visual Basic 7.0" name="CODE_LANGUAGE">

  <meta content="JavaScript" name="vs_defaultClientScript">

  <meta content="http://schemas.microsoft.com/intellisense/ie5" name="vs_targetSchema">

  <link href="../StylesPopMenu.css" type="text/css" rel="stylesheet">

  <link href="../StylesAlgemeen.css" type="text/css" rel="stylesheet">

  <link href="../StylesUser.css" type="text/css" rel="stylesheet">

  <style type="text/css" media="screen">
P {margin-top: 0px; margin-bottom: 0px; }
A:link {color:blue; text-decoration:underline; font-weight: normal; font-style: normal; }
A:hover {color:dodgerblue; text-decoration:underline; font-weight: normal; font-style: normal; }
A:visited {color:blueviolet; text-decoration:underline; font-weight: normal; font-style: normal; }
.BodyClass {color:black; font-size:9pt; font-family: 'Verdana'; text-decoration: none; font-weight: normal; font-style: normal; }
H1 {color:black; font-size:20pt; font-family: 'Verdana' ; text-decoration: none; font-weight: normal; font-style: normal; margin-top: 5px; margin-bottom: 15px ; }
H2 {color:black; font-size:14pt; font-family: 'Verdana' ; text-decoration: none; font-weight: normal; font-style: normal; margin-top: 10px; margin-bottom: 3px ; }
H3 {color:black; font-size:12pt; font-family: 'Verdana' ; text-decoration: none; font-weight: normal; font-style: normal; margin-top: 1px; margin-bottom: 5px ; }
H4 {color:black; font-size:10pt; font-family: 'Verdana' ; text-decoration: none; font-weight: bold; font-style: normal; margin-top: 0px; margin-bottom: 0px ; }
.Cel1 {border-left:black 1px solid;border-right:black 1px solid;border-top:black 1px solid;border-Bottom:black 1px solid;background-color:silver; }
  </style>
  <style id="Slidemenu" type="text/css">
  </style>
  <script language="javascript">
<!--
// styles opmaken voor slidemenu
function addStyleDefIE(selector,definition)
{
if (document.styleSheets[4].insertRule) //Mozilla
document.styleSheets[4].insertRule(selector + "{" + definition + "}",0);
else // IE
document.styleSheets.Slidemenu.addRule(selector,definition);
// document.getElementById('Slidemenu').addRule(selector,definition);
} // --> </script>
  <script language="javascript">
// Progress Bar
var progress;
var totaltime;
function ProgressBar()
{
document.getElementById('ProgressTable').style.visibility = "visible";
incrementalWidth = 10;
if (progress <= totaltime)
{
document.getElementById('barText').innerHTML = "<table bgColor=#ffcc33 cellspacing=5 bordercolor=blue><tr><td><font class=Standaardtekst2><b>" + 'Patientez un instant' + "... " + progress + " seconden.</b><br><br></font></td></tr></Table>" ;
document.getElementById('bar').style.width = progress * incrementalWidth;
progress = progress + 1;
window.setTimeout('ProgressBar();',1000);
}
else {
document.getElementById('bar').style.visibility = "hidden";
document.getElementById('barText').innerHTML = "<table bgColor=#ffcc33 cellspacing=5 bordercolor=blue><tr><td><font class=Standaardtekst2><b>" + 'Patientez un instant' + "... " + progress + " seconden.</b><br>" + 'Le serveur a besoin de plus de temps.' + "<br>" + 'Attendez encore quelques' + "<br>" + 'secondes/minutes' + "<br>" + 'ou fermer la page' + "<br>" + 'et réessayer plus tard...' + "</font></td></tr></Table>" ;
progress = progress + 1;
window.setTimeout('ProgressBar();',1000);
} }
// Sluiten van alle venster
function Sluit_Vensters()
{
if (typeof(newwindowInstellingenBoom) != "undefined")
newwindowInstellingenBoom.close();
if (typeof(newwindowInstellingenHoofding) != "undefined")
newwindowInstellingenHoofding.close();
if (typeof(newwindowInstellingenInhoud) != "undefined")
newwindowInstellingenInhoud.close();
if (typeof(newwindowBeeld) != "undefined")
newwindowBeeld.close(); }
function Wijzig() // ga naar WA-mode { var strURLnaarBasis;
strURLnaarBasis = document.getElementById('WebAdresBasis').value;
if (event.keyCode == 123) //toets F12
{
progress = 1;
totaltime = 40;
ProgressBar();
var url;
var strParam;
strParam = "?WebID=" + document.Form1.WebIDGeselecteerd.value + "&BoomID=" + document.Form1.BoomIDGeselecteerd.value + '&KnooppuntID=' + document.Form1.KnooppuntIDGeselecteerd.value;
url = strURLnaarBasis + "WA/Presentation_tier/Index.aspx" + strParam ;
top.window.location = url;
} } function WijzigBis() // ga naar WA-mode { var strURLnaarBasis;
strURLnaarBasis = document.getElementById('WebAdresBasis').value;
{
progress = 1;
totaltime = 40;
ProgressBar();
var url;
var strParam;
strParam = "?WebID=" + document.getElementById('WebIDGeselecteerd').value + "&BoomID=" + document.getElementById('BoomIDGeselecteerd').value + '&KnooppuntID=' + document.getElementById('KnooppuntIDGeselecteerd').value;
url = strURLnaarBasis + "WA/Presentation_tier/Index.aspx" + strParam ;
top.window.location = url;
// werken wijzigmode niet beschikbaar
// var newwindowWerken = window.open("Werken.aspx" ,'newwindowWerken','width=650,height=450,scrollbars,resizable,left=40,top=40'); // newwindowWerken.focus()
} } // instellingen navigatiemenu boom toepassen
function Instellingen_Boom_Toepassen (achtergrondkleur,achtergrondbeeld,kolombreedte,linkermarge,rechtermarge,boombreedte,topmarge,borderlinks,borderrechts,borderboven,borderonder,kolomhoogte,herhaal,horizontaal,vertikaal) //browser ok
{
document.getElementById('Boom').removeAttribute("style"); document.getElementById('Boom').bgColor = achtergrondkleur;
document.getElementById('Boom').style.backgroundImage = "url('" + achtergrondbeeld + "')"; document.getElementById('Boom').style.backgroundRepeat = herhaal ;
document.getElementById('Boom').style.backgroundPosition = horizontaal + " " + vertikaal;
document.getElementById('Trans_Image_Boom').style.width = kolombreedte; document.getElementById('Trans_Image_Boom_Linkermarge').style.width = linkermarge;
document.getElementById('Trans_Image_Boom_Rechtermarge').style.width = rechtermarge;
document.getElementById('lokaalScriptBoom').style.width = boombreedte;
document.getElementById('lokaalScriptBoom').style.marginTop = topmarge;
document.getElementById('lokaalScriptBoom').style.height = kolomhoogte;
if (!(borderlinks == "Null"))
{ document.getElementById('Boom').style.borderLeft = borderlinks;
// document.getElementById('Boom').runtimeStyle.borderLeft = borderlinks;
}
if (!(borderrechts == "Null"))
{ document.getElementById('Boom').style.borderRight = borderrechts;
// document.getElementById('Boom').runtimeStyle.borderRight = borderrechts;
}
if (!(borderboven == "Null"))
{ document.getElementById('Boom').style.borderTop = borderboven;
// document.getElementById('Boom').runtimeStyle.borderTop = borderboven;
}
if (!(borderonder == "Null"))
{ document.getElementById('Boom').style.borderBottom = borderonder;
// document.getElementById('Boom').runtimeStyle.borderBottom = borderonder;
} }
// instellingen hoofding toepassen
function Instellingen_Hoofding_Toepassen (achtergrondkleur,achtergrondbeeld,rijhoogte,borderlinks,borderrechts,borderboven,borderonder,herhaal,horizontaal,vertikaal)
{
document.getElementById('Hoofding').bgColor = achtergrondkleur;
document.getElementById('Hoofding').style.backgroundImage = "url('" + achtergrondbeeld + "')"; //achtergrondbeeld ; document.getElementById('Hoofding').style.height = rijhoogte; document.getElementById('Hoofding').style.backgroundRepeat = herhaal ;
document.getElementById('Hoofding').style.backgroundPosition = horizontaal + " " + vertikaal;
if (!(borderlinks == "Null"))
{ document.getElementById('Hoofding').style.borderLeft = borderlinks;
// document.getElementById('Hoofding').runtimeStyle.borderLeft = borderlinks;
}
if (!(borderrechts == "Null"))
{ document.getElementById('Hoofding').style.borderRight = borderrechts;
// document.getElementById('Hoofding').runtimeStyle.borderRight = borderrechts;
}
if (!(borderboven == "Null"))
{ document.getElementById('Hoofding').style.borderTop = borderboven;
// document.getElementById('Hoofding').runtimeStyle.borderTop = borderboven;
}
if (!(borderonder == "Null"))
{ document.getElementById('Hoofding').style.borderBottom = borderonder;
// document.getElementById('Hoofding').runtimeStyle.borderBottom = borderonder;
} } // instellingen Voet toepassen
function Instellingen_Voet_Toepassen (achtergrondkleur,achtergrondbeeld,rijhoogte,borderlinks,borderrechts,borderboven,borderonder,herhaal,horizontaal,vertikaal) //browser ok
{
document.getElementById('Voet').bgColor = achtergrondkleur;
document.getElementById('Voet').style.backgroundImage = "url('" + achtergrondbeeld + "')"; document.getElementById('Voet').style.height = rijhoogte; document.getElementById('Voet').style.backgroundRepeat = herhaal ;
document.getElementById('Voet').style.backgroundPosition = horizontaal + " " + vertikaal;
if (!(borderlinks == "Null"))
{ document.getElementById('Voet').style.borderLeft = borderlinks;
// document.getElementById('Voet').runtimeStyle.borderLeft = borderlinks;
}
if (!(borderrechts == "Null"))
{ document.getElementById('Voet').style.borderRight = borderrechts;
// document.getElementById('Voet').runtimeStyle.borderRight = borderrechts;
}
if (!(borderboven == "Null"))
{ document.getElementById('Voet').style.borderTop = borderboven;
// document.getElementById('Voet').runtimeStyle.borderTop = borderboven;
}
if (!(borderonder == "Null"))
{ document.getElementById('Voet').style.borderBottom = borderonder;
// document.getElementById('Voet').runtimeStyle.borderBottom = borderonder;
} } // instellingen Inhoud toepassen
function Instellingen_Inhoud_Toepassen (achtergrondkleur,achtergrondbeeld,linkermarge,rechtermarge,topmarge,borderlinks,borderrechts,borderboven,borderonder,herhaal,horizontaal,vertikaal)
{
document.getElementById('Inhoud').removeAttribute("style"); document.getElementById('Inhoud').bgColor = achtergrondkleur;
document.getElementById('Inhoud').style.backgroundImage = "url('" + achtergrondbeeld + "')"; document.getElementById('Inhoud').style.backgroundRepeat = herhaal ;
document.getElementById('Inhoud').style.backgroundPosition = horizontaal + " " + vertikaal; document.getElementById('Trans_Image_Inhoud_Linkermarge').style.width = linkermarge;
document.getElementById('Trans_Image_Inhoud_Rechtermarge').style.width = rechtermarge;
document.getElementById('lokaalScriptInhoud').style.marginTop = topmarge;
if (!(borderlinks == "Null"))
{ document.getElementById('Inhoud').style.borderLeft = borderlinks;
// document.getElementById('Inhoud').runtimeStyle.borderLeft = borderlinks;
}
if (!(borderrechts == "Null"))
{ document.getElementById('Inhoud').style.borderRight = borderrechts;
// document.getElementById('Inhoud').runtimeStyle.borderRight = borderrechts;
}
if (!(borderboven == "Null"))
{ document.getElementById('Inhoud').style.borderTop = borderboven;
// document.getElementById('Inhoud').runtimeStyle.borderTop = borderboven;
}
if (!(borderonder == "Null"))
{ document.getElementById('Inhoud').style.borderBottom = borderonder;
// document.getElementById('Inhoud').runtimeStyle.borderBottom = borderonder;
} } // Refresh pagina
function RefreshPagina()
{
progress = 1;
totaltime = 40;
ProgressBar();
var url;
var strParam;
strParam = "?WebID=" + document.Form1.WebIDGeselecteerd.value + "&BoomID=" + document.Form1.BoomIDGeselecteerd.value + '&KnooppuntID=' + document.Form1.KnooppuntIDGeselecteerd.value;
url = "test.aspx" + strParam ;
window.location = url;
}
// Functie om formulier door te mailen
function VerstuurFormulier(strEmailAdres,strAntwoord)
{ document.getElementById('strEmailAdres').value = strEmailAdres; document.getElementById('strFormulier').value = document.getElementById('lokaalScriptInhoud').innerHTML;
__doPostBack('FormVersturen','');
} // Functie om antwoord te geven na verzenden van formulier
function Antwoord()
{
if (document.getElementById('antwoordTekst')) {
//var newwindowAntwoord = window.open('' ,'newwindowAntwoord','width=400,height=200,scrollbars,resizable,left=40,top=40'); //newwindowAntwoord.document.write(document.getElementById('antwoordTekst').innerHTML);
// newwindowAntwoord.focus();}
//document.getElementById('lokaalScriptInhoud').innerHTML = document.getElementById('antwoordTekst').innerHTML;}
document.getElementById('AntwoordInVenster').innerHTML = document.getElementById('antwoordTekst').innerHTML;}
else document.getElementById('AntwoordInVenster').innerHTML = 'Votre formulaire est envoyé!'; //alert('Votre formulaire est envoyé!'); //alert('Formulier is verzonden'); OpenAntwoordVenster();
} function Fotoalbum_tonen(WebID,BoomID,FotoalbumID)
{ var url;
var strParam;
strParam = "?WebID=" + WebID;
strParam = strParam + "&BoomID=" + BoomID;
strParam = strParam + "&FotoalbumID=" + FotoalbumID; url = "Pr_Fotoalbum_Tonen.aspx" + strParam ;
var newwindowFotoalbum = window.open(url ,'newwindowFotoalbum','width=650,height=450,scrollbars,resizable,left=40,top=40'); newwindowFotoalbum.focus();
} // Gratis website aanvragen via distributeur see free advertising at sites
function AanvraagSite_ViaDistr(WebID)
{ var url;
var strParam;
strParam = "?WebID=" + WebID;
strParam = strParam + "&distrbID=" + document.getElementById('DistrID').value;
url = "http://www.EveryOneWeb.com/Wp/presentation_tier/Pr_GratisWebsite_Aanvraag.aspx" + strParam ;
var newwindowAanvraagWebsite = window.open(url ,'newwindowAanvraagWebsite','width=650,height=450,scrollbars,resizable,left=40,top=40'); newwindowAanvraagWebsite.focus();
} </script>
</head>
<body id="BoomBody" onkeyup="Wijzig()" leftmargin="0" topmargin="0">

<font class="BodyClass">
</font>
<div id="Sponsor">
<p align="right"><font class="BodyClass"><a title="A l&rsquo;aide de EveryOneWeb, il est facile de cr&eacute;er un site gratuit ou page perso gratuitement &agrave; partir de votre propre navigateur! " href="http://www.everyoneweb.fr/" target="_blank"><font size="2"><font face="Arial"><strong><font color="darkgreen">EveryOne</font><font color="black">Web</font></strong></font><font color="black">: Cr&eacute;er un site gratuit</font></font></a></font>&nbsp;</p>

</div>


<form name="Form1" method="post" action="index.aspx?Webid=db0" id="Form1" style="margin: 0px; padding: 0px;">
  <input name="__EVENTTARGET" value="" type="hidden">
  <input name="__EVENTARGUMENT" value="" type="hidden">
  <input name="__VIEWSTATE" value="dDwxNjc4NTY1MDIyO3Q8O2w8aTwwPjtpPDE+O2k8Mz47aTw1Pjs+O2w8dDxAPGRiMCBjb21wYW55O2ZyO2RiMCBjb21wYW55O2RiMCBjb21wYW55OyBQIHttYXJnaW4tdG9wOiAwcHhcOyBtYXJnaW4tYm90dG9tOiAwcHhcOyB9DQpBOmxpbmsge2NvbG9yOmJsdWVcOyB0ZXh0LWRlY29yYXRpb246dW5kZXJsaW5lXDsgZm9udC13ZWlnaHQ6IG5vcm1hbFw7IGZvbnQtc3R5bGU6ICBub3JtYWxcOyB9DQpBOmhvdmVyIHtjb2xvcjpkb2RnZXJibHVlXDsgdGV4dC1kZWNvcmF0aW9uOnVuZGVybGluZVw7IGZvbnQtd2VpZ2h0OiBub3JtYWxcOyBmb250LXN0eWxlOiAgbm9ybWFsXDsgfQ0KQTp2aXNpdGVkIHtjb2xvcjpibHVldmlvbGV0XDsgdGV4dC1kZWNvcmF0aW9uOnVuZGVybGluZVw7IGZvbnQtd2VpZ2h0OiBub3JtYWxcOyBmb250LXN0eWxlOiAgbm9ybWFsXDsgfQ0KLkJvZHlDbGFzcyB7Y29sb3I6YmxhY2tcOyBmb250LXNpemU6OXB0XDsgZm9udC1mYW1pbHk6ICdWZXJkYW5hJ1w7IHRleHQtZGVjb3JhdGlvbjogbm9uZVw7IGZvbnQtd2VpZ2h0OiBub3JtYWxcOyBmb250LXN0eWxlOiAgbm9ybWFsXDsgfQ0KSDEge2NvbG9yOmJsYWNrXDsgZm9udC1zaXplOjIwcHRcOyBmb250LWZhbWlseTogJ1ZlcmRhbmEnIFw7IHRleHQtZGVjb3JhdGlvbjogbm9uZVw7IGZvbnQtd2VpZ2h0OiBub3JtYWxcOyBmb250LXN0eWxlOiAgbm9ybWFsXDsgbWFyZ2luLXRvcDogIDVweFw7IG1hcmdpbi1ib3R0b206ICAxNXB4IFw7IH0NCkgyIHtjb2xvcjpibGFja1w7IGZvbnQtc2l6ZToxNHB0XDsgZm9udC1mYW1pbHk6ICdWZXJkYW5hJyBcOyB0ZXh0LWRlY29yYXRpb246IG5vbmVcOyBmb250LXdlaWdodDogbm9ybWFsXDsgZm9udC1zdHlsZTogIG5vcm1hbFw7IG1hcmdpbi10b3A6ICAxMHB4XDsgbWFyZ2luLWJvdHRvbTogIDNweCBcOyB9DQpIMyB7Y29sb3I6YmxhY2tcOyBmb250LXNpemU6MTJwdFw7IGZvbnQtZmFtaWx5OiAnVmVyZGFuYScgXDsgdGV4dC1kZWNvcmF0aW9uOiBub25lXDsgZm9udC13ZWlnaHQ6IG5vcm1hbFw7IGZvbnQtc3R5bGU6ICBub3JtYWxcOyBtYXJnaW4tdG9wOiAgMXB4XDsgbWFyZ2luLWJvdHRvbTogIDVweCBcOyB9DQpINCB7Y29sb3I6YmxhY2tcOyBmb250LXNpemU6MTBwdFw7IGZvbnQtZmFtaWx5OiAnVmVyZGFuYScgXDsgdGV4dC1kZWNvcmF0aW9uOiBub25lXDsgZm9udC13ZWlnaHQ6IGJvbGRcOyBmb250LXN0eWxlOiAgbm9ybWFsXDsgbWFyZ2luLXRvcDogIDBweFw7IG1hcmdpbi1ib3R0b206ICAwcHggXDsgfQ0KLkNlbDEge2JvcmRlci1sZWZ0OmJsYWNrIDFweCBzb2xpZFw7Ym9yZGVyLXJpZ2h0OmJsYWNrIDFweCBzb2xpZFw7Ym9yZGVyLXRvcDpibGFjayAxcHggc29saWRcO2JvcmRlci1Cb3R0b206YmxhY2sgMXB4IHNvbGlkXDtiYWNrZ3JvdW5kLWNvbG9yOnNpbHZlclw7IH0NCjtQYXRpZW50ZXogdW4gaW5zdGFudDtQYXRpZW50ZXogdW4gaW5zdGFudDtMZSBzZXJ2ZXVyIGEgYmVzb2luIGRlIHBsdXMgZGUgdGVtcHMuO0F0dGVuZGV6IGVuY29yZSBxdWVscXVlcztzZWNvbmRlcy9taW51dGVzO291IGZlcm1lciBsYSBwYWdlO2V0IHLDqWVzc2F5ZXIgcGx1cyB0YXJkLi4uO1ZvdHJlIGZvcm11bGFpcmUgZXN0IGVudm95w6khO1ZvdHJlIGZvcm11bGFpcmUgZXN0IGVudm95w6khOz47Oz47dDxwPGw8aW5uZXJodG1sOz47bDxcPFAgYWxpZ249cmlnaHRcPlw8QSB0aXRsZT0iQSBs4oCZYWlkZSBkZSBFdmVyeU9uZVdlYiwgaWwgZXN0IGZhY2lsZSBkZSBjcsOpZXIgdW4gc2l0ZSBncmF0dWl0IG91IHBhZ2UgcGVyc28gZ3JhdHVpdGVtZW50IMOgIHBhcnRpciBkZSB2b3RyZSBwcm9wcmUgbmF2aWdhdGV1ciEgIiBocmVmPSJodHRwOi8vd3d3LmV2ZXJ5b25ld2ViLmZyLyIgdGFyZ2V0PV9ibGFua1w+XDxGT05UIHNpemU9Mlw+XDxGT05UIGZhY2U9QXJpYWxcPlw8U1RST05HXD5cPEZPTlQgY29sb3I9ZGFya2dyZWVuXD5FdmVyeU9uZVw8L0ZPTlRcPlw8Rk9OVCBjb2xvcj1ibGFja1w+V2ViXDwvRk9OVFw+XDwvU1RST05HXD5cPC9GT05UXD5cPEZPTlQgY29sb3I9YmxhY2tcPjogQ3LDqWVyIHVuIHNpdGUgZ3JhdHVpdFw8L0ZPTlRcPlw8L0ZPTlRcPlw8L0ZPTlRcPlw8L0FcPiZuYnNwXDtcPC9wXD4NCjs+Pjs7Pjt0PDtsPGk8MT47aTwzPjtpPDU+O2k8Nz47aTw5PjtpPDExPjtpPDE1PjtpPDE3PjtpPDE5PjtpPDUxPjtpPDUyPjtpPDU4Pjs+O2w8dDxAMDw7XDxNZW51RGF0YSBJbWFnZXNCYXNlVVJMPSIuLi9pbWFnZXMvIiBEZWZhdWx0SXRlbVNwYWNpbmc9IjAiIERlZmF1bHRHcm91cENzc0NsYXNzPSJNZW51R3JvdXAiIERlZmF1bHRJdGVtQ3NzQ2xhc3M9Ik1lbnVJdGVtIiBEZWZhdWx0SXRlbUNzc0NsYXNzT3Zlcj0iTWVudUl0ZW1PdmVyIlw+XDxNZW51R3JvdXAgSUQ9Ikdyb3VwVG9wIlw+XDxNZW51SXRlbSBJRD0iV2Vic2l0ZVdpanppZ2VuIiBMYWJlbD0iTW9kaWZpZXIgbGUgc2l0ZSIgTGVmdEljb249InRyYW5zcGFyYW50LmdpZiIgTGVmdEljb25PdmVyPSJ0cmFuc3BhcmFudC5naWYiIExlZnRJY29uV2lkdGg9IjIzIiBDbGllbnRTaWRlT25DbGljaz0iV2lqemlnQmlzKClcOyIgL1w+XDwvTWVudUdyb3VwXD5cPC9NZW51RGF0YVw+O2g8SXNDb250ZXh0TWVudTtvPHQ+O01lbnVTdHlsZTtpPDE+O0RlZmF1bHRJdGVtQ3NzQ2xhc3NPdmVyO01lbnVJdGVtT3ZlcjtEZWZhdWx0SXRlbUNzc0NsYXNzO01lbnVJdGVtO0RlZmF1bHRHcm91cENzc0NsYXNzO01lbnVHcm91cDtEZWZhdWx0SXRlbVNwYWNpbmc7aTwwPjtPdmVybGF5V2luZG93ZWRFbGVtZW50cztvPHQ+O0ltYWdlc0Jhc2VVUkw7Li4vaW1hZ2VzLztNZW51RGF0YTsuLi9Qcm9ncmFtbWFDb25maWdGaWxlcy9Qb3BNZW51X1dpanppZ01vZGUueG1sOz47Pjs7Pjt0PHA8bDxpbm5lcmh0bWw7PjtsPFw8Q0VOVEVSXD5cPElNRyBzdHlsZT0iQk9SREVSLVJJR0hUOiBtZWRpdW0gbm9uZVw7IEJPUkRFUi1UT1A6IG1lZGl1bSBub25lXDsgQk9SREVSLUxFRlQ6IG1lZGl1bSBub25lXDsgQk9SREVSLUJPVFRPTTogbWVkaXVtIG5vbmUiIGhzcGFjZT01IHNyYz0iaHR0cDovL3d3dy5ldmVyeW9uZXdlYi5mci9XQS9EYXRhRmlsZXNkYjAvYmFubmllcmVkYjBjb21wYW55NS5qcGciXD5cPC9DRU5URVJcPg0KOz4+Ozs+O3Q8cDxsPHdpZHRoO2hlaWdodDs+O2w8MDswOz4+Ozs+O3Q8cDxsPGlubmVyaHRtbDs+O2w8IA0KDQpcPCEtLSAgIEFTUCBUcmVlVmlldyBjb21wb25lbnQgdmVyc2lvbiAyLjAuMC40ICAgaHR0cDovL3d3dy5vYm91dC5jb20gICAtLVw+DQoNClw8bGluayByZWw9c3R5bGVzaGVldCBocmVmPSIuLi90cmVlL05vSWNvb24vb2JvdXRfdHJlZXZpZXcyLmNzcyIgXD4NClw8c2NyaXB0IGxhbmd1YWdlPSJqYXZhc2NyaXB0Ilw+dmFyIG9iX3N0eWxlPSIuLi90cmVlL05vSWNvb24iXDtcPC9zY3JpcHRcPlw8c2NyaXB0IGxhbmd1YWdlPSJKYXZhU2NyaXB0IiB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiIHNyYz0iLi4vdHJlZS9vYm91dF90cmVldmlldy5qcyJcPlw8L3NjcmlwdFw+DQpcPGRpdiBpZD0idHJlZTEiIG5hbWU9InRyZWUxIiBjbGFzcz1vYl90cmVlIHN0eWxlPSIiXD5cPGRpdiBjbGFzcz1vYl9kaTJcPlw8dGFibGUgY2VsbHBhZGRpbmc9IjAiIGNlbGxzcGFjaW5nPSIwIiBib3JkZXI9IjAiXD5cPHRyXD5cPHRkIGNsYXNzPW9iX3Q2IHN0eWxlPSJiYWNrZ3JvdW5kLWltYWdlOiB1cmwoJy4uL3RyZWUvTm9JY29vbi92ZXJ0aWNhbC5naWYnKVw7Ilw+XDxpbWcgYWx0PSIiIHNyYz0iLi4vdHJlZS9Ob0ljb29uL2hyLmdpZiJcPlw8L3RkXD5cPHRkIGlkPUs0NTIgb25jbGljaz0nb2JfdDIyKHRoaXMpJyBjbGFzcz1vYl90Mlw+IFw8c2NyaXB0XD4gIGFkZFN0eWxlRGVmSUUoJy5TTVBhcmVudEs0NTInLCdiYWNrZ3JvdW5kLWNvbG9yOm5vbmVcO2ZvbnQtZmFtaWx5OlZlcmRhbmFcO2ZvbnQtc2l6ZTo4cHRcO2ZvbnQtd2VpZ2h0Om5vcm1hbFw7Zm9udC1zdHlsZTpub3JtYWxcO2NvbG9yOmJsYWNrXDt0ZXh0LWRlY29yYXRpb246bm9uZVw7cGFkZGluZzozcHhcO2N1cnNvcjpwb2ludGVyJylcOyBhZGRTdHlsZURlZklFKCcuU01QYXJlbnRPdmVySzQ1MicsJ2JhY2tncm91bmQtY29sb3I6bm9uZVw7Zm9udC1mYW1pbHk6VmVyZGFuYVw7Zm9udC1zaXplOjhwdFw7Zm9udC13ZWlnaHQ6bm9ybWFsXDtmb250LXN0eWxlOm5vcm1hbFw7Y29sb3I6YmxhY2tcO3RleHQtZGVjb3JhdGlvbjpub25lXDtwYWRkaW5nOjNweFw7Y3Vyc29yOnBvaW50ZXInKVw7IGFkZFN0eWxlRGVmSUUoJy5TTVBhcmVudFNlbGVjdGVkSzQ1MicsJ2JhY2tncm91bmQtY29sb3I6I2NjZGRlZVw7Zm9udC1mYW1pbHk6VmVyZGFuYVw7Zm9udC1zaXplOjhwdFw7Zm9udC13ZWlnaHQ6bm9ybWFsXDtmb250LXN0eWxlOm5vcm1hbFw7Y29sb3I6YmxhY2tcO3RleHQtZGVjb3JhdGlvbjpub25lXDtwYWRkaW5nOjNweFw7Ym9yZGVyOjBweCBzb2xpZFw7Y3Vyc29yOnBvaW50ZXInKVw7ICBcPC9zY3JpcHRcPiBcPHRhYmxlIElEPSJLNDUyX3RyZWUid2lkdGg9MTAwJSAgaGVpZ2h0PTEwMCUgY2VsbFNwYWNpbmc9MCBjZWxsUGFkZGluZz0wICBjbGFzcyA9ICJTTVBhcmVudEs0NTIiIG9uY2xpY2s9J3RoaXMuY2xhc3NOYW1lID0gIlNNUGFyZW50U2VsZWN0ZWRLNDUyIlw7IG9iX3QyMyh0aGlzKVw7IFRyZWVfS25vb3BwdW50SURHZXNlbGVjdGVlcmRPcHNsYWFuKCJLNDUyIilcOycgIG9ubW91c2VvdmVyPScgdGhpcy5jbGFzc05hbWUgPSAiU01QYXJlbnRPdmVySzQ1MiJcOycgIG9ubW91c2VvdXQ9JyB0aGlzLmNsYXNzTmFtZSA9ICJTTVBhcmVudEs0NTIiXDsnIFw+XDx0clw+XDx0ZFw+SG9tZVw8L3RkXD5cPC90clw+XDwvdGFibGVcPlw8L3RkXD5cPC90clw+XDwvdGFibGVcPlw8dGFibGUgY2VsbHBhZGRpbmc9IjAiIGNlbGxzcGFjaW5nPSIwIiBib3JkZXI9IjAiXD5cPHRyXD5cPHRkIGNsYXNzPW9iX3Q2IHN0eWxlPSJiYWNrZ3JvdW5kLWltYWdlOiB1cmwoJy4uL3RyZWUvTm9JY29vbi92ZXJ0aWNhbC5naWYnKVw7Ilw+XDxpbWcgYWx0PSIiIHNyYz0iLi4vdHJlZS9Ob0ljb29uL2hyLmdpZiJcPlw8L3RkXD5cPHRkIGlkPUs0NTMgb25jbGljaz0nb2JfdDIyKHRoaXMpJyBjbGFzcz1vYl90Mlw+IFw8c2NyaXB0XD4gIGFkZFN0eWxlRGVmSUUoJy5TTVBhcmVudEs0NTMnLCdiYWNrZ3JvdW5kLWNvbG9yOm5vbmVcO2ZvbnQtZmFtaWx5OlZlcmRhbmFcO2ZvbnQtc2l6ZTo4cHRcO2ZvbnQtd2VpZ2h0Om5vcm1hbFw7Zm9udC1zdHlsZTpub3JtYWxcO2NvbG9yOmJsYWNrXDt0ZXh0LWRlY29yYXRpb246bm9uZVw7cGFkZGluZzozcHhcO2N1cnNvcjpwb2ludGVyJylcOyBhZGRTdHlsZURlZklFKCcuU01QYXJlbnRPdmVySzQ1MycsJ2JhY2tncm91bmQtY29sb3I6bm9uZVw7Zm9udC1mYW1pbHk6VmVyZGFuYVw7Zm9udC1zaXplOjhwdFw7Zm9udC13ZWlnaHQ6bm9ybWFsXDtmb250LXN0eWxlOm5vcm1hbFw7Y29sb3I6YmxhY2tcO3RleHQtZGVjb3JhdGlvbjpub25lXDtwYWRkaW5nOjNweFw7Y3Vyc29yOnBvaW50ZXInKVw7IGFkZFN0eWxlRGVmSUUoJy5TTVBhcmVudFNlbGVjdGVkSzQ1MycsJ2JhY2tncm91bmQtY29sb3I6I2NjZGRlZVw7Zm9udC1mYW1pbHk6VmVyZGFuYVw7Zm9udC1zaXplOjhwdFw7Zm9udC13ZWlnaHQ6bm9ybWFsXDtmb250LXN0eWxlOm5vcm1hbFw7Y29sb3I6YmxhY2tcO3RleHQtZGVjb3JhdGlvbjpub25lXDtwYWRkaW5nOjNweFw7Ym9yZGVyOjBweCBzb2xpZFw7Y3Vyc29yOnBvaW50ZXInKVw7ICBcPC9zY3JpcHRcPiBcPHRhYmxlIElEPSJLNDUzX3RyZWUid2lkdGg9MTAwJSAgaGVpZ2h0PTEwMCUgY2VsbFNwYWNpbmc9MCBjZWxsUGFkZGluZz0wICBjbGFzcyA9ICJTTVBhcmVudEs0NTMiIG9uY2xpY2s9J3RoaXMuY2xhc3NOYW1lID0gIlNNUGFyZW50U2VsZWN0ZWRLNDUzIlw7IG9iX3QyMyh0aGlzKVw7IFRyZWVfS25vb3BwdW50SURHZXNlbGVjdGVlcmRPcHNsYWFuKCJLNDUzIilcOycgIG9ubW91c2VvdmVyPScgdGhpcy5jbGFzc05hbWUgPSAiU01QYXJlbnRPdmVySzQ1MyJcOycgIG9ubW91c2VvdXQ9JyB0aGlzLmNsYXNzTmFtZSA9ICJTTVBhcmVudEs0NTMiXDsnIFw+XDx0clw+XDx0ZFw+UGFydGVuYXJpYXRcPC90ZFw+XDwvdHJcPlw8L3RhYmxlXD5cPC90ZFw+XDwvdHJcPlw8L3RhYmxlXD5cPHRhYmxlIGNlbGxwYWRkaW5nPSIwIiBjZWxsc3BhY2luZz0iMCIgYm9yZGVyPSIwIlw+XDx0clw+XDx0ZCBjbGFzcz1vYl90NiBzdHlsZT0iYmFja2dyb3VuZC1pbWFnZTogdXJsKCcuLi90cmVlL05vSWNvb24vdmVydGljYWwuZ2lmJylcOyJcPlw8aW1nIGFsdD0iIiBzcmM9Ii4uL3RyZWUvTm9JY29vbi9oci5naWYiXD5cPC90ZFw+XDx0ZCBpZD1LNDU5IG9uY2xpY2s9J29iX3QyMih0aGlzKScgY2xhc3M9b2JfdDJcPiBcPHNjcmlwdFw+ICBhZGRTdHlsZURlZklFKCcuU01QYXJlbnRLNDU5JywnYmFja2dyb3VuZC1jb2xvcjpub25lXDtmb250LWZhbWlseTpWZXJkYW5hXDtmb250LXNpemU6OHB0XDtmb250LXdlaWdodDpub3JtYWxcO2ZvbnQtc3R5bGU6bm9ybWFsXDtjb2xvcjpibGFja1w7dGV4dC1kZWNvcmF0aW9uOm5vbmVcO3BhZGRpbmc6M3B4XDtjdXJzb3I6cG9pbnRlcicpXDsgYWRkU3R5bGVEZWZJRSgnLlNNUGFyZW50T3Zlcks0NTknLCdiYWNrZ3JvdW5kLWNvbG9yOm5vbmVcO2ZvbnQtZmFtaWx5OlZlcmRhbmFcO2ZvbnQtc2l6ZTo4cHRcO2ZvbnQtd2VpZ2h0Om5vcm1hbFw7Zm9udC1zdHlsZTpub3JtYWxcO2NvbG9yOmJsYWNrXDt0ZXh0LWRlY29yYXRpb246bm9uZVw7cGFkZGluZzozcHhcO2N1cnNvcjpwb2ludGVyJylcOyBhZGRTdHlsZURlZklFKCcuU01QYXJlbnRTZWxlY3RlZEs0NTknLCdiYWNrZ3JvdW5kLWNvbG9yOiNjY2RkZWVcO2ZvbnQtZmFtaWx5OlZlcmRhbmFcO2ZvbnQtc2l6ZTo4cHRcO2ZvbnQtd2VpZ2h0Om5vcm1hbFw7Zm9udC1zdHlsZTpub3JtYWxcO2NvbG9yOmJsYWNrXDt0ZXh0LWRlY29yYXRpb246bm9uZVw7cGFkZGluZzozcHhcO2JvcmRlcjowcHggc29saWRcO2N1cnNvcjpwb2ludGVyJylcOyAgXDwvc2NyaXB0XD4gXDx0YWJsZSBJRD0iSzQ1OV90cmVlIndpZHRoPTEwMCUgIGhlaWdodD0xMDAlIGNlbGxTcGFjaW5nPTAgY2VsbFBhZGRpbmc9MCAgY2xhc3MgPSAiU01QYXJlbnRLNDU5IiBvbmNsaWNrPSd0aGlzLmNsYXNzTmFtZSA9ICJTTVBhcmVudFNlbGVjdGVkSzQ1OSJcOyBvYl90MjModGhpcylcOyBUcmVlX0tub29wcHVudElER2VzZWxlY3RlZXJkT3BzbGFhbigiSzQ1OSIpXDsnICBvbm1vdXNlb3Zlcj0nIHRoaXMuY2xhc3NOYW1lID0gIlNNUGFyZW50T3Zlcks0NTkiXDsnICBvbm1vdXNlb3V0PScgdGhpcy5jbGFzc05hbWUgPSAiU01QYXJlbnRLNDU5Ilw7JyBcPlw8dHJcPlw8dGRcPlJlY3J1dGVtZW50XDwvdGRcPlw8L3RyXD5cPC90YWJsZVw+XDwvdGRcPlw8L3RyXD5cPC90YWJsZVw+XDx0YWJsZSBjZWxscGFkZGluZz0iMCIgY2VsbHNwYWNpbmc9IjAiIGJvcmRlcj0iMCJcPlw8dHJcPlw8dGQgY2xhc3M9b2JfdDYgc3R5bGU9ImJhY2tncm91bmQtaW1hZ2U6IHVybCgnLi4vdHJlZS9Ob0ljb29uL3ZlcnRpY2FsLmdpZicpXDsiXD5cPGltZyBhbHQ9IiIgc3JjPSIuLi90cmVlL05vSWNvb24vcGx1c2lrLmdpZiIgb25jbGljaz0ib2JfdDIxKHRoaXMsICcnKSJcPlw8L3RkXD5cPHRkIGlkPUs0NTUgb25jbGljaz0nb2JfdDIyKHRoaXMpJyBjbGFzcz1vYl90Mlw+IFw8c2NyaXB0XD4gIGFkZFN0eWxlRGVmSUUoJy5TTVBhcmVudEs0NTUnLCdiYWNrZ3JvdW5kLWNvbG9yOm5vbmVcO2ZvbnQtZmFtaWx5OlZlcmRhbmFcO2ZvbnQtc2l6ZTo4cHRcO2ZvbnQtd2VpZ2h0Om5vcm1hbFw7Zm9udC1zdHlsZTpub3JtYWxcO2NvbG9yOmJsYWNrXDt0ZXh0LWRlY29yYXRpb246bm9uZVw7cGFkZGluZzozcHhcO2N1cnNvcjpwb2ludGVyJylcOyBhZGRTdHlsZURlZklFKCcuU01QYXJlbnRPdmVySzQ1NScsJ2JhY2tncm91bmQtY29sb3I6bm9uZVw7Zm9udC1mYW1pbHk6VmVyZGFuYVw7Zm9udC1zaXplOjhwdFw7Zm9udC13ZWlnaHQ6bm9ybWFsXDtmb250LXN0eWxlOm5vcm1hbFw7Y29sb3I6YmxhY2tcO3RleHQtZGVjb3JhdGlvbjpub25lXDtwYWRkaW5nOjNweFw7Y3Vyc29yOnBvaW50ZXInKVw7IGFkZFN0eWxlRGVmSUUoJy5TTVBhcmVudFNlbGVjdGVkSzQ1NScsJ2JhY2tncm91bmQtY29sb3I6I2NjZGRlZVw7Zm9udC1mYW1pbHk6VmVyZGFuYVw7Zm9udC1zaXplOjhwdFw7Zm9udC13ZWlnaHQ6bm9ybWFsXDtmb250LXN0eWxlOm5vcm1hbFw7Y29sb3I6YmxhY2tcO3RleHQtZGVjb3JhdGlvbjpub25lXDtwYWRkaW5nOjNweFw7Ym9yZGVyOjBweCBzb2xpZFw7Y3Vyc29yOnBvaW50ZXInKVw7ICBcPC9zY3JpcHRcPiBcPHRhYmxlIElEPSJLNDU1X3RyZWUid2lkdGg9MTAwJSAgaGVpZ2h0PTEwMCUgY2VsbFNwYWNpbmc9MCBjZWxsUGFkZGluZz0wICBjbGFzcyA9ICJTTVBhcmVudEs0NTUiIG9uY2xpY2s9J3RoaXMuY2xhc3NOYW1lID0gIlNNUGFyZW50U2VsZWN0ZWRLNDU1Ilw7IG9iX3QyMyh0aGlzKVw7IFRyZWVfS25vb3BwdW50SURHZXNlbGVjdGVlcmRPcHNsYWFuKCJLNDU1IilcOycgIG9ubW91c2VvdmVyPScgdGhpcy5jbGFzc05hbWUgPSAiU01QYXJlbnRPdmVySzQ1NSJcOycgIG9ubW91c2VvdXQ9JyB0aGlzLmNsYXNzTmFtZSA9ICJTTVBhcmVudEs0NTUiXDsnIFw+XDx0clw+XDx0ZFw+RGIwXDwvdGRcPlw8L3RyXD5cPC90YWJsZVw+XDwvdGRcPlw8L3RyXD5cPC90YWJsZVw+XDx0YWJsZSBjZWxsc3BhY2luZz0iMCIgY2VsbHBhZGRpbmc9IjAiIGJvcmRlcj0iMCIgc3R5bGU9ImRpc3BsYXk6bm9uZVw7Ilw+XDx0clw+XDx0ZCBzdHlsZT0iYmFja2dyb3VuZC1pbWFnZTogdXJsKCcuLi90cmVlL05vSWNvb24vdmVydGljYWwuZ2lmJylcOyJcPlw8ZGl2IGNsYXNzPW9iX2Q1XD5cPC9kaXZcPlw8L3RkXD5cPHRkIGNsYXNzPW9iX3Q1XD5cPHRhYmxlIGNlbGxwYWRkaW5nPSIwIiBjZWxsc3BhY2luZz0iMCIgYm9yZGVyPSIwIlw+XDx0clw+XDx0ZCBjbGFzcz1vYl90NiBzdHlsZT0iYmFja2dyb3VuZC1pbWFnZTogdXJsKCcuLi90cmVlL05vSWNvb24vdmVydGljYWwuZ2lmJylcOyJcPlw8aW1nIGFsdD0iIiBzcmM9Ii4uL3RyZWUvTm9JY29vbi9oci5naWYiXD5cPC90ZFw+XDx0ZCBpZD1LNDU2IG9uY2xpY2s9J29iX3QyMih0aGlzKScgY2xhc3M9b2JfdDJcPiBcPHNjcmlwdFw+ICBhZGRTdHlsZURlZklFKCcuU01DaGlsZEs0NTYnLCdiYWNrZ3JvdW5kLWNvbG9yOm5vbmVcO2ZvbnQtZmFtaWx5OlZlcmRhbmFcO2ZvbnQtc2l6ZTo4cHRcO2ZvbnQtd2VpZ2h0Om5vcm1hbFw7Zm9udC1zdHlsZTpub3JtYWxcO2NvbG9yOmJsYWNrXDt0ZXh0LWRlY29yYXRpb246bm9uZVw7cGFkZGluZzozcHgnKVw7IGFkZFN0eWxlRGVmSUUoJy5TTUNoaWxkT3Zlcks0NTYnLCdiYWNrZ3JvdW5kLWNvbG9yOm5vbmVcO2ZvbnQtZmFtaWx5OlZlcmRhbmFcO2ZvbnQtc2l6ZTo4cHRcO2ZvbnQtd2VpZ2h0Om5vcm1hbFw7Zm9udC1zdHlsZTpub3JtYWxcO2NvbG9yOmJsYWNrXDt0ZXh0LWRlY29yYXRpb246bm9uZVw7cGFkZGluZzozcHhcO2N1cnNvcjpwb2ludGVyJylcOyBhZGRTdHlsZURlZklFKCcuU01DaGlsZFNlbGVjdGVkSzQ1NicsJ2JhY2tncm91bmQtY29sb3I6I2NjZGRlZVw7Zm9udC1mYW1pbHk6VmVyZGFuYVw7Zm9udC1zaXplOjhwdFw7Zm9udC13ZWlnaHQ6bm9ybWFsXDtmb250LXN0eWxlOm5vcm1hbFw7Y29sb3I6YmxhY2tcO3RleHQtZGVjb3JhdGlvbjpub25lXDtwYWRkaW5nOjNweFw7Ym9yZGVyOjBweCAgc29saWRcO2N1cnNvcjpwb2ludGVyJylcOyAgXDwvc2NyaXB0XD4gXDx0YWJsZSBJRD0iSzQ1Nl90cmVlIiBjbGFzcyA9ICJTTUNoaWxkSzQ1NiIgb25jbGljaz0ndGhpcy5jbGFzc05hbWUgPSAiU01DaGlsZFNlbGVjdGVkSzQ1NiJcOyBvYl90MjModGhpcylcOyBUcmVlX0tub29wcHVudFN1YklER2VzZWxlY3RlZXJkT3BzbGFhbigiSzQ1NiIpXDsnICBvbm1vdXNlb3Zlcj0nIHRoaXMuY2xhc3NOYW1lID0gIlNNQ2hpbGRPdmVySzQ1NiJcOycgIG9ubW91c2VvdXQ9JyB0aGlzLmNsYXNzTmFtZSA9ICJTTUNoaWxkSzQ1NiJcOycgXD5cPHRyXD5cPHRkXD5DVlw8L3RkXD5cPC90clw+XDwvdGFibGVcPlw8L3RkXD5cPC90clw+XDwvdGFibGVcPlw8dGFibGUgY2VsbHBhZGRpbmc9IjAiIGNlbGxzcGFjaW5nPSIwIiBib3JkZXI9IjAiXD5cPHRyXD5cPHRkIGNsYXNzPW9iX3Q2IHN0eWxlPSIiXD5cPGltZyBhbHQ9IiIgc3JjPSIuLi90cmVlL05vSWNvb24vaHJfbC5naWYiXD5cPC90ZFw+XDx0ZCBpZD1LNDU3IG9uY2xpY2s9J29iX3QyMih0aGlzKScgY2xhc3M9b2JfdDJcPiBcPHNjcmlwdFw+ICBhZGRTdHlsZURlZklFKCcuU01DaGlsZEs0NTcnLCdiYWNrZ3JvdW5kLWNvbG9yOm5vbmVcO2ZvbnQtZmFtaWx5OlZlcmRhbmFcO2ZvbnQtc2l6ZTo4cHRcO2ZvbnQtd2VpZ2h0Om5vcm1hbFw7Zm9udC1zdHlsZTpub3JtYWxcO2NvbG9yOmJsYWNrXDt0ZXh0LWRlY29yYXRpb246bm9uZVw7cGFkZGluZzozcHgnKVw7IGFkZFN0eWxlRGVmSUUoJy5TTUNoaWxkT3Zlcks0NTcnLCdiYWNrZ3JvdW5kLWNvbG9yOm5vbmVcO2ZvbnQtZmFtaWx5OlZlcmRhbmFcO2ZvbnQtc2l6ZTo4cHRcO2ZvbnQtd2VpZ2h0Om5vcm1hbFw7Zm9udC1zdHlsZTpub3JtYWxcO2NvbG9yOmJsYWNrXDt0ZXh0LWRlY29yYXRpb246bm9uZVw7cGFkZGluZzozcHhcO2N1cnNvcjpwb2ludGVyJylcOyBhZGRTdHlsZURlZklFKCcuU01DaGlsZFNlbGVjdGVkSzQ1NycsJ2JhY2tncm91bmQtY29sb3I6I2NjZGRlZVw7Zm9udC1mYW1pbHk6VmVyZGFuYVw7Zm9udC1zaXplOjhwdFw7Zm9udC13ZWlnaHQ6bm9ybWFsXDtmb250LXN0eWxlOm5vcm1hbFw7Y29sb3I6YmxhY2tcO3RleHQtZGVjb3JhdGlvbjpub25lXDtwYWRkaW5nOjNweFw7Ym9yZGVyOjBweCAgc29saWRcO2N1cnNvcjpwb2ludGVyJylcOyAgXDwvc2NyaXB0XD4gXDx0YWJsZSBJRD0iSzQ1N190cmVlIiBjbGFzcyA9ICJTTUNoaWxkSzQ1NyIgb25jbGljaz0ndGhpcy5jbGFzc05hbWUgPSAiU01DaGlsZFNlbGVjdGVkSzQ1NyJcOyBvYl90MjModGhpcylcOyBUcmVlX0tub29wcHVudFN1YklER2VzZWxlY3RlZXJkT3BzbGFhbigiSzQ1NyIpXDsnICBvbm1vdXNlb3Zlcj0nIHRoaXMuY2xhc3NOYW1lID0gIlNNQ2hpbGRPdmVySzQ1NyJcOycgIG9ubW91c2VvdXQ9JyB0aGlzLmNsYXNzTmFtZSA9ICJTTUNoaWxkSzQ1NyJcOycgXD5cPHRyXD5cPHRkXD5Cb29rIHBob3Rvc1w8L3RkXD5cPC90clw+XDwvdGFibGVcPlw8L3RkXD5cPC90clw+XDwvdGFibGVcPlw8L3RkXD5cPC90clw+XDwvdGFibGVcPlw8dGFibGUgY2VsbHBhZGRpbmc9IjAiIGNlbGxzcGFjaW5nPSIwIiBib3JkZXI9IjAiXD5cPHRyXD5cPHRkIGNsYXNzPW9iX3Q2IHN0eWxlPSIiXD5cPGltZyBhbHQ9IiIgc3JjPSIuLi90cmVlL05vSWNvb24vaHJfbC5naWYiXD5cPC90ZFw+XDx0ZCBpZD1LNDU4IG9uY2xpY2s9J29iX3QyMih0aGlzKScgY2xhc3M9b2JfdDJcPiBcPHNjcmlwdFw+ICBhZGRTdHlsZURlZklFKCcuU01QYXJlbnRLNDU4JywnYmFja2dyb3VuZC1jb2xvcjpub25lXDtmb250LWZhbWlseTpWZXJkYW5hXDtmb250LXNpemU6OHB0XDtmb250LXdlaWdodDpub3JtYWxcO2ZvbnQtc3R5bGU6bm9ybWFsXDtjb2xvcjpibGFja1w7dGV4dC1kZWNvcmF0aW9uOm5vbmVcO3BhZGRpbmc6M3B4XDtjdXJzb3I6cG9pbnRlcicpXDsgYWRkU3R5bGVEZWZJRSgnLlNNUGFyZW50T3Zlcks0NTgnLCdiYWNrZ3JvdW5kLWNvbG9yOm5vbmVcO2ZvbnQtZmFtaWx5OlZlcmRhbmFcO2ZvbnQtc2l6ZTo4cHRcO2ZvbnQtd2VpZ2h0Om5vcm1hbFw7Zm9udC1zdHlsZTpub3JtYWxcO2NvbG9yOmJsYWNrXDt0ZXh0LWRlY29yYXRpb246bm9uZVw7cGFkZGluZzozcHhcO2N1cnNvcjpwb2ludGVyJylcOyBhZGRTdHlsZURlZklFKCcuU01QYXJlbnRTZWxlY3RlZEs0NTgnLCdiYWNrZ3JvdW5kLWNvbG9yOiNjY2RkZWVcO2ZvbnQtZmFtaWx5OlZlcmRhbmFcO2ZvbnQtc2l6ZTo4cHRcO2ZvbnQtd2VpZ2h0Om5vcm1hbFw7Zm9udC1zdHlsZTpub3JtYWxcO2NvbG9yOmJsYWNrXDt0ZXh0LWRlY29yYXRpb246bm9uZVw7cGFkZGluZzozcHhcO2JvcmRlcjowcHggc29saWRcO2N1cnNvcjpwb2ludGVyJylcOyAgXDwvc2NyaXB0XD4gXDx0YWJsZSBJRD0iSzQ1OF90cmVlIndpZHRoPTEwMCUgIGhlaWdodD0xMDAlIGNlbGxTcGFjaW5nPTAgY2VsbFBhZGRpbmc9MCAgY2xhc3MgPSAiU01QYXJlbnRLNDU4IiBvbmNsaWNrPSd0aGlzLmNsYXNzTmFtZSA9ICJTTVBhcmVudFNlbGVjdGVkSzQ1OCJcOyBvYl90MjModGhpcylcOyBUcmVlX0tub29wcHVudElER2VzZWxlY3RlZXJkT3BzbGFhbigiSzQ1OCIpXDsnICBvbm1vdXNlb3Zlcj0nIHRoaXMuY2xhc3NOYW1lID0gIlNNUGFyZW50T3Zlcks0NTgiXDsnICBvbm1vdXNlb3V0PScgdGhpcy5jbGFzc05hbWUgPSAiU01QYXJlbnRLNDU4Ilw7JyBcPlw8dHJcPlw8dGRcPkRpdmVyc1w8L3RkXD5cPC90clw+XDwvdGFibGVcPlw8L3RkXD5cPC90clw+XDwvdGFibGVcPlw8L2Rpdlw+XDwvZGl2XD4NCg0KDQpcPCEtLSAgIEFTUCBUcmVlVmlldyBjb21wb25lbnQgdmVyc2lvbiAyLjAuMC40ICAgaHR0cDovL3d3dy5vYm91dC5jb20gICAtLVw+DQoNCg0KOz4+Ozs+O3Q8cDxsPGlubmVyaHRtbDs+O2w8IDs+Pjs7Pjt0PHA8bDxpbm5lcmh0bWw7PjtsPA0KOz4+Ozs+O3Q8cDxsPGlubmVyaHRtbDs+O2w8XDxQXD5cPFNUUk9OR1w+XDxJTUcgc3R5bGU9IkJPUkRFUi1SSUdIVDogbWVkaXVtIG5vbmVcOyBCT1JERVItVE9QOiBtZWRpdW0gbm9uZVw7IEJPUkRFUi1MRUZUOiBtZWRpdW0gbm9uZVw7IEJPUkRFUi1CT1RUT006IG1lZGl1bSBub25lIiBoc3BhY2U9NSBzcmM9Imh0dHA6Ly93d3cuZXZlcnlvbmV3ZWIuZnIvV0EvRGF0YUZpbGVzZGIwL3plcm8uanBnIiBhbGlnbj1sZWZ0XD5VbmUgdGVhbSBkZSBmYW5zdWJcPEJSXD5cPC9TVFJPTkdcPmFkcmVzc2UgOiBcPEEgaHJlZj0iaHR0cDovL3d3dy56ZXJvLmZyLmNjLyJcPnd3dy56ZXJvLmZyLmNjXDwvQVw+XDwvUFw+DQpcPFBcPlw8QlJcPlByw6lzZW50YXRpb24gOiBDJ2VzdCBsZSBwcm9qZXQgbGUgcGx1cyBncm9zIGV0IGxlIHBsdXMgaW1wb3J0YW50IGRlIGxhIGRiMCBjb21wYW55Llw8QlJcPlrDqXJvIGVzdCB1bmUgdGVhbSBmcmFuw6dhaXNlIHF1aSBzZSBjaGFyZ2UgZGUgdHJhZHVpcmUgbGVzIGFuaW1lcyBkZSB0b3V0IHR5cGUuIFw8QlJcPk5vdXMgcHJpdmlsw6lnaW9ucyBsYSBxdWFsaXTDqSDDoCBsYSBxdWFudGl0w6kuIFw8QlJcPk5vdXMgcmVsZWFzZXMgc29udCBkaXNwb25pYmxlcyBlbiBNZWdhdXBsb2FkLCBTdHJlYW1pbmcgZXQgVG9ycmVudCB2aWEgbGUgc2l0ZSB3ZWIuIFw8QlJcPk5vdHJlIHRlYW0gcmVjcnV0ZSBhY3R1ZWxsZW1lbnQsIG4naMOpc2l0ZXogcGFzIMOgIHZvdXMgcHJvcG9zZXIuIFw8QlJcPlZvcyBjb21tZW50YWlyZXMgc3VyIG5vcyByZWxlYXNlcyBzb250IGxlcyBiaWVudmVudWVzLCB2aWEgbGUgZm9ydW0gZHUgc2l0ZSB3ZWIuXDwvUFw+DQpcPFBcPiZuYnNwXDtcPC9QXD4NClw8UFw+Jm5ic3BcO1w8L1BcPg0KXDxQXD5cPFNUUk9OR1w+XDwvU1RST05HXD4mbmJzcFw7XDwvUFw+DQpcPFBcPlw8U1RST05HXD5cPElNRyBzdHlsZT0iQk9SREVSLVJJR0hUOiBtZWRpdW0gbm9uZVw7IEJPUkRFUi1UT1A6IG1lZGl1bSBub25lXDsgQk9SREVSLUxFRlQ6IG1lZGl1bSBub25lXDsgQk9SREVSLUJPVFRPTTogbWVkaXVtIG5vbmUiIGhzcGFjZT01IHNyYz0iaHR0cDovL3d3dy5ldmVyeW9uZXdlYi5mci9XQS9EYXRhRmlsZXNkYjAvZGIwLmpwZyIgYWxpZ249bGVmdFw+VW4gZm9ydW1cPC9TVFJPTkdcPlw8L1BcPg0KXDxQXD5cPFNUUk9OR1w+XDxCUlw+XDwvU1RST05HXD5hZHJlc3NlIDogXDxBIGhyZWY9Imh0dHA6Ly9kYjAueG9vaXQuZnIiXD5odHRwOi8vZGIwLnhvb2l0LmZyXDwvQVw+XDwvUFw+DQpcPFBcPlw8QlJcPlByw6lzZW50YXRpb24gOiBmb3J1bSBkZSBkaXNjdXNzaW9uLlw8QlJcPiZuYnNwXDtEaXNjdXNzaW9ucyBldCBzb25kYWdlcyBzdXIgdG91dCBsZXMgbWFuZ2FzIGV4aXN0YW50cy5cPEJSXD4mbmJzcFw7Q29uY291cnMgZGl2ZXJzXDxCUlw+Jm5ic3BcO1BsYXRlZm9ybWUgUlBHXDxCUlw+Jm5ic3BcO2VjdC5cPC9QXD4NClw8UFw+Jm5ic3BcO1w8L1BcPg0KXDxQXD4mbmJzcFw7XDwvUFw+DQpcPFBcPiZuYnNwXDtcPC9QXD4NClw8UFw+XDxTVFJPTkdcPlw8SU1HIHN0eWxlPSJCT1JERVItUklHSFQ6IG1lZGl1bSBub25lXDsgQk9SREVSLVRPUDogbWVkaXVtIG5vbmVcOyBCT1JERVItTEVGVDogbWVkaXVtIG5vbmVcOyBCT1JERVItQk9UVE9NOiBtZWRpdW0gbm9uZSIgaHNwYWNlPTUgc3JjPSJodHRwOi8vd3d3LmV2ZXJ5b25ld2ViLmZyL1dBL0RhdGFGaWxlc2RiMC9oZW50YWkuanBnIiBhbGlnbj1sZWZ0XD5VbiBzaXRlIGhlbnRhw69cPC9TVFJPTkdcPlw8L1BcPlw8U1RST05HXD4NClw8UFw+XDxCUlw+XDwvU1RST05HXD5hZHJlc3NlIDogXDxBIGhyZWY9Imh0dHA6Ly9oZW50YWktZGJ6LnBvcHVsdXMuY2giXD5odHRwOi8vaGVudGFpLWRiei5wb3B1bHVzLmNoXDwvQVw+XDwvUFw+DQpcPFBcPlw8QlJcPlByw6lzZW50YXRpb24gOiBTaXRlIGRlIGhlbnRhw68gZGl2ZXJzLlw8L1BcPg0KXDxQXD4mbmJzcFw7XDwvUFw+DQpcPFBcPiZuYnNwXDtcPC9QXD4NClw8UFw+Jm5ic3BcO1w8L1BcPg0KXDxQXD4mbmJzcFw7XDwvUFw+DQpcPFBcPiZuYnNwXDtcPC9QXD4NClw8UFw+Jm5ic3BcO1w8L1BcPg0KXDxQXD4mbmJzcFw7XDwvUFw+DQpcPFBcPlw8U1RST05HXD5cPElNRyBzdHlsZT0iQk9SREVSLVJJR0hUOiBtZWRpdW0gbm9uZVw7IEJPUkRFUi1UT1A6IG1lZGl1bSBub25lXDsgQk9SREVSLUxFRlQ6IG1lZGl1bSBub25lXDsgQk9SREVSLUJPVFRPTTogbWVkaXVtIG5vbmUiIGhzcGFjZT01IHNyYz0iaHR0cDovL3d3dy5ldmVyeW9uZXdlYi5mci9XQS9EYXRhRmlsZXNkYjAva2FyYW9rYW5pbWUuanBnIiBhbGlnbj1sZWZ0XD5VbiBzaXRlIGRlIGthcmFva8OpXDwvU1RST05HXD5cPC9QXD5cPFNUUk9OR1w+XDwvU1RST05HXD4NClw8UFw+XDxCUlw+YWRyZXNzZSA6IFw8QSBocmVmPSJodHRwOi8vd3d3LkthcmFva2FuaW1lLmZyLmNjIlw+d3d3LkthcmFva2FuaW1lLmZyLmNjXDwvQVw+XDwvUFw+DQpcPFBcPlw8QlJcPlNpdGUgZW4gY29uc3RydWN0aW9uLlw8L1BcPg0KXDxQXD4mbmJzcFw7XDwvUFw+DQpcPFBcPiZuYnNwXDtcPC9QXD4NClw8UFw+Jm5ic3BcO1w8L1BcPg0KXDxQXD4mbmJzcFw7XDwvUFw+DQpcPFBcPiZuYnNwXDtcPC9QXD4NClw8UFw+Jm5ic3BcO1w8L1BcPg0KXDxQXD4mbmJzcFw7XDwvUFw+DQpcPFBcPlw8SU1HIHN0eWxlPSJCT1JERVItUklHSFQ6IG1lZGl1bSBub25lXDsgQk9SREVSLVRPUDogbWVkaXVtIG5vbmVcOyBCT1JERVItTEVGVDogbWVkaXVtIG5vbmVcOyBCT1JERVItQk9UVE9NOiBtZWRpdW0gbm9uZSIgaHNwYWNlPTUgc3JjPSJodHRwOi8vd3d3LmV2ZXJ5b25ld2ViLmZyL1dBL0RhdGFGaWxlc2RiMC9taW5pZG91amluLmpwZyIgYWxpZ249bGVmdFw+XDwvUFw+DQpcPFBcPlw8U1RST05HXD5VbiBzaXRlIGRlIERvdWppblw8L1NUUk9OR1w+XDwvUFw+DQpcPFBcPlw8U1RST05HXD5cPC9TVFJPTkdcPiZuYnNwXDtcPC9QXD4NClw8UFw+YWRyZXNzZSA6IFw8QSBocmVmPSJodHRwOi8vZG91amluZmFjdG9yeS53b3JkcHJlc3MuY29tIlw+aHR0cDovL2RvdWppbmZhY3Rvcnkud29yZHByZXNzLmNvbVw8L0FcPlw8L1BcPg0KXDxQXD4mbmJzcFw7XDwvUFw+DQpcPFBcPlJlY2N1ZWlsIGRlcyBkb3VqaW5zIHRyYWR1aXQgcGFyIGxhIHRlYW0gWsOpcm8uXDwvUFw+DQo7Pj47Oz47dDxwPGw8aW5uZXJodG1sOz47bDxcPElGUkFNRSBuYW1lPWdyYXRpc2RvbWFpbmVfcHJpbnQgbWFyZ2luV2lkdGg9MCBtYXJnaW5IZWlnaHQ9MCBzcmM9Imh0dHA6Ly9hZHMuZ3JhdGlzZG9tYWluZS5jb20vYWZmaWNoZS5waHA/aWRlbnQ9MzIzNDMwMzczOSZhbXBcO3Y9MiIgZnJhbWVCb3JkZXI9MCB3aWR0aD00Njggc2Nyb2xsaW5nPW5vIGhlaWdodD02MCBhbGxvd1RyYW5zcGFyZW5jeVw+XDwvSUZSQU1FXD4NCjs+Pjs7Pjt0PHA8bDx3aWR0aDtoZWlnaHQ7PjtsPDA7MDs+Pjs7Pjt0PEA8RmVybWVyIGxhIGZlbsOqdHJlOz47Oz47dDxwPGw8aW5uZXJodG1sOz47bDwgOz4+Ozs+O3Q8cDxsPGlubmVyaHRtbDs+O2w8ICBcPHNjcmlwdFw+IFRyZWVfS25vb3BwdW50SURHZXNlbGVjdGVlcmRPcHNsYWFuKCdLNDUyJylcOyBcPC9zY3JpcHRcPiBcPFNDUklQVCBMQU5HVUFHRT0namF2YXNjcmlwdCdcPiBJbnN0ZWxsaW5nZW5fQm9vbV9Ub2VwYXNzZW4oJyM5N2IxZmUnLCcgJywnMTIwcHgnLCcxNXB4JywnNSBweCcsJzEwMHB4JywnNXB4JywnTnVsbCcsJ051bGwnLCdzbGF0ZWdyYXkgMnB4IGRhc2hlZCcsJ3NsYXRlZ3JheSAycHggZGFzaGVkJywnNDAwcHgnLCdyZXBlYXQnLCdsZWZ0JywndG9wJylcOyBcPC9TQ1JJUFRcPlw8U0NSSVBUIExBTkdVQUdFPSdqYXZhc2NyaXB0J1w+IEluc3RlbGxpbmdlbl9JbmhvdWRfVG9lcGFzc2VuKCcjOTdiMWZlJywnaHR0cDovL3d3dy5ldmVyeW9uZXdlYi5mci93YS9EYXRhRmlsZXNkYjAvbDFnZzguZ2lmJywnMTBweCcsJzBweCcsJzBweCcsJ051bGwnLCdOdWxsJywnc2xhdGVncmF5IDJweCBkYXNoZWQnLCdzbGF0ZWdyYXkgMnB4IGRhc2hlZCcsJ25vLXJlcGVhdCcsJ3JpZ2h0JywnYm90dG9tJylcOyBcPC9TQ1JJUFRcPlw8U0NSSVBUIExBTkdVQUdFPSdqYXZhc2NyaXB0J1w+IEluc3RlbGxpbmdlbl9Ib29mZGluZ19Ub2VwYXNzZW4oJ3doaXRlJywnaHR0cDovL3d3dy5ldmVyeW9uZXdlYi5mci93YS9EYXRhRmlsZXNkYjAvZm9uZC5qcGcnLCcyNTNweCcsJ051bGwnLCdOdWxsJywnTnVsbCcsJ051bGwnLCdyZXBlYXQnLCdsZWZ0JywndG9wJylcOyBcPC9TQ1JJUFRcPlw8U0NSSVBUIExBTkdVQUdFPSdqYXZhc2NyaXB0J1w+IEluc3RlbGxpbmdlbl9Wb2V0X1RvZXBhc3NlbignYmxhY2snLCdodHRwOi8vd3d3LmV2ZXJ5b25ld2ViLmZyL3dhL0RhdGFGaWxlc2RiMC9mb25kYmFzLmpwZycsJzEyNXB4JywnTnVsbCcsJ051bGwnLCdOdWxsJywnTnVsbCcsJ3JlcGVhdCcsJ2xlZnQnLCd0b3AnKVw7IFw8L1NDUklQVFw+Oz4+Ozs+Oz4+O3Q8cDxsPGlubmVyaHRtbDs+O2w8XGU7Pj47Oz47Pj47PtteOjXglBcyNvdNngOAQNDO36Cv" type="hidden">
  <script language="javascript" type="text/javascript">
<!--
function __doPostBack(eventTarget, eventArgument) {
var theform;
if (window.navigator.appName.toLowerCase().indexOf("microsoft") > -1) {
theform = document.Form1;
}
else {
theform = document.forms["Form1"];
}
theform.__EVENTTARGET.value = eventTarget.split("$").join(":");
theform.__EVENTARGUMENT.value = eventArgument;
theform.submit();
}
// -->
  </script>
  <span id="PopWijzigmode" style="position: absolute; visibility: hidden; z-index: 111;">
  <table id="PopWijzigmodeg1" class="MenuGroup" onmouseout="aspnm_groupMsOut('PopWijzigmodeg1', null, null, 0, event);" border="0" cellpadding="0" cellspacing="0">

    <tbody>
      <tr>

        <td>
        <table id="PopWijzigmodei1" onmousedown="" onclick="aspnm_hideAllGroups();WijzigBis();" style="cursor: default;" border="0" cellpadding="0" cellspacing="0" width="100%">

          <tbody>
            <tr class="MenuItem" onmouseover="this.className='MenuItemOver';" onmouseout="this.className='MenuItem';">

              <td style="padding: 0pt;" width="23"><img id="PopWijzigmode_icon_1" src="../images/transparant.gif" border="0" width="23"></td>
              <td style="border-style: none;" class="MenuItem" onmouseover="this.className='MenuItemOver';" onmouseout="this.className='MenuItem';">Modifier le site</td>

            </tr>

          </tbody>
        </table>
        </td>

      </tr>

    </tbody>
  </table>
  </span><span>
  <table style="position: absolute; top: 0px; left: 0px; visibility: hidden;">
    <tbody>
      <tr>
        <td><img src="../images/transparant.gif" height="0" width="0"></td>
      </tr>
    </tbody>
  </table>
  <script language="javascript">
<!-------------------------------------------------------------------------------------------------
//
// ASP.NET Menu client-side script for Netscape Navigator 6+. // Copyright 2002-2003 CYBERAKT INC. All Rights Reserved.
// Version 1.1
//
//------------------------------------------------------------------------------------------------>
// Global variables -------------------------------------------------------------------------------
var aspnm_expandedObjects = new Array(); // array of expanded groups var aspnm_expandCount = 0; // expanded group count // Event handlers ---------------------------------------------------------------------------------
// Positions the subgroup for the given item, and initiates its expansion function aspnm_itemMsOver(item, subGroup, expandDirection, horAdj, verAdj, expandDelay) {
var newLeft = 0; var newTop = 0; var oItem = document.getElementById(item); var oSubGroup = document.getElementById(subGroup); switch (expandDirection)
{
case 'belowleft': newLeft = aspnm_pageX(oItem); newTop = aspnm_pageY(oItem) + oItem.offsetHeight; break; case 'belowright': newLeft = aspnm_pageX(oItem) + oItem.offsetWidth - oSubGroup.offsetWidth; newTop = aspnm_pageY(oItem) + oItem.offsetHeight; break; case 'aboveleft': newLeft = aspnm_pageX(oItem); newTop = aspnm_pageY(oItem) - oSubGroup.offsetHeight; break; case 'aboveright': newLeft = aspnm_pageX(oItem) + oItem.offsetWidth - oSubGroup.offsetWidth; newTop = aspnm_pageY(oItem) - oSubGroup.offsetHeight; break; case 'rightdown': newLeft = aspnm_pageX(oItem) + oItem.offsetWidth; newTop = aspnm_pageY(oItem); break; case 'rightup': newLeft = aspnm_pageX(oItem) + oItem.offsetWidth; newTop = aspnm_pageY(oItem) - oSubGroup.offsetHeight + oItem.offsetHeight; break; case 'leftdown': newLeft = aspnm_pageX(oItem) - oSubGroup.offsetWidth; newTop = aspnm_pageY(oItem); break; case 'leftup': newLeft = aspnm_pageX(oItem) - oSubGroup.offsetWidth; newTop = aspnm_pageY(oItem) - oSubGroup.offsetHeight + oItem.offsetHeight; break; default: newLeft = aspnm_pageX(oItem) + oItem.offsetWidth; newTop = aspnm_pageY(oItem); break; } newLeft += horAdj; if (verAdj < 0) newTop += verAdj; if (!(navigator.userAgent.indexOf('Netscape6') > 0)) {
var cs = window.getComputedStyle(oSubGroup, ''); var topCorrection = parseInt(cs.getPropertyValue('border-top-width').replace('px', '')); var leftCorrection = parseInt(cs.getPropertyValue('border-left-width').replace('px', '')); newLeft += topCorrection; newTop += topCorrection; }
oSubGroup.style.left = newLeft + 'px'; oSubGroup.style.top = newTop + 'px'; aspnm_expand(subGroup); }
// If the mouse pointer is not over the given item or its subGroup, // this function initiates the collapse of the subGroup. function aspnm_itemMsOut(item, group, subGroup, expandDelay, evt)
{
if (!(aspnm_isMouseOnObject(subGroup, evt)))
aspnm_collapse(subGroup);
}
// Not needed if expand delay is not implemented. function aspnm_groupMsOver(group)
{
}
// If the mouse pointer is on the given group, its subGroup, or its parent item this function // does nothing. If the pointer is over the parent group, but outside the parent item, then it
// initiates the collapse of itself and its subGroup (if any). // Otherwise, the pointer is outside the menu structure and it initiates the collapse of all // expanded objects. function aspnm_groupMsOut(group, parentItem, parentGroup, expandDelay, evt)
{ var subGroup = aspnm_expandedObjects[aspnm_expandCount]; if (subGroup == group) subGroup = null; if (aspnm_isMouseOnObject(group, evt) || aspnm_isMouseOnObject(subGroup, evt) || aspnm_isMouseOnObject(parentItem, evt))
; //alert('do nothing'); // do nothing else if (aspnm_isMouseOnObject(parentGroup, evt))
{
aspnm_collapse(group); aspnm_collapse(subGroup); }
else
{
aspnm_collapseAll(); }
}
// Core functions ---------------------------------------------------------------------------------
// Expands the given menu group function aspnm_expand(group)
{
var oGroup = document.getElementById(group); if (oGroup.style.visibility != 'visible')
{
aspnm_hideSelectElements(group); oGroup.style.visibility = 'visible'; aspnm_expandCount++; aspnm_expandedObjects[aspnm_expandCount] = group; } }
// Collapses the given menu group function aspnm_collapse(group)
{
var oGroup = document.getElementById(group); if (group != null && group) if (oGroup.style.visibility != 'hidden')
{
oGroup.style.visibility = 'hidden'; aspnm_expandCount--; } if (!(aspnm_contextUp) && aspnm_expandCount == 0) aspnm_restoreSelectElements(); }
// Collapses all expanded menu groups function aspnm_collapseAll()
{
for (var i = aspnm_expandCount; i >= 1; i--)
{
var oGroup = document.getElementById(aspnm_expandedObjects[i]); oGroup.style.visibility = 'hidden';
}
aspnm_expandCount = 0; if (!(aspnm_contextUp) && aspnm_expandCount == 0) aspnm_restoreSelectElements(); }
// Hides all menu groups prior to calling ClientSideOnClick event handler
function aspnm_hideAllGroups()
{
aspnm_collapseAll(); }
// Utilities --------------------------------------------------------------------------------------
// Determines whether the mouse pointer is currently over the given object function aspnm_isMouseOnObject(objName, evt)
{
if (objName != null)
{
var obj = document.getElementById(objName); var objLeft = aspnm_pageX(obj) - 1; var objTop = aspnm_pageY(obj) - 1; var objRight = objLeft + obj.offsetWidth + 1; var objBottom = objTop + obj.offsetHeight + 1;
if ((evt.pageX > objLeft) && (evt.pageX < objRight) && (evt.pageY > objTop) && (evt.pageY < objBottom))
return true; else return false; }
else
return false; }
// Calculates the absolute page x coordinate of any element
function aspnm_pageX(element)
{
var x = 0;
do {
if (element.style.position == 'absolute') {
return x + element.offsetLeft; }
else
{
x += element.offsetLeft;
if (element.offsetParent) if (element.offsetParent.tagName == 'TABLE') if (parseInt(element.offsetParent.border) > 0)
{
x += 1; }
}
}
while ((element = element.offsetParent));
return x; }
// Calculates the absolute page y coordinate of any element
function aspnm_pageY(element)
{
var y = 0;
do {
if (element.style.position == 'absolute') {
return y + element.offsetTop; }
else
{
y += element.offsetTop;
if (element.offsetParent) if (element.offsetParent.tagName == 'TABLE') if (parseInt(element.offsetParent.border) > 0)
{
y += 1; }
}
}
while ((element = element.offsetParent));
return y; }
// Hides HTML select elements that are overlapping the given menu group function aspnm_hideSelectElements(group)
{
if (document.getElementsByTagName) {
var arrElements = document.getElementsByTagName('select'); if (aspnm_hideSelectElems) for (var i = 0; i < arrElements.length; i++) if (aspnm_objectsOverlapping(document.getElementById(group), arrElements[i]))
arrElements[i].style.visibility = 'hidden'; }
}
// Whether the given objects are overlapping function aspnm_objectsOverlapping(obj1, obj2)
{
var result = true; var obj1Left = aspnm_pageX(obj1); var obj1Top = aspnm_pageY(obj1); var obj1Right = obj1Left + obj1.offsetWidth; var obj1Bottom = obj1Top + obj1.offsetHeight;
var obj2Left = aspnm_pageX(obj2); var obj2Top = aspnm_pageY(obj2); var obj2Right = obj2Left + obj2.offsetWidth; var obj2Bottom = obj2Top + obj2.offsetHeight;
if (obj1Right <= obj2Left || obj1Bottom <= obj2Top || obj1Left >= obj2Right || obj1Top >= obj2Bottom) result = false; return result; }
// Restores all HTML select elements on the page function aspnm_restoreSelectElements()
{
if (document.getElementsByTagName) {
var arrElements = document.getElementsByTagName('select'); if (aspnm_hideSelectElems) for (var i = 0; i < arrElements.length; i++) arrElements[i].style.visibility = 'visible'; }
}
// Positions the menu based on the alignment, offsetX, and offsetY properties
function aspnm_positionMenu(menu, alignment, offsetX, offsetY)
{
if (aspnm_dragging) return false; var scrlLeft = window.pageXOffset; var scrlTop = window.pageYOffset;
var clientW = window.innerWidth; var clientH = window.innerHeight; var menuWidth = menu.offsetWidth; var menuHeight = menu.offsetHeight; var newLeft = 0; var newTop = 0; switch (alignment)
{
case 'topleft': newLeft = scrlLeft;
newTop = scrlTop;
break; case 'topmiddle': newLeft = (clientW - menuWidth) / 2 + scrlLeft;
newTop = scrlTop;
break; case 'topright': newLeft = clientW + scrlLeft - menuWidth;
newTop = scrlTop;
break; case 'bottomleft': newLeft = scrlLeft;
newTop = clientH + scrlTop - menuHeight;
break; case 'bottommiddle': newLeft = (clientW - menuWidth) / 2 + scrlLeft;
newTop = clientH + scrlTop - menuHeight;
break; case 'bottomright': newLeft = clientW + scrlLeft - menuWidth;
newTop = clientH + scrlTop - menuHeight;
break; default: newLeft = clientW + scrlLeft;
newTop = clientH + scrlTop;
break; } newLeft += offsetX; newTop += offsetY; menu.style.left = newLeft; menu.style.top = newTop; }
  </script>
  <script language="javascript">
var aspnm_hideSelectElems = true; // whether to hide HTML select elements var aspnm_overlayWindowed = false; // whether to overlay windowed controls
var aspnm_dragging = false; // whether the menu is being moved var aspnm_contextUp = false; // whether a context menu is up
  </script>
  <script language="javascript">var aspnm_mainContextMenu = document.getElementById('PopWijzigmode'); var aspnm_activeContextMenu; var aspnm_contextMenus = new Array(); var aspnm_contextControls = new Array(); var aspnm_contextMenuCount = 0; document.onmouseup = function (evt)
{
if (evt.button == 2)
{
var contextLeft; var contextTop; var contextMenu = aspnm_getContextMenu(evt); if (contextMenu == null) return false; contextLeft = evt.pageX; if (contextLeft + contextMenu.offsetWidth > window.innerWidth) contextLeft -= contextMenu.offsetWidth; contextTop = evt.pageY; if (contextTop + contextMenu.offsetHeight > window.innerHeight) contextTop -= contextMenu.offsetHeight; contextMenu.style.left = contextLeft; contextMenu.style.top = contextTop; aspnm_hideSelectElements(contextMenu.id); if (aspnm_activeContextMenu != null) aspnm_hideContext(); contextMenu.style.visibility = 'visible'; aspnm_activeContextMenu = contextMenu; aspnm_contextUp = true; }
else
aspnm_hideContext();
}
function aspnm_getContextMenu(evt)
{
var contextMenu = null; for (var i = 0; i < aspnm_contextMenus.length; i++)
{
if (aspnm_isMouseOnObject(aspnm_contextControls[i], evt)) contextMenu = document.getElementById(aspnm_contextMenus[i]); }
if (contextMenu == null) contextMenu = aspnm_mainContextMenu; return contextMenu; }
function aspnm_hideContext()
{
if(aspnm_contextUp)
{
aspnm_activeContextMenu.style.visibility = 'hidden'; aspnm_restoreSelectElements(); aspnm_contextUp = false; }
}
document.oncontextmenu = function (evt)
{
return false; }
  </script></span>
  <table cellpadding="0" cellspacing="0" height="100%" width="100%">

    <tbody>
      <tr>

<!-- Hoofding -->
        <td id="Hoofding" colspan="2" name="Hoofding" align="left" valign="top" width="100%"><font class="BodyClass">
        <div id="lokaalScriptHoofding" style="z-index: -1;">
        <center><img style="border: medium none ;" src="http://www.everyoneweb.fr/WA/DataFilesdb0/bannieredb0company5.jpg" hspace="5"></center>

        </div>

        </font><iframe id="Doorlink" frameborder="0" height="0" scrolling="no" width="0">
        </iframe>
        </td>

      </tr>

      <tr>

<!-- Navigatie menu Boom menu -->
        <td id="Boom" name="Boom" height="100%" valign="top">
        <table border="0" cellpadding="0" cellspacing="0">

          <tbody>
            <tr>

              <td><img id="Trans_Image_Boom_Linkermarge" src="../Images/transparant.gif" name="Trans_Image_Boom_Linkermarge" height="1"></td>

              <td>
              <div id="lokaalScriptBoom" style="z-index: -1; overflow: auto; height: 400px;"> <!-- ASP TreeView component version 2.0.0.4 http://www.obout.com -->
              <link rel="stylesheet" href="../tree/NoIcoon/obout_treeview2.css">

              <script language="javascript">var ob_style="../tree/NoIcoon";</script>
              <script language="JavaScript" type="text/javascript" src="../tree/obout_treeview.js"></script>
              <div id="tree1" name="tree1" class="ob_tree" style="">
              <div class="ob_di2">
              <table border="0" cellpadding="0" cellspacing="0">
                <tbody>
                  <tr>
                    <td class="ob_t6" style="background-image: url(../tree/NoIcoon/vertical.gif);"><img alt="" src="../tree/NoIcoon/hr.gif"></td>
                    <td id="K452" onclick="ob_t22(this)" class="ob_t2"> 
                    <script> addStyleDefIE('.SMParentK452','background-color:none;font-family:Verdana;font-size:8pt;font-weight:normal;font-style:normal;color:black;text-decoration:none;padding:3px;cursor:pointer'); addStyleDefIE('.SMParentOverK452','background-color:none;font-family:Verdana;font-size:8pt;font-weight:normal;font-style:normal;color:black;text-decoration:none;padding:3px;cursor:pointer'); addStyleDefIE('.SMParentSelectedK452','background-color:#ccddee;font-family:Verdana;font-size:8pt;font-weight:normal;font-style:normal;color:black;text-decoration:none;padding:3px;border:0px solid;cursor:pointer'); </script> 
                    <table id="K452_tree" class="SMParentK452" onclick='this.className = "SMParentSelectedK452"; ob_t23(this); Tree_KnooppuntIDGeselecteerdOpslaan("K452");' onmouseover=' this.className = "SMParentOverK452";' onmouseout=' this.className = "SMParentK452";' cellpadding="0" cellspacing="0" height="100%" width="100%">
                      <tbody>
                        <tr>
                          <td>Home</td>
                        </tr>
                      </tbody>
                    </table>
                    </td>
                  </tr>
                </tbody>
              </table>
              <table border="0" cellpadding="0" cellspacing="0">
                <tbody>
                  <tr>
                    <td class="ob_t6" style="background-image: url(../tree/NoIcoon/vertical.gif);"><img alt="" src="../tree/NoIcoon/hr.gif"></td>
                    <td id="K453" onclick="ob_t22(this)" class="ob_t2"> 
                    <script> addStyleDefIE('.SMParentK453','background-color:none;font-family:Verdana;font-size:8pt;font-weight:normal;font-style:normal;color:black;text-decoration:none;padding:3px;cursor:pointer'); addStyleDefIE('.SMParentOverK453','background-color:none;font-family:Verdana;font-size:8pt;font-weight:normal;font-style:normal;color:black;text-decoration:none;padding:3px;cursor:pointer'); addStyleDefIE('.SMParentSelectedK453','background-color:#ccddee;font-family:Verdana;font-size:8pt;font-weight:normal;font-style:normal;color:black;text-decoration:none;padding:3px;border:0px solid;cursor:pointer'); </script> 
                    <table id="K453_tree" class="SMParentK453" onclick='this.className = "SMParentSelectedK453"; ob_t23(this); Tree_KnooppuntIDGeselecteerdOpslaan("K453");' onmouseover=' this.className = "SMParentOverK453";' onmouseout=' this.className = "SMParentK453";' cellpadding="0" cellspacing="0" height="100%" width="100%">
                      <tbody>
                        <tr>
                          <td>Partenariat</td>
                        </tr>
                      </tbody>
                    </table>
                    </td>
                  </tr>
                </tbody>
              </table>
              <table border="0" cellpadding="0" cellspacing="0">
                <tbody>
                  <tr>
                    <td class="ob_t6" style="background-image: url(../tree/NoIcoon/vertical.gif);"><img alt="" src="../tree/NoIcoon/hr.gif"></td>
                    <td id="K459" onclick="ob_t22(this)" class="ob_t2"> 
                    <script> addStyleDefIE('.SMParentK459','background-color:none;font-family:Verdana;font-size:8pt;font-weight:normal;font-style:normal;color:black;text-decoration:none;padding:3px;cursor:pointer'); addStyleDefIE('.SMParentOverK459','background-color:none;font-family:Verdana;font-size:8pt;font-weight:normal;font-style:normal;color:black;text-decoration:none;padding:3px;cursor:pointer'); addStyleDefIE('.SMParentSelectedK459','background-color:#ccddee;font-family:Verdana;font-size:8pt;font-weight:normal;font-style:normal;color:black;text-decoration:none;padding:3px;border:0px solid;cursor:pointer'); </script> 
                    <table id="K459_tree" class="SMParentK459" onclick='this.className = "SMParentSelectedK459"; ob_t23(this); Tree_KnooppuntIDGeselecteerdOpslaan("K459");' onmouseover=' this.className = "SMParentOverK459";' onmouseout=' this.className = "SMParentK459";' cellpadding="0" cellspacing="0" height="100%" width="100%">
                      <tbody>
                        <tr>
                          <td>Recrutement</td>
                        </tr>
                      </tbody>
                    </table>
                    </td>
                  </tr>
                </tbody>
              </table>
              <table border="0" cellpadding="0" cellspacing="0">
                <tbody>
                  <tr>
                    <td class="ob_t6" style="background-image: url(../tree/NoIcoon/vertical.gif);"><img alt="" src="../tree/NoIcoon/plusik.gif" onclick="ob_t21(this, '')"></td>
                    <td id="K455" onclick="ob_t22(this)" class="ob_t2"> 
                    <script> addStyleDefIE('.SMParentK455','background-color:none;font-family:Verdana;font-size:8pt;font-weight:normal;font-style:normal;color:black;text-decoration:none;padding:3px;cursor:pointer'); addStyleDefIE('.SMParentOverK455','background-color:none;font-family:Verdana;font-size:8pt;font-weight:normal;font-style:normal;color:black;text-decoration:none;padding:3px;cursor:pointer'); addStyleDefIE('.SMParentSelectedK455','background-color:#ccddee;font-family:Verdana;font-size:8pt;font-weight:normal;font-style:normal;color:black;text-decoration:none;padding:3px;border:0px solid;cursor:pointer'); </script> 
                    <table id="K455_tree" class="SMParentK455" onclick='this.className = "SMParentSelectedK455"; ob_t23(this); Tree_KnooppuntIDGeselecteerdOpslaan("K455");' onmouseover=' this.className = "SMParentOverK455";' onmouseout=' this.className = "SMParentK455";' cellpadding="0" cellspacing="0" height="100%" width="100%">
                      <tbody>
                        <tr>
                          <td>Db0</td>
                        </tr>
                      </tbody>
                    </table>
                    </td>
                  </tr>
                </tbody>
              </table>
              <table style="display: none;" border="0" cellpadding="0" cellspacing="0">
                <tbody>
                  <tr>
                    <td style="background-image: url(../tree/NoIcoon/vertical.gif);">
                    <div class="ob_d5"></div>
                    </td>
                    <td class="ob_t5">
                    <table border="0" cellpadding="0" cellspacing="0">
                      <tbody>
                        <tr>
                          <td class="ob_t6" style="background-image: url(../tree/NoIcoon/vertical.gif);"><img alt="" src="../tree/NoIcoon/hr.gif"></td>
                          <td id="K456" onclick="ob_t22(this)" class="ob_t2"> 
                          <script> addStyleDefIE('.SMChildK456','background-color:none;font-family:Verdana;font-size:8pt;font-weight:normal;font-style:normal;color:black;text-decoration:none;padding:3px'); addStyleDefIE('.SMChildOverK456','background-color:none;font-family:Verdana;font-size:8pt;font-weight:normal;font-style:normal;color:black;text-decoration:none;padding:3px;cursor:pointer'); addStyleDefIE('.SMChildSelectedK456','background-color:#ccddee;font-family:Verdana;font-size:8pt;font-weight:normal;font-style:normal;color:black;text-decoration:none;padding:3px;border:0px solid;cursor:pointer'); </script> 
                          <table id="K456_tree" class="SMChildK456" onclick='this.className = "SMChildSelectedK456"; ob_t23(this); Tree_KnooppuntSubIDGeselecteerdOpslaan("K456");' onmouseover=' this.className = "SMChildOverK456";' onmouseout=' this.className = "SMChildK456";'>
                            <tbody>
                              <tr>
                                <td>CV</td>
                              </tr>
                            </tbody>
                          </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <table border="0" cellpadding="0" cellspacing="0">
                      <tbody>
                        <tr>
                          <td class="ob_t6" style=""><img alt="" src="../tree/NoIcoon/hr_l.gif"></td>
                          <td id="K457" onclick="ob_t22(this)" class="ob_t2"> 
                          <script> addStyleDefIE('.SMChildK457','background-color:none;font-family:Verdana;font-size:8pt;font-weight:normal;font-style:normal;color:black;text-decoration:none;padding:3px'); addStyleDefIE('.SMChildOverK457','background-color:none;font-family:Verdana;font-size:8pt;font-weight:normal;font-style:normal;color:black;text-decoration:none;padding:3px;cursor:pointer'); addStyleDefIE('.SMChildSelectedK457','background-color:#ccddee;font-family:Verdana;font-size:8pt;font-weight:normal;font-style:normal;color:black;text-decoration:none;padding:3px;border:0px solid;cursor:pointer'); </script> 
                          <table id="K457_tree" class="SMChildK457" onclick='this.className = "SMChildSelectedK457"; ob_t23(this); Tree_KnooppuntSubIDGeselecteerdOpslaan("K457");' onmouseover=' this.className = "SMChildOverK457";' onmouseout=' this.className = "SMChildK457";'>
                            <tbody>
                              <tr>
                                <td>Book photos</td>
                              </tr>
                            </tbody>
                          </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    </td>
                  </tr>
                </tbody>
              </table>
              <table border="0" cellpadding="0" cellspacing="0">
                <tbody>
                  <tr>
                    <td class="ob_t6" style=""><img alt="" src="../tree/NoIcoon/hr_l.gif"></td>
                    <td id="K458" onclick="ob_t22(this)" class="ob_t2"> 
                    <script> addStyleDefIE('.SMParentK458','background-color:none;font-family:Verdana;font-size:8pt;font-weight:normal;font-style:normal;color:black;text-decoration:none;padding:3px;cursor:pointer'); addStyleDefIE('.SMParentOverK458','background-color:none;font-family:Verdana;font-size:8pt;font-weight:normal;font-style:normal;color:black;text-decoration:none;padding:3px;cursor:pointer'); addStyleDefIE('.SMParentSelectedK458','background-color:#ccddee;font-family:Verdana;font-size:8pt;font-weight:normal;font-style:normal;color:black;text-decoration:none;padding:3px;border:0px solid;cursor:pointer'); </script> 
                    <table id="K458_tree" class="SMParentK458" onclick='this.className = "SMParentSelectedK458"; ob_t23(this); Tree_KnooppuntIDGeselecteerdOpslaan("K458");' onmouseover=' this.className = "SMParentOverK458";' onmouseout=' this.className = "SMParentK458";' cellpadding="0" cellspacing="0" height="100%" width="100%">
                      <tbody>
                        <tr>
                          <td>Divers</td>
                        </tr>
                      </tbody>
                    </table>
                    </td>
                  </tr>
                </tbody>
              </table>
              </div>
              </div>

<!-- ASP TreeView component version 2.0.0.4 http://www.obout.com -->
              </div>

              <br>

              <div id="lokaalScriptBoom_beeldplaatje" style="z-index: -1;"> </div>

              <br>

              </td>

              <td><img id="Trans_Image_Boom_Rechtermarge" src="../Images/transparant.gif" name="Trans_Image_Boom_Rechtermarge" height="1"></td>

            </tr>

            <tr>

              <td></td>

              <td><font class="BodyClass">
              <div id="lokaalScriptBoomTekst" style="z-index: -1;">
              </div>

              </font>
              </td>

              <td></td>

            </tr>

          </tbody>
        </table>

        <img id="Trans_Image_Boom" src="../Images/transparant.gif" name="Trans_Image_Boom" height="1">
        </td>

<!-- Inhoud -->
        <td id="Inhoud" name="Inhoud" valign="top" width="100%">
        <table border="0" cellpadding="0" cellspacing="0" height="100%">

          <tbody>
            <tr>

              <td></td>

              <td align="left">
              <div id="Advertentie" align="left"></div>

              </td>

              <td></td>

            </tr>

            <tr height="100%" valign="top">

              <td><img id="Trans_Image_Inhoud_Linkermarge" src="../Images/transparant.gif" name="Trans_Image_Inhoud_Linkermarge" height="1"></td>

              <td><font class="BodyClass">
              </font>
              <div id="lokaalScriptInhoud" style="z-index: -1;">
              <p><font class="BodyClass"><strong><img style="border: medium none ;" src="http://www.everyoneweb.fr/WA/DataFilesdb0/zero.jpg" align="left" hspace="5">Une team de fansub<br>
              </strong>adresse : <a href="http://www.zero.fr.cc/">www.zero.fr.cc</a></font></p>

              <p><font class="BodyClass"><br>
Pr&eacute;sentation : C'est le projet le plus gros et le plus important de la db0 company.<br>
Z&eacute;ro est une team fran&ccedil;aise qui se charge de traduire les animes de tout type. <br>
Nous privil&eacute;gions la qualit&eacute; &agrave; la quantit&eacute;. <br>
Nous releases sont disponibles en Megaupload, Streaming et Torrent via le site web. <br>
Notre team recrute actuellement, n'h&eacute;sitez pas &agrave; vous proposer. <br>
Vos commentaires sur nos releases sont les bienvenues, via le forum du site web.</font></p>

              <p><font class="BodyClass">&nbsp;</font></p>

              <p><font class="BodyClass">&nbsp;</font></p>

              <p><font class="BodyClass"><strong></strong>&nbsp;</font></p>

              <p><font class="BodyClass"><strong><img style="border: medium none ;" src="http://www.everyoneweb.fr/WA/DataFilesdb0/db0.jpg" align="left" hspace="5">Un forum</strong></font></p>

              <p><font class="BodyClass"><strong><br>
              </strong>adresse : <a href="http://db0.xooit.fr">http://db0.xooit.fr</a></font></p>

              <p><font class="BodyClass"><br>
Pr&eacute;sentation : forum de discussion.<br>
&nbsp;Discussions et sondages sur tout les mangas existants.<br>
&nbsp;Concours divers<br>
&nbsp;Plateforme RPG<br>
&nbsp;ect.</font></p>

              <p><font class="BodyClass">&nbsp;</font></p>

              <p><font class="BodyClass">&nbsp;</font></p>

              <p><font class="BodyClass">&nbsp;</font></p>

              <p><font class="BodyClass"><strong><img style="border: medium none ;" src="http://www.everyoneweb.fr/WA/DataFilesdb0/hentai.jpg" align="left" hspace="5">Un site henta&iuml;</strong></font></p>
              <font class="BodyClass"><strong>
              </strong></font>
              <p><font class="BodyClass"><strong><br>
              </strong>adresse : <a href="http://hentai-dbz.populus.ch">http://hentai-dbz.populus.ch</a></font></p>

              <p><font class="BodyClass"><br>
Pr&eacute;sentation : Site de henta&iuml; divers.</font></p>

              <p><font class="BodyClass">&nbsp;</font></p>

              <p><font class="BodyClass">&nbsp;</font></p>

              <p><font class="BodyClass">&nbsp;</font></p>

              <p><font class="BodyClass">&nbsp;</font></p>

              <p><font class="BodyClass">&nbsp;</font></p>

              <p><font class="BodyClass">&nbsp;</font></p>

              <p><font class="BodyClass">&nbsp;</font></p>

              <p><font class="BodyClass"><strong><img style="border: medium none ;" src="http://www.everyoneweb.fr/WA/DataFilesdb0/karaokanime.jpg" align="left" hspace="5">Un site de karaok&eacute;</strong></font></p>
              <font class="BodyClass"><strong></strong>
              </font>
              <p><font class="BodyClass"><br>
adresse : <a href="http://www.Karaokanime.fr.cc">www.Karaokanime.fr.cc</a></font></p>

              <p><font class="BodyClass"><br>
Site en construction.</font></p>

              <p><font class="BodyClass">&nbsp;</font></p>

              <p><font class="BodyClass">&nbsp;</font></p>

              <p><font class="BodyClass">&nbsp;</font></p>

              <p><font class="BodyClass">&nbsp;</font></p>

              <p><font class="BodyClass">&nbsp;</font></p>

              <p><font class="BodyClass">&nbsp;</font></p>

              <p><font class="BodyClass">&nbsp;</font></p>

              <p><font class="BodyClass"><img style="border: medium none ;" src="http://www.everyoneweb.fr/WA/DataFilesdb0/minidoujin.jpg" align="left" hspace="5"></font></p>

              <p><font class="BodyClass"><strong>Un site de Doujin</strong></font></p>

              <p><font class="BodyClass"><strong></strong>&nbsp;</font></p>

              <p><font class="BodyClass">adresse : <a href="http://doujinfactory.wordpress.com">http://doujinfactory.wordpress.com</a></font></p>

              <p><font class="BodyClass">&nbsp;</font></p>

              <p><font class="BodyClass">Reccueil des doujins traduit par la team Z&eacute;ro.</font></p>

              </div>


              </td>

              <td>
              <img id="Trans_Image_Inhoud_Rechtermarge" src="../Images/transparant.gif" name="Trans_Image_Inhoud_Rechtermarge" height="1"></td>

            </tr>

          </tbody>
        </table>

        <img id="Trans_Image_Inhoud" src="../Images/transparant.gif" name="Trans_Image_Inhoud" height="1">
        </td>

      </tr>

      <tr>

<!-- Voet -->
        <td class="Kader_stippellijn_Voet" id="Voet" name="Voet" colspan="2" align="left" valign="top" width="100%">
        <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">

          <tbody>
            <tr>

              <td colspan="2" height="100%"><font class="BodyClass">
              <div id="lokaalScriptVoet" style="z-index: -1;"><iframe name="gratisdomaine_print" marginwidth="0" marginheight="0" src="http://ads.gratisdomaine.com/affiche.php?ident=3234303739&amp;v=2" allowtransparency="" frameborder="0" height="60" scrolling="no" width="468"></iframe>
              </div>

              </font><iframe id="DoorlinkVoet" frameborder="0" height="0" scrolling="no" width="0">
              </iframe>
              </td>

            </tr>

            <tr>

              <td><img src="../Images/transparant.gif" height="1" width="50"></td>

              <td>
              <div id="Advertentie_Beneden"></div>

              </td>

            </tr>

          </tbody>
        </table>

        </td>

      </tr>

    </tbody>
  </table>

<!-- Lokale variabel voor het bijhouden van het geselecteerde knooppunt --><input name="KnooppuntIDGeselecteerd" id="KnooppuntIDGeselecteerd" value="K452" type="hidden">
<!-- Lokale variabel voor het bijhouden van het geselecteerde knooppunt (subknooppunt)--><input name="KnooppuntSubIDGeselecteerd" id="KnooppuntSubIDGeselecteerd" type="hidden"> <!-- Knop te gebruiken bij het wijzigen van een knooppuntnaam -->
<!-- Knop te gebruiken bij het wijzigen van een knooppuntnaam -->
<!-- Veldnaam te gebruiken bij het wijzigen van een knooppuntnaam --><input name="KnooppuntNaam" id="KnooppuntNaam" style="width: 261px; height: 22px;" size="38" type="hidden"> <!-- Veldnaam te gebruiken bij het wijzigen van een knooppuntnaam --><input name="OudeKnooppuntNaam" id="OudeKnooppuntNaam" style="width: 261px; height: 22px;" size="38" type="hidden"> <!-- Lokale variabel voor het bijhouden van het geselecteerde boom --><input name="BoomIDGeselecteerd" id="BoomIDGeselecteerd" value="B1" type="hidden">
<!-- Lokale variabel voor het bijhouden van het geselecteerde Web (klant) --><input name="WebIDGeselecteerd" id="WebIDGeselecteerd" value="db0" type="hidden">
<!-- Lokale variabel voor het bijhouden van het webadres naar Basis --><input name="WebAdresBasis" id="WebAdresBasis" value="http://www.everyoneweb.fr/" type="hidden">
<!-- Lokale variabel voor het bijhouden van data formulier --><input name="strFormulier" id="strFormulier" type="hidden">
<!-- Lokale variabel voor het bijhouden van E-Mailadres voor verzendknop --><input name="strEmailAdres" id="strEmailAdres" type="hidden">
<!-- Lokale variabel voor het bijhouden van DistrID --><input name="DistrID" id="DistrID" value="False" type="hidden">
<!-- Lokale variabel voor het bijhouden van LG --><input name="LG" id="LG" type="hidden">

<!-- Progress Bar -->
  <table id="ProgressTable" style="z-index: 110; visibility: hidden;" width="100%">

    <tbody>
      <tr>

        <td>
        <div id="barText" style="z-index: 102; left: 15%; position: absolute; top: 23%; background-color: rgb(255, 204, 51);"></div>

        <div id="bar" style="z-index: 103; left: 15.09%; position: absolute; top: 30.33%; background-color: rgb(51, 102, 255);">&nbsp;&nbsp;</div>

        </td>

      </tr>

    </tbody>
  </table>

<!-- Einde Progress Bar --><iframe id="InhoudKnooppunt" style="width: 0px; height: 0px;"></iframe>
  <script language="javascript">
// Functie wordt opgeroepen wanneer een knooppunt in het navigatie slidemenu wordt aangeklikt.
// Het geselecteerde knooppuntID wordt bewaard in een (server) variabel.
function KnooppuntIDGeselecteerdOpslaan(knooppunt)
{
var vorigKnooppunt;
var vorigKnooppuntSubValue;
var vorigKnooppuntValue;
var HetKnooppunt = document.Form1;
// om vorig geselecteerd submenuknop terug goede class te geven if (!(HetKnooppunt.KnooppuntSubIDGeselecteerd.value == ""))
{ KnooppuntSlideChildCLass( HetKnooppunt.KnooppuntSubIDGeselecteerd.value);
HetKnooppunt.KnooppuntSubIDGeselecteerd.value = "";
}
// om vorig geselecteerd menuknop terug goede class te geven
if (!(HetKnooppunt.KnooppuntIDGeselecteerd.value == ""))
{ KnooppuntSlideParentCLass(HetKnooppunt.KnooppuntIDGeselecteerd.value);
} // huidig knooppunt instellen
if (document.getElementById('objSlideMenu_' + knooppunt ))
{
document.getElementById('objSlideMenu_' + knooppunt ).className = "SMParentSelected" + knooppunt; document.getElementById('objSlideMenu_' + knooppunt).onmouseout = function () {this.className = "SMParentSelected" + knooppunt ;}
document.getElementById('objSlideMenu_' + knooppunt).onmouseover = function () {this.className = "SMParentSelected" + knooppunt ;} }
HetKnooppunt.KnooppuntIDGeselecteerd.value = knooppunt;
UpdateKnooppuntInhoud(knooppunt);
}
// Functie wordt opgeroepen wanneer een Subknooppunt in het (slidemenu) navigatie menu wordt aangeklikt.
// Het geselecteerde SubknooppuntID wordt bewaard in een locale variabel.
function KnooppuntSubIDGeselecteerdOpslaan(knooppunt)
{
var vorigKnooppunt;
var vorigKnooppuntValue;
var HetKnooppunt = document.Form1;
if (!(HetKnooppunt.KnooppuntSubIDGeselecteerd.value == ""))
{ KnooppuntSlideChildCLass( HetKnooppunt.KnooppuntSubIDGeselecteerd.value); }
// om vorig geselecteerd menuknop terug goede class te geven
if (!(HetKnooppunt.KnooppuntIDGeselecteerd.value == ""))
{ KnooppuntSlideParentCLass(HetKnooppunt.KnooppuntIDGeselecteerd.value);
} HetKnooppunt.KnooppuntSubIDGeselecteerd.value = knooppunt;
if (document.getElementById('objSlideMenu_' + knooppunt))
{
document.getElementById('objSlideMenu_' + knooppunt).className = "SMChildSelected" + knooppunt;
document.getElementById('objSlideMenu_' + knooppunt).onmouseout = function () {this.className = "SMChildSelected" + knooppunt ;}
document.getElementById('objSlideMenu_' + knooppunt).onmouseover = function () {this.className = "SMChildSelected" + knooppunt ;}
}
// HetKnooppunt.KnooppuntIDGeselecteerd.value = knooppunt; UpdateKnooppuntInhoud(knooppunt); }
// functio voor instellen van de class ivm Slideknooppunt
function KnooppuntSlideParentCLass(knooppunt)
{if (document.getElementById('objSlideMenu_' + knooppunt))
{
document.getElementById('objSlideMenu_' + knooppunt).className = "SMParent" + knooppunt;
document.getElementById('objSlideMenu_' + knooppunt).onmouseout = function () {this.className = "SMParent" + knooppunt ;}
document.getElementById('objSlideMenu_' + knooppunt).onmouseover = function () {this.className = "SMParentOver" + knooppunt ;}
} }
function KnooppuntSlideChildCLass(knooppunt)
{if (document.getElementById('objSlideMenu_' + knooppunt))
{
document.getElementById('objSlideMenu_' + knooppunt).className = "SMChild" + knooppunt;
document.getElementById('objSlideMenu_' + knooppunt).onmouseout = function () {this.className = "SMChild" + knooppunt ;}
document.getElementById('objSlideMenu_' + knooppunt).onmouseover = function () {this.className = "SMChildOver" + knooppunt ;}
} }
// Functie wordt opgeroepen wanneer een knooppunt in het tree navigatie wordt aangeklikt.
// Het geselecteerde knooppuntID wordt bewaard in een (server) variabel.
function Tree_KnooppuntIDGeselecteerdOpslaan(knooppunt)
{
var vorigKnooppunt;
var vorigKnooppuntValue;
var vorigKnooppuntSubValue;
var HetKnooppunt = document.Form1;
// om vorig geselecteerd menuknop terug goede class te geven
if (!(HetKnooppunt.KnooppuntIDGeselecteerd.value == ""))
{ if (document.getElementById(HetKnooppunt.KnooppuntIDGeselecteerd.value + "_tree"))
{ vorigKnooppuntValue = HetKnooppunt.KnooppuntIDGeselecteerd.value ;
vorigKnooppunt = document.getElementById(HetKnooppunt.KnooppuntIDGeselecteerd.value + "_tree"); vorigKnooppunt.className = "SMParent" + vorigKnooppuntValue ; vorigKnooppunt.onmouseout = function () {this.className = "SMParent" + vorigKnooppuntValue ;}
vorigKnooppunt.onmouseover = function () {this.className = "SMParentOver" + vorigKnooppuntValue ;} }
}
// om vorig geselecteerd submenuknop terug goede class te geven if (!(HetKnooppunt.KnooppuntSubIDGeselecteerd.value == ""))
{ if (document.getElementById(HetKnooppunt.KnooppuntSubIDGeselecteerd.value + "_tree" ))
{ vorigKnooppuntSubValue = HetKnooppunt.KnooppuntSubIDGeselecteerd.value ;
vorigKnooppunt = document.getElementById(HetKnooppunt.KnooppuntSubIDGeselecteerd.value + "_tree" ); vorigKnooppunt.className = "SMChild" + vorigKnooppuntSubValue ;
vorigKnooppunt.onmouseout = function () {this.className = "SMChild" + vorigKnooppuntSubValue ;} vorigKnooppunt.onmouseover = function () {this.className = "SMChildOver" + vorigKnooppuntSubValue ;} HetKnooppunt.KnooppuntSubIDGeselecteerd.value = "";
} }
if (document.getElementById(knooppunt + "_tree"))
{ document.getElementById(knooppunt + "_tree").className = "SMParentSelected" + knooppunt;
document.getElementById(knooppunt + "_tree").onmouseout = function () {this.className = "SMParentSelected" + knooppunt ;}
document.getElementById(knooppunt + "_tree").onmouseover = function () {this.className = "SMParentSelected" + knooppunt ;}
} HetKnooppunt.KnooppuntIDGeselecteerd.value = knooppunt;
UpdateKnooppuntInhoud(knooppunt);
}
// Functie wordt opgeroepen wanneer een Subknooppunt in het tree navigatie menu wordt aangeklikt.
// Het geselecteerde SubknooppuntID wordt bewaard in een locale variabel.
function Tree_KnooppuntSubIDGeselecteerdOpslaan(knooppunt)
{ var vorigKnooppunt;
var vorigKnooppuntValue;
var vorigKnooppuntSubValue;
var HetKnooppunt = document.Form1;
document.onmouseover
if (!(HetKnooppunt.KnooppuntIDGeselecteerd.value == ""))
{if (document.getElementById(HetKnooppunt.KnooppuntIDGeselecteerd.value + "_tree"))
{ vorigKnooppuntValue = HetKnooppunt.KnooppuntIDGeselecteerd.value ;
vorigKnooppunt = document.getElementById(HetKnooppunt.KnooppuntIDGeselecteerd.value + "_tree"); vorigKnooppunt.className = "SMParent" + vorigKnooppuntValue ;
vorigKnooppunt.onmouseout = function () {this.className = "SMParent" + vorigKnooppuntValue ;}
vorigKnooppunt.onmouseover = function () {this.className = "SMParentOver" + vorigKnooppuntValue ;} }
}
if (!(HetKnooppunt.KnooppuntSubIDGeselecteerd.value == ""))
{if (document.getElementById(HetKnooppunt.KnooppuntSubIDGeselecteerd.value + "_tree"))
{ vorigKnooppuntSubValue = HetKnooppunt.KnooppuntSubIDGeselecteerd.value ;
vorigKnooppunt = HetKnooppunt.KnooppuntSubIDGeselecteerd.value; document.getElementById(vorigKnooppunt + "_tree").className = "SMChild" + vorigKnooppuntSubValue ;
document.getElementById(vorigKnooppunt + "_tree").onmouseout = function () {this.className = "SMChild" + vorigKnooppuntSubValue ;} document.getElementById(vorigKnooppunt + "_tree").onmouseover = function () {this.className = "SMChildOver" + vorigKnooppuntSubValue ;} }
}
HetKnooppunt.KnooppuntSubIDGeselecteerd.value = knooppunt;
if (document.getElementById(knooppunt + "_tree"))
{
document.getElementById(knooppunt + "_tree").className = "SMChildSelected" + knooppunt;
document.getElementById(knooppunt + "_tree").onmouseout = function () {this.className = "SMChildSelected" + knooppunt ;}
document.getElementById(knooppunt + "_tree").onmouseover = function () {this.className = "SMChildSelected" + knooppunt ;}
}
HetKnooppunt.KnooppuntIDGeselecteerd.value = knooppunt; UpdateKnooppuntInhoud(knooppunt); }
function ClassSMParentOver (evt) { this.className = "SMParentOver";
}
function ClassSMParent (evt) { this.className = "SMParent";
}
function ClassSMParentSelected (evt) { this.className = "SMParentSelected";
} function ClassSMChildOver (evt) { this.className = "SMChildOver";
}
function ClassSMChild (evt) { this.className = "SMChild";
}
function ClassSMChildSelected (evt) { this.className = "SMChildSelected";
} function waitTillFrameLoaded(){ document.getElementById('InhoudKnooppunt').src = 'about:blank'; }
// Functie voor update inhoud
function UpdateKnooppuntInhoud(knooppunt)
{ // document.frames['InhoudKnooppunt'].location.href = 'Pr_Update_Knooppunt_Inhoud.aspx?WebID=' + document.Form1.WebIDGeselecteerd.value + '&BoomID=' + document.Form1.BoomIDGeselecteerd.value + '&KnooppuntID=' + document.Form1.KnooppuntIDGeselecteerd.value;
var strUrl;
strUrl = 'Pr_Update_Knooppunt_Inhoud.aspx?WebID=' + document.getElementById('WebIDGeselecteerd').value + '&BoomID=' + document.getElementById('BoomIDGeselecteerd').value + '&KnooppuntID=' + knooppunt ;//+ document.getElementById('KnooppuntIDGeselecteerd').value
if (document.getElementById('Wchtwd'))
{ strUrl = strUrl + '&Wchtwd=' + document.getElementById('Wchtwd').value
}
if (document.getElementById('LG'))
{ strUrl = strUrl + '&LG=' + document.getElementById('LG').value
}
document.getElementById('InhoudKnooppunt').src = strUrl ;
// setTimeout('waitTillFrameLoaded()',5000); }
// Open AntwoordVenster
function OpenAntwoordVenster()
{
document.all["AntwoordVenster"].style.display = "block";
} // sluit tipvenster function Sluit_Tipvenster()
{ document.getElementById('strTipvenster').value = "False";
if (document.Form1.Tipvensternogtonen.checked || document.Form1.Tipvensternogtonenbis.checked ) __doPostBack('TipvensterOff',''); document.all["TipVenster"].style.display = "none";
} // sluit AntwoordVenster function Sluit_Antwoordvenster()
{ document.all["AntwoordVenster"].style.display = "none";
} </script>
  <div id="AntwoordVenster" style="border-style: solid; border-color: blue; border-width: 20px thin thin; display: none; z-index: 500; left: 250px; overflow: auto; width: 500px; position: absolute; top: 100px; height: 400px; background-color: white;">
  <table cellpadding="0" cellspacing="0" width="100%">

    <tbody>
      <tr valign="top">

        <td align="right"><font class="standaardtekst"> <input class="standaardtekst" id="SluitAntwoordVenster" style="width: 96px; height: 20px;" onclick="Sluit_Antwoordvenster();" value="Fermer la fen&ecirc;tre" name="Sluit_AntwoordVenster" type="button">
        </font></td>

      </tr>

    </tbody>
  </table>

  <table cellpadding="10" cellspacing="10" width="100%">

    <tbody>
      <tr>

        <td>
        <div id="AntwoordInVenster" class="BodyClass"></div>

        </td>

      </tr>

    </tbody>
  </table>

  </div>

<!-- boodschappen doorgeven (vb. error) -->
  <div id="MessageScript"> </div>

  <div id="StyleInstellingScript"></div>

  <div id="StyleInstellingSlideBoom"></div>

  <div id="lokaalscript"> 
  <script> Tree_KnooppuntIDGeselecteerdOpslaan('K452'); </script> 
  <script language="javascript"> Instellingen_Boom_Toepassen('#97b1fe',' ','120px','15px','5 px','100px','5px','Null','Null','slategray 2px dashed','slategray 2px dashed','400px','repeat','left','top'); </script>
  <script language="javascript"> Instellingen_Inhoud_Toepassen('#97b1fe','http://www.everyoneweb.fr/wa/DataFilesdb0/l1gg8.gif','10px','0px','0px','Null','Null','slategray 2px dashed','slategray 2px dashed','no-repeat','right','bottom'); </script>
  <script language="javascript"> Instellingen_Hoofding_Toepassen('white','http://www.everyoneweb.fr/wa/DataFilesdb0/fond.jpg','253px','Null','Null','Null','Null','repeat','left','top'); </script>
  <script language="javascript"> Instellingen_Voet_Toepassen('black','http://www.everyoneweb.fr/wa/DataFilesdb0/fondbas.jpg','125px','Null','Null','Null','Null','repeat','left','top'); </script></div>

</form>

<font class="BodyClass">
<div id="IcoonWijzig"></div>

</font>
</body>
</html>
