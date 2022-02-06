# Protéger le fichier wp-config.php

Code à copier dans .htaccess

```
<Files wp-config.php>
order allow,deny
deny from all
</Files>
```