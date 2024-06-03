<div>
<?php
    $sql = "SELECT * FROM produto";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-bordered'>";
        print "<tr>";
        print "<th> id  </th>";
        print "<th> nome </th>";
        print "<th>email </th>";
        print "<th> data de nascimento </th>";
        print "<th> ação </th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>". $row->id . "</td>";
            print "<td>". $row->nome. "</td>";
            print "<td>". $row->email. "</td>";
            print "<td>". $row->data_nasc. "</td>";
            print "<td> 
            <button onclick=\"location.href='?page=editar&id=".$row->id."';\"
             class='btn btn-sucess'> editar</button>
  
            <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."'}else{false;}\" class='btn btn-danger'> excluir </button>
            </td>";
            print "</tr>";
        }
        print "</table>";
        }
        else{
            print "<p class='alert alert-danger'>Não existe!</p>";
        }
    

?>
</div>