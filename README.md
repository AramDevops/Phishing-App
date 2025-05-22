# PHISHING APP – DÉMONSTRATION ÉDUCATIVE

**Auteur / Professeur :** Akram Nasr  
**Courriel :** [Akram.Nasr@cmontmorency.qc.ca](mailto:Akram.Nasr@cmontmorency.qc.ca)  
**Programme :** AEC Cybersécurité : protection et défense

---

## DESCRIPTION DU PROJET

Ce projet est une application de simulation de phishing, développée **uniquement à des fins pédagogiques**.  
L'objectif est de sensibiliser aux techniques de phishing et aux vulnérabilités de sécurité.  
L'application démontre comment des informations sensibles (SPII telles que numéros de carte, mots de passe, réponses aux questions de sécurité, etc.) peuvent être collectées et stockées en simulant une attaque de phishing.

---

## AVERTISSEMENTS ET RESPONSABILITÉS

⚠️ **Ce projet est strictement destiné à des fins éducatives.**  
Son utilisation à des fins malveillantes ou illégales est interdite.  
L'auteur ne peut être tenu pour responsable en cas d’utilisation abusive de cet outil pédagogique.

---

## FONCTIONNALITÉS PRINCIPALES

1. **Formulaire de saisie de carte**
   - Collecte des numéros de carte et des mots de passe.
   - Validation en temps réel du numéro de carte (uniquement les chiffres, exactement 16 chiffres) à l’aide de l'algorithme de Luhn.
   - Indication visuelle : bordure verte pour un numéro valide, bordure rouge en cas d'erreur.
   - Stockage des informations dans le fichier JSON `cards.json` (inclut la date, l'IP, le user agent et l'identifiant de session).

2. **Vérification par questions de sécurité**
   - L'utilisateur répond à trois questions de sécurité pour valider son identité.
   - Les réponses sont enregistrées dans le fichier `questions.json` et associées (par l’ID de session) à l'enregistrement de la carte.
   - Affichage d’un message de confirmation rassurant :  
     *"Votre identification a été vérifiée. Un agent vous contactera prochainement."*

3. **Vérification par 2FA**
   - L'application génère et envoie un code de vérification à l'utilisateur.
   - L'utilisateur saisit le code 2FA pour valider son identité.
   - Le code 2FA est stocké dans le fichier `2fa.json` et associé à la session correspondante.

4. **Page d'administration**
   - Affichage des données collectées, incluant les numéros de carte, les réponses aux questions de sécurité et les codes 2FA.
   - Permet la consultation et l'analyse du flux complet de l'attaque (du formulaire initial aux étapes de vérification).

---

## STRUCTURE DU PROJET

```plaintext
.
├── admin/
│   └── (Page d'administration / interface "hacker")
│
├── data/
│   └── Stockage des informations des cartes, questions de sécurité, et 2FA (victimes simulées)
│
├── logic/
│   ├── process_card-form.php       <-- Traitement du formulaire de saisie de carte
│   ├── process_questions-form.php    <-- Traitement du formulaire des questions de sécurité
│   └── process_2fa-form.php          <-- Traitement du formulaire de vérification 2FA
│
├── sources/                        <-- Ressources de l'application (images, scripts, etc.)
│
├── index.php                       <-- Page principale (formulaire de saisie de carte)
├── sec_questions.php               <-- Page de vérification par questions de sécurité
└── 2fa.php                         <-- Page de vérification de 2FA
```

---

## UTILISATION ET INSTALLATION

1. **Installez un serveur PHP** (par exemple, XAMPP, WAMP ou MAMP).
2. **Copiez l'ensemble du projet** dans le répertoire web de votre serveur.
3. **Ouvrez `index.php` dans votre navigateur** pour tester l'application.
4. **Accédez à l'administration** (par exemple, `http://localhost/admin/`) pour consulter les données collectées.

---

## NOTE IMPORTANTE

Cette application est un **outil pédagogique** de démonstration des techniques de phishing et des vulnérabilités de sécurité.  
Elle **ne doit en aucun cas être utilisée à des fins malveillantes**.  
Toute utilisation abusive de cet outil est strictement interdite, et nous déclinons toute responsabilité en cas d'utilisation inappropriée.

---

## CONTACT

Pour toute question, suggestion ou information complémentaire, veuillez contacter :

**Akram Nasr – Professeur / Auteur**  
**Courriel :** [Akram.Nasr@cmontmorency.qc.ca](mailto:Akram.Nasr@cmontmorency.qc.ca)

---
