/**
 * Si el usuario no completa todos los campos, la función no enviará los datos al servidor.
 */
function registrosuario(){

     let count = 0;
    let variableCont = ""; 
    let nombre = $('#nombre').val()
    let pais = $('#pais').val()
    let celular = $('#celular').val()
    let email = $('#email').val() 
    if (nombre == '') {
        variableCont += ' Ingrese todos los campos '  ;
        count++;
    }
     if (pais == '') {
        variableCont += '';
        count++;
    }
    if (celular == '') {
        variableCont += '';
        count++;
    }
    if (email == '') {
        variableCont += '';
        count++;
    } 
    console.log(count)
    if (count != 4) {
        $.ajax({
            type:"POST",
            url:"class/registrar.php",
            data:{nombre,pais,celular,email},
            success:function(r){
                swal('¡Genial!', r, 'success');
            }
        });
    } else {
        swal('¡Oops!', variableCont, 'error' )
    }  
	
}


const click = document.getElementById('btnRegistrar');

click.addEventListener('onclick', function(){
    alert("hola")
})

/**
 * Toma una matriz de objetos y una identificación de elemento de selección como parámetros, y luego
 * completa el elemento de selección con los valores de la propiedad de nombre de los objetos.
 * @param datos - son los datos que obtengo de la API
 * @param select - el id del elemento seleccionado
 */
function llenarSelect(datos, select) {
    $("#" + select).html("<option value=''>Seleccione...</option>");
    datos.forEach((el) => {
      $("#" + select).append(
        `<option value='${el.name}'>${el.name.toUpperCase()}</option>`
      );
    });
  }


/**
 * Hace una llamada AJAX a un script PHP, que devuelve un objeto JSON, que luego se usa para completar
 * un elemento de selección.
 */
function getSelectPais() {
    $.ajax({
        url: "class/consumoApi.php",
        dataType: "json",
        type: "POST",
        async: false,
        success: function (resp) {
            llenarSelect(resp, "pais");
        },
      });
}  

 getSelectPais();

 
