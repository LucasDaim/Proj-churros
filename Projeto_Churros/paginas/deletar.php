<?php
    include 'conexao.php';
    
    if(isset($_GET['id']))
        $sql = "DELETE FROM clientes WHERE id=".$_REQUEST["id"];
        $res = $conn->query($sql);
    if($res==true){
        print "<script>alert('Deletado com sucesso');</script>";
        print "<script>location.href='lista_cliente.php';</script>";
    }
    else {
        print "<script>alert('Não foi possível deletar');</script>";
    }




    /*if(isset($_GET['delid']))
    {
        $rid=intval($_GET['delid']);
        $sql=mysqli_query($con,"delete from tblusers where ID=$rid");
        echo "<script>alert('Data deleted');</script>"; 
        echo "<script>window.location.href = 'index.php'</script>";     
    }*/ 
?>

