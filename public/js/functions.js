//Minhas funções
// $("#addServico").click(function () {
//     alert("Handle for .click() called.");
// });

$(document).ready(function () {

    var counter = 2;

    $("#addServico").click(function () {

        if (counter > 10) {
            alert("Você atingiu o limite de serviços!");
            return false;
        }

        var newServico = $(document.createElement('div'))
            .attr("id", 'dadosDoServico' + counter);

        newServico.after().html('<div class="row mt-2"> <div class="col-md-3">  <label>Serviço ' + counter + ': </label>' +
            '<input class="form-control" type="text" name="servico' + counter +
            '" id="servico' + counter + '" value="" > </div>' +

            '<div class="col-md-3">  <label> Descrição do Serviço ' + counter + ': </label>' +
            '<input class="form-control" type="text" name="servico' + counter +
            '" id="servico' + counter + '" value="" > </div>' +

            '<div class="col-md-3">  <label> Quantidade do Serviço ' + counter + ': </label>' +
            '<input class="form-control" type="number" name="servico' + counter +
            '" id="servico' + counter + '" value="" > </div>' +

            '<div class="col-md-3">  <label> Valor do Serviço ' + counter + ': </label>' +
            '<div class="input-group col-3"> ' +
            ' <span class="input-group-text" id="basic-addon1">R$:</span> ' +
            '<input class="moeda form-control" type="text" name="servico' + counter +
            '" id="servico' + counter + '" value="" > </div>' +

            '</div> </div>'

        );

        newServico.appendTo("#dadosDoServico");

        counter++;
    });

    $("#removeServico").click(function () {
        if (counter == 1) {
            alert("Sem mais serviços para remover");
            return false;
        }

        counter--;

        $("#dadosDoServico" + counter).remove();

    });

     $("#getButtonValue").click(function () {

    var msg = '';
    for(i=1; i<counter; i++){
      msg += "\n Textbox #" + i + " : " + $('#textbox' + i).val();
    }
          alert(msg);
     });
});


$(document).ready(function () {

    var counter = 2;

    $("#addMaterial").click(function () {

        if (counter > 10) {
            alert("Você atingiu o limite de materiais!");
            return false;
        }

        var newServico = $(document.createElement('div'))
            .attr("id", 'dadosDoMaterial' + counter);

        newServico.after().html('<div class="row mt-2"> <div class="col-md-3">  <label>Material ' + counter + ': </label>' +
            '<input class="form-control" type="text" name="material' + counter +
            '" id="material' + counter + '" value="" > </div>' +

            '<div class="col-md-3">  <label> Quantidade do Material ' + counter + ': </label>' +
            '<input class="form-control" type="number" name="material' + counter +
            '" id="material' + counter + '" value="" > </div>' +

            '<div class="col-md-3">  <label> Valor Unitario ' + counter + ': </label>' +
            '<div class="input-group col-3"> ' +
            ' <span class="input-group-text" id="basic-addon1">R$:</span> ' +
            '<input class="moeda form-control" type="text" name="material' + counter +
            '" id="material' + counter + '" value="" > </div> </div>' +

            '<div class="col-md-3">  <label> Valor Total do Material ' + counter + ': </label>' +
            '<div class="input-group col-3"> ' +
            ' <span class="input-group-text" id="basic-addon1">R$:</span> ' +
            '<input class="moeda form-control" type="text" name="material' + counter +
            '" id="material' + counter + '" value="" > </div> </div> ' +

            ' </div>'

        );

        newServico.appendTo("#dadosDoMaterial");

        counter++;
    });

    $("#removeMaterial").click(function () {
        if (counter == 1) {
            alert("Sem mais materiais para remover");
            return false;
        }

        counter--;

        $("#dadosDoMaterial" + counter).remove();

    });    
});
