<h1>Them chuyen muc</h1>
<form action="<?php echo route('categories.add') ?>" method="POST">
    <div>
        <input type="text" name="category_name" placeholder="Ten chuyen muc" value="<?php echo old('category_name'); ?>">
    </div>
    
    <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
    <button type="submit">Them chuyen muc</button>
</form>
