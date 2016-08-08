
<h1>Админка</h1>
<a href="/my/easycode/crud/admin/default/create" class="btn btn-primary">Создать новую запись</a>
    <table class="table">
        <thead>
            <tr>
                <td>№</td>
                <td>Название</td>
                <td>Действия</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($model as $item):?>
                <tr>
                    <td><?=$item->id;?></td>
                    <td><?=$item->title;?></td>
                    <td>
                        <a href="/my/easycode/crud/admin/default/edit/<?=$item->id;?>">Править</a>
                        <a href="/my/easycode/crud/admin/default/delete/<?=$item->id;?>">Удалить</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    

        
  