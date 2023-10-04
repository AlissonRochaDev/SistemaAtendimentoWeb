function ValidarLogin(){
    var emailUsuario = $("#emailUsuario").val();
    var senha = $("#senha").val();

    if(emailUsuario.trim() == ''){
        alert("Preencher o Campo E-mail do Usuário!");
        $("#emailUsuario").focus();
        return false;
    }

    if(senha.trim() == ''){
        alert("Preencher o Campo Senha do Usuário!");
        return false;
    }

    if($("#senha").val().trim().length < 6){
        alert("A senha deverá conter no Mínimo, 6 Caracteres!");
        $("#senha").focus();
        return false;
    }
}

function ValidarMeusDados(){
    if($("#nomeUsuario").val().trim() == ''){
        alert("Preencher o Campo Nome!");
        $("#nomeUsuario").focus();
        return false;
    }
    
    if($("#telefone").val().trim() == ''){
        alert("Preencher o Campo Telefone (WhatsApp)!");
        $("#telefone").focus();
        return false;
    }
    
    if($("#nomeSalao").val().trim() == ''){
        alert("Preencher o Campo Nome do São!");
        $("#nomeSalao").focus();
        return false;
    }
    
    if($("#emailUsuario").val().trim() == ''){
        alert("Preencher o Campo E-mail!");
        $("#emailUsuario").focus();
        return false;
    }
    
    if($("#endereco").val().trim() == ''){
        alert("Preencher o Campo Endereço!");
        $("#endereco").focus();
        return false;
    }
}

function ValidarCadastro(){
    var nomeUsuario = $("#nomeUsuario").val();
    var nomeSalao = $("#nomeSalao").val();

    if(nomeUsuario.trim() == ''){
        alert("Preencher o Campo Nome do usuário!");
        $("#nomeUsuario").focus();
        return false;
    }

    if(nomeSalao.trim() == ''){
        alert("Preencher o Campo Nome do Salão!");
        $("#nomeSalao").focus();
        return false;
    }

    if($("#telefone").val().trim() == ''){
        alert("Preencher o Campo Telefone (WhatsApp)!");
        $("#telefone").focus();
        return false;
    }
    
    if($("#email").val().trim() == ''){
        alert("Preencher o Campo E-mail!");
        $("#telemailefone").focus();
        return false;
    }

    if($("#senha").val().trim().length < 6){
        alert("A senha deverá conter no Mínimo, 6 Caracteres!");
        $("#senha").focus();
        return false;
    }

    if($("#repSenha").val().trim().length < 6){
        alert("A senha deverá conter no Mínimo, 6 Caracteres!");
        $("#repSenha").focus();
        return false;
    }

    if($("#senha").val().trim() != $("#repSenha").val().trim()){
        alert("O Campo SENHA e REPETIR SENHA deverão ser iguais!");
        return false;
    }
}

function ValidarClientes(){
    if($("#nomeCliente").val().trim() == ''){
        alert("Preencher o Campo Nome do Cliente!");
        $("#nomeCliente").focus();
        return false;
    }

    if($("#phone").val().trim() == ''){
        alert("Preencher o Campo Telefone (WhatsApp)!");
        $("#phone").focus();
        return false;
    }          
}

function ValidarFuncionarios(){
    if($("#nomeFuncionario").val().trim() == ''){
        alert("Preencher o Campo Nome do Funcionario!");
        $("#nomeFuncionario").focus();
        return false;
    }

    if($("#dataAdmss").val().trim() == ''){
        alert("Selecione a Data de Admissão!");
        $("#dataAdmss").focus();
        return false;
    }    

    if($("#phone").val().trim() == ''){
        alert("Preencher o Campo Telefone (WhatsApp)!");
        $("#phone").focus();
        return false;
    } 

    // if($("#dataDmss").val().trim() == ''){
    //     alert("Selecione a Data de Demissão!");
    //     $("#dataDmss").focus();
    //     return false;
    // }              
}