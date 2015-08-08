<form class="form" method="POST" action="">
    <input type="hidden" name="form" value="<?=$v['controller']?>">
    <input type="text" name="toopic" class="form-control" placeholder="Тема вопроса">
    <textarea name="question" class="form-control" rows="3"></textarea>
    <button type="submit" class="btn btn-success">Задать вопрос</button>
    </form>