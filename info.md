### 03 COMPONENTS: 
-> php artisan make:component FormContainerCard devient form-container-card-layout.blade
#### 04 - Formulaire de contact

- FORMULAIRE D'AJOUT
- Création de form-container-card ->contenu copié du component auth-card-blade
- Création de add.blade.php extends de form-container-card

##### FACTORISATION
- création de custom-base-layout.blade.php avec le header et footer

##### MIGRATION
- Ajout d'une nouvelle colonne avec 


##### MIGRATION BIS IMAGE
- Ajout de l'image_url -> php artisan make:migration add_column_image_url_to_offers_table


#### NOUVELLE ROUTE AVEC CONTROLLER
- Importer classe controller