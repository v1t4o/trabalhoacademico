    <div class="card">
        <div class="card-header"><b>Dados Pessoais</b></div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm">
                    <b>Nome:</b> {{$agendamento->nome}}
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">E-mails</div>
                <div class="card-body">
                    <b>E-mail USP:</b> {{$agendamento->e_mail_usp }} </br>
                    <b>Outro:</b> {{$agendamento->outro_recomendado_ }} </br>
                    <b>Divulgar E-mail?:</b> {{$agendamento->divulgar_e_mail_ }} </br>
                </div>
            </div>
        </div>
    </div>