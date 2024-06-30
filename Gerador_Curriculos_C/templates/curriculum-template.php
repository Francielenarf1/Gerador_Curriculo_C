<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículo de <?= htmlspecialchars($nome) ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <style>

        .curriculo .header {
            display: flex;
            align-items: center;
            border-radius: 20px;
            
        }
        .curriculo .foto {
            width: 5cm;
            height: 6cm;
            object-fit: cover;
            margin-right: 20px;
        }
        .button-container {
            margin-bottom: 20px;
        }
        .curriculo {
        height:100%; 
        width:100%;
        border: 2px solid gray;
        padding: 20px; 
        border-radius: 10px;
        box-shadow: inset 14em 6em lightgray;
        box-shadow: inset;
        }

    </style>

    <div class="container curriculo">
        <div class="button-container"></div>

        <div class="header">
            <?php if ($foto): ?>
                <img src="<?= htmlspecialchars($foto) ?>" alt="Foto de <?= htmlspecialchars($nome) ?>" class="foto">
            <?php endif; ?>
            <div>
                <h1><em><mark><?= htmlspecialchars($nome) ?></mark></em></h1>
                <strong><label>Data de Nascimento: </label></strong><?= htmlspecialchars($data_nascimento = date('d/m/Y')) ?></p>
                <strong><label>Telefone: </label></strong><?= htmlspecialchars($telefone) ?></p>
                <strong><label>Email: </label></strong><?= htmlspecialchars($email) ?></p>
                <strong><label>Endereço: </label></strong><?= htmlspecialchars($endereco) ?></p>
                <strong><label>Habilidades: </label></strong><?= nl2br(htmlspecialchars($qualidades)) ?></p>
                <strong><label>Quero melhorar: </label></strong><?= nl2br(htmlspecialchars($defeitos)) ?></p>
            </div>
        </div>

        <div class="section">
            <h3><mark>Experiências Profissionais</mark></h3>
            <?php foreach ($experiencias as $index => $titulo): ?>
                <div class="experiencia">
                    <h4><?= htmlspecialchars($titulo) ?></h4>
                    <p><?= htmlspecialchars($_POST['experiencia_empresa'][$index]) ?></p>
                    <p><?= htmlspecialchars($_POST['experiencia_inicio'][$index]) ?> - <?= htmlspecialchars($_POST['experiencia_fim'][$index]) ?></p>
                    <p><?= nl2br(htmlspecialchars($_POST['experiencia_descricao'][$index])) ?></p>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="section">
            <h3><mark>Qualificação Profissional</mark></h3>
            <?php foreach ($historicos as $index => $instituicao): ?>
                <div class="historico">
                    <h4><?= htmlspecialchars($instituicao) ?></h4>
                    <p><?= htmlspecialchars($_POST['historico_curso'][$index]) ?></p>
                    <p><?= htmlspecialchars($_POST['historico_inicio'][$index]) ?> - <?= htmlspecialchars($_POST['historico_fim'][$index]) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script>
        function generatePDF() {
            var printButton = document.querySelector("button[type=button]");
            printButton.style.display = "none";
            
            // Gera o PDF
            window.print();
            
            printButton.style.display = "inline";
        }


    </script>
</body>
</html>