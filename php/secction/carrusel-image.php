<style>
    body{
  padding:0;

}
.contenedor{
  padding:0;
width:100%;
  
  
}
.contenedor .carrusel{
  padding: 0;
display: flex;

  overflow:hidden;

}

.imagenes-transformables{
  height: 400px;
  min-width:1%;
  width: 33.33%;
  max-width:50%;

  
  transition: all 1s ease;
  background-size: cover;
  background-position:center center;
  
 
    
}

.imagenes-transformables:hover {
max-width: 80%;
 min-width:50%;
  transition: min-width 1s ease;
-webkit-transition: min-width 1s ease;
  -moz-transition: min-width 1s ease;
 -ms-transition: min-width 1s ease;
-o-transition: min-width 1s ease;

}

.imagenes-transformables:hover .fade{
  background-color: rgba(0,0,0,.4);
  width: auto; 
  height:100%;
  transition: background-color .5s ease;
     padding:1em;
  display:flex;
  
}

.imagenes-transformables:hover .fade .border-text{
  display:flex;
  align-items: center;
    justify-content: center;
  font-size: 2.2rem;
  transition: font-size 1s ease;

}


.imagenes-transformables .fade .border-text{
  border: 1px solid white;
   width:100%;
  height: 90%;
  margin:2px;
  display:none;
  font-family: sans-serif;
  color: white;
  font-size: 2rem;
  cursor:pointer;
  text-decoration: none;
}
</style>




<div class="contenedor">
  
<div class="section_heading text-center mb_40">
    <h4 class="section_heading_title_big c_black fs_70"> Our Prejects! <br> whit <?php echo $Company?> </h4>
</div>

  <div class="carrusel">
      <div class="imagenes-transformables" style="background-image: url('img/gallery/1.png')">
        <div class="fade">
           <div class="border-text">
              Haz click para ver este post
          </div>
        </div>

    </div>
  
  <div class="imagenes-transformables" style="background-image: url('img/gallery/2.png')">
    
    
     <div class="fade">
           <a class="border-text">
              Haz click para ver este post
          </a>
        </div>
    </div>
  
  <div class="imagenes-transformables" style="background-image: url('img/gallery/3.png')">
    
    
     <div class="fade">
           <a  class="border-text">
              Haz click para ver este post
          </a>
        </div>
    </div>

  <!-- <div class="imagenes-transformables" style="background-image: style="background-image: url('img/gallery/1.png')"></div> -->
   <div class="imagenes-transformables" style="background-image: url('img/gallery/4.png')">
    
    
     <div class="fade">
           <a class="border-text">
              Haz click para ver este post
          </a>
        </div>
    </div>   
   </div>
  

  

  
  