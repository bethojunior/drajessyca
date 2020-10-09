elementProperty.addEventInElement('#schedule','onclick',function () {
    swal('Obrigado pela preferencia','Em breve estaremos entrando em contato','success');

    var formData = new FormData();
    formData.append('local',  document.getElementById('local').value);
    formData.append('type',  document.getElementById('type').value);
    formData.append('name',  document.getElementById('name').value);
    formData.append('contact',  document.getElementById('contactUser').value);
    formData.append('status',  "Aguardando resposta");

    HomeController.create(formData).then(response => {
        console.log(response)
    })
})
