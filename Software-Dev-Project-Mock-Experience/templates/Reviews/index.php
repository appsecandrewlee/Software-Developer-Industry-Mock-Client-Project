<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Review> $reviews
 */
?>

<body class="d-flex flex-column">
<main class="flex-shrink-0">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
            <a class="navbar-brand" href="/">Holistic Healings</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <?= $this->Html->link("Home", "/", ['class' => 'nav-link']) ?>
                    <?= $this->Html->link("About Us", "/about", ['class' => 'nav-link']) ?>
                    <?= $this->Html->link("Bookings", "/fullcalendar", ['class' => 'nav-link']) ?>
                    <?= $this->Html->link("Purchase Courses", "/Carts/Add", ['class' => 'nav-link']) ?>
                    <b style="color: white;"><?= $this->Html->link(__('See Review'), ['controller' => 'Reviews', 'action' => '/'], ['class' => 'nav-link']) ?></b>
                </ul>
            </div>
        </div>
    </nav>
</main>

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content/>
    <meta name="author" content/>
    <title>Holistic Healings</title>
    <!-- Favicon-->
    <?= $this->Html->meta("icon", "assets/favicon.ico") ?>
    <!-- Bootstrap icons-->
    <?= $this->Html->css("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css") ?>
    <!-- Core theme CSS (includes Bootstrap)-->
    <?= $this->Html->css("styles.css") ?>
</head>

<div class="reviews index content">
    <div id="reviews" class="card-container">
        <?php foreach ($reviews as $review): ?>
            <div class="card" data-review-id="<?= $review->id ?>">
                <div class="card-header">
                    <h4><?= h($review->title) ?></h4>
                </div>
                <div class="card-body">
                    <p><?= h($review->content) ?></p>
                    <p>Rating: <?= $this->Number->format($review->rating) ?></p>
                </div>
                <div class="card-footer">
                    <div class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $review->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $review->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $review->id], ['confirm' => __('Are you sure you want to delete # {0}?', $review->id)]) ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->Html->script('https://code.jquery.com/jquery-3.6.0.min.js') ?>
<?= $this->Html->script('https://code.jquery.com/ui/1.12.1/jquery-ui.min.js') ?>

<style>
    .card {
        width: 300px;
        height: 200px;
    }
</style>
<style>
    .card {
        background-color: mediumpurple;
        color: white;
    }
</style>

<script>
    $(function() {
        var cardContainer = $("#reviews");
        var cardPositions = [];

        cardContainer.find(".card").draggable({
            handle: ".card-header",
            stop: function(event, ui) {
                saveCardPositions();
            }
        });

        cardContainer.sortable({
            containment: "parent",
            handle: ".card-header",
            update: function(event, ui) {
                saveCardPositions();

                var sortedIds = cardContainer.find(".card").map(function() {
                    return $(this).data('review-id');
                }).get();

                $.ajax({
                    type: 'POST',
                    url: '<?= $this->Url->build(['controller' => 'Reviews', 'action' => 'updateOrder']) ?>',
                    data: { sortedIds: sortedIds },
                    success: function(response) {
                        console.log(response);
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            }
        });

        loadCardPositions();

        function saveCardPositions() {
            cardPositions = [];
            cardContainer.find(".card").each(function() {
                var cardId = $(this).data("review-id");
                var offset = $(this).offset();
                cardPositions.push({
                    id: cardId,
                    top: offset.top,
                    left: offset.left
                });
            });
            localStorage.setItem("cardPositions", JSON.stringify(cardPositions));
        }

        function loadCardPositions() {
            var savedPositions = localStorage.getItem("cardPositions");
            if (savedPositions) {
                cardPositions = JSON.parse(savedPositions);
                cardPositions.forEach(function(position) {
                    var card = cardContainer.find('.card[data-review-id="' + position.id + '"]');
                    card.offset({ top: position.top, left: position.left });
                });
            }
        }
    });
</script>

<footer class="bg-dark py-4 mt-auto">
    <div class="container px-5">
        <div class="row align-items-center justify-content-between flex-column flex-sm-row">
            <div class="col-auto">
                <div class="small m-0 text-white">Copyright &copy; Holistic Healings 2023</div>
            </div>
        </div>
    </div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        window.addEventListener("load", function() {
            var bgColor = localStorage.getItem("bgColor");
            if (bgColor) {
                document.querySelector("body").style.background = bgColor;
                i = color.indexOf(bgColor);
            }
        });
    });
</script>
