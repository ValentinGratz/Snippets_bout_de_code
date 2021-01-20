Bout de code trouvé ici : !https://github.com/Quentin0292/Bout-de-code/blob/master/Navbar%20sticky(https://github.com/Quentin0292/Bout-de-code/blob/master/Navbar%20sticky)

Utilisation de BootStrap 4.1.0

```
<div class="pc-nav">
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
       <a class="navbar-brand nlink1" href="#accueil">Quentin Lecocq</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link nlink1 " href="#accueil">Accueil</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link nlink2" href="#who">Photography</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link nlink3" href="#skill">Skills</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link nlink4" href="#exp">Portfolio</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link nlink5" href="#contact">About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link nlink6" href="#contact">Contact</a>
                    </li>
                  </ul>
                </div>
   </nav>
</div>



.navbar-nav {
    padding-top: 0.5em;
    padding-bottom: 0.5em;
}

/* Cela va figer la navbar en haut du browser */ 
.pc-nav {
    position: sticky; 
    top: 0;
}
```
