=======================================================================
           PHISHING APP – DÉMONSTRATION ÉDUCATIVE
=======================================================================

Auteur / Professeur  : Akram Nasr
Courriel             : Akram.Nasr@cmontmorency.qc.ca
Programme            : AEC Cybersécurité : protection et défense

-----------------------------------------------------------------------
DESCRIPTION DU PROJET
-----------------------------------------------------------------------
Ce projet est une application de simulation de phishing, développée 
uniquement à des fins pédagogiques. L'objectif est de sensibiliser aux 
techniques de phishing et aux vulnérabilités de sécurité. Il démontre 
comment des informations sensibles SPII (numéros de carte, mots de passe, 
réponses à des questions de sécurité, etc.) peuvent être collectées et 
stockées, en simulant une attaque de phishing.

-----------------------------------------------------------------------
AVERTISSEMENTS ET RESPONSABILITÉS
-----------------------------------------------------------------------
⚠️  Ce projet est strictement destiné à des fins éducatives.  
    Son utilisation à des fins malveillantes ou illégales est interdite.  

    L'auteur ne peut être tenus pour responsables en cas d’utilisation 
    abusive de cet outil pédagogique.

-----------------------------------------------------------------------
FONCTIONNALITÉS PRINCIPALES
-----------------------------------------------------------------------
1. Formulaire de saisie de carte
   • Collecte des numéros de carte et mots de passe.
   • Validation en temps réel du numéro de carte (uniquement les chiffres, 
     exactement 16 chiffres) avec l'algorithme de Luhn.
   • Indication visuelle : bordure verte pour un numéro valide, bordure rouge 
     en cas d'erreur.
   • Stockage des informations dans le fichier JSON "cards.json" (inclut 
     date, IP, user agent et identifiant de session).

2. Vérification par questions de sécurité
   • L'utilisateur répond à trois questions de sécurité pour valider son 
     identité.
   • Les réponses sont enregistrées dans le fichier "questions.json", associées 
     par l'ID de session à l'enregistrement de la carte.
   • Message de confirmation rassurant : "Votre identification a été vérifiée. 
     Un agent vous contactera prochainement."

3. Page d'administration
   • Affichage des données collectées (numéros de cartes, réponses aux questions, 
     etc.).

-----------------------------------------------------------------------
STRUCTURE DU PROJET
-----------------------------------------------------------------------
 ├── 📂 admin
 │    └── (Page d'administration / hacker)
 │
 ├── 📂 data
 │    ├── cards.json          <-- Stockage des informations des cartes (victimes simulées)
 │    └── questions.json      <-- Stockage des réponses aux questions de sécurité
 │
 ├── 📂 logic
 │    ├── process_card-form.php    <-- Traitement du formulaire de saisie de carte
 │    └── process_questions-form.php  <-- Traitement du formulaire des questions de sécurité
 │
 ├── 📂 sources <-- Ressources de l'application
 │                  
 ├── index.php               <-- Page principale (formulaire de saisie de carte)
 └── sec_questions.php       <-- Page de vérification par questions de sécurité

-----------------------------------------------------------------------
UTILISATION ET INSTALLATION
-----------------------------------------------------------------------
1. Installer un serveur PHP (par exemple XAMPP, WAMP ou MAMP).
2. Copier l'ensemble du projet dans le répertoire web de votre serveur.
3. Ouvrir "index.php" dans votre navigateur pour tester le formulaire de carte.
4. Valider ensuite via "sec_questions.php" pour répondre aux questions de sécurité.
5. L'administration (ex: http://localhost/admin/admin.php) permet de consulter les données des victimes

-----------------------------------------------------------------------
NOTE IMPORTANTE
-----------------------------------------------------------------------
Cette application est un outil pédagogique de démonstration des techniques 
de phishing et des vulnérabilités de sécurité. Elle ne doit en aucun cas être 
utilisée à des fins malveillantes. Toute utilisation abusive de cet outil est 
strictement interdite, et nous déclinons toute responsabilité en cas d'utilisation 
inappropriée.

-----------------------------------------------------------------------
CONTACT
-----------------------------------------------------------------------
Pour toute question, suggestion ou information complémentaire, veuillez 
contacter :

Akram Nasr – Professeur / Auteur
Courriel : Akram.Nasr@cmontmorency.qc.ca

=======================================================================
