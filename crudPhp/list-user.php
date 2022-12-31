<h1>listar usuário</h1>

<?php
    $sql = "SELECT * FROM users";
$res =$conn->query($sql);

$qtd = $res->num_rows;


if ($qtd > 0) {
    print "<table class='table table-hover table-striped table-bordered'>";
    print "<tr>";
    print "<th>Id</th>";
    print "<th>Nome</th>";
    print "<th>Email</th>";
    print "<th>Data de nascimento</th>";
    print "<th>Ações</th>";
    print "<tr>";
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>".$row->id."</td>";
        print "<td>".$row->nome."</td>";
        print "<td>".$row->email."</td>";
        print "<td>".$row->data_nasc."</td>";
        print "<td>
                    <button onclick=\"location.href='?page=edit&id=".$row->id."';\" class='btn btn-success'>Editar</button>
                    <button onclick=\"if(confirm('Deseja relamente excluir?')){location.href='?page=save&action=delete&id=".$row->id."';}else{false;}\"
                     class='btn btn-danger'>Excluir</button>
            </td>";
        print "</tr>";
    }
    print "</table>";
} else {
    print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
}


?>
