# TP 1 - git / PHPUnit
* forker le dépôt https://github.com/erwandf/insa
* le cloner.

Nous utiliserons le squelette disponible dans poneys, suivre les instructions disponibles dans le fichier [readme](poneys/README.md)

## Tâches à réaliser
Vous allez implémenter les fonctionnalités suivantes, en utilisant la méthode du TDD quand ce sera possible (pour mémoire : RED -> GREEN -> refactor).
* *ajout de poneys dans le champ
* retirer des poneys du champ (on ne peut avoir une quantité négative) : retourner **une
exception​​** et la tester
* tester la méthode removePoneyFromField() avec un dataProvider
* mocker la fonction getNames() qui renvoie la liste des noms des poneys du troupeau
sous forme d’un tableau
* un champ ne peut contenir que 15 poneys. Créer une fonction qui renvoie TRUE si
des places sont disponibles, sinon FALSE.
* créer la méthode setUp()
    * extraire l’initialisation de la variable $poneys
    * définir la quantité de poneys (créer Poneys::setCount())
* créer la méthode tearDown() qui va libérer la variable $this->poneys
* créer une classe de test, contenant au minimum un test
* créer et utiliser le fichier phpunit.xml pour :
    * définir la taille d’un champ
    * définir la quantité de poneys
    * générer un fichier de résultats au format junit
    * créer 2 testsuites et les exécuter indépendamment l’une de l’autre
        * une pour les tests Poneys
        * une pour la nouvelle classe de test

Pour aller plus loin : à partir du répertoire triangle du dépôt git, implémenter la validation d’un triangle. Créer les classes Triangle et TriangleTest

# TP 2 - git / yarn / QUnit - mocha / grunt :
Vous utiliserez au choix [qunit](https://qunitjs.com/) ou [mocha](https://mochajs.org/).
* Initialiser un nouveau dépôt git pour ce TP
* initialiser le projet avec bower, installer qunit ou mocha en dépendance
* configuration git : ignorer bower_components
* créer 4 répertoires : js / tests / html / dist

Pour l’exercice suivant, tous les tests seront dans le même fichier (tests/tests.js), chaque fonction dans un fichier séparé dans le répertoire js/. Pour chaque fonction, multiplier les cas de test (minimum 3 par fonction).

Veillez à utiliser les différentes assertions disponibles sur la page http://api.qunitjs.com/category/assert/​​ ou ​​http://chaijs.com/api/assert/

## Partie 1
* faire fonctionner un test d’exemple disponible sur la page du framework de tests
choisi
* Écrire une fonction qui va valider si un nombre est pair, la tester avec au moins 6
assertions. Utiliser assert.expect au début du test.
* Écrire une fonction qui prend en entrée une chaîne de caractères et renvoie
“Bonjour, “ et la chaîne concaténée
### Automatisation des tâches
* initialiser grunt pour votre projet
* mettre en place la concaténation des fichiers js et la minification de ceux-ci, modifier
le fichier index.html en conséquence (le résultat sera généré dans le répertoire dist/)
* mettre en place la surveillance des modifications des fichiers js, pour générer
automatiquement le fichier concaténé
* mettre en place le livereload (rafraîchissement automatique de la page index.html)
* ajouter la tâche qunit et l'exécuter

## Partie 2
Continuer à installer ces nouvelles fonctions, en profitant de l’automatisation mise en place.
* validation d’un numéro de sécurité sociale
* Validation de RIB : créer une fonction qui prend 4 paramètres (code banque, code
guichet, numéro de compte, clé RIB) en entrée et qui valide si le RIB fourni est valide. Vous utiliserez ces valeurs pour tester votre fonction :
    * 11111 22222 ABCD3333EFG 42
    * 30002 00550 0000157845Z 02
    * 30002 00110 0000153845Z 02
* calcul de la clé d’un numéro de sécurité sociale
* validation d’une suite de Fibonacci, on passe en paramètre le nième terme (ex :
fibo(15) = 610)
* validation d’une adresse mail (utiliser une regex)

# TP 3 - Jenkins - Intégration continue
* télécharger jenkins depuis ​http://jenkins-ci.org/
* démarrer jenkins avec la commande suivante :​ ​`java -jar jenkins.war`
* se connecter à l’adresse suivante : ​http://localhost:8080/
* installer les plugins nécessaires (ex: git, junit, etc...)

## Exercice 1
* Créer un nouveau projet, et le configurer avec le dépôt suivant :
https://github.com/sebastianbergmann/money
* configurer le projet de manière à exécuter les tests phpunit et générer le fichier XML de résultats
* gérer la publication des résultats

## Exercice 2
* Créer un nouveau projet en utilisant le dépôt de votre projet poneys
* Gérer l’exécution automatique des tests et la publication des résultats
* grâce au fichier phpunit.xml, vous verrez que la configuration est plus simple

## Exercice 3 (seulement après la 1ère partie du TP 2)
* créer un projet free-style, qui va se connecter à votre dépôt
* configurer ce projet pour que la tâche qunit ou mocha soit exécutée avec succès
* modifier le déclencheur sur le projet, et choisir une scrutation du SCM toutes les
minutes
* modifier le projet, et pousser la modification. Vérifier qu’un build soit bien déclenché

## Exercice 4
* Créer un nouveau projet pour utiliser les pipelines
* Reprendre l’exercice 2 et le migrer en utilisant un pipeline, définir des steps

## Exercice 5
* Configurer le projet de manière à télécharger la configuration du pipeline depuis
votre dépôt de sources.

## Exercice 6
* Configurer les tests javascript de manière à générer un fichier xml de résultat (si utilisation de qunit, utiliser le plugin grunt-qunit-junit). Apporter les modifications nécessaires à l’exercice 3 et publier les résultats.

# TP 4 - Performance web
## Exercice 1
* depuis le répertoire sprites
* À partir du code, créer un sprite et modifier la page index.html pour utiliser ce sprite.
Vous utiliserez pour cela une tâche grunt.

## Exercice 2
* À l’aide des outils vus pendant le cours, analyser le site de l’INSA

## Exercice 3
* Définir les termes suivants: FOUT - TTI - TTFP - Hero image
* Expliquer fonctionne un navigateur pour effectuer le rendu d’une page web

## Pour aller plus loin
Mettre en place sur votre instance Jenkins un test automatisé de performance pour un site Web.
Pour cela utiliser le projet [google lighthouse](https://github.com/GoogleChrome/lighthouse)
Définir des Performance budget et les implémenter.
Quelques pistes : https://css-tricks.com/continuous-performance-analysis-with-lighthouse-ci-and-github-actions/

# TP 5 - Tests d’interface
## 1 Sélecteurs CSS
* Se connecter à l’adresse http://gwt.google.com/samples/Mail/Mail.html
* En utilisant le mode développeur de Chrome ou Firefox, trouvez les sélecteurs qui vous permettront de valider :
    * L’adresse email sélectionnée
    * La tâche “Get funding”
    * Le sujet du 5ème mail de la liste dans la liste des mails
    * Le sujet du 5ème mail dans l’en-tête du message
    * L’adresse mail de Bob Saget

## 2 Automatisation avec webdriver : utilisation du framework webdriver.io (http://webdriver.io/)
* Faire fonctionner l’exemple décrit sur la page du projet (https://webdriver.io/docs/gettingstarted.html)
* À partir de cette page ​http://todomvc.com/examples/react/, écrire un scénario :
    * comment tester que mon application fonctionne ?
    * comment valider les différentes fonctionnalités ?
    * présentez votre scénario avant l’implémentation
    * l’implémenter
    * Ajouter les tests dans votre outil d’intégration continue