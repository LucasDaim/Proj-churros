<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Consulta de Endereço por CEP</title>
</head>

<body>
    <!--Formulário-->
    <form>
        <label for="cep">CEP</label>
        <input id="cep" type="text" required/>

        <button type="button" onclick="buscarEndereco()">Buscar</button><br>
		
        <label for="logradouro">Logradouro</label>
        <input id="logradouro" type="text" required/><br>
        <label for="bairro">Bairro</label>
        <input id="bairro" type="text" required/><br>
        <label for="uf">Estado</label>
        <input id="uf" type="text" required/><br>
    </form>

    <script>
        function buscarEndereco() {
            var cep = document.getElementById("cep").value;
            if (cep.length != 8) {
                alert("CEP inválido");
                return;
            }

            var xhr = new XMLHttpRequest();
            xhr.open("GET", "https://viacep.com.br/ws/" + cep + "/json/", true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var endereco = JSON.parse(xhr.responseText);
                    document.getElementById("logradouro").value = endereco.logradouro;
                    document.getElementById("bairro").value = endereco.bairro;
                    document.getElementById("uf").value = endereco.uf;
                }
            }
            xhr.send();
        }
    </script>
</body>
</html>
