<?php
 include "../db.class.php";

    $db = new db('post');

    $categorias = $db->all('categoria');

    var_dump($categorias);
    exit;

    if(!empty($_POST)){

        if(empty($_POST['id'])) {
            $db->insert($_POST);
            echo "<b>Registro criado com sucesso</b>";
        }  else {
            $db->update($_POST);
            echo "<b>Registro atualizado com sucesso</b>";
        }

        header("location: PostList.php");
    }

    if(!empty($_GET['id'])){
        $data = $db->find($_GET['id']);
        //var_dump($data);
        //exit;
    }

?>

<form action="PostForm.php" method="post">
    
    <h4>Formulário Post</h4>

    <input type="hidden" name="id"
        value="<?php echo $data->id ?? "" ?>"  
    >

    <label for="">Data Publicação</label> <br>
    <input type="datetime-local" name="data_publicacao"
        value="<?php echo $data->data_publicacao ?? "" ?>"
    > <br>

    <label for="">Status</label> <br>
    <select name="status">
        <option value="<?php echo $data->status ?? "" ?>">
        SIM</option>
        <option value="<?php echo $data->status ?? "" ?>">
        NÃO</option>
    </select>

    <label for="">Categoria</label> <br>
    <select name="categoria_id">
        <?php
        foreach($categorias as $categoria) {
        echo "<option values="$categorias->id == $data->categoria_id ? "selected></option>;
        }
        ?>
        <option value="<?php echo $data->categoria_id ?? "" ?>">
        </option>
    </select>

    <label for="">Texto</label> <br>
    <textarea name="texto" rows="4">
        <?php echo $data->texto ?? "" ?>
    </textarea> <br>

    <label for="">Titulo</label> <br>
    <input type="text" name="titulo"
        value="<?php echo $data->titulo ?? "" ?>"
    > <br>

    <button type="submit">Salvar</button>
    <a href='./PostList.php'>Voltar</a><br>

</form>