function confirmarAgendamento(email, id_horario, token) {

    swal({
            title: "Podemos Confirmar?",
            text: "Caso você precise, acesse o menu 'Horários Reservados' para cancelar o agendamento",
            type: "info",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Sim, pode confirmar!",
            cancelButtonText: "Cancelar",
            closeOnConfirm: false
        },
        function(){
            $.ajax({
                type: 'POST',
                url: '/agendamento/store',
                data: {
                    _token: token,
                    email: email,
                    id_horario: id_horario
                },
                success: function(data) {
                    swal({
                            title: "Agendamento Realizado com sucesso",
                            text: "Acesse o menu 'Horários Reservados' e imprima seu comprovante"
                        },
                        function(){
                            window.location.href = '/agendamento';
                        });
                }
            });


        });

}