
//var valortotal = document.getElementById("total")

//function multiplica(){
	//resultado = parseInt(valortotal*2);

	//document.getElementById("valortotal").value = resultado;
	
//}//

var quant = document.getElementsByName("valor[]");
var teste = [];

function somarValores() {
    var soma = [].reduce.call(quant, function (somatorio, el) {
        return somatorio + parseInt(el.value, 10) || 0;
    }, 0);
//document.getElementById("resultado").value = soma;
    document.getElementById("resultado").value = soma;
}

