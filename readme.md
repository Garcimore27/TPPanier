Exercice : Panier d'Achats

Objectif : Mettre en place un panier d'achats simple en utilisant les sessions pour suivre les produits ajoutés.

Créez une page HTML avec une liste de produits affichant chaque produit avec un bouton "Ajouter au panier".

Utilisez la méthode GET pour envoyer l'ID du produit à une page PHP qui ajoutera le produit au panier en utilisant les sessions.

Affichez le contenu du panier sur une page distincte, en affichant les produits ajoutés ainsi que le total du panier.

Vous devez pouvoir supprimer un objet du panier

Voici l'API à utiliser pour recupèrer les produits :
https://titi.startwin.fr/products/type/burger
Vous pouvez également récupérer le detail d'un burger grâce à son _id avec cette URL :
https://titi.startwin.fr/products/633fd33f118e1619351f3248 (remplacer 633fd33f118e1619351f3248 par l'id du burger en question)

Vous pouvez créer une page par type de produit : 
https://titi.startwin.fr/products/type/accompagnement
https://titi.startwin.fr/products/type/boisson
https://titi.startwin.fr/products/type/dessert

Faites bien attention à ne pas trop répeter de code, beaucoup de code pourra être réutilisé.

BONUS:
Gerer la quantitée du produit lors de l'ajout au panier et sur la page panier