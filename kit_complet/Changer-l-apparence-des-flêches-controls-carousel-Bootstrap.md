Pour créer un menu qui se déroule. Mettre ces trois codes : 

### Code d’origine
```
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
</a>
```

### Pour le modifier

```
.carousel-control-prev-icon {
    background-image: url("URL DE L’IMAGE");
}

.carousel-control-next-icon {
    background-image: url("URL DE L’IMAGE");
}

```

#### ou autre alternative

```
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
  <!-- INSERT MY OWN PREV ICON USING FONT AWESOME  -->
  <i style="font-size: 60px" class="fas fa-arrow-alt-circle-left"></i>
  <span class="sr-only">Previous</span>
</a>

<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
  <!-- INSERT MY OWN NEXT ICON USING FONT AWESOME  -->
  <i style="font-size: 60px" class="fas fa-arrow-alt-circle-right"></i>
  <span class="sr-only">Next</span>
</a>

```
