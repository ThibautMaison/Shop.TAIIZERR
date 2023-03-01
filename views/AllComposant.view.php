<div class="col py-3">
<form method="post" action="" class="d-flex justify-content-end mb-3">
    <div class="input-group">
        <input type="text" class="form-control rounded-start rounded-end" placeholder="Search by name" id="search-input" >
    </div>
</form>
    <div class="d-grid gap-4 mx-auto" style="grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));">
        <?php foreach ($Boutique as $item) : ?>
            <a href="<?= URL ?>Boutique/l/<?= $item->getId() ?>#target" class="link-dark text-decoration-none boutique-item">
                <div class="card zoom" style="transition: transform 0.5s ease;">
                    <div class="card-img-top position-relative" style="height: 250px;background-color: #c7c7c7;">
                        <img src="/public/images/<?= $item->getImage() ?>" class="position-absolute top-50 start-50 translate-middle" style="max-height: 100%; max-width: 100%;" />
                        <div class="position-absolute top-0 px-3 py-2 bg-dark text-white d-flex align-items-center"><?= $item->getName() ?></div>
                    </div>
                    <div class="card-body">
                        <p class="card-text fw-bold text-center"><?= $item->getPrix() ?>€</p>
                    </div>
                </div>
            </a>
        <?php endforeach ?>
    </div>
</div>

<script>
    const searchInput = document.querySelector('#search-input');
    const searchButton = document.querySelector('#search-button');
    const items = document.querySelectorAll('.boutique-item');

    const filterItems = () => {
        const query = searchInput.value.toLowerCase().trim();
        items.forEach(item => {
            const name = item.querySelector('.card-img-top div').textContent.toLowerCase();
            if (name.includes(query)) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    };

    searchInput.addEventListener('input', filterItems);
    searchButton.addEventListener('click', filterItems);
</script>