<h2>Contato</h2>

<br><?= get('message'); ?>

<form class="d-flex" action="../pages/forms/contato.php" method="POST" role="form">
    <div class="col">
        <legend class="my-5">Formulário de Contato</legend>
        <div class="form-group mb-3">
            <label for="" class="form-label">Nome:</label>
            <input
                type="text"
                name="name"
                id=""
                class="form-control"
                placeholder=""
            >
        </div>
        <div class="form-group mb-3">
            <label for="" class="form-label">Email:</label>
            <input
                type="email"
                name="email"
                id=""
                class="form-control"
                placeholder=""
            >
        </div>
        <div class="form-group mb-3">
            <label for="" class="form-label">Assunto:</label>
            <input
                type="text"
                name="subject"
                id=""
                class="form-control"
                placeholder=""
            >
        </div>
        <div class="form-group mb-3">
            <label for="" class="form-label">Mensagem:</label>
            <textarea class="form-control" name="message" id="" cols="30" rows="10"></textarea>
        </div>
        <button
            type="submit"
            class="btn btn-primary"
        >
            Enviar
        </button>
    </div>
</form>
