
 <?php
    session_start();
    include_once('config.php');

    $id = $_GET['id'];
    $idLivro = $_GET['idLivro'];
    $nome = $_GET['nome'];
    $turma = $_GET['turma'];
    $status = $_GET['status'];
    $statusC = $_GET['statusC'];

        echo "<script>
            var confirmacao = confirm('Tem certeza que deseja cancelar a solicitação de compartilhamento de dados?');                        
        </script>";

        $c = "<script>document.write(confirmacao)</script>";

        if($c == true){
            if($status == "Devolvido" ){
                $atualizarStatus = mysqli_query($conexao,"UPDATE emprestar_livro SET statuss='Pendente' WHERE id = '$idLivro' ");
            }else{
                $atualizarStatus2 = mysqli_query($conexao,"UPDATE emprestar_livro SET statuss='Devolvido' WHERE id = '$idLivro' ");
            }
        }

        echo "<script>
                window.location = 'visualizar.php?nome=$nome&turma=$turma&statusC=$statusC&id=$id';
            </script>";
?>
        
