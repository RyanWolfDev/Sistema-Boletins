
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Inserir aluno</title>
            
            <!--importando a folha de estilos do bootstrap-->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

            <!--importando nossa folha de estilos-->
            <link rel="stylesheet" href="css/inserir_aluno.css">
            
        </head>
        <body>
            <a href="index.php"><h2><<<<</h2></a>

            <!--corpo da página-->
            <div class="container" id="inserir_aluno">
                <form method="POST">
                    <div id="div_title">
                        Inserir Aluno
                    </div>
                    <div id="div_body">
		                <div class="form-group">
                            <input class="form-control" id="nome" name="nome" placeholder="Nome"
                            <?php
                                if(isset($_POST['nome'])){
                                    echo("value='".$_POST['nome']."'");
                                }
                            ?>
                            >
                        </div>
		                <button type="submit" class="btn btn-primary mb-2" id="inserir">Inserir</button>
                    </div>                
                </form>
            </div>
            
            <?php
            
                if(isset($_POST['nome'])){
                    $nome = $_POST['nome'];
                    
                    include_once('class/Aluno.php');
                    include_once('class/Mensagem.php');
                    
                    $m = new Mensagem;
                    $a = new Aluno;
                    
                    if(!empty($nome)){
                        
                        $msg = $a->valida_aluno($nome);
                        
                        if($msg == "Pode inserir o aluno!"){
                        
                            $a->inserir($nome);
                            $m->setMensagem("Aluno inserido com sucesso!");
                            header("Location: index.php");
                        
                        }else{
                            
                            $m->alert($msg);
                            
                        }
                    }else{
                        
                        $m->alert("Preencha o nome!");
                        
                    }
                }
            
            ?>

            <!--importando o jquery-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
            <!--importando nosso javascript-->
            <script src="js/inserir_aluno.js"></script>
    
        </body>
    </html>

