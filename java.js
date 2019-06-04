var index = 0;

var listaimg = ["https://cde.publimetro.e3.pe/ima/0/0/1/0/0/100136.jpg", "https://arcadys.org/wp-content/uploads/2012/11/perros_y_gatos.jpg", "http://www.noticiasser.pe/sites/default/files/2018-12/Perros-sueltos.jpg", "http://i.stack.imgur.com/jGlzr.png"];

$(function() {
  
    setInterval(changeImage, 3000);
  
});

function changeImage() {
  
 
   $('body').css("background-image", 'url(' + listaimg[index] + ')');
                  
   index++;
                  
   if(index == 4)
      index = 0;
    
    
}