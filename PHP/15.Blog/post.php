<?php
include_once("template/header.php");
if (isset($_GET['id'])) {
    $postID = $_GET['id'];
    $currentPost;
    foreach ($posts as $post) {
        if ($post['id'] == $postID) {
            $currentPost = $post;
        }
    }
}
?>
<main id="post-container">
    <div class="content-container">
        <h1 id="main-title">
            <?= $currentPost['title'] ?>
        </h1>
        <p id="post-description">
            <?= $currentPost['description'] ?>
        </p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">
            Lorem ipsum dLorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio dolor assumenda iste
            dolorum ducimus ipsa nostrum? Ut fuga quo at expedita doloribus accusamus adipisci possimus. Quisquam quis
            accusantium obcaecati aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio dolor
            assumenda iste dolorum ducimus ipsa nostrum? Ut fuga quo at expedita doloribus accusamus adipisci possimus.
            Quisquam quis accusantium obcaecati aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Distinctio dolor assumenda iste dolorum ducimus ipsa nostrum? Ut fuga quo at expedita doloribus accusamus
            adipisci possimus. Quisquam quis accusantium obcaecati aliquam.Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Distinctio dolor assumenda iste dolorum ducimus ipsa nostrum? Ut fuga quo at expedita
            doloribus accusamus adipisci possimus. Quisquam quis accusantium obcaecati aliquam.olor sit amet consectetur
            adipisicing elit. Distinctio dolor assumenda iste dolorum ducimus ipsa nostrum? Ut fuga quo at expedita
            doloribus accusamus adipisci possimus. Quisquam quis accusantium obcaecati aliquam.
            Lorem ipsum dLorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio dolor assumenda iste
            dolorum ducimus ipsa nostrum? Ut fuga quo at expedita doloribus accusamus adipisci possimus. Quisquam quis
            accusantium obcaecati aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio dolor
            assumenda iste dolorum ducimus ipsa nostrum? Ut fuga quo at expedita doloribus accusamus adipisci possimus.
            Quisquam quis accusantium obcaecati aliquam.Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Distinctio dolor assumenda iste dolorum ducimus ipsa nostrum? Ut fuga quo at expedita doloribus accusamus
            adipisci possimus. Quisquam quis accusantium obcaecati aliquam.Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Distinctio dolor assumenda iste dolorum ducimus ipsa nostrum? Ut fuga quo at expedita
            doloribus accusamus adipisci possimus. Quisquam quis accusantium obcaecati aliquam.olor sit amet consectetur
            adipisicing elit. Distinctio dolor assumenda iste dolorum ducimus ipsa nostrum? Ut fuga quo at expedita
            doloribus accusamus adipisci possimus. Quisquam quis accusantium obcaecati aliquam.
        </p>
    </div>

    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach ($currentPost['tags'] as $tag): ?>
                <li>
                    <a href="#">
                        <?= $tag ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach ($categories as $category): ?>
                <li>
                    <a href="#">
                        <?= $category ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>
<?php
include_once("template/footer.php");
?>