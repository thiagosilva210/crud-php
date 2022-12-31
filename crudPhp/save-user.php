<h1>Salvar</h1>


<?php



switch($_REQUEST["action"]) {
    case "register":

        $name = $_POST["name"];
        $email = $_POST["email"];
        $pass = md5($_POST["pass"]);
        $birth_date = $_POST["birth_date"];



        $sql = "INSERT INTO users(name, email, pass, birth_date) VALUES('{$name}', '{$email}','{$pass}','{$birth_date}')";

        $res = $conn->query($sql);


        if ($res==true) {
            print "<script>alert('Cadastrado com sucesso!');</script>";
            print "<script>location.href='?page=list';</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar!');</script>";
            print "<script>location.href='?page=new-user';</script>";
        }

        break;

    case "edit":

        $name = $_POST["name"];
        $email = $_POST["email"];
        $pass = md5($_POST["pass"]);
        $birth_date = $_POST["birth_date"];


        $sql = "UPDATE users SET name='{$name}',email='{$email}',pass='{$pass}',birth_date='{$birth_date}'WHERE id=".$_REQUEST["id"];


        $res = $conn->query($sql);
        //$conn->query($sql);


        if ($res==true) {
            print "<script>alert('Editado com sucesso!');</script>";
            print "<script>location.href='?page=list';</script>";
        } else {
            print "<script>alert('Não foi possível editar!');</script>";
            print "<script>location.href='?page=new-user';</script>";
        }


        break;

    case "delete":
        $sql = "DELETE from users WHERE id=".$_REQUEST["id"];

        $res = $conn->query($sql);
        //$conn->query($sql);


        if ($res==true) {
            print "<script>alert('Excluído com sucesso!');</script>";
            print "<script>location.href='?page=list';</script>";
        } else {
            print "<script>alert('Não foi possível excluir!');</script>";
            print "<script>location.href='?page=list';</script>";
        }


        break;
}
