/*** Função que traz a tela através do caminho passado pelo menu telas ***/
function exibirOpcao(tela){
    $.ajax({
        url: tela,
        success: function(dados){
            $("#caixa_secao_telas").html(dados);
        }
    });
}



/*** Funções do Formulario ***/
/*** Coloca máscara, bloqueia letras e alerta o campo ***/
function formatarCelular(mascara, documento, caracter, campo){
    document.getElementById(campo).style.borderColor = '#400846'; 
    document.getElementById(campo).style.boxShadow = '0px 0px 4px 2px #400846'
    var i = documento.value.length;
    var saida = mascara.substring(0,1);
    var texto = mascara.substring(i)

    if(window.Event){
        //Recebe o ASCII do IE
        var letra = caracter.charCode;
    }else{
        //Recebe o ASCII dos outros navegadores
        var letra = caracter.which;
    }
    //Bloqueio de caracteres
    if(letra < 48 || letra > 57){
        document.getElementById(campo).style.borderColor =  '#FF0000';
        document.getElementById(campo).style.boxShadow = '0px 0px 0px 0px #FF0000'
        return false;
    }
    /*** Formatar campo ***/
    if(i == 0 && texto != "("){
        documento.value += "("
    }else{
        if(i == 3 && documento.value.substring(0,1) != ")"){
            documento.value += ")"
        }
        if(i > 1){
            texto = mascara.substring(i-1)
            if (texto.substring(0,1) != saida){
                documento.value += texto.substring(0,1);

            }
        }
    }

}

function formatarCep(mascara, documento){
    var i = documento.value.length;
    var saida = mascara.substring(0,1);
    var texto = mascara.substring(i)
            texto = mascara.substring(i)
            if (texto.substring(0,1) != saida){
                documento.value += texto.substring(0,1);

            }
}

function bloquearLetras(caracter){
	 document.getElementById("loja_cep").style.borderColor = '#400846'; 
	    document.getElementById("loja_cep").style.boxShadow = '0px 0px 4px 2px #400846';
	    if(window.Event){
	        //Recebe o ASCII do IE
	        var letra = caracter.charCode;
	    }else{
	        //Recebe o ASCII dos outros navegadores
	        var letra = caracter.which;
	    }
	    //Bloqueio de caracteres
	    if(letra < 48 || letra > 57){
	    	if(letra != 45){
	    		document.getElementById("loja_cep").style.borderColor =  '#FF0000';
	    		document.getElementById("loja_cep").style.boxShadow = '0px 0px 0px 0px #FF0000'
	    		return false;
	    	}
	    }
}

/*** Bloqueia números e alerta o campo ***/
function bloquearNumeros(caracter, campo){
    document.getElementById(campo).style.borderColor = '#400846'; 
    document.getElementById(campo).style.boxShadow = '0px 0px 4px 2px #400846'
    if(window.Event){
        //Recebe o ASCII do IE
        var letra = caracter.charCode;
    }else{
        //Recebe o ASCII dos outros navegadores
        var letra = caracter.which;
    }
    if(letra >= 48 && letra <= 57 ){
        document.getElementById(campo).style.borderColor =  '#FF0000';
        document.getElementById(campo).style.boxShadow = '0px 0px 0px 0px #FF0000'
        return false;               
    }
}
