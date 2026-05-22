<h2>Создание статьи</h2>

<?php if ($error !== ''): ?>
    <p class="message error"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></p>
<?php endif; ?>

<form method="post" action="/articles/create" class="article-form">
    <div class="form-group">
        <label for="name">Название статьи</label>
        <input
            type="text"
            id="name"
            name="name"
            value="<?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?>"
            required
        >
    </div>

    <div class="form-group">
        <label for="text">Текст статьи</label>
        <textarea id="text" name="text" rows="10" required><?= htmlspecialchars($text, ENT_QUOTES, 'UTF-8') ?></textarea>
    </div>

    <button type="submit">Создать статью</button>
</form>

<p>
    <a href="/articles">← Вернуться к списку статей</a>
</p>
