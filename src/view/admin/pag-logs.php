<?php
/** @var \model\Log[] $logs */
?>

<!doctype html>
<html lang="pt-br">
<head>
    <?php require_once __DIR__ . '/../templates/template-head.php'; ?>
    <title>Logs do Sistema</title>
</head>

<body class="container pt-5">

<?php require_once __DIR__ . '/../templates/template-menu.php'; ?>

<div class="mt-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>
            <i class="bi bi-journal-text"></i>
            Logs do Sistema
        </h2>
        <a href="<?= BASE_URL ?>/admin/comentarios"
           class="btn btn-primary">
            Voltar
        </a>
    </div>

    <table id="tabela_logs"
           class="table table-striped table-hover table-bordered">

        <thead class="table-dark">
        <tr>
            <th>Data/Hora</th>
            <th>Ação</th>
            <th>Administrador</th>
            <th>Nível</th>
            <th>Comentário</th>
            <th>Autor</th>
            <th>IP</th>
            <th>Detalhes</th>
        </tr>
        </thead>

        <tbody>

        <?php foreach($logs as $log): ?>

            <tr>
                <td>
                    <?= $log->getDataHora()->format('d/m/Y H:i:s') ?>
                </td>
                <td>
                    <?php
                    switch ($log->getAcao()) {
                        case 'APROVOU':
                            $classe = 'success';
                            break;
                        case 'REJEITOU':
                            $classe = 'warning';
                            break;
                        case 'EXCLUIU':
                            $classe = 'danger';
                            break;
                        case 'EDITOU':
                            $classe = 'primary';
                            break;
                        default:
                            $classe = 'secondary';
                    }
                    ?>
                    <span class="badge bg-<?= $classe ?>">
            <?= htmlspecialchars($log->getAcao()) ?>
        </span>
                </td>

                <td>
                    <?= htmlspecialchars($log->getUsuario()) ?>
                </td>

                <td>
        <span class="badge bg-dark">
            <?= htmlspecialchars($log->getNivel()) ?>
        </span>
                </td>

                <td>
                    #<?= $log->getComentarioId() ?>
                </td>

                <td>
                    <?= htmlspecialchars($log->getAutorComentario()) ?>
                </td>

                <td>
                    <?= htmlspecialchars($log->getIp()) ?>
                </td>

                <td>
                    <button
                        class="btn btn-sm btn-outline-info"
                        data-bs-toggle="modal"
                        data-bs-target="#log<?= $log->getId() ?>">

                        <i class="bi bi-eye-fill"></i>
                    </button>

                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php foreach($logs as $log): ?>

        <div class="modal fade"
             id="log<?= $log->getId() ?>"
             tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            <i class="bi bi-journal-text"></i>
                            Detalhes do Log
                        </h5>
                        <button type="button"
                                class="btn-close"
                                data-bs-dismiss="modal">
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                            <strong>Data/Hora:</strong>
                            <?= $log->getDataHora()->format('d/m/Y H:i:s') ?>
                        </p>
                        <p>
                            <strong>Ação:</strong>
                            <?= htmlspecialchars($log->getAcao()) ?>
                        </p>
                        <p>
                            <strong>Administrador:</strong>
                            <?= htmlspecialchars($log->getUsuario()) ?>
                        </p>
                        <p>
                            <strong>Nível:</strong>
                            <?= htmlspecialchars($log->getNivel()) ?>
                        </p>
                        <p>
                            <strong>ID Comentário:</strong>
                            #<?= $log->getComentarioId() ?>
                        </p>
                        <p>
                            <strong>Autor:</strong>
                            <?= htmlspecialchars($log->getAutorComentario()) ?>
                        </p>
                        <p>
                            <strong>E-mail:</strong>
                            <?= htmlspecialchars($log->getEmailComentario()) ?>
                        </p>
                        <p>
                            <strong>Comentário:</strong>
                        </p>
                        <div class="border rounded p-3 bg-light">
                            <?= nl2br(htmlspecialchars($log->getTextoComentario())) ?>
                        </div>
                        <hr>
                        <p>
                            <strong>IP:</strong>
                            <?= htmlspecialchars($log->getIp()) ?>
                        </p>
                        <p>
                            <strong>User Agent:</strong>
                        </p>
                        <textarea class="form-control"
                                  rows="4"
                                  readonly><?= htmlspecialchars($log->getUserAgent()) ?></textarea>
                    </div>

                </div>

            </div>

        </div>

    <?php endforeach; ?>
</div>
<?php require_once __DIR__ . '/../templates/template-rodape.php'; ?>
<script>
    new DataTable('#tabela_logs',{
        order:[[0,'desc']],
        pageLength:25,
        language:{
            url:'https://cdn.datatables.net/plug-ins/1.13.8/i18n/pt-BR.json'
        }
    });
</script>

</body>
</html>