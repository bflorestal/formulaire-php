<?php // CODE CREATEUR pyrospower

echo " <!DOCTYPE HTML>" ;
echo " <HTML> <HEAD>";
echo " <META content=\"text/html; charset=UTF-8;\" http-equiv=\"Content-Type\"> ";
echo " </HEAD> <BODY> ";
// CODE CREATEUR pyrospower
if ( isset($_POST['nom']) ) {
    echo $_POST['nom'] ;
} else {
    echo " <FORM method='POST' action='td2.php' > " ; 
    echo " <FIELDSET> <LEGEND> Vos coordonnées </LEGEND> ";
    echo " <DIV> Nom : <INPUT type=text name=nom > </DIV> " ; 
    echo " <DIV> Prénom : <INPUT type=text name=prenom > </DIV> " ; 
    echo " <DIV> E-mail : <INPUT type=text name=email > </DIV> " ;
    echo " <DIV> Établissement : <INPUT type=text name=etablissement > </DIV> " ;
    echo " <DIV> Ville : <INPUT type=text name=ville > </DIV> " ;
    echo " <DIV> Date de naissance : <SELECT name=jour> " ;
    for ($i=1; $i<=31;$i++) {
        echo "<OPTION value=$i > $i </OPTION>" ;
    } 
    echo " </SELECT> ";
    echo " <SELECT name=mois> "; 
    echo " <OPTION value=\"janvier\"> janvier </OPTION> ";
    echo " <OPTION value=\"fevrier\">février</OPTION> ";
    echo " <OPTION value=\"mars\">mars</OPTION> ";
    echo " <OPTION value=\"avril\">avril</OPTION> ";
    echo " <OPTION value=\"mai\">mai</OPTION> ";
    echo " <OPTION value=\"juin\">juin</OPTION> ";
    echo " <OPTION value=\"juillet\">juillet</OPTION> ";
    echo " <OPTION value=\"aout\">août</OPTION> ";
    echo " <OPTION value=\"septembre\">septembre</OPTION> ";
    echo " <OPTION value=\"octobre\">octobre</OPTION> ";
    echo " <OPTION value=\"novembre\">novembre</OPTION> ";
    echo " <OPTION value=\"decembre\">décembre</OPTION> ";  
    echo " </SELECT> ";  
    echo " <SELECT name=annee> ";
    for ($i=2017; $i>=1920;$i--) {
        echo "<OPTION value=$i > $i </OPTION>";
    }
    echo " </SELECT> </DIV> ";
    echo " <DIV> <LABEL for='departement' >Département : </LABEL> <SELECT id='departement' name=departement >";
    echo " <OPTGROUP label='Île de France' > <OPTION value='seine_et_marne' >Seine et Marne</OPTION> ";
    echo "<OPTION value='yvelines' >Yvelines</OPTION> </SELECT> </DIV> </FIELDSET> ";

    echo "<FIELDSET><LEGEND>Votre type d'emploi</LEGEND>";
    echo "<INPUT type=radio id='ens' name=emploi value='ens'> <LABEL for='ens'>enseignement</LABEL> ";
    echo "<INPUT type=radio id='edu' name=emploi value='edu'> <LABEL for='edu'>éducation</LABEL> ";
    echo "<INPUT type=radio id='adm' name=emploi value='adm'> <LABEL for='adm'>administration</LABEL> </FIELDSET>";

    echo "<FIELDSET><LEGEND>Vos loisirs préférés</LEGEND>";
    echo "<INPUT type=checkbox id='son_video' name=loisirs value='son_video'> <LABEL for='son_video'>Son-vidéo </LABEL>";
    echo "<INPUT type=checkbox id='tv' name=loisirs value='tv'> <LABEL for=''>Télévision </LABEL>";
    echo "<INPUT type=checkbox id='cinema' name=loisirs value='cinema'> <LABEL for='cinema'>Cinéma </LABEL>";
    echo "<INPUT type=checkbox id='prog' name=loisirs value='prog'> <LABEL for='prog'>Programmation </LABEL>";
    echo "<INPUT type=checkbox id='sports' name=loisirs value='sports'> <LABEL for='sports'>Sports </LABEL>";
    echo "<INPUT type=checkbox id='internet' name=loisirs value='internet'> <LABEL for='internet'>Internet </LABEL></FIELDSET>";

    echo "<FIELDSET><LEGEND>Décrivez votre projet de site WEB</LEGEND>";
    echo "<DIV><TEXTAREA name=projet placeholder='Décrivez vos projets succintement' style='width:400px; height:100px;'></TEXTAREA></DIV>";
    echo " <INPUT type=reset value='Effacer' style='margin-right:20px;'> ";
    echo " <INPUT type=submit value='Envoyer'> </FIELDSET>";

    echo " </FORM> ";
}
echo " </BODY> </HTML>" ;
?>