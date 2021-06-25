// Jquery
$(document).ready(function () {
    $(".cpf").mask("000.000.000-00")
    $(".cnpj").mask("00.000.000/0000-00")
    $(".telefone").mask("(00) 0000-0000")
    // $(".moeda").mask("R$: 999.999.990,00", {
    //     reverse: true
    // })
    $(".moeda").mask("##0,00", { reverse: true })

    $(".cep").mask("00.000-000")
    $(".dataNascimento").mask("00/00/0000")

    $(".rg").mask("999.999.999-W", {
        translation: {
            'W': {
                pattern: /[X0-9]/
            }
        },
        reverse: true
    })

    var options = {
        translation: {
            'A': {
                pattern: /[A-Z]/
            },
            'a': {
                pattern: /[a-zA-Z]/
            },
            'S': {
                pattern: /[a-zA-Z0-9]/
            },
            'L': {
                pattern: /[a-z]/
            },
        }
    }

    $(".placa").mask("AAA-0000", options)

    $(".codigo").mask("AA.LLL.0000", options)
   
    $(".celular").mask("(00) 00000-0009")

   
    // $(".moeda").blur(function(event) {
    //     if ($(this).val().length == 0) {
    //         $(".moeda").mask("R$: ##0,00", {reverse: true}) 
    //     } else {
    //         $(".moeda").mask("R$: ##0,00", {reverse: true})
    //     }
    // })


})


