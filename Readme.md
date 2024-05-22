vendor/bin/phpunit tests/LeapYearTest.php --color --testdox
--color pour une sortie colorée.
--testdox pour une documentation de test en style "documentation".

{
    // Clé spécifique du nom du package.
    // Utilisé par Composer pour indentifier le porjet.
    "name": "mgarc/testuntaire",

    // Library  qui signifie que votre projet est une bibliothèque de code réutilisable.
    "type": "library",

    // Liste des dépendances.
    "require-dev": {
        "phpunit/phpunit": "^11.1"
    },

    // Charge et PSR-4 spécifie comment les espaces de noms des classes doivent correspondre à leur structure de répertoire et comment les classes doivent être chargées automatiquement.
    "autoload": {
        "psr-4": {
            "Mgarc\\Testuntaire\\": "src/"
        }
    },
    "authors": [
        {
            "name": "Mgarc",
            "email": "m.garciapro34@gmail.com"
        }
    ],
    "require": {}
}
