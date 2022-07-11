<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<META NAME="keywords" CONTENT="Swiss Doctoral Program in Mathematics 
in Les Diablerets, Switzerland. Kervaire Seminar &ldquo;Geometry of groups 2013&rdquo; ">
<META NAME="description" CONTENT="Swiss Doctoral Program in Mathematics 
in Les Diablerets, Switzerland. Kervaire Seminar &ldquo;Geometry of groups 2013&rdquo;">
<title>Kervaire Seminar &ldquo;Geometry of groups 2013&rdquo;, Form Page </title>
</head>
    <body>
<!--mail-->
<?php 
     $headers ='From: "Formulaire web"<webmaster@unige.ch>'."\n";
     //$headers ='From: "Formulaire web"<PH@localhost.localdomain>'."\n"; 
     $headers .= "Content-Type: text/plain; charset=\"utf-8\"\n";
     $headers .= "Content-Transfer-Encoding: 8bit";

     $adresse = 'leemann0@etu.unige.ch';
     //$adresse = 'diablerets2013@epfl.ch';

     $subject = 'Inscription Diablerets';
     $message = "Un nouvel inscrit au séminaire\n\n";
	 $message .= "Nom : ";
	 $message .=$_POST['Surname'];
	 $message .="\n";
	 $message .= "Prénom : ";
	 $message .=$_POST['Firstname'];
	 $message .="\n";
	 $message .= "Affiliation : ";
	 $message .=$_POST['University'];
	 $message .="\n";
	 $message .= "Position : ";
	 $message .=$_POST['Position'];
	 $message .="\n";
	 $message .= "Courriel : ";
	 $message .=$_POST['Email'];
	 $message .="\n";
	 $message .= "Logement, premier choix : ";
	 $message .=$_POST['firstchoice'];
	 $message .="\n";
	 $message .= "Logement, second choix : ";
	 $message .=$_POST['secondchoice'];
	 $message .="\n";
	 $message .= "Support financier demandé : ";
	 $message .=$_POST['support'];
	 $message .="\n";
	 $message .= "Date d'arrivée : ";
	 $message .=$_POST['Arrival'];
	 $message .="\n";
	 $message .= "Date de départ : ";
	 $message .=$_POST['Departure'];
	 $message .="\n";
	 $message .= "Accompagnants : ";
	 $message .=$_POST['Accompanied'];
	 $message .="\n";
     $message .= "Remarques : ";
	 $message .=$_POST['Remarks'];
	 $message .="\n";
	 $message = wordwrap($message,70);
     $result = mail($adresse, $subject, $message, $headers);
     if($result == true) 
     { 
          echo 'Thank you for your registration.<br>Your data have been sent and you are now on our mailing list.'; 
     } 
     else 
     { 
          echo 'Due to some technical error, your inscription was not sent. Please retry again or write a email to <a href=mailto:diablerets2013@epfl.ch>diablerets2013@epfl.ch</a>'; 
     } 
?>  
<p><a href="home.html">Go back to the home page</a></p>
    </body>
</html>