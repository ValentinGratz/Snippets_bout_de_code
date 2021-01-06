```
    vich_uploader:
    db_driver: orm
    mappings:
        upload:
            uri_prefix: /upload/images/
            upload_destination: '%kernel.project_dir%/public/upload/images'
            namer: Vich\UploaderBundle\Naming\SmartUniqueNamer
```

- Etape 1 : Appliquer la config au dessus
- Etape 2 : Ouvrir l'entité qui doit avoir une image
- Etape 3 : y coller le code suivant 

```
/**
     * @var string|null
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @var File|null
     * @Assert\Image(mimeTypes={"image/jpeg", "image/jpg", "image/png"})
     * @Vich\UploadableField(mapping="upload", fileNameProperty="image")
     *
     */
    private $imageFile;
```

ATTENTION pensez a modifier mapping= en fonction du votre dans le fichier config
- Etape 4 : Ajouter dans l'entity cette partie de code :

```
 public function getImage(): ?string
    {
        return $this->image;
    }


    public function setImage(?string $image)
    {
        $this->image = $image;
        return $this;
    }


    /**
     * @ORM\Column(type="datetime")
     * @var null|DateTime
     */
    private $updated_at;


    public function getImageFile()
    {
        return $this->imageFile;
    }



    public function setImageFile( ?File $imageFile ): void {
        $this->imageFile = $imageFile;
        if($this->imageFile instanceof UploadedFile){
            $this->updated_at = new \DateTime('now');
        }
        //return $this;
    }
```

+ php bin/console make:migration
+ php bin/console doctrine:migrations:migrate

