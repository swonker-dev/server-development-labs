<h2>Список статей</h2>

<p>
    <a href="/articles/create">Добавить статью</a>
</p>

<?php if (empty($articles)): ?>
    <p>Статей пока нет.</p>
<?php else: ?>
    <?php foreach ($articles as $article): ?>
        <article class="article-card">
            <h3>
                <a href="/articles/<?= $article->id ?>">
                    <?= htmlspecialchars($article->name, ENT_QUOTES, 'UTF-8') ?>
                </a>
            </h3>

            <p>
                <?= htmlspecialchars(mb_substr($article->text, 0, 120), ENT_QUOTES, 'UTF-8') ?>...
            </p>

            <p class="date">
                Дата создания: <?= htmlspecialchars($article->createdAt, ENT_QUOTES, 'UTF-8') ?>
            </p>

            <div class="actions">
                <a href="/article/<?= $article->id ?>/edit">Редактировать статью</a>

                <form
                    method="post"
                    action="/articles/<?= $article->id ?>/delete"
                    class="inline-form"
                    onsubmit="return confirm('Удалить статью? Вместе со статьёй удалятся все её комментарии.');"
                >
                    <button type="submit" class="danger-button">Удалить статью</button>
                </form>
            </div>
        </article>
    <?php endforeach; ?>
<?php endif; ?>